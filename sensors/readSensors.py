#!/usr/bin/python
import sys
import time
import Adafruit_DHT
from SoundSensor import SoundSensor
from MCP3008ADC import MCP3008ADC
import RPi.GPIO as GPIO

import pymongo
from datetime import datetime
from pytz import timezone

duration = 900

sensorDHT = 22
pinDHT = 26

pinGate = 21
pinEnvelope = 1
pinAudio = 0

GPIO.setmode(GPIO.BCM)
GPIO.setup(pinGate, GPIO.IN)

myMCP = MCP3008ADC()
mySoundSensor = SoundSensor(pinGate, pinEnvelope, pinAudio)

connection = pymongo.MongoClient("mongodb://admin:admin@ds062889.mlab.com:62889/introtoiot")
db = connection.introtoiot
sounds = db.sound
humidities = db.hum
temperatures = db.temp

# Try to grab a sensor reading.  Use the read_retry method which will retry up
# to 15 times to get a sensor reading (waiting 2 seconds between each retry).
# Un-comment the line below to convert the temperature to Fahrenheit.
# Note that sometimes you won't get a reading and
# the results will be null (because Linux can't
# guarantee the timing of calls to read the sensor).
# If this happens try again!
while 1:
    humidity, temperature = Adafruit_DHT.read_retry(sensorDHT, pinDHT)
    temperature = temperature * 9/5.0 + 32
    dto = datetime.now(timezone('UTC'))
    dto_pacific = dto.astimezone(timezone('US/Pacific'))
    #.localize(dto)
    gateVal = GPIO.input(mySoundSensor.get_gate())
    envelopeVal = myMCP.read(mySoundSensor.get_envelope())
    audioVal = myMCP.read(mySoundSensor.get_audio())    
    num_entries = sounds.count()
    dts = datetime.strftime(dto_pacific, "%Y-%m-%d %H:%M:%S")
    
    sound_entry = {'time':dts, 'gate':gateVal, 'envelope':envelopeVal, 'audio':audioVal, 'entry':num_entries}
    sounds.insert_one(sound_entry)
    if humidity is not None and temperature is not None:
        humidity_entry = {'time':dts, 'val':humidity, 'entry':num_entries}
        humidities.insert_one(humidity_entry)
        temperature_entry = {'time':dts, 'val':temperature, 'entry':num_entries}
        temperatures.insert_one(temperature_entry)
        time.sleep(duration)

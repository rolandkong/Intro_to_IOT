<!DOCTYPE html>
<html>
<head>
	<title>AmbiLamp</title>
	<link rel="stylesheet" type="text/css" href="assets/css/details.css">

</head>
<body>

<?php
	include "header.php";

	$db = connectMongo();
	$sounds = $db->sound;
	$temperatures = $db->temp;
	$soundCursor = $sounds->find()->sort(array('entry' => -1))->limit(24);
	$temperatureCursor = $temperature->find()->sort(array('entry' => -1))->limit(24);

	$temperatureX = "[";
	$temperatureDat = "[";
	foreach ($temperatureCursor as $doc) {
		$time = split('[ ]', $doc['time']);
		$temperatureX = $temperatureX . "'" . $time[1] . "',";
		$temperatureData = $temperatureData . $doc['val'] . ",";
	}

	$temperatureX = trim($temperatureX, ",");
	$temperatureX = $temperature . "]";
	$temperatureData = trim($temperatureData, ",");
	$temperatureData = $temperatureData . "]";

	echo "<script>";
	echo "var temperatureData = " . $temperatureData . ";";
	echo "var temperatureX = " . $temperatureX . ";";
	echo "</script>";
?>

<!-- BUTTONS AND CANVASES -->
<input type="button" id="temp-btn" class="btn" value="View Temperature Chart" onclick="drawTemp()">
<canvas id="temp-chart-long" class="Chart" width="900" height="350" hidden></canvas>
<input type="button" id="sound-btn" class="btn" value="View Sound Chart" onclick="drawSound()">
<canvas id="sound-chart-long" class="Chart" width="900" height="350" hidden></canvas>
<!-- TABLES -->
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<div id="tables-container">
	<div class="table">
		<table id="temp-table">
			<tr>
				<th>Time</th>
				<th>Temperature</th>
				<th>Deviation from Average</th>
			</tr>
			<tr>
				<td>I</td>
				<td>am</td>
				<td>a</td>
			</tr>
			<tr>
				<td>table</td>
				<td>for</td>
				<td>demonstration</td>
			</tr>
			<tr>
				<td>I</td>
				<td>am</td>
				<td>a</td>
			</tr>
			<tr>
				<td>table</td>
				<td>for</td>
				<td>demonstration</td>
			</tr>
			<tr>
				<td>I</td>
				<td>am</td>
				<td>a</td>
			</tr>
			<tr>
				<td>table</td>
				<td>for</td>
				<td>demonstration</td>
			</tr>
			<tr>
				<td>I</td>
				<td>am</td>
				<td>a</td>
			</tr>
			<tr>
				<td>table</td>
				<td>for</td>
				<td>demonstration</td>
			</tr>
			<tr>
				<td>I</td>
				<td>am</td>
				<td>a</td>
			</tr>
			<tr>
				<td>table</td>
				<td>for</td>
				<td>demonstration</td>
			</tr>
			<tr>
				<td>I</td>
				<td>am</td>
				<td>a</td>
			</tr>
			<tr>
				<td>table</td>
				<td>for</td>
				<td>demonstration</td>
			</tr>
			<tr>
				<td>table</td>
				<td>for</td>
				<td>demonstration</td>
			</tr>
			<tr>
				<td>I</td>
				<td>am</td>
				<td>a</td>
			</tr>
			<tr>
				<td>table</td>
				<td>for</td>
				<td>demonstration</td>
			</tr>
			<tr>
				<td>I</td>
				<td>am</td>
				<td>a</td>
			</tr>
			<tr>
				<td>table</td>
				<td>for</td>
				<td>demonstration</td>
			</tr>
			<tr>
				<td>table</td>
				<td>for</td>
				<td>demonstration</td>
			</tr>
			<tr>
				<td>I</td>
				<td>am</td>
				<td>a</td>
			</tr>
			<tr>
				<td>table</td>
				<td>for</td>
				<td>demonstration</td>
			</tr>
			<tr>
				<td>I</td>
				<td>am</td>
				<td>a</td>
			</tr>
			<tr>
				<td>table</td>
				<td>for</td>
				<td>demonstration</td>
			</tr>
		</table>
	</div>
	<div class="table">
		<table id="sound-table">
			<tr>
				<th>Time</th>
				<th>Amplitude</th>
				<th>Deviation from Average</th>
			</tr>
			<tr>
				<td>I</td>
				<td>am</td>
				<td>a</td>
			</tr>
			<tr>
				<td>table</td>
				<td>for</td>
				<td>demonstration</td>
			</tr>
			<tr>
				<td>I</td>
				<td>am</td>
				<td>a</td>
			</tr>
			<tr>
				<td>table</td>
				<td>for</td>
				<td>demonstration</td>
			</tr>
		</table>
	</div>
</div>

<script type="text/javascript" src="assets/js/details.js"></script>
</body>
</html>

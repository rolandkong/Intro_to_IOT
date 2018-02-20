<?php
	$conn = new MongoClient("mongodb://admin:admin@ds062889.mlab.com:62889/introtoiot");
	$db = $conn->introtoiot;
	$collection = $db->sensordata;
	$newData = array( 'num' => 131 );
	$collection->insert($newData);

	$cursor = $collection->find();
	echo "First loop: <br>";
	foreach ($cursor as $doc){
		echo $doc['num'] . "<br>";
	}
	echo "<br>";

	$cursor = $collection->find(array('num' => 131));
	echo "Second loop: <br>";
	foreach ($cursor as $doc) {
		echo $doc['num'] . "<br>";
	}
?>



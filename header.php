<?php
	function connectMongo() {
		$connection = new MongoClient("mongodb://admin:admin@ds062889.mlab.com:62889/introtoiot");
		$db = $connection->introtoiot;
		return $db;
	}
?>
<link rel="stylesheet" type="text/css" href="assets/css/header.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>

<!-- HEADER -->
<header>
	<ul>
		<li><img src="https://www.viesso.com/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/l/i/lightbox-base-3.jpg"></li>
		<li><a href="index.php">AmbiLamp</a></li>
		<li><a href="details.php">Details</a></li>
	</ul>
</header>



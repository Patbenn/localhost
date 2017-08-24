<?php 
require_once '../includes/db.php'; // The mysql database connection script
if(isset($_GET['label'])){
	$label = $mysqli->real_escape_string($_GET['label']);
	$url = $mysqli->real_escape_string($_GET['url']);
	$order = 12;
	$status = 0;

	$query="INSERT INTO sites(label,url,item,status)  VALUES ('$label', '$url', '$order', '$status')";
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$result = $mysqli->affected_rows;

	echo $json_response = json_encode($result);
	}
?>
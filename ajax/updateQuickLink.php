<?php 
require_once '../includes/db.php'; // The mysql database connection script
if(isset($_GET['itemID'])){
	$label = $mysqli->real_escape_string($_GET['label']);
	$url = $mysqli->real_escape_string($_GET['url']);
	$itemID  = $mysqli->real_escape_string($_GET['itemID']);
	$order  = $mysqli->real_escape_string($_GET['order']);

	$query="UPDATE sites set label='$label', url='$url', item='$order' where id='$itemID'";
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$result = $mysqli->affected_rows;

	$json_response = json_encode($result);
}
?>
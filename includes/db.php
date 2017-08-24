<?php 
$DB_HOST = 'localhost';
$DB_USER = 'AngularJS';
$DB_PASS = 'U5QRf6pjUfdSVtWR';
$DB_NAME = 'localadmin';
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
?>

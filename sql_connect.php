<?php
$mysqli = new mysqli("localhost", "root", "", "oneschooldb");

if($mysqli->connect_error){
	$mysqli = new mysqli("ap-cdbr-azure-southeast-b.cloudapp.net", "ba6c086e8940fd", "a5c3978a", "oneschool");
	if(!$mysqli) {
		header("location: db_error.php");
	}
}
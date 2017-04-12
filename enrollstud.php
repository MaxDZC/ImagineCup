<?php 
	$idnum=$_GET["id"];
	$name=$_GET["name"];
	$level=$_GET["level"];
	$sect=$_GET["sect"];

	$mysqli=new mysqli("localhost","root","","oneschool");

	$query="UPDATE studentlist SET section='$sect' WHERE idnum='$idnum' AND status!='Done'";

	$mysqli->query($query);

	header("Location: enrollclass.php?id=$idnum&name=$name&level=$level")
?>
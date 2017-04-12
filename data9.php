<?php 
	$idnum=$_GET['idnum'];
	$name=$_GET['name'];


	$mysqli=new mysqli("localhost","root","","oneschool");
 	$sql="DELETE FROM studentlist WHERE idnum='$idnum' AND name='$name'";
 	$mysqli->query($sql);
    header("Location: createstud.php");
 ?>
<?php 
	$id=$_POST["id"];
	$pass=$_POST["pass"];

	$mysqli=new mysqli("localhost","root","","oneschool");
	$table=mysqli_query($mysqli,"SELECT * FROM studentlist WHERE status!='Done'");

	$check=false;

	while($row=mysqli_fetch_array($table)){
		if ($row[0]==$id&&$row[5]==$pass) {
			$check=true;
			header("Location: welcome.php?id=$id&name=".$row[1]."");
		}
	}
	if($check==false){
		header("Location: studentlogin.php");
	}
?>
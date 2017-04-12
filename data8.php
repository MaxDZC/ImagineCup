<?php 
	$level=$_GET['level'];
	$subj=$_GET['subj'];
	$sched=$_GET['sched'];
	$teacher=$_GET['teacher'];

	echo $teacher;

	$mysqli=new mysqli("localhost","root","","oneschool");
 	$sql="UPDATE schedule SET teacher='' WHERE subject='$subj' AND time='$sched' AND gradelvl='$level' AND teacher='$teacher'";
 	$mysqli->query($sql);
 	header("Location: manage-class.php?name=$teacher");
 ?>
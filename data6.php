
                            <?php
                            	$idnum=$_POST["teacherid"];
                            	$name=$_POST["teachername"];
                            	$bdate=$_POST["mm"]." ".$_POST["dd"].",".$_POST["yy"];
                            	$pass=$_POST["pass"];	
                                $mysqli=new mysqli("localhost","root","","oneschool");
                                $sql="INSERT INTO teacherlist (teacherid,teachername,birthdate,password) VALUES ('$idnum','$name','$bdate','$pass')";
                                $mysqli->query($sql);
                                header("Location: createteach.php");
                            ?>

                            <?php
                            	$idnum=$_POST["studid"];
                            	$name=$_POST["studname"];
                            	$bdate=$_POST["mm"]." ".$_POST["dd"].",".$_POST["yy"];
                            	$grade=$_POST["grdlvl"];
                            	$pass=$_POST["pass"];	
                                $mysqli=new mysqli("localhost","root","","oneschool");
                                $sql="INSERT INTO studentlist (idnum,name,bdate,currentgr,pass) VALUES ('$idnum','$name','$bdate','$grade','$pass')";
                                $mysqli->query($sql);
                                header("Location: createstud.php");
                            ?>
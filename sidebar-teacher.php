<div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="welcome-teacher.php?name=<?php echo $_GET["name"];?>"><i class="icon-home"></i> Home </a>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-note"></i>Teacher Tasks</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="manage-class.php?name=<?php echo $_GET["name"];?>"><i class="icon-arrow-right-circle"></i>Schedule</a>
                            </li>
                            <li class="nav-item nav-dropdown">
                                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-arrow-right-circle"></i>Gradebook</a>
                                <ul class="nav-dropdown-items">
                                    <?php 
                                        $teacher=$_GET["name"];
                                        $mysqli=new mysqli("localhost","root","","oneschool");
                                        $table=mysqli_query($mysqli,"SELECT * FROM schedule where teacher='$teacher'");
                                        while($row=mysqli_fetch_array($table)){
                                            echo "
                                    <li class='nav-item'><a class='nav-link' href='updaterecord-2.php?name=$teacher&level=$row[0]&section=$row[4]&subj=$row[1]&prd=First Grading'><i class='icon-minus'></i>".$row[4]." : ".$row[1]."</a></li>";
                                        }
                                    ?>


                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="studentprog.php?name=<?php echo $_GET["name"];?>"><i class="icon-arrow-right-circle"></i>Performance Tracker</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-note"></i>Management</a>
                        <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="repository.php?name=<?php echo $_GET["name"];?>"><i class="icon-arrow-right-circle">
                        </i>Repository</a>
                    </li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>
        </div>
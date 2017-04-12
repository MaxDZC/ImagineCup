      <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="welcome.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>"><i class="icon-home"></i> Home <!-- <span class="badge badge-info">NEW</span> --></a>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-note"></i>Student Tasks</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="countlevel.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>"><i class="icon-arrow-right-circle"></i>Gradebook</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="enrollclass.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>"><i class="icon-arrow-right-circle"></i>Enroll Class</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-note"></i>Management</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="assessment.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>"><i class="icon-wallet">
                                </i>View Assessment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tracker.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>"><i class="icon-arrow-right-circle">
                                </i>Performance Tracker</a>
                            </li>
                    </li>

                            <li class="nav-item">
                                <a class="nav-link" href="countlevel2.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>"><i class="icon-graph">
                                </i>Track Analysis</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                    	<a class="nav-link" href="resources.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>"><i class="icon-book-open">
                    	</i>Learning Resources</a>
                    </li>

                    
            </nav>
        </div>
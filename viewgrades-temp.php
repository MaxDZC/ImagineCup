<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.4
 * @link http://coreui.io
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,jQuery,CSS,HTML,RWD,Dashboard">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>One School - View Grades</title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .modal{
            background-image: url('img/cheat.png'); !important;
            background-size: 100%;
        }
    </style>

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <?php include("header.php"); ?>
    </header>

    <div class="app-body">
    <?php require("sidebar.php"); ?>

        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Grade Reports</li>
                <li class="breadcrumb-item active">View</li>
            </ol>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                 <i class="icon-doc"></i> Grade 1
                            </div>
                            <div class="card-block">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>First Grading</th>
                                                <th>Second Grading</th>
                                                <th>Third Grading</th>
                                                <th>Fourth Grading</th>
                                                <th>Average</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $idnum = $_GET["id"];
                                            $mysqli = new mysqli("localhost","root","","oneschool");
                                            $table = mysqli_query($mysqli,"SELECT * FROM graderecord WHERE idnum='$idnum' AND gradelevel='Grade 1'");
                                            while($row=mysqli_fetch_array($table)){
                                                echo
                                                    "<tr>
                                                        <td>".$row[2]."</td>
                                                        <td>".$row[3]."</td>
                                                        <td>".$row[4]."</td>
                                                        <td>".$row[5]."</td>
                                                        <td>".$row[6]."</td>
                                                        <td>".$row[7]."</td>
                                                    </tr>";
                                                }
                                        ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                 <i class="icon-doc"></i> Grade 2
                            </div>
                            <div class="card-block">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>First Grading</th>
                                                <th>Second Grading</th>
                                                <th>Third Grading</th>
                                                <th>Fourth Grading</th>
                                                <th>Average</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php
                                            $idnum = $_GET["id"];
                                            $mysqli = new mysqli("localhost","root","","oneschool");
                                            $table = mysqli_query($mysqli,"SELECT * FROM graderecord WHERE idnum='$idnum' AND gradelevel='Grade 2'");
                                            while($row=mysqli_fetch_array($table)){
                                                echo
                                                    "<tr>
                                                        <td>".$row[2]."</td>
                                                        <td>".$row[3]."</td>
                                                        <td>".$row[4]."</td>
                                                        <td>".$row[5]."</td>
                                                        <td>".$row[6]."</td>
                                                        <td>".$row[7]."</td>
                                                    </tr>";
                                                }
                                        ?>
                                            
                                        </tbody>
                                    </table>
                                </div>

                        </div>
                        <div class="card">
                            <div class="card-header">
                                 <i class="icon-doc"></i> Grade 3
                            </div>
                            <div class="card-block">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>First Grading</th>
                                                <th>Second Grading</th>
                                                <th>Third Grading</th>
                                                <th>Fourth Grading</th>
                                                <th>Average</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php
                                            $idnum = $_GET["id"];
                                            $mysqli = new mysqli("localhost","root","","oneschool");
                                            $table = mysqli_query($mysqli,"SELECT * FROM graderecord WHERE idnum='$idnum' AND gradelevel='Grade 3'");
                                            while($row=mysqli_fetch_array($table)){
                                                echo
                                                    "<tr>
                                                        <td>".$row[2]."</td>
                                                        <td>".$row[3]."</td>
                                                        <td>".$row[4]."</td>
                                                        <td>".$row[5]."</td>
                                                        <td>".$row[6]."</td>
                                                        <td>".$row[7]."</td>
                                                    </tr>";
                                                }
                                        ?>
                                        
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                 <i class="icon-doc"></i> Grade 4
                            </div>
                            <div class='card-block'>
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>First Grading</th>
                                                <th>Second Grading</th>
                                                <th>Third Grading</th>
                                                <th>Fourth Grading</th>
                                                <th>Average</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $idnum = $_GET["id"];
                                            $mysqli = new mysqli("localhost","root","","oneschool");
                                            $table = mysqli_query($mysqli,"SELECT * FROM graderecord WHERE idnum='$idnum' AND gradelevel='Grade 4'");
                                            while($row=mysqli_fetch_array($table)){
                                                echo
                                                    "<tr>
                                                        <td>".$row[2]."</td>
                                                        <td>".$row[3]."</td>
                                                        <td>".$row[4]."</td>
                                                        <td>".$row[5]."</td>
                                                        <td>".$row[6]."</td>
                                                        <td>".$row[7]."</td>
                                                    </tr>";
                                                }
                                        ?>
                                        
                                        </tbody>
                                    </table>
                                    <!-- <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav> -->
                                </div>
                        </div>
                        
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="viewgrades.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="viewgrades1.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="viewgrades2.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="viewgrades1.php?id=<?php echo $_GET["id"];?>&name=<?php echo $_GET["name"];?>">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                    </div>
                </div>
            </div>
            <!-- /.conainer-fluid -->
        </main>
    </div>

<div class="modal" id="model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Grade Breakdown</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <table class="table table-bordered table-striped table-condensed">
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Seatworks</th>
                        <th>Quizzes</th>
                        <th>Projects</th>
                        <th>Grade Point</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mother Tongue</td>
                        <td>89</td>
                        <td>89</td>
                        <td>89</td>
                        <td>89</td>
                    </tr>
                    </tbody>
                    </table>
      </div>
      <div class="modal-footer">
        <button data-dismiss="modal" type="button" class="btn btn-primary">Ok</button>
      </div>
    </div>
  </div>
</div>

    <footer class="app-footer">

    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
     
    <script src="bower_components/pace/pace.min.js"></script>


    <!-- Plugins and scripts required by all views -->
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>


     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->

    <!-- GenesisUI main scripts -->

    <script src="js/app.js"></script>





    <!-- Plugins and scripts required by this views -->

    <!-- Custom scripts required by this view -->
    <script src="js/views/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
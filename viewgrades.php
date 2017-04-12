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

<style type="text/css">
    /* Add a black background color to the top navigation */
.topnav {
    background-color: #1e2f2f;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 10px 10px 10px 10px;
    text-decoration: none;
    font-size: 15px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #0099cc;
    color: white;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: red;
}
</style>

</head>

<body onload="loadtables();" class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
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
                <div class="topnav" id="myTopnav">
                    <?php 
                        $key=1;
                        $idnum=$_GET["id"];
                        $name=$_GET["name"];
                        $count=$_GET["count"];
                        while($key<=$count){
                            echo "<a href='viewgrades.php?id=$idnum&name=$name&count=$count&level=Grade $key''>Grade $key</a>";
                            $key++;
                        }

                    ?>

                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12" id="grades">                                    
                    <div class="card">
                        <?php
                            $idnum=$_GET["id"];
                            $name=$_GET["name"];
                            $level=$_GET["level"];

                            $mysqli=new mysqli("localhost","root","","oneschool");
                            $table=mysqli_query($mysqli,"SELECT* FROM graderecord WHERE idnum='$idnum' AND gradelevel='$level'");

                            echo "
                               <div class='card-header'><strong>$level</strong></div>
                               <div class='card-block'>
                                    <table class='table table-striped table-bordered'>
                                            <thead>
                                                    <th>Subject</th>
                                                    <th>First Grading</th>
                                                    <th>Second Grading</th>
                                                    <th>Third Grading</th>
                                                    <th>Fourth Grading</th>
                                                    <th>Average</th>
                                            </thead>
                                            <tbody>";

                        while($row=mysqli_fetch_array($table)){
                            echo "<tr><td>$row[2]</td><td><center><span data-toggle='modal' data-target='#model'>$row[3]</span></center></td><td><center><span data-toggle='modal' data-target='#model'>$row[4]</span></center></td><td><center><span data-toggle='modal' data-target='#model'>$row[5]</span></center></td><td><center><span data-toggle='modal' data-target='#model'>$row[6]</span></center></td><td><center>$row[7]</center></td></tr>";
                        }                        
                              
                         echo "</tbody></table></div>";     

                        ?>
                    </div>
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
        <h5 class="modal-title" id="exampleModalLabel"><strong>Grade Breakdown</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="card">
              <div class="card-header"><strong>Homeworks and Assignments</strong></div>
              <div class="card-block">
                  <table class="table table-striped table-bordered">
                      <thead>
                          <th>1</th>
                          <th>2</th>
                          <th>3</th>
                          <th>4</th>
                          <th>5</th>
                      </thead>
                  </table>
              </div>
          </div>
          <div class="card">
              <div class="card-header"><strong>Seatworks</strong></div>
              <div class="card-block">
                  <table class="table table-striped table-bordered">
                      <thead>
                          <th>1</th>
                          <th>2</th>
                          <th>3</th>
                          <th>4</th>
                          <th>5</th>
                      </thead></table>
              </div>
          </div>
          <div class="card">
              <div class="card-header"><strong>Quizzes</strong></div>
              <div class="card-block">
                  <table class="table table-striped table-bordered">
                      <thead>
                          <th>1</th>
                          <th>2</th>
                          <th>3</th>
                          <th>4</th>
                          <th>5</th>
                      </thead></table>
              </div>
          </div>
          <div class="card">
              <div class="card-header"><strong>Projects and Major Exams</strong></div>
              <div class="card-block">
                  <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th colspan="3"><center>Projects</center></th>
                          <th rowspan="2"><center>Midterm</center></th>
                          <th rowspan="2"><center>Periodical</center></th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                        </tr>
                      </thead>
                  </table>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button data-dismiss="modal" type="button" class="btn btn-primary">Ok</button>
      </div>
    </div>
  </div>
</div>

    <footer class="app-footer">
        <!-- <a href="http://coreui.io">CoreUI</a> © 2017 creativeLabs.
        <span class="float-right">Powered by <a href="http://coreui.io">CoreUI</a>
        </span> -->
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
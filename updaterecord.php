<?php
session_start();
include("sql_connect.php");

if(!isset($_SESSION['name'])){
    header("location:index.php");
}

?>
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

    <title>One School - Manage Class</title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="css/style.css" rel="stylesheet">

</head>

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



<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <?php include("header-teacher.php"); ?>
    </header>

    <div class="app-body">
        <?php include("sidebar-teacher.php") ?>

        
        <main class="main">

            
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Class Record</li>
                <li class="breadcrumb-item"><?php echo $_GET["level"].' - '.$_GET["section"];?></li>
                <li class="breadcrumb-item active"><?php echo $_GET["subj"];?></li>
                
            </ol>
            <div class="container-fluid">
                <div class="topnav">
                  <a href="updaterecord-2.php?<?php echo "name=".$_GET["name"]."&level=".$_GET["level"]."&section=".$_GET["section"]."&subj=".$_GET["subj"]."&prd=First Grading"; ?>">First Grading</a>
                  <a href="updaterecord-2.php?<?php echo "name=".$_GET["name"]."&level=".$_GET["level"]."&section=".$_GET["section"]."&subj=".$_GET["subj"]."&prd=Second Grading"; ?>">Second Grading</a>
                  <a href="updaterecord-2.php?<?php echo "name=".$_GET["name"]."&level=".$_GET["level"]."&section=".$_GET["section"]."&subj=".$_GET["subj"]."&prd=Third Grading"; ?>">Third Grading</a>
                  <a href="updaterecord-2.php?<?php echo "name=".$_GET["name"]."&level=".$_GET["level"]."&section=".$_GET["section"]."&subj=".$_GET["subj"]."&prd=Fourth Grading"; ?>">Fourth Grading</a>
                </div>                                
                <br>
                <div class="row">
                
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                 <strong>Records: <?php echo $_GET["prd"];?></strong>
                            </div>
                            <div class="card-block">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th rowspan="2"><center>ID Number</center></th>
                                            <th colspan="5"><center>HW & A<?php
                                              $level=$_GET["level"];
                                              $subject=$_GET["subj"];
                                              $mysqli=new mysqli("localhost","root","","oneschool");
                                              $query=mysqli_query($mysqli,"SELECT hwa FROM category WHERE grdlvl='$level' AND subjid='$subject'");
                                              $section=mysqli_fetch_array($query);
                                              echo "  (".$section[0]."%)";

                                            ?></center></th>
                                            <th colspan="5"><center>Seatworks<?php
                                              $level=$_GET["level"];
                                              $subject=$_GET["subj"];
                                              $mysqli=new mysqli("localhost","root","","oneschool");
                                              $query=mysqli_query($mysqli,"SELECT sw FROM category WHERE grdlvl='$level' AND subjid='$subject'");
                                              $section=mysqli_fetch_array($query);
                                              echo "  (".$section[0]."%)";

                                            ?></center></th>
                                            <th colspan="5"><center>Quizzes<?php
                                              $level=$_GET["level"];
                                              $subject=$_GET["subj"];
                                              $mysqli=new mysqli("localhost","root","","oneschool");
                                              $query=mysqli_query($mysqli,"SELECT qz FROM category WHERE grdlvl='$level' AND subjid='$subject'");
                                              $section=mysqli_fetch_array($query);
                                              echo "  (".$section[0]."%)";

                                            ?></center></th>
                                            <th colspan="3"><center>Projects<?php
                                              $level=$_GET["level"];
                                              $subject=$_GET["subj"];
                                              $mysqli=new mysqli("localhost","root","","oneschool");
                                              $query=mysqli_query($mysqli,"SELECT prj FROM category WHERE grdlvl='$level' AND subjid='$subject'");
                                              $section=mysqli_fetch_array($query);
                                              echo "  (".$section[0]."%)";

                                            ?></center></th>
                                            <th rowspan="2"><center>Midterms<?php
                                              $level=$_GET["level"];
                                              $subject=$_GET["subj"];
                                              $mysqli=new mysqli("localhost","root","","oneschool");
                                              $query=mysqli_query($mysqli,"SELECT me FROM category WHERE grdlvl='$level' AND subjid='$subject'");
                                              $section=mysqli_fetch_array($query);
                                              echo "  (".$section[0]."%)";

                                            ?></center></th>
                                            <th rowspan="2"><center>Periodicals<?php
                                              $level=$_GET["level"];
                                              $subject=$_GET["subj"];
                                              $mysqli=new mysqli("localhost","root","","oneschool");
                                              $query=mysqli_query($mysqli,"SELECT fe FROM category WHERE grdlvl='$level' AND subjid='$subject'");
                                              $section=mysqli_fetch_array($query);
                                              echo "  (".$section[0]."%)";

                                            ?></center></th>
                                            <th rowspan="2"><center>Equiv. Grade</center></th>
                                        </tr>
                                        <tr>
                                          <th>1</th>
                                          <th>2</th>
                                          <th>3</th>
                                          <th>4</th>
                                          <th>5</th>
                                          <th>1</th>
                                          <th>2</th>
                                          <th>3</th>
                                          <th>4</th>
                                          <th>5</th>
                                          <th>1</th>
                                          <th>2</th>
                                          <th>3</th>
                                          <th>4</th>
                                          <th>5</th>
                                          <th>1</th>
                                          <th>2</th>
                                          <th>3</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                      $level=$_GET["level"];
                                      $subj=$_GET["subj"];
                                      $acc=$_GET["name"];
                                      $period=$_GET["prd"];

                                      $mysqli=new mysqli("localhost","root","","oneschool");
                                      $table=mysqli_query($mysqli,"SELECT * FROM classrecord WHERE gradelevel='$level' AND subject='$subj' AND teacher='$acc' AND gradingper='$period' AND status!='Done'");
                                      while($row=mysqli_fetch_array($table)){
                                          $table1=mysqli_query($mysqli,"SELECT grade FROM studentgrading WHERE idnum='$row[1]' AND gradelvl='$row[2]' AND subject='$subj' AND gradingper='$period'");
                                          $array=mysqli_fetch_array($table1);
                                          echo "<tr><td>".$row[1]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td>".$row[11]."</td><td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td><td>".$row[17]."</td><td>".$row[18]."</td><td>".$row[19]."</td><td>".$row[20]."</td><td>".$row[21]."</td><td>".$row[22]."</td><td><center>".$row[23]."</center></td><td><center>".$row[24]."</center></td><td>".$array[0]."</td></tr>";
                                      }

                                    ?>
                                    </tbody>
                                </table>
                                <div class="card-footer">
                            <button class="btn btn-sm btn-success" data-target="#update" data-toggle="modal"> Update </button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="update" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Score Record</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                                <div class="card-block">

                                <!-- name=$teacher&level=$level&section=$section&stud=$id&subj=$ -->

                                    <form action="addrecord1.php?<?php 
                                     $subj=$_GET["subj"]; $name=$_GET["name"]; $level=$_GET["level"]; $section=$_GET["section"];$prd=$_GET["prd"];

                                      echo "name=$name&level=$level&section=$section&subj=$subj&prd=$prd";

                                     ?>"
                                    " method="post" enctype="multipart/form-data" class="form-horizontal ">
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="text-input">ID Number</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="id" id="id" placeholder="Enter ID Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                          <label class="col-md-3 form-control-label" for="text-input">Type</label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="type" name="type" onchange="get(this.value);">
                                                <option value='0'>SELECT...</option>
                                                <option>Homeworks and Assignments</option>
                                                <option>Seatworks</option>
                                                <option>Quizzes</option>
                                                <object></object>
                                                <option>Projects</option>
                                                <option>Midterm Exam</option>
                                                <option>Periodical Exam</option>
                                                </select>
                                          </div>


                                          <label class="col-md-2 form-control-label" for="password-input">No.</label>
                                            <div class="col-md-3">
                                                <select class="form-control" type="text" name="no" id="no"></select>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                          <label class="col-md-3 form-control-label" for="password-input">Title</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" name="title" id="title" placeholder="Enter Topic/Title">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                          <label class="col-md-3 form-control-label" for="password-input">Total Score</label>
                                            <div class="col-md-4">
                                                <input class="form-control" type="text" name="total" id="total">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                        <label class="col-md-3 form-control-label" for="password-input">Accumulated Score</label>
                                            <div class="col-md-4">
                                                <input class="form-control" type="text" name="acc" id="acc"></div>
                                            </div>
                                    <div class="card-footer">
                                    <button onsubmit="validate()" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                                    </div>
                                    </form>
                                </div>

                    </div>
                </div>        
      </div>
    </div>
  </div>
</div>

</div>
            <!-- /.conainer-fluid -->
        </main>


<script type="text/javascript">
    var o=document.getElementById('no');

      function get(value){
          if(value=='0'||value=="Midterm Exam"||value=="Periodical Exam"){
            o.innerHTML="<option></option>";
          }else if(value=="Projects"){
            o.innerHTML="<option>1</option><option>2</option><option>3</option>";
          }else{
            o.innerHTML="<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>";
          }
      }

    </script>

        <script type="text/javascript">
            var t=document.getElementById('tablebody');
            t.innerHTML="<?php 
                $level=$_GET["level"];
                $section=$_GET["section"];
                $teacher=$_GET["name"];

                $mysqli=new mysqli("localhost","root","","oneschool");
                $table=mysqli_query($mysqli,"SELECT * FROM studentlist WHERE section='$section' AND status!='Done'");
                while($row=mysqli_fetch_array($table)){
                    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td><a href='updaterecord.php?name=$teacher&level=$level&section=$section&stud=$row[0]'><button class='btn btn-sm btn-primary'> View</button></a></td></tr>";

                }

            ?>"
                

        </script>


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
    <script src="js/bootstrap.min.js"></script>

    <!-- GenesisUI main scripts -->

    <script src="js/app.js"></script>


    <!-- Plugins and scripts required by this views -->

    <!-- Custom scripts required by this view -->
    <script src="js/views/main.js"></script>

</body>

</html>
    
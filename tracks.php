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

<!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
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
    font-size: 14.5px;
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
                <li class="breadcrumb-item">Track Analysis</li>
                <li class="breadcrumb-item active">View</li>
            </ol>


            <div class="container-fluid">
                <div class="topnav" id="myTopnav"><?php 
                        $key=1;
                        $idnum=$_GET["id"];
                        $name=$_GET["name"];
                        $count=$_GET["count"];
                        while($key<=$count){
                            echo "<a href='tracks.php?id=$idnum&name=$name&count=$count&level=Grade $key''>Grade $key</a>";
                            $key++;
                        }

                    ?>
                    <a href=''>Summary</a>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6">                         
                    <div class="card"><div class="card-block">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="icon-graph"></i> Subjects  </h4>
                            </div>
                            <div class="panel-body">
                                <canvas id="pie" class="pie" width="100%" height="100%"></canvas>
                            </div>
                        </div>                        
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-6">                         
                    <div class="card">
                        <div class="card-block">
                        <div class="panel panel-green">
                            <div class="panel-heading"><h4 class="panel-title"><i class="icon-chart"></i> Tracks</h4></div> 
                            <div class="panel-body">
                                <canvas id="bar" class="bar"></canvas>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                    <center>
                    <div class="col-lg-3">
                    <div class="card"><div class="card-header"></div>
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr><th rowspan="2"><center>Subject</center></th>
                            <?php 
                                $count=$_GET["count"];
                                echo "<th colspan='$count'><center>Final Grade</center></th>";  
                            ?></tr>
                            <tr>
                                <?php 
                                    $count=$_GET["count"];
                                    $x=1;
                                    while($x<=$count){
                                        echo "<td><center>Grade $x</center></td>";
                                        $x++;
                                    }
                                ?>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><center>Mother Tongue</center></td>
                                    <?php 
                                        $idnum=$_GET["id"];
                                        $level=$_GET["level"];
                                        $count=$_GET["count"];
                                        $x=1;
                                        $mysqli=new mysqli("localhost","root","","oneschool");
                                        while($x<=$count){
                                        $table=mysqli_query($mysqli,"SELECT average FROM graderecord WHERE idnum='$idnum' AND gradelevel='$level' AND subject='Mother Tongue'");
                                        $select=mysqli_fetch_array($table);
                                            echo "<td>$select[0]</td>";
                                            $x++;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td><center>Filipino</td><?php 
                                        $idnum=$_GET["id"];
                                        $level=$_GET["level"];
                                        $count=$_GET["count"];
                                        $x=1;
                                        $mysqli=new mysqli("localhost","root","","oneschool");
                                        while($x<=$count){
                                        $table=mysqli_query($mysqli,"SELECT average FROM graderecord WHERE idnum='$idnum' AND gradelevel='$level' AND subject='Filipino'");
                                        $select=mysqli_fetch_array($table);
                                            echo "<td>$select[0]</td>";
                                            $x++;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td><center>English</td><?php 
                                        $idnum=$_GET["id"];
                                        $level=$_GET["level"];
                                        $count=$_GET["count"];
                                        $x=1;
                                        $mysqli=new mysqli("localhost","root","","oneschool");
                                        while($x<=$count){
                                        $table=mysqli_query($mysqli,"SELECT average FROM graderecord WHERE idnum='$idnum' AND gradelevel='$level' AND subject='English'");
                                        $select=mysqli_fetch_array($table);
                                            echo "<td>$select[0]</td>";
                                            $x++;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td><center>Mathematics</td><?php 
                                        $idnum=$_GET["id"];
                                        $level=$_GET["level"];
                                        $count=$_GET["count"];
                                        $x=1;
                                        $mysqli=new mysqli("localhost","root","","oneschool");
                                        while($x<=$count){
                                        $table=mysqli_query($mysqli,"SELECT average FROM graderecord WHERE idnum='$idnum' AND gradelevel='$level' AND subject='Mathematics'");
                                        $select=mysqli_fetch_array($table);
                                            echo "<td>$select[0]</td>";
                                            $x++;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td><center>Science</td><?php 
                                        $idnum=$_GET["id"];
                                        $level=$_GET["level"];
                                        $count=$_GET["count"];
                                        $x=1;
                                        $mysqli=new mysqli("localhost","root","","oneschool");
                                        while($x<=$count){
                                        $table=mysqli_query($mysqli,"SELECT average FROM graderecord WHERE idnum='$idnum' AND gradelevel='$level' AND subject='Science'");
                                        $select=mysqli_fetch_array($table);
                                            echo "<td>$select[0]</td>";
                                            $x++;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td><center>Araling Panlipunan</td><?php 
                                        $idnum=$_GET["id"];
                                        $level=$_GET["level"];
                                        $count=$_GET["count"];
                                        $x=1;
                                        $mysqli=new mysqli("localhost","root","","oneschool");
                                        while($x<=$count){
                                        $table=mysqli_query($mysqli,"SELECT average FROM graderecord WHERE idnum='$idnum' AND gradelevel='$level' AND subject='Araling Panlipunan'");
                                        $select=mysqli_fetch_array($table);
                                            echo "<td>$select[0]</td>";
                                            $x++;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td><center>Edukasyon sa Pagkatao</td><?php 
                                        $idnum=$_GET["id"];
                                        $level=$_GET["level"];
                                        $count=$_GET["count"];
                                        $x=1;
                                        $mysqli=new mysqli("localhost","root","","oneschool");
                                        while($x<=$count){
                                        $table=mysqli_query($mysqli,"SELECT average FROM graderecord WHERE idnum='$idnum' AND gradelevel='$level' AND subject='Edukasyon sa Pagkatao'");
                                        $select=mysqli_fetch_array($table);
                                            echo "<td>$select[0]</td>";
                                            $x++;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td><center>Music</td><?php 
                                        $idnum=$_GET["id"];
                                        $level=$_GET["level"];
                                        $count=$_GET["count"];
                                        $x=1;
                                        $mysqli=new mysqli("localhost","root","","oneschool");
                                        while($x<=$count){
                                        $table=mysqli_query($mysqli,"SELECT average FROM graderecord WHERE idnum='$idnum' AND gradelevel='$level' AND subject='Music'");
                                        $select=mysqli_fetch_array($table);
                                            echo "<td>$select[0]</td>";
                                            $x++;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td><center>Arts</td><?php 
                                        $idnum=$_GET["id"];
                                        $level=$_GET["level"];
                                        $count=$_GET["count"];
                                        $x=1;
                                        $mysqli=new mysqli("localhost","root","","oneschool");
                                        while($x<=$count){
                                        $table=mysqli_query($mysqli,"SELECT average FROM graderecord WHERE idnum='$idnum' AND gradelevel='$level' AND subject='Arts'");
                                        $select=mysqli_fetch_array($table);
                                            echo "<td>$select[0]</td>";
                                            $x++;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td><center>Physical Education</td><?php 
                                        $idnum=$_GET["id"];
                                        $level=$_GET["level"];
                                        $count=$_GET["count"];
                                        $x=1;
                                        $mysqli=new mysqli("localhost","root","","oneschool");
                                        while($x<=$count){
                                        $table=mysqli_query($mysqli,"SELECT average FROM graderecord WHERE idnum='$idnum' AND gradelevel='$level' AND subject='Physical Education'");
                                        $select=mysqli_fetch_array($table);
                                            echo "<td>$select[0]</td>";
                                            $x++;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td><center>Health</td>
                                </tr>
                                <tr>
                                    <td><center>Edukasyong Pantahanan at Pangkabuhayan</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    </div>
                    </center>
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

    </footer>
</body>

</html>


 <!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/views/Chart.js"></script>
<script src="js/views/Charts.js"></script>
<script src="js/views/main.js"></script>
<script src="js/app.js"></script>

<!-- Bootstrap and necessary plugins -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/tether/dist/js/tether.min.js"></script>
<script src="bower_components/pace/pace.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script> 
<!-- Plugins and scripts required by all views -->
<script src="bower_components/chart.js/dist/Chart.min.js"></script>
<script src="js/piechart.js"></script>

<script>

$(document).ready(function() {    
    var options = {
        scales: {
            ticks: {
                max: 100
            }
        }
    };
    var ctx = $("#bar");
        
        // data
    var colors = getRandomColors();
    var data = {
        labels: ["HUMSS", "STEM", "ABM", "GAS"],
        datasets: [
            {
                label: "Grade Point Average",
                backgroundColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3]
                ],
                borderColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3]
                ],
                borderWidth: 1,
                data: [90.195, 91.364, 91.423 , 90.625],
            }]

    };

    // Property Type Distribution
    propertyTypes = new Chart(ctx ,{
        type: 'bar',
        data: data,
        options: {
            scales : {
                yAxes: [{
                    ticks: {
                        max: 100,
                        min: 75
                    }
                }]
            }
        }
    });

    function getRandomColors(){
        var letters = "0123456789ABCDEF";
        var color = "#";
        var colors = new Array();
        var i, j;

        for(i = 0; i < 12; i++){
            for(j = 0; j < 6; j++){
                color += letters[Math.floor(Math.random() * 16)];
            }
            colors[i] = color;
            color = "#";
        }

        return colors;
    }

});
</script>

<script>
$(document).ready(function() {    
    var options = {
        legend: {
            position: "bottom",
            labels: {
                padding: 20
            }
        }
    };
    var ctx = $("#pie");
        
        // data
    var colors = getRandomColors();
    var data = {
        labels: [
            "Mother Tongue",
            "Filipino",
            "English",
            "Mathematics",
            "Science",
            "Araling Panlipunan",
            "Edukasyon sa Pagpakatao",
            "Music",
            "Arts",
            "Physical Education",
            "Health",
            "Edukasyong Pantahanan at Pangkabuhayan"
        ],
        datasets: [
            {
                data:[5, 15, 15, 15, 15, 5, 5, 5, 5, 5, 5, 5],
                backgroundColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3],
                    colors[4],
                    colors[5],
                    colors[6],
                    colors[7],
                    colors[8],
                    colors[9],
                    colors[10],
                    colors[11]
                ],
                hoverBackgroundColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3],
                    colors[4],
                    colors[5],
                    colors[6],
                    colors[7],
                    colors[8],
                    colors[9],
                    colors[10],
                    colors[11]
                ]
            }]

    };

    // Property Type Distribution
    propertyTypes = new Chart(ctx ,{
        type: 'pie',
        data: data,
        options: options
    });

    function getRandomColors(){
        var letters = "0123456789ABCDEF";
        var color = "#";
        var colors = new Array();
        var i, j;

        for(i = 0; i < 12; i++){
            for(j = 0; j < 6; j++){
                color += letters[Math.floor(Math.random() * 16)];
            }
            colors[i] = color;
            color = "#";
        }

        return colors;
    }


    ctx = $("#line");
    data = {
        labels: ["Grade 1", "Grade 2", "Grade 3", "Grade 4", "Grade 5", "Grade 6", "Grade 7", "Grade 8", "Grade 9", "Grade 10"],
        datasets: [{
            label: "Track Grade",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [90.8, 90.15,90.1,87.7,90.8,90.15,90.1,87.7,90.8,90.15],
            spanGaps: false,
        }]
    };

    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {}
    });

});
</script>
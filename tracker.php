<?php
session_start();

if(!isset($_SESSION['name'])){
    header("location: index.php");
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

    <title>One School - Performance Tracker</title>

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
                <li class="breadcrumb-item">Performance Tracker</li>
                <li class="breadcrumb-item active">View</li>
            </ol>


            <div class="container-fluid">
                
                <br>
                <div class="row">
                    <div class="col-lg-6">                         
                    <div class="card">
                        <div class="card-header"><strong>Mother Tongue</strong>
                        </div>
                        <canvas id="bar" class="bar"></canvas>
                    </div>
                    </div>
                    <div class="col-lg-6">                         
                    <div class="card">
                        <div class="card-header"><strong>Filipino</strong>
                        </div>
                        <canvas id="bar1" class="bar"></canvas>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">                         
                    <div class="card">
                        <div class="card-header"><strong>English</strong>
                        </div>
                        <canvas id="bar2" class="bar"></canvas>
                    </div>
                    </div>
                    <div class="col-lg-6">                         
                    <div class="card">
                        <div class="card-header"><strong>Science</strong>
                        </div>
                        <canvas id="bar3" class="bar"></canvas>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">                         
                    <div class="card">
                        <div class="card-header"><strong>Mathematics</strong>
                        </div>
                        <canvas id="bar4" class="bar"></canvas>
                    </div>
                    </div>
                    <div class="col-lg-6">                         
                    <div class="card">
                        <div class="card-header"><strong>Araling Panlipunan</strong>
                        </div>
                        <canvas id="bar5" class="bar"></canvas>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">                         
                    <div class="card">
                        <div class="card-header"><strong>Edukasyon sa Pagkatao</strong>
                        </div>
                        <canvas id="bar6" class="bar"></canvas>
                    </div>
                    </div>
                    <div class="col-lg-6">                         
                    <div class="card">
                        <div class="card-header"><strong>Music</strong>
                        </div>
                        <canvas id="bar7" class="bar"></canvas>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">                         
                    <div class="card">
                        <div class="card-header"><strong>Arts</strong>
                        </div>
                        <canvas id="bar8" class="bar"></canvas>
                    </div>
                    </div>
                    <div class="col-lg-6">                         
                    <div class="card">
                        <div class="card-header"><strong>Physical Education</strong>
                        </div>
                        <canvas id="bar9" class="bar"></canvas>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">                         
                    <div class="card">
                        <div class="card-header"><strong>Health</strong>
                        </div>
                        <canvas id="bar10" class="bar"></canvas>
                    </div>
                    </div>
                    <div class="col-lg-6">                         
                    <div class="card">
                        <div class="card-header"><strong>Edukasyong Pantahanan at Pangkabuhayan</strong>
                        </div>
                        <canvas id="bar11" class="bar"></canvas>
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
        labels: ["Grade 1", "Grade 2", "Grade 3", "Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9","Grade 10"],
        datasets: [
            {
                label: "Grade",
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
                    colors[9]
                ],
                borderColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3],
                    colors[4],
                    colors[5],
                    colors[6],
                    colors[7],
                    colors[8],
                    colors[9]
                ],
                borderWidth: 1,
                data: [90.195, 91.364, 91.423 , 90.625,90,90,90,90,90,90],
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
        scales: {
            ticks: {
                max: 100
            }
        }
    };
    var ctx = $("#bar1");
        
        // data
    var colors = getRandomColors();
    var data = {
        labels: ["Grade 1", "Grade 2", "Grade 3", "Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9","Grade 10"],
        datasets: [
            {
                label: "Grade",
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
                    colors[9]
                ],
                borderColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3],
                    colors[4],
                    colors[5],
                    colors[6],
                    colors[7],
                    colors[8],
                    colors[9]
                ],
                borderWidth: 1,
                data: [90.195, 91.364, 91.423 , 90.625,90,90,90,90,90,90],
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
        scales: {
            ticks: {
                max: 100
            }
        }
    };
    var ctx = $("#bar2");
        
        // data
    var colors = getRandomColors();
    var data = {
        labels: ["Grade 1", "Grade 2", "Grade 3", "Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9","Grade 10"],
        datasets: [
            {
                label: "Grade",
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
                    colors[9]
                ],
                borderColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3],
                    colors[4],
                    colors[5],
                    colors[6],
                    colors[7],
                    colors[8],
                    colors[9]
                ],
                borderWidth: 1,
                data: [90.195, 91.364, 91.423 , 90.625,90,90,90,90,90,90],
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
        scales: {
            ticks: {
                max: 100
            }
        }
    };
    var ctx = $("#bar3");
        
        // data
    var colors = getRandomColors();
    var data = {
        labels: ["Grade 1", "Grade 2", "Grade 3", "Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9","Grade 10"],
        datasets: [
            {
                label: "Grade",
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
                    colors[9]
                ],
                borderColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3],
                    colors[4],
                    colors[5],
                    colors[6],
                    colors[7],
                    colors[8],
                    colors[9]
                ],
                borderWidth: 1,
                data: [90.195, 91.364, 91.423 , 90.625,90,90,90,90,90,90],
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
        scales: {
            ticks: {
                max: 100
            }
        }
    };
    var ctx = $("#bar4");
        
        // data
    var colors = getRandomColors();
    var data = {
        labels: ["Grade 1", "Grade 2", "Grade 3", "Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9","Grade 10"],
        datasets: [
            {
                label: "Grade",
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
                    colors[9]
                ],
                borderColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3],
                    colors[4],
                    colors[5],
                    colors[6],
                    colors[7],
                    colors[8],
                    colors[9]
                ],
                borderWidth: 1,
                data: [90.195, 91.364, 91.423 , 90.625,90,90,90,90,90,90],
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
        scales: {
            ticks: {
                max: 100
            }
        }
    };
    var ctx = $("#bar5");
        
        // data
    var colors = getRandomColors();
    var data = {
        labels: ["Grade 1", "Grade 2", "Grade 3", "Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9","Grade 10"],
        datasets: [
            {
                label: "Grade",
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
                    colors[9]
                ],
                borderColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3],
                    colors[4],
                    colors[5],
                    colors[6],
                    colors[7],
                    colors[8],
                    colors[9]
                ],
                borderWidth: 1,
                data: [90.195, 91.364, 91.423 , 90.625,90,90,90,90,90,90],
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
        scales: {
            ticks: {
                max: 100
            }
        }
    };
    var ctx = $("#bar6");
        
        // data
    var colors = getRandomColors();
    var data = {
        labels: ["Grade 1", "Grade 2", "Grade 3", "Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9","Grade 10"],
        datasets: [
            {
                label: "Grade",
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
                    colors[9]
                ],
                borderColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3],
                    colors[4],
                    colors[5],
                    colors[6],
                    colors[7],
                    colors[8],
                    colors[9]
                ],
                borderWidth: 1,
                data: [90.195, 91.364, 91.423 , 90.625,90,90,90,90,90,90],
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
        scales: {
            ticks: {
                max: 100
            }
        }
    };
    var ctx = $("#bar7");
        
        // data
    var colors = getRandomColors();
    var data = {
        labels: ["Grade 1", "Grade 2", "Grade 3", "Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9","Grade 10"],
        datasets: [
            {
                label: "Grade",
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
                    colors[9]
                ],
                borderColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3],
                    colors[4],
                    colors[5],
                    colors[6],
                    colors[7],
                    colors[8],
                    colors[9]
                ],
                borderWidth: 1,
                data: [90.195, 91.364, 91.423 , 90.625,90,90,90,90,90,90],
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
        scales: {
            ticks: {
                max: 100
            }
        }
    };
    var ctx = $("#bar8");
        
        // data
    var colors = getRandomColors();
    var data = {
        labels: ["Grade 1", "Grade 2", "Grade 3", "Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9","Grade 10"],
        datasets: [
            {
                label: "Grade",
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
                    colors[9]
                ],
                borderColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3],
                    colors[4],
                    colors[5],
                    colors[6],
                    colors[7],
                    colors[8],
                    colors[9]
                ],
                borderWidth: 1,
                data: [90.195, 91.364, 91.423 , 90.625,90,90,90,90,90,90],
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
        scales: {
            ticks: {
                max: 100
            }
        }
    };
    var ctx = $("#bar9");
        
        // data
    var colors = getRandomColors();
    var data = {
        labels: ["Grade 1", "Grade 2", "Grade 3", "Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9","Grade 10"],
        datasets: [
            {
                label: "Grade",
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
                    colors[9]
                ],
                borderColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3],
                    colors[4],
                    colors[5],
                    colors[6],
                    colors[7],
                    colors[8],
                    colors[9]
                ],
                borderWidth: 1,
                data: [90.195, 91.364, 91.423 , 90.625,90,90,90,90,90,90],
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
        scales: {
            ticks: {
                max: 100
            }
        }
    };
    var ctx = $("#bar10");
        
        // data
    var colors = getRandomColors();
    var data = {
        labels: ["Grade 1", "Grade 2", "Grade 3", "Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9","Grade 10"],
        datasets: [
            {
                label: "Grade",
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
                    colors[9]
                ],
                borderColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3],
                    colors[4],
                    colors[5],
                    colors[6],
                    colors[7],
                    colors[8],
                    colors[9]
                ],
                borderWidth: 1,
                data: [90.195, 91.364, 91.423 , 90.625,90,90,90,90,90,90],
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
        scales: {
            ticks: {
                max: 100
            }
        }
    };
    var ctx = $("#bar11");
        
        // data
    var colors = getRandomColors();
    var data = {
        labels: ["Grade 1", "Grade 2", "Grade 3", "Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9","Grade 10"],
        datasets: [
            {
                label: "Grade",
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
                    colors[9]
                ],
                borderColor: [
                    colors[0],
                    colors[1],
                    colors[2],
                    colors[3],
                    colors[4],
                    colors[5],
                    colors[6],
                    colors[7],
                    colors[8],
                    colors[9]
                ],
                borderWidth: 1,
                data: [90.195, 91.364, 91.423 , 90.625,90,90,90,90,90,90],
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

<?php
session_start();
include("sql_connect.php");

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

    <title>One School - Manage Class</title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="css/style.css" rel="stylesheet">

</head>



<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <?php include("header-teacher.php"); ?>
    </header>

    <div class="app-body">
        <?php include("sidebar-teacher.php") ?>

        
        <main class="main">

            
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Student Progress</li>

                <li class="breadcrumb-item active">View</li>

                
            </ol>


            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-block">
                            <form>
                                <div class="form-group">
                                    <label for="group">Subject and Group</label>
                                    <select class="form-control" onchange="funct();">
                                        <option value='0'>Please Select...</option>
                                </div>
                                <?php 
                                    $x=1;
                                    $name=$_GET["name"];
                                    $mysqli=new mysqli("localhost","root","","oneschool");
                                    $table=mysqli_query($mysqli,"SELECT * FROM schedule WHERE teacher='$name'");
                                    while($row=mysqli_fetch_array($table)){
                                        echo "<option>".$row[0]." - ".$row[4]." : ".$row[1]."</option>";
                                        $x++;
                                    }
                                ?>
                                </select>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Enrolled Students</strong>
                            </div>
                            <div class="card-block">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID Number</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablebody">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.conainer-fluid -->
        </main>

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
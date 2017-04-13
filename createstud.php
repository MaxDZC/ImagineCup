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

    <title>One School - Create Student</title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="css/style.css" rel="stylesheet">

</head>



<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <?php include("header-admin.php"); ?>
    </header>

    <div class="app-body">
        <?php include("sidebar-admin.php") ?>

        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Admin Tasks</li>
                <!-- <li class="breadcrumb-item"><a href="#">Admin</a>
                </li> -->
                <li class="breadcrumb-item active">Student Creation</li>

                
            </ol>


            <div class="container-fluid">
                <div class="row col-lg-16 card">
                    <div class="card-header">
                        <strong>Enrolled Students</strong>
                    </div>
                    <div class="card-block">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>ID Number</th>
                                <th>Student Name</th>
                                <th>Current Level</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php 
                                  $table=mysqli_query($mysqli,"SELECT*FROM student WHERE active = 1");

                                  while($row=mysqli_fetch_array($table)){
                                    $name=$row[4].", ".$row[2]." ".$row[3][0].".";
                                    echo "<tr>
                                            <td>
                                              ".$row[0]."
                                            </td>
                                            <td>
                                              ".$name."
                                            </td>
                                            <td>
                                              ".$row[3]."
                                            </td>
                                            <td>
                                              <a href='updatelvl.php?idnum=$row[0]&name=$row[1]&bdate=$row[2]&currentgr=$row[3]&pass=$row[5]'>
                                                  <button class='btn btn-sm btn-success'><i class='icon-check'></i> Update</button>
                                              </a> 
                                              <a href='data9.php?idnum=".$row[0]."&name=".$row[1]."'> <button class='btn btn-sm btn-danger'><i class='icon-minus'></i> Delete</button>
                                              </a>
                                            </td>
                                          </tr>";
                                  }
                              ?>
                            </tbody>
                        </table>
                        <button class="btn btn-md btn-primary" data-toggle="modal" data-target="#addstud"><i class="icon-plus"></i> Add Student</button>                        
                    </div>
                </div>                
            </div>
            <!-- /.conainer-fluid -->
        </main>

<div class="modal" id="addstud" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
                                    <strong>Student Registration</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                                <div class="card-block">
                                    <form name="createstud" onsubmit="return validate()" action="insertStud.php" method="post" enctype="multipart/form-data" class="form-horizontal ">
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="text-input">Student ID</label>
                                            <div class="col-md-9">
                                                <input type="text" name="studid" class="form-control" placeholder="Enter Student ID">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="email-input">Student Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="studname" name="studname" class="form-control" placeholder="Enter Student Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="password-input">Birthdate</label>
                                            <div class="col-md-3">
                                                <select class="form-control" id="mm" name="mm" size="2" onchange="month(this.value)">
                                                    <option value='0'>MM</option>
                                                    <option value='1'>January</option>
                                                    <option value='2'>February</option>
                                                    <option value='3'>March</option>
                                                    <option value='4'>April</option>
                                                    <option value='5'>May</option>
                                                    <option value='6'>June</option>
                                                    <option value='7'>July</option>
                                                    <option value='8'>August</option>
                                                    <option value='9'>September</option>
                                                    <option value='10'>October</option>
                                                    <option value='11'>November</option>
                                                    <option value='12'>December</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control" id="dd" name="dd" size="2"></select>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="yy" class="form-control" id="yy" size="2">
                                                    <option>2017</option>
                                                    <option>2016</option>
                                                    <option>2015</option>
                                                    <option>2014</option>
                                                    <option>2013</option>
                                                    <option>2012</option>
                                                    <option>2011</option>
                                                    <option>2010</option>
                                                    <option>2009</option>
                                                    <option>2008</option>
                                                    <option>2007</option>
                                                    <option>2006</option>
                                                    <option>2005</option>
                                                    <option>2004</option>
                                                    <option>2003</option>
                                                    <option>2002</option>
                                                    <option>2001</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="email-input">Grade Level</label>
                                            <div class="col-md-9">
                                                <select id="grdlvl" name="grdlvl" class="form-control">
                                                    <option value='0'>Select Level</option>
                                                    <option>Grade 1</option>
                                                    <option>Grade 2</option>
                                                    <option>Grade 3</option>
                                                    <option>Grade 4</option>
                                                    <option>Grade 5</option>
                                                    <option>Grade 6</option>
                                                    <option>Grade 7</option>
                                                    <option>Grade 8</option>
                                                    <option>Grade 9</option>
                                                    <option>Grade 10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="password-input">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" id="pass" name="pass" class="form-control" placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="password-input">Confirm Password</label>
                                            <div class="col-md-9">
                                                <input type="password" id="passconfirm" name="password-input" class="form-control" placeholder="Re-enter Password">
                                            </div>
                                        </div>
                                    
                                <div class="card-footer">
                                    <button  type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
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

<script type="text/javascript">
    function validate(){
        alert("what!");
    }
</script>


<div class="modal" id="updatelvl" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
                                    <strong>Student Registration</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                                <div class="card-block">
                                    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal ">
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="text-input">Student ID</label>
                                            <div class="col-md-9">
                                                <input type="text" id="studid" name="text-input" class="form-control" placeholder="Enter Student ID">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="email-input">Student Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="studname" name="text-input" class="form-control" placeholder="Enter Student Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="password-input">Birthdate</label>
                                            <div class="col-md-3">
                                                <select class="form-control" id="mm" size="2" onchange="month(this.value)">
                                                    <option value='0'>MM</option>
                                                    <option>January</option>
                                                    <option>February</option>
                                                    <option>March</option>
                                                    <option>April</option>
                                                    <option>May</option>
                                                    <option>June</option>
                                                    <option>July</option>
                                                    <option>August</option>
                                                    <option>September</option>
                                                    <option>October</option>
                                                    <option>November</option>
                                                    <option>December</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control" id="dd" size="2"></select>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control" id="yy" size="2">
                                                    <option>2017</option>
                                                    <option>2016</option>
                                                    <option>2015</option>
                                                    <option>2014</option>
                                                    <option>2013</option>
                                                    <option>2012</option>
                                                    <option>2011</option>
                                                    <option>2010</option>
                                                    <option>2009</option>
                                                    <option>2008</option>
                                                    <option>2007</option>
                                                    <option>2006</option>
                                                    <option>2005</option>
                                                    <option>2004</option>
                                                    <option>2003</option>
                                                    <option>2002</option>
                                                    <option>2001</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="email-input">Grade Level</label>
                                            <div class="col-md-9">
                                                <select class="form-control">
                                                    <option value='0'>Select Level</option>
                                                    <option value='1'>Grade 1</option>
                                                    <option value='2'>Grade 2</option>
                                                    <option value='3'>Grade 3</option>
                                                    <option value='4'>Grade 4</option>
                                                    <option value='5'>Grade 5</option>
                                                    <option value='6'>Grade 6</option>
                                                    <option value='7'>Grade 7</option>
                                                    <option value='8'>Grade 8</option>
                                                    <option value='9'>Grade 9</option>
                                                    <option value='10'>Grade 10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="password-input">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" id="password-input" name="password-input" class="form-control" placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="password-input">Confirm Password</label>
                                            <div class="col-md-9">
                                                <input type="password" id="passconfirm" name="password-input" class="form-control" placeholder="Re-enter Password">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button onsubmit="validate()" type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                            </div>

                    </div>
                </div>        
      </div>
    </div>
  </div>
</div>


</div>

     
    <script type="text/javascript">
        function validate(){

        }


        var select=document.getElementById('dd');


        function month(value){
            switch(value){
                case '0': select.innerHTML="<option>DD</option>";
                          break;
                case '1':
                case '3':
                case '5':
                case '7':
                case '8':
                case '10':
                case '12': select.innerHTML="<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>";
                    break;
                case '2': select.innerHTML="<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option>";
                    break;
                default: select.innerHTML="<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>";
                    break;

            }
            return value;
        }
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
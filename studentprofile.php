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

    <title>One School - Welcome Page</title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="css/style.css" rel="stylesheet">

</head>



<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <?php include("header.php"); ?>
    </header>

    <div class="app-body">
        <?php include("sidebar.php") ?>

        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Profile</li>
                <!-- <li class="breadcrumb-item"><a href="#">Admin</a>
                </li> -->
                <li class="breadcrumb-item active">View</li>

                
            </ol>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="card card-inverse card-primary">
                            <div class="card-header">
                                Student Profile
                            </div>
                            <div class="card-block">
                                <center><img src="img/student.png" class="img-avatar" width="300px"></center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                    <div class="card card-default">
                                <div class="card-header">
                                    Student Details
                                </div>
                                <div class="card-block">
                                <p style="padding-right:50px;padding-left:50px;" class=form-control>
                                    Name: <?php echo $_GET["name"]; ?>
                                </p>
                                <p style="padding-right:50px;padding-left:50px;" class=form-control>
                                    ID Number: <?php 
                                        $name=$_GET["name"];
                                        $mysqli=new mysqli("localhost","root","","oneschool");
                                        $select=mysqli_query($mysqli,"SELECT idnum FROM studentlist WHERE name='$name'");
                                        $select=mysqli_fetch_array($select);
                                        echo $select[0];
                                    ?>
                                </p>
                                <p style="padding-right:50px;padding-left:50px;" class=form-control>
                                    Current Grade: <?php 
                                        $name=$_GET["name"];
                                        $mysqli=new mysqli("localhost","root","","oneschool");
                                        $select=mysqli_query($mysqli,"SELECT currentgr FROM studentlist WHERE name='$name' AND status!='Done'");
                                        $select=mysqli_fetch_array($select);
                                        echo $select[0];
                                    ?>
                                </p>
                                <p style="padding-right:50px;padding-left:50px;" class=form-control>
                                    Section: <?php 
                                        $name=$_GET["name"];
                                        $mysqli=new mysqli("localhost","root","","oneschool");
                                        $select=mysqli_query($mysqli,"SELECT section FROM studentlist WHERE name='$name' AND status!='Done'");
                                        $select=mysqli_fetch_array($select);
                                        echo $select[0];
                                    ?>
                                </p>
                                </div>
                            </div>   
                    </div>
                    </div>
                </div>
            </div>
            <!-- /.conainer-fluid -->
        </main>

        <aside class="aside-menu">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="timeline" role="tabpanel">
                    <div class="callout m-0 py-h text-muted text-center bg-faded text-uppercase">
                        <small><b>Today</b>
                        </small>
                    </div>
                    <hr class="transparent mx-1 my-0">
                    <div class="callout callout-warning m-0 py-1">
                        <div class="avatar float-right">
                            <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div>Meeting with
                            <strong>Lucas</strong>
                        </div>
                        <small class="text-muted mr-1"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                        <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA</small>
                    </div>
                    <hr class="mx-1 my-0">
                    <div class="callout callout-info m-0 py-1">
                        <div class="avatar float-right">
                            <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div>Skype with
                            <strong>Megan</strong>
                        </div>
                        <small class="text-muted mr-1"><i class="icon-calendar"></i>&nbsp; 4 - 5pm</small>
                        <small class="text-muted"><i class="icon-social-skype"></i>&nbsp; On-line</small>
                    </div>
                    <hr class="transparent mx-1 my-0">
                    <div class="callout m-0 py-h text-muted text-center bg-faded text-uppercase">
                        <small><b>Tomorrow</b>
                        </small>
                    </div>
                    <hr class="transparent mx-1 my-0">
                    <div class="callout callout-danger m-0 py-1">
                        <div>New UI Project -
                            <strong>deadline</strong>
                        </div>
                        <small class="text-muted mr-1"><i class="icon-calendar"></i>&nbsp; 10 - 11pm</small>
                        <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ</small>
                        <div class="avatars-stack mt-h">
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                        </div>
                    </div>
                    <hr class="mx-1 my-0">
                    <div class="callout callout-success m-0 py-1">
                        <div>
                            <strong>#10 Startups.Garden</strong>Meetup</div>
                        <small class="text-muted mr-1"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                        <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA</small>
                    </div>
                    <hr class="mx-1 my-0">
                    <div class="callout callout-primary m-0 py-1">
                        <div>
                            <strong>Team meeting</strong>
                        </div>
                        <small class="text-muted mr-1"><i class="icon-calendar"></i>&nbsp; 4 - 6pm</small>
                        <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ</small>
                        <div class="avatars-stack mt-h">
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/8.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                        </div>
                    </div>
                    <hr class="mx-1 my-0">
                </div>
                <div class="tab-pane p-1" id="messages" role="tabpanel">
                    <div class="message">
                        <div class="py-1 pb-3 mr-1 float-left">
                            <div class="avatar">
                                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-q">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                        <div class="py-1 pb-3 mr-1 float-left">
                            <div class="avatar">
                                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-q">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                        <div class="py-1 pb-3 mr-1 float-left">
                            <div class="avatar">
                                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-q">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                        <div class="py-1 pb-3 mr-1 float-left">
                            <div class="avatar">
                                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-q">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                        <div class="py-1 pb-3 mr-1 float-left">
                            <div class="avatar">
                                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-q">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                </div>
                <div class="tab-pane p-1" id="settings" role="tabpanel">
                    <h6>Settings</h6>

                    <div class="aside-options">
                        <div class="clearfix mt-2">
                            <small><b>Option 1</b>
                            </small>
                            <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                <input type="checkbox" class="switch-input" checked="">
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                        <div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                        </div>
                    </div>

                    <div class="aside-options">
                        <div class="clearfix mt-1">
                            <small><b>Option 2</b>
                            </small>
                            <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                <input type="checkbox" class="switch-input">
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                        <div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                        </div>
                    </div>

                    <div class="aside-options">
                        <div class="clearfix mt-1">
                            <small><b>Option 3</b>
                            </small>
                            <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                <input type="checkbox" class="switch-input">
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                    </div>

                    <div class="aside-options">
                        <div class="clearfix mt-1">
                            <small><b>Option 4</b>
                            </small>
                            <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                <input type="checkbox" class="switch-input" checked="">
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                    </div>

                    <hr>
                    <h6>System Utilization</h6>

                    <div class="text-uppercase mb-q mt-2">
                        <small><b>CPU Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">348 Processes. 1/4 Cores.</small>

                    <div class="text-uppercase mb-q mt-h">
                        <small><b>Memory Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">11444GB/16384MB</small>

                    <div class="text-uppercase mb-q mt-h">
                        <small><b>SSD 1 Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">243GB/256GB</small>

                    <div class="text-uppercase mb-q mt-h">
                        <small><b>SSD 2 Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">25GB/256GB</small>
                </div>
            </div>
        </aside>


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
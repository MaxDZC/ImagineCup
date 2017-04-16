<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="CoreUI Bootstrap 4 Admin Template">
<meta name="author" content="Lukasz Holeczek">
<meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
<!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

<title>One School - Login Page</title>

<!-- Icons -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/simple-line-icons.css" rel="stylesheet">

<!-- Main styles for this application -->
<link href="css/style.css" rel="stylesheet">

</head>

<body class="app flex-row align-items-center">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
              <center><img src="img/logoT.png" style="width: 75%; background-color: transparent;"></center><br><br>
      <div class="card-group mb-0">
        <div class="card p-2">
          <div class="card-block">
            <form action="validate.php" method="post">
              <h1>Login</h1>
              <p class="text-muted">Sign In to your account</p>
              <div class="input-group mb-1">
                <span class="input-group-addon"><i class="icon-user"></i>
                </span>
                <input type="text" id="id" name="id" class="form-control" placeholder="ID Number" autocomplete="off">
              </div>
              <div class="input-group mb-2">
                <span class="input-group-addon"><i class="icon-lock"></i>
                </span>
                <input type="password" id="pass" name="pass" class="form-control" placeholder="Password">
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" class="btn btn-primary px-2">Login</button>  
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card card-inverse card-primary py-3 hidden-md-down" style="width:44%">
          <div class="card-block text-center">
            <div><br><br>
              <p><h3>Re-imagine Education</h3></p>
              <p><h3><i class="icon-note"></i> <i class="icon-wallet"></i>  <i class="icon-chart"></i> <i class="icon-book-open"></i></h3><i class=""></i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap and necessary plugins -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/tether/dist/js/tether.min.js"></script>
</body>
</html>
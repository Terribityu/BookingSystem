<?php
session_start();
if(isset($_SESSION['username'])){
  header('location:./index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrator Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/lineawesome/css/line-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/alertifyjs/css/alertify.min.css">
  <link rel="stylesheet" type="text/css" href="assets/alertifyjs/css/themes/default.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script type="text/javascript" src="assets/alertifyjs/alertify.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<div class="modal fade" id="registerAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"><i id="icon" class="las la-map"></i> Registration</h5>
            </div>
            <div class="modal-body">
                <form id = "regform" action="database/register.php" method="POST">
                        <label>Username or Email:</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="text" class="form-control" name="regname" id="regname" placeholder = "Username" required>
                        </div>
                        
                        <label>Email</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="email" class="form-control" name="regemail" id="regemail" placeholder = "Email" required>
                        </div>

                        <label>Password:</label><span class="ml-2 errormsg"></span>
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="password" class="form-control" name="regpass" id="regpass" placeholder ="Password" required>
                        </div>

                        <label>Confirm Password:</label><span class="ml-2 errormsg"></span>
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="password" class="form-control" name="cnf_pass" id="cnf_pass" placeholder ="Confirm Password" required>
                        </div>
		 <input type="hidden" name="btn_register" value="true">
            </div>
            <div class="modal-footer">
                <button type="submit" id="btn_register" class="btn btn-success" >Register</button>
                <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Close</button>
                </form>
            </div>
            </div>
        </div>
        </div>

<header class="bg-dark">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="./index.php"> Ready, Set, Gala!</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    </div>
  </header>
  <?php
    // if(isset($_GET['error'])){
    //   echo "<script type='text/javascript'>alertify.confirm('<i class=\"las la-exclamation-triangle\"></i> Login','".$_GET['error']."', function(){ }, function(){}).set({transition:'zoom'}).show();</script>";
    // }
  ?>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh">
      <form class="border shadow p-3 rounded" id="loginform" style="width: 400px;">
      	  <h1 class="text-center p-3">LOGIN</h1>
        <label>Username:</label>
          <div class="input-group mb-2 mr-sm-2">
            <input type="text" class="form-control" name="username" id="username" placeholder = "Username" required>
          </div>

          <label>Password</label>
          <div class="input-group mb-2 mr-sm-2">
            <input type="password" class="form-control" name="password" id="password" placeholder ="Password" required>
          </div>

		 <input type="hidden" name="btn_login" value="true">
		  <button type="submit" class="btn btn-success" >Login</button>
      <button type="button" name="btn_reg" id="btn_reg" class="btn btn-primary">Register</button>
		</form>
      </div>

      <script type="text/javascript" src="./assets/js/login.js"></script>
</body>
</html>
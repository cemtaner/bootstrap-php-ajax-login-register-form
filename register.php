<?php ob_start(); session_start();?>
<?php include('connect.php'); ?>
<?php include('functions.php'); ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="ct web agency">
    <title>Register Page</title>
	<link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="canonical" href="">

    <!-- Bootstrap core CSS -->
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dist/css/style.css" rel="stylesheet">
    <link href="assets/dist/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
	<!--div with ajax result-->
	<div id="return"></div>
	
	<!--loading gif where it appears-->
	<div id="load"></div>
	
    <form class="form-signin" name="registerForm" id="registerForm">
	  <img class="mb-4" src="assets/img/login-logo.png" alt="" width="" height="90">
	  <label for="inputEmail" class="sr-only">Your E-Mail</label>
	  <input type="email" id="email" onKeyUp="email_control()" name="email" class="form-control" placeholder="Your E-Mail" required autofocus>
	  <label for="inputPassword" class="sr-only">Your Password</label>
	  <input type="password" id="inputPassword" name="pass" id="pass" class="form-control" placeholder="Your Password" required>
	  <label for="inputagainPassword" class="sr-only">Your Password Again</label>
	  <input type="password" id="inputAgainPassword" name="again_pass" id="again_pass" class="form-control" placeholder="Your Password Again" required>
	  
	  <div class="checkbox mb-3">
		<label>
		  <input type="checkbox" name="contract" value="contract-check"> I accept the user agreement.
		</label>
	  </div>
	  
	  <button class="btn btn-lg btn-primary btn-block" type="button" onclick="AjaxPost('registerForm','UserRegister','return','load')">Register</button>
	  <!--
	  AjaxPost('registerForm','UserRegister','return','load')
	  registerForm = FORM ID
	  UserRegister = Ajax.php case "UserRegister": Function
	  return       = return div
	  load         = loading div
	  -->
	  <div class="checkbox mb-3">
		<p><br>Do you already have an account? <a href="login"><br><b>Sign In</b></a></p>
	  </div>
	  <p class="mt-5 mb-3 text-muted">&copy; 2020 All Rights Reserved.</p>
	</form>
	
    <script src="assets/dist/js/bootstrap.min.js"></script>
    <script src="assets/dist/js/main.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>

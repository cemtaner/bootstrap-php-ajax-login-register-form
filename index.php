<?php ob_start(); session_start();?>
<?php include('connect.php'); ?>
<?php include('functions.php'); ?>
<?php
## Session Controls ##
$user = $_SESSION["user"];
if($user==""){
	//redirect if there is no cookie
    unset($_SESSION["user"]);
    header("location:login");
}else{
	//redirect if cookie
	header("location:profile");
}
?>
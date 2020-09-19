<?php 
	session_start();
	ob_start();
	
	## Hide Errors ##
	error_reporting(0);
	
	## Connection Variables ##
	$host 	=	"localhost";
	$user 	=	"root";
	$pass 	=	"";
	$db		=	"YOUR DB NAME"; 
	
	## Mysql Connection ##
	$connect = mysql_connect($host, $user, $pass) or die (mysql_Error());
	
	## Database Selection ##
	mysql_select_db($db, $connect) or die (mysql_Error());
	

	## Character Problem ##
	mysql_query("SET CHARACTER SET 'utf8'");
	mysql_query("SET NAMES 'utf8'");
	
?>

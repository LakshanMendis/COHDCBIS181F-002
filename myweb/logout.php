<?php
	session_start();
	session_destroy();
 
	if (isset($_COOKIE["user"]) AND isset($_COOKIE["pass"])){
		setcookie("user", '', time() - (5));
		setcookie("pass", '', time() - (5));
	}
 
	header('location:index.php');
 
?>
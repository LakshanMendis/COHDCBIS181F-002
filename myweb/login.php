<?php
	if(isset($_POST['login'])){
 
		session_start();
		include('conn.php');
 
		$username=$_POST['username'];
		$password=$_POST['password'];
 
		$query=mysqli_query($conn,"select * from `user` where username='$username' && password='$password'");
 
		if (mysqli_num_rows($query) == 0){
			$_SESSION['message']="Login Failed. User not Found!";
			header('Location:index.php');
		}
		else{
			$row=mysqli_fetch_array($query);
 
			if (isset($_POST['remember'])){
				//set up cookie
				setcookie("user", $row['username'], time() + (3600)); 
				setcookie("pass", $row['password'], time() + (3600)); 
			}
 
			$_SESSION['id']=$row['userid'];
			header('Location:welcom.php');
		}
	}
	else{
		header('Location:index.php');
		$_SESSION['message']="Please Login!";
	}
?>
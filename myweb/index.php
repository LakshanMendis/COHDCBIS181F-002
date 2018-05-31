<?php
	session_start();
	include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style type="text/css">
.a {
	color: #666;
}
.w {
	font-style: italic;
}
</style>
</head>
<body>

<h1 align="center" class="a">	<u>	Login Form</u></h1>
	<h5 align="center" class="a">
	  <!-- #BeginDate format:acAm1a -->Fri, May 4, 2018 10:02 AM<!-- #EndDate -->
	</h5>
	<form method="POST" action="login.php">
	  <p>
	    <label><br>
        Username:</label>
	    <input type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username">
	  </p>
	  <p>
	    <label>Password:</label> 
	    <input type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password"><br>
	    <span class="w"><br>
        <input type="checkbox" name="remember"> Remember me </span><br>
        <br>
	    <input type="submit" value="Login" name="login">
      </p>
	</form>
 
	<span>
	<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
</span><img src = "C:\Users\Lakshan\Desktop\FinalProject\a.jpg" width="290" height="54" align="bottom"/>
</body>
</html>
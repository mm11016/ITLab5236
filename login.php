<!DOCTYPE HTML>

<?php
	session_start();
	
	$username = "user";
	$password = "password";
		
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
			if ($_POST['username'] == $username && $_POST['password'] == $password){
				header("Location: index.php");
			} else {
				echo "Incorrect username or password";
			}
	}

	
?>
<html>
	<head>
		<title>Login</title>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="index-style.css">
	</head>
	<body>
	<header> 
		<h1>Login</h1> 
	</header>
		<form method="post" action="login.php">
		Username:<br>
		<input type="text" name="username"><br>
		Password:<br>
		<input type="password" name="password"><br>
		<input type="submit" value="Login">
		</form>
	</body>
</html>

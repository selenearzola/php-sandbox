<?php 
	
	include 'functions.php';

	session_start();
	if ( !is_logged_in ( )){
		header("Location: login.php");
 		die();
 	}
	
?>
	
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<h1>Hello,<?php  echo $_SESSION['username']; ?></h1>
	<a href="logout.php">Log out</a>

</body>
</html>
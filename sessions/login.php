<?php
include 'config.php';
include 'functions.php';

session_start();

// We have to verify whether the form has been posted for that we use: 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	echo 'posted';
}

// PHP Tip: if you have multiple forms in the page you may use this means getting the name value of the form

if (isset($_POST['loginForm'])) {

	echo 'Posted';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Get the values
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (validate_user_creds($username, $password)) {

		$_SESSION['username'] = $username;

		header("Location: admin.php");
	} else {
		$status = "Incorrect Login Credentials";
	}
}
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login example</title>
	<meta name="description" content="Login Example">
	<meta name="author" content="">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<form action="" method="post">
		<ul>
			<li>
				<label for="username" id="username">Username:</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password" id="password">Password:</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<input type="submit" value="Login" name="loginForm">
			</li>
		</ul>
	</form>
	<?php if (isset($status)) : ?>
		<p><?php echo $status; ?></p>
	<?php endif; ?>

</body>

</html>
<?php
	session_start();
	// Then
	session_destroy();
	$_SESSION = array();
	
	// Delete the cookie.	
	header("Location: login.php");	

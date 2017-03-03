<?php


	session_start();
	echo $_SESSION['username'];

	// We destroy the session
	session_destroy();
	
	//  even that we've destroyed the session we still
	//  have stored the information on $_SESSION var
	//  that's why we're going to initialize it using an
	//  array because this var refers to an array.
	
	$_SESSION = array();


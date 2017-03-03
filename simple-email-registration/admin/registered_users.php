<?php
	
	// To show your server address, this is hepful when you're
	// working on the localhost.
	//echo $_SERVER['SERVER_ADDR'];

	require '../functions.php';
	$registered_users = get_registered_users();
	require 'registed_users.tmpl.php';


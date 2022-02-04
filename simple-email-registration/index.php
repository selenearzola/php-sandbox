<?php

require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// trim: it helps to trim extra spaces, in this case that the user can insert while he/she is typing into the input text. 
	// Grab the values

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);

	// We have to make sure that the user fill everything okay.

	if (empty($name) || empty($email) || !valid_email($email)) {

		$status = 'Please provide a name and valid address.';
	} else {

		// Adding the information into a file.		

		add_registered_user($name, $email);

		$status = 'Thank you for registering . Your information has been added!';
	}
}

require 'index.tmpl.php';

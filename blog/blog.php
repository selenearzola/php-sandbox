<?php

	require 'functions.php';
	require 'db.php';
	
	// We connect to the database.
	$conn = Blog\db\connect($config);
	// Because we're are using just once Blog\db\connect
	if (!$conn ) die ('Problem  connecting with the db.');

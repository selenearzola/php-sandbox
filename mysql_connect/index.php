<?php 
	include 'config.php';
	/*Controller*/
	require 'functions.php';
	$conn = connect(
		$config['DB_HOST'], 
		$config['DB_USERNAME'],
		$config['DB_PASSWORD'], 
		$config['DB_DATABASE']
		);
	
	/**/
	$results = query('SELECT * FROM users ORDER BY username asc', $conn);
	require 'index.view.php';



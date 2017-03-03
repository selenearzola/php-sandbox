<?php

	require 'functions.php';

	$conn = connect($config);

	if ( $conn){
		$rows = query(
			"SELECT * FROM users WHERE id = :id "
			,array('id' => 1),
			$conn
			);

	}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<title></title>
			<meta name="description" content="">
			<meta name="author" content="">
			<!--[if lt IE 9]>
				<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
	</head>
	<body>
		<?
			if($rows){
				print_r($rows);
			}else{
				echo 'No rows returned.';
			}
		?>	

	</body>
</html>

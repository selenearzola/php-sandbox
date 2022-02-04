<?php

require 'functions.php';

$conn = connect($config);

if ($conn) {
	$rows = query(
		"SELECT * FROM users WHERE id = :id ",
		array('id' => 1),
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

</head>

<body>
	<?
	if ($rows) {

		print_r($rows);
	} else {
		echo 'No rows returned.';
	}
	?>

</body>

</html>
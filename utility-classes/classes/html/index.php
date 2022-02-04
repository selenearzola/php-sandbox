<?php
require "html.php";
?>


<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>HTML utilities class</title>
	<meta name="description" content="">
	<meta name="author" content="">

</head>

<body>
	<?= HTML::link("about/index.php", "About us") ?>
	<?= HTML::items(['Candida Clementina', 'Radomír Seraphina', 'Eustaquio Skadi', 'Svetovid Roland'])) ?>
	<br>	
	<?= HTML::image('https://randomuser.me/api/portraits/women/16.jpg', 'Candida Clementina') ?>	
	<br>	
	<?= HTML::script(array('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')) ?>
</body>

</html>
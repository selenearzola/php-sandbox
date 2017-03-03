<?php
	require "html.php";
?>


	<!doctype html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
				<title>Html class utilities</title>
				<meta name="description" content="">
				<meta name="author" content="">
				<!--[if lt IE 9]>
					<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
				<![endif]-->
		</head>
		<body>

			<?= HTML::link("about/index.php","About us")?>			
			<?= HTML::items(array('Selene','Juanito','Ana','Judas'))?>
			<br>
			<?= HTML::image('http://dasser.mx/img/Dasser01.jpg', 'Selene')?>
			<br>
			<?= HTML::script(array('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'))?>

			
	
		</body>
	</html>
	



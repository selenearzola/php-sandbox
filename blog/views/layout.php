<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<title>Posts</title>
			<meta name="description" content="">
			<meta name="author" content="">
			<!--[if lt IE 9]>
				<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
	<style>

	/*External file*/

	.container{
		width: 600px;
		margin: auto;
	}
	form ul{
		padding: 0;
	}

	form li {
		list-style: none;
	}

	form input [type=text], form textarea{
		margin-bottom: 1.5em; 
		width:100%;
	}

	form textarea {
		height: 300px;
	}

	label{
		display: block;
	}
	</style>
	</head>
	<body>
		
		<div class="container">
			<?php include ($path); ?>			
		</div>
		

	</body>
</html>

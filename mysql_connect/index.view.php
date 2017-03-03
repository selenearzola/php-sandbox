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
		<?php
		if ( $results){
			/* If they were results*/
			foreach ($results as $row) {
			# code...
			echo $row->username. '<br>';
		}
	}else{
		echo 'No rows returned';
		}
	?>
		

	</body>
</html>
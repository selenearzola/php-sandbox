<?php 

require  'functions.php';

//use Blog\DB;

/* Using alias, and then we write database instead of 'DB\' it makes more readable*/


use Blog\DB as Database; 

/*$conn = DB\connect($config);*/
$conn = Database\connect($config);

if ( $conn ){
	$users = Database\retrieve_Information('users', $conn);
}else die('Could not connect');

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<title>PDO</title>
			<meta name="description" content="">
			<meta name="author" content="">
			<!--[if lt IE 9]>
				<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
	</head>
	<body>
		<?php
			if( $users){
				foreach ($users as $user ) {
				# code...
				echo "<li>{$user['username']}</li>";
			}
		}else{
			echo 'No rows returned.';
		}
		?>

	</body>
</html>


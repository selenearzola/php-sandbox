<!doctype html>
<html>
<head>
	<title>Mailing List</title>
</head>
<body>
	<!-- NEEDS TO BE LOCKED DOWN -->
	<h1>Folks on your mailing list</h1>
	<?php
		if ( $registered_users){
			foreach ($registered_users as $user) {
				# code...
				 list($name, $email) = $user;
				 echo "<li> $name: <a href='mailto:$email'> $email </a></li>";
			}
		}else{
			echo "<li>No registered users</li>"; 
		}
	?>

</body>
</html>
<?php 

	
	// if ( !empty ($_POST)){
	// 	print_r($_POST);
	// }

	if ( $_SERVER['REQUEST_METHOD'] == "POST" ){
		//print_r($_POST);
		if ( mail ('selene.arzola@gmail.com' , 'New Website Message', $_POST['message'])){
			$status = 'Thank you for your message';
		}else{
			echo 'ERORR';
		}
	}


?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Super Globals Post</title>
	<link rel="stylesheet" href="css/style.css">
	<meta name="description" content="Super Globals">
	<meta name="author" content="">
	<link rel="stylesheet" href="css/styles.css?v=1.0">
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
	<h1>Contact Form</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="">Name:</label>
				<input type="text" name="name" id="name">
			</li>
			
			<li>
				<label for="">Email:</label>
				<input type="text" name="email" id="email">
			</li>
			<label for="">Message</label>
			<br>
			<textarea name="message" id="message"></textarea>

			<li>
				<input type="submit" value="Go!">
			</li>
		</ul>
	</form>
	<?php  if ( isset($status)) echo $status; ?>

	

</body>
</html>
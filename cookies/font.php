<?php

	if(  $_SERVER['REQUEST_METHOD'] == 'POST'){
		setcookie('fontSize' , (int) $_POST['font-size'], time() + 60 * 30);
		header('Location: font.php');
	}

	//  aNOTHER WAY TO DO IT
	// if ( isset($_POST['font-size']) ){
	// 	$font_size = $_POST['font-size'];
	// 	} else if( isset($_COOKIE['fontSize']) ){
	// 		$font_size = $_COOKIE['fontSize'];
	// 	}else{
	// 		$font_size = 16;
	// 	}
	$font_size = isset($_COOKIE['fontSize']) ?  $_COOKIE['fontSize'] . 'px' :   '16px' ;

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<title></title>
			<style>
			body{
				/*font-size: <?php echo htmlspecialchars($font_size); ?>*/
				font-size: <?php echo htmlspecialchars($font_size) .  ';'  ; ?>
			}
			form ul {
				margin: 0;
				padding: 0;
			}

			form li {
				list-style: none;
				margin-bottom: 1em;
			}



			</style>
			<meta name="description" content="">
			<meta name="author" content="">
			<!--[if lt IE 9]>
				<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
	</head>
	<body>
		<form action="" method="post">
			<ul>
				<li>
					<label for="font-size">Your Preferred Size?</label>
					<br>
					<select name="font-size" id="font-size">
						<option value="10">10</option>
						<option value="20">20</option>
						<option value="30">30</option>
						<option value="40">40</option>
					</select>
				</li>
				<li>
					<input type="submit" name="submit" value="Submit">
				</li>
			</ul>
		</form>

		<h2>My pretty Page</h2>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing 
		elit. 
		Quasi eum, esse ut, tenetur aperiam animi architecto 
		nisi voluptas vitae voluptates asperiores est ea 
		possimus similique culpa praesentium accusamus, 
		velit sunt, sit dolor. 
		Magnam consectetur dicta deleniti asperiores, 
		magni ipsum
		maxime? Quae laudantium similique est aperiam enim, 
		voluptatem id voluptas perspiciatis.
		</p>
	</body>
</html>

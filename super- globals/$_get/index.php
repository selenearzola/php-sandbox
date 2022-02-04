<?php

// $_GET :  To fetch information/data from the query string
//  All that comes after the ? (question mark). Called
//  key values e.g  name = 'Selene' .
// 	 	
//$name = $_GET

?>


<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Super Globals</title>
	<meta name="description" content="Super Globals">
	<meta name="author" content="">
	<link rel="stylesheet" href="css/styles.css?v=1.0">
</head>

<body>
	<h1>Super Globals</h1>
	<?php

	if (isset($_GET['id'])) {

		// With htmlspecialchars we're trying to avoid html insertation by the query string. if it's inserted we are going to show as html entities e.g: '&apos;'

		echo htmlspecialchars($_GET['id']);
	} else {
		echo 'Redirect somewhere';
	}
	?>
	<a href="about.php?name=''Selene">About</a>
</body>

</html>
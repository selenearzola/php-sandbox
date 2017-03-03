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
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
	<h1>About</h1>
	<p>I'm getting this information:</p>

	<!-- Using  $_GET -->
	<?php echo htmlspecialchars($_GET['name']); ?>
	
	<!-- Simple transfers information that is completely safe and 
	        i'snt in any way  changing the request data you use 
	        GET.
	        Use  $_GET for fetching data dont ever used to send 
	        information to update  a database, it's just for retriving 
	        and displaying information that never changes, 
	        information thta it's safe.  
	-->


	
</body>
</html>
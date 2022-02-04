<?php

// 1.- Create/set a cookie (without an expiration date)
// min * 30 equals 30 min.

// setcookie('fontSize', 25, time() + 60 * 30);
// setcookie('fontColor','#FF8080');

//2.- Access to the cookie value
// echo $_COOKIE['fontSize'];

// We're not allow to acess to the cookie value right away, until we reload the page.

// 3.- Delete a cookie, you have to set the time in the past for do it

// setcookie('fontSize', 25, time() - 60 * 30);
// setcookie('fontColor', 25, time() - 60 * 30);

// 4.- Fourth parameter if you want your cookie to be avaible on your entire site you use '/' , but if you want it for an specific section e.g '/admin'

// setcookie('fontSize', 25, time() - 60 * 30, '/ ');

// 5.- Fifth parameter it refres to the domain.

// If you want to restricted  to only www domains
// you can use: www.example.com
// Remember that it exist domains with www2, www3.
// setcookie('fontSize', 25, time() - 60 * 30, '/ ', 'example.com');

// Saving user preferences into an array.

// setcookie('prefs[fontSize]', 25);
// setcookie('prefs[favoriteCategory]', 25);
// setcookie('prefs[screenWidth]', '1024');

?>

<!doctype html>
<html lang="en">

<head>
	<style>
		body {
			font-size: <?php echo $_COOKIE['fontSize'] ?>;
			color: <?php echo $_COOKIE['fontColor'] ?>;
		}
	</style>
	<meta charset="utf-8">
	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">

</head>

<body>
	<h1>Hello Selene!</h1>
	<p>Don't you love PPH</p>
	<?php
	if (isset($_COOKIE['prefs'])) {

		foreach ($_COOKIE['prefs'] as $key => $value) {

			echo '<li>' . htmlspecialchars($key) . ':' . htmlspecialchars($val) . '</li>';
		}
	}
	?>


</body>

</html>
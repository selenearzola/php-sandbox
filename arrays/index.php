<?php

// Some tips about printing/showing information in PHP:
// When to use:
// echo: simple strings
// var_dump: objects or arrays
// print_r: arrays, sometimes it's more readable than var_dump

// Creating a simple array:
$sites  =  ['nettuts+', 'psdtuts+', 'webdesingtuts+', 'wptuts+'];

// Creating an associative array: key => value
$tuts_sites = [
	'nettuts' => 'http://net.tutsplus.com',
	'psdtuts' => 'http://psd.tutsplus.com',
	'wptuts' => 'http://wp.tutsplus.com'
];

// PHP Tip: Think that a functions it's a bit of code that can be abstract away for reuse.
// Adding and  deleting items from an array, after it's compiled using:
$months = ['jan', 'feb', 'mar', 'april', 'may'];

foreach ($months as $name) {

	echo "<li>" . ucwords($name) . "</li>";
}

// array_push: Accepts two parameters (variables, values) and array name.
array_push($months, 'june');

// Rather than use array_push we can  do in this way too (this is most comun but it's not the best practice):
$months[] = 'july';

// Removing an item from an array using array_pop: remove
// the last item from an array. 
$removedMonth = array_pop($months);

// PHP Tip: you can store the value of the item that you add or remove using a variable e.g.
echo $removedMonth . "<br>";

// Removing the first item from an array using array_shift
array_shift($months);

// Using array_unshift for adding a item at the begining of an array.
// aceppts two params which are $array_name and $value, to insert.
array_unshift($months, 'jan');

// print_r($months);

// Using array_slice to return an array values starting from a item position. It takes two params $array_name and starting position.
// Also we store that values into a variable e.g
$output = array_slice($months, 2);

// There's an optional param in array_slice, and it's the ending
// of the selection position on the array e.g.
$output = array_slice($months, 1, 2);

//Using array_filter it takes two params $array_name, callback function returns true if the item exist, and returns false remove from the array.
$three = array_filter($months, function ($month_item) {

	return strlen($month_item) == 3;
});

// PHP function strlen() returns the lenght of a string/value
print_r($three);

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Arrays</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="">

</head>

<body>
	<h1>Tuts+ Sites</h1>
	<?php

	// 1.- Simple way to print using a foreach

	foreach ($tuts_sites as $site) {

		echo "<li>$site</li>";
	}

	// 2.- Using foreach key => value (associative array)
	foreach ($tutsSites as $name => $url) {

		// PHP Tip: ucwords functions it's use it for for capitalization.
		echo "<li><a href='$url'>" . ucwords($name) . "+</a></li>";
	}

	//	3.- Using a foreach in a "separate way"
	//	foreach ($tutsSites as $name => $url) :
	//	 php endforeach

	?>

	<!-- <li>
		<a href="<?php echo $url ?>"><?php echo ucwords($name) ?></a>
	</li> -->

</body>

</html>
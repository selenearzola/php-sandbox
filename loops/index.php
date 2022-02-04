<?php

// foreach loop it's used for objects, array also it's the most comun, readable.

// Creating a simple array
$arr = ['Ume Ahmad', 'Karola Chandra', 'Cadmus Ruarcc', 'Tsholofelo Anneli'];

// Displaying  the array
foreach ($arr as $name) {

	echo $name;
}

// Creating an associative array
$positions = [
	'designer' => 'Tsholofelo Anneli',
	'instructor' => 'Cadmus Ruarcc',
	'manager' => 'Karola Chandra',
	'ceo' => 'Ume Ahmad'
];


// Displaying the associative array
foreach ($positions as $title => $name) {

	echo "<li><strong>" . ucwords($title) . "</strong> - $name</li>";
}

// for loop we specify how many times to run the loop also we can use it for loop an array. e.g
for ($i = 0; $i < count($positions); $i++) {

	echo "<li>$arr[$i]</li>";
}

// $i (iterator): It's going to show us the array item just like this.
// $positions[0] = Tsholofelo Anneli
// $positions[1] = Cadmus Ruarcc
// $positions[2] = Karola Chandra
// $positions[3] = Ume Ahmad

// while loop: it's an excellent when you are fetching rows from a data base
// Always declare $i (iterator) outside the while loop.

$i = 0;

while ($i < 10) {

	echo "<li>$positions[$i]</li>";
}

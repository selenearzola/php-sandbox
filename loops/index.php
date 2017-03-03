<?php

	
	// foreach loop it's used for objects, array 
	// also it's the most comun, readable.
	//
	
	// Creating a simple array
	$arr = array('Selene', 'Jeffrey', 'Tomas', 'Mateo');

	//Displaying  the array
		foreach ($arr as $name){
			//echo $name;
		}

	//Creating an associative array
	$aarra = array(
		'ceo' => 'Selene',
		'manager' => 'Jeffrey',
		'instructor' => 'Tomas',
		'designer' => 'Mateo'
		);
	//Displaying the associative array
	foreach ($aarra as $title =>$name){
		//echo "<li><strong>".ucwords($title)."</strong> - $name</li>";
	}

	// for loop we specify how many times to run the loop
	//also we can use it for loop an array. e.g
	//
	
	for( $i = 0; $i <count($arr); $i++ ){
		//echo "<li>$arr[$i]</li>";
	}

	// $i  (iterator): It's going to show us the array item
	//  just like this.
	//  $array_name[0] = Selene
	//  $array_name[1] = Jeffrey
	//  $array_name[2] = Tomas
	//  $array_name[3] = Mateo
	
	
	// while loop: it's  excellent when you are fetching rows 
	// from a data base
	

	// Always declare $i (iterator) outside the while loop.
	
	$i = 0; 

	while ($i <10){
		echo "<li>$arr[$i]</li>";
	} 



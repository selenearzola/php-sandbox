<?php

/*This is the intensive way to do this */

function set_count($file_name = 'counter.txt')
{

	// Firstable we ensure if the file exist, if exist we just read it and add information if not exist we create and add information

	if (file_exists($file_name)) {

		// Step 1: Read the value 'r' : Open for reading only; place the file pointer at the beginning of the file.
		$handle = fopen($file_name, 'r');

		// Step 2 : Increment by one
		$count = (int) fread($handle, 20) + 1;

		// Step 3: Write the new value 'w' : Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. 
		// If the file does not exist, attempt to create it.

		$handle = fopen($file_name, 'w');
		fwrite($handle, $count);

		// Step 4: Close file
		fclose($handle);
	} else {

		// Step 1: Create the file 'w+' : Open for reading and writing; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
		$handle = fopen($file_name, 'w+');
		$count = 1;

		// Step 2: Set a default value of 1 (count)
		fwrite($handle, $count);

		// Step 3: Close file
		fclose($handle);
	}

	return $count;
}


function set_count($file_name = 'counter.txt')
{

	// Firstable we ensure if the file exist, if exist we just read it and add information if not exist we create and add information 

	if (file_exists($file_name)) {

		$count =  (int) file_get_contents($file_name) + 1;
		file_put_contents($file_name, $count);

		$handle = fopen($file_name, 'w');
		fwrite($handle, $count);

		fclose($handle);
	} else {


		// 	Step 1: Create the file 'w+' : Open for reading and writing; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.

		$handle = fopen($file_name, 'w+');
		$count = 1;

		// Step 2: Set a default value of 1 (count)

		fwrite($handle, $count);

		// Step 3: Close file
		fclose($handle);
	}

	return $count;
}

$count = set_count();
require 'index.tmpl.php';

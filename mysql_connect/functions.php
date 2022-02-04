<?php

/*
|----------------------------------------------------------------------------------------------------------------
	USING THE OLD mysql_connect API ANTI-PATTERNS! ONLY FOR REFERENCE
|---------------------------------------------------------------------------------------------------------------- 
*/

// 1.-Connect to a database params: host, username, password
$conn = mysql_connect('localhost', 'root', 'selenearzola') or die('Could not connect');

// 2.- Selecting the database, it's a good practice to pass the reference of the db connection, mysql_select_db will do automatically, but we can be explicit
mysql_select_db('blog', $conn);

// 3.- Creating a query
$results = mysql_query('SELECT  *  FROM  users');

// 4.-  We run a while statement to show the results

while ($row = mysql_fetch_object($results)) {

	//print_r($row);

	echo $row->username . "<br>";
}


// We set db to an empty string that means that it will be optional to enter a database name

function connect($host, $username, $password, $db = '')
{
	$conn = mysql_connect($host, $username, $password);

	if (!$conn) die('Could not connect');

	// If the user wants to select the database	
	if (!empty($db)) {

		mysql_select_db($db, $conn);
	}

	return $conn;
}

function query($query, $conn)
{
	$results = mysql_query($query, $conn);

	if ($results) {

		// We store the information into an array

		$rows = [];

		while ($row = mysql_fetch_object($results)) {

			// We populate the array
			$rows[] = $row;
		}

		return $rows;
	}
	return false;
}

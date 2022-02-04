<?php

/*
 |----------------------------------------------------------------------------------------------------------------
 	REGULAR FUNCTIONS
 |---------------------------------------------------------------------------------------------------------------- 
 */

function view($path, $data = null)
{

	if ($data) {
		extract($data);
	}

	// We can ensure that the user has specified a path

	$path = $path . '.view.php';
	include "views/layout.php";
}

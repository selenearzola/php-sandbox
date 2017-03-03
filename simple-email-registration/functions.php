<?php

	// $_SERVER['DOCUMENT_ROOT'] it starts from  the main folder inthis case
	// htdocs and then goes to sandbox and search for mailin_list.php

	define(MAILING_LIST, $_SERVER['DOCUMENT_ROOT'] . '/sandbox/mailing_list.php');



	
	/*
	|----------------------------------------------------------------------------------------------------------------
		Add a new item to the registered users list.
	|---------------------------------------------------------------------------------------------------------------- 
	*/



	function add_registered_user( $name, $email){
		# Really important: Secure file
		// Optional third parameter to fileput content, how show be
		
		//  FILE_APPEND  indicates than rather to overwrite the entire file
		//  with the new record,  we're going to append the new record 
		//  next to that the record that was already stored. 
		//  	
		file_put_contents(MAILING_LIST, "$name: $email\n", FILE_APPEND);

	}


	/*
	|----------------------------------------------------------------------------------------------------------------
		Returns an array of all registered users
	|---------------------------------------------------------------------------------------------------------------- 
	*/

	function get_registered_users( $path =MAILING_LIST){
		
		$users = file($path);

		// If there's a single username, we create a  php
		// callback function

		if ( count($users) ){

			// We return an array_map wich contains
			// all the users mail list information.
			// 
			// Then we explode it, by adding a ":" to separate
			//  username from email address. Also we're using
			//  htmlspecialchars to avoid the html injection.
			//  
			return array_map(function($user){
				return  explode(' : ',  htmlspecialchars($user));
			}, $users);
		}

		return false;

	}



	/*
	|----------------------------------------------------------------------------------------------------------------
		Preserve form state
	|---------------------------------------------------------------------------------------------------------------- 
	*/
	function old($key){
		# $_REQUEST It means that can be $_POST or $_GET
		if( !empty($_REQUEST[$key]) ) {
			return  htmlspecialchars($_REQUEST[$key]);
		}
		return '';
	}



	/*
	|----------------------------------------------------------------------------------------------------------------
		Determines whether an email address is valid.
	|---------------------------------------------------------------------------------------------------------------- 
	*/


	function valid_email ($email){
		// Returns true: If the email it passes the validation.
		// Returns false: If the email doesn't pass the validation.
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}



	
	
<?php

	// CONDITIONALS
	// A conditional requires a text.

	//  Php tips: 
	//  Here we assing the value of  January to the variable month.
	//$month = 'January';

	// And here we are running a test, does month equal to January?
	//$month == 'January';

	
	//  Php tip: else statement, you dont require a else only if you need it
	//  
	

	//$month = 'Hello';

	// if($month == 'January'){
	// 	echo 'It does';
	// }else{
	// 	echo 'Not the right month';
	// }
	// 
	 
		 // Using === we verify that it's not an empty var 
		 // and also that the data type  equals to the month 
		 // var value. In this case if we want to pass the test,
		 //  month should be equal to true.
	 
		 // Php tip: if statement doesn'nt makes difference
		 // about lowercase and uppercase. 	   
		 //  Truly and falsy values

	if($month === true){
		echo 'It does';
	}else{
		//echo 'Not the right month';
	}

	// Php tip: 
	// != not equal
	//  You can use only two else statements
	
	// $month = ''; 


	// switch ($month) {
	//         	case 'Hello':
	//         		# code...
	//         		echo "It's says hello";
	//         		break;
	//         	case 'Good bye':
	//         		#code
	//         		echo "It's says good bye";
	//         		break;
	        	
	//         	default:
	//         		# code...
	//         		echo "I'm waiting for something";
	//         		break;
	//         } 
	

	 // Creating a look up, useful when you only want to
	 // execute one thing.
	 //
	 
	 $month   = "January";
	 $months  = array(
	 	'January'  => "It's Jan!",
	 	'February' => "It's Feb!",
	 	'March'      => "It's Mar!"
	 	);

	 //     echo $months[$month];  
	 // It's the same if we were doing echo $months['January'];
	 //  We are passing the key that we need.
	   
	 // Using  the operator AND, if one statement it's true
	 // the second one never runs.	

	 // if ($month !== 'May' && $month !=='June'){
	 // 	echo 'Is not May or June';
	 // }else{
	 // 	echo "It's one of those.";
	 // } 

	 // Using the operator OR, the left side can be true or the left side 
	 // can be true.
	 // 
	 
	 if( $month == 'May' || $month == 'June'){
	 	echo 'Is May or June';
	 }else{
	 	echo 'It is not one of those.';
	 }
	 
	   
	                           


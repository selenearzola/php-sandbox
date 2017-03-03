<?php namespace Blog\DB;
	include 'config.php';


function connect($config){

	try{
		/* When you want to use a route or a global class '\' means started the route*/
		$conn = new \PDO (
			"mysql:host=localhost;
			dbname=practice",
			$config['DB_USERNAME'],
			$config['DB_PASSWORD']
			);
		$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

		return $conn;

	}catch(Exception $e){
		
		return false;
	}
}


function query($query, $bindings, $conn){
	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);
	$results =  $stmt->fetchAll();
	return $results ? $results : false;

}

function retrieve_Information($tableName, $conn){
	try{
		$result = $conn->query("SELECT * FROM  $tableName");

		return ( $result->rowCount() > 0) ? $result: false;


	}catch(Exception $e){
		return false;
	}
}
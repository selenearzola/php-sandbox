<?php namespace Blog\db;
	
	require 'config.php';



	function connect ($config){

		try{
			$conn = new \PDO ('mysql:host=localhost;
				dbname='. $config['dbname'],
				$config['username'],
				$config['password']
				);
			$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			return $conn;
		} catch(Exception $e){
			return false;
		}
	}


	function get_posts($tableName, $conn, $limit =10){
		try{
			$results = $conn->query("SELECT * FROM $tableName  ORDER BY id DESC LIMIT $limit");
			return ( $results->rowCount() > 0)
			? $results
			: false;
		}catch(Exception $e){
			return false;
		}

	}

	function query($query, $bindings, $conn){

		$stmt = $conn->prepare($query);
		$stmt->execute($bindings);
		return ($stmt->rowCount() > 0) ? $stmt : false;
		
	}

	function get_by_id($conn, $id){
		$query = query (
			"SELECT  * FROM posts WHERE id = :id LIMIT 1",
			array('id' =>$id), $conn
		);

		if( $query){
			return $query->fetchAll();
		} 
		//else
	}


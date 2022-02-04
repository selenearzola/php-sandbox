<?php

require 'config.php';

$letter = "S";

try {

	// what database are we using?
	$conn = new PDO("mysql:host=localhost;dbname=practice", $config['DB_USERNAME'], $config['DB_PASSWORD']);

	// PDO::ATTRERRORMODE to display any error in the process

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// Fetch information from a database
	$stmt = $conn->prepare('SELECT * FROM users WHERE  username LIKE :letter');
	$stmt->setFetchMode(PDO::FETCH_OBJ);
	$stmt->execute(['letter' => $letter . '%']);

	// Using bindParam for an specifiy value params: placeholder, $variableWhoContainsTheValueToSearch, type
	// $stmt->bindParam(':letter', $letter, PDO::PARAM_STR);
	// $stmt->execute();

	while ($row = $stmt->fetch()) {

		print_r($row);
	}
} catch (PDOException $e) {
	echo 'ERROR' . $e->getMessage();
}

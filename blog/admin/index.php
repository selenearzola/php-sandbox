<?php

require '../blog.php';
$data = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$title = $_POST['title'];
	$body = $_POST['body'];

	if (empty($title) || empty($body)) {

		$data['status'] = "Please fill out both inputs";
	} else {

		// Create a new row.

		Blog\db\query(
			"INSERT INTO  posts (title, body) VALUES(:title, :body)",
			['title' => $title, 'body' => $body],
			$conn
		);

		$data['status'] = "Row has succesfully inserted.";
	}
} else {

	$status = "";
}

view('admin/create', $data);

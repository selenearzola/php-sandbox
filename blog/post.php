<?php

require 'blog.php';

use Blog\db;

$post = db\get_by_id($conn, (int) $_GET['id']);

if ($post) {

	$post = $post[0];
	view('post', ['post' => $post]);
} else {
	header('location:index.php');
}

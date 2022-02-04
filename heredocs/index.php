<?php

$post = [
	'author' => 'Candida Clementina',
	'body' => 'Here is the content',
	'publish-date' => '05-07-2014',
	'title' => 'My awesome Post'
];

// Heredocs: specially when preparer html or sql statements
// at the view.

// We're using EOT, but we can use another name
// reference. It's just an identifier

$email = <<<EOT
<h1>{$post[title]}</h1>
<p>By: {$post[author]}</p>
<div>{$post['body']}</div>
EOT;

// PHP Tip: A PHP file cannot end with a heredoc
//echo $email;

// extract() it's use it when you want to build for e.g an email
// if you have an associative array, you can access to it's items
// like this:

extract($post);

$email = <<<EOT
<h1>$title</h1>
<p>By: $author</p>
<div>$body</div>
EOT;

echo $email;
echo $author; // body, title, publish-date

// Also it's a cleanest way to build or extract information, i mean
// use this rather than heredocs.
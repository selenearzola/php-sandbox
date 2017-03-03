<?php


	require_once "vendor/php-activerecord/php-activerecord/ActiveRecord.php";



	ActiveRecord\Config::initialize(function($cfg){
		$cfg->set_model_directory('models');
		$cfg->set_connections(array(
			'development' => 'mysql://root:@localhost/blog'));
	});


/*
|----------------------------------------------------------------------------------------------------------------
	ActiveRecord
|---------------------------------------------------------------------------------------------------------------- 
*/

	// Mostly we can sort our data using the names of the 
	// database fields. Exp:
	// Post::find_by_title('title name here');
	// Post::find_by_body('a body content here')
	// Post::find(id number here)
	// Post::all();

	// Creating a new record into the database table.
	// Post::create(array(
	// 	'title'    => 'Isnt\'t ActiveRecord great?',
	// 	'body' => 'Yes it is'
	// 	));
	// 	

	// Updating a row
	// 
	//$post = Post::find(12);
	//$post->title = 'Updates the row. Very Cool';
	//$post->save();
?>


<!-- <!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<title>Composer and ActiveRecord example</title>
			<meta name="description" content="">
			<meta name="author" content="">
			[if lt IE 9]>
				<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]
	</head>
	<body>
		<?php foreach($posts as $p) :?>
		<article>
			<h2><?= $p->title?></h2>
			<div class="body"><?= $p->body; ?></div>
		</article>
	<?php endforeach; ?>

	</body>
</html>
 -->



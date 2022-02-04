<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Email Registration</title>
	<link rel="stylesheet" href="css/style.css">
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="">
	<link rel="stylesheet" href="css/style.css?v=1.0">
</head>

<body>
	<h1>Join the Mailing List</h1>
	<form action="" method="post">
		<?php if (isset($status)) : ?>
			<p class="notice">
				<?php echo $status ?>
			</p>
		<?php endif; ?>
		<ul>
			<li>
				<label for="name">Your name:</label>
				<input type="text" name="name" value="<?php echo old('name'); ?>">
			</li>

			<li>
				<label for="email">Your Email Address</label>
				<input type="text" name="email" value="<?php echo old('name'); ?>">
			</li>

			<li>
				<input type="submit" value="Sign Up!">
			</li>
		</ul>
	</form>

</body>

</html>
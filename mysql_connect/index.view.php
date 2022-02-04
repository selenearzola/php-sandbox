<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">

</head>

<body>
	<?php
	if ($results) {

		// If they were results

		foreach ($results as $row) {

			echo $row->username . '<br>';
		}
	} else {

		echo 'No rows returned';
	}
	?>


</body>

</html>
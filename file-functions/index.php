<?php

$images = glob('img/*.{jpg}', GLOB_BRACE);

foreach ($images as $img) {

	echo substr($img, -3);
	echo "\r";

	$info = pathinfo($img);
	echo $info['filename'];
	echo "\r";

	extract(pathinfo($img));
	echo $filename . "\n";

	echo pathinfo($img, PATHINFO_FILENAME);
	echo "\n";
	echo pathinfo($img, PATHINFO_EXTENSION);
	echo "\n";
}

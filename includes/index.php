<?php

// The difference between require and include is: Include, we get a warning message, it's more like yes i'd like to include this file and with require it's like okay i really need this file. Require is going to thrown a fatal error, because the functionality  of the app depends of  that file.
// require_once : it's not recommended to use it, for  the other hand it only says i want to include this file once, you can't include twice in the same file.

include 'header.php';

?>

<div class="container">
	<p>Main Content</p>
</div>
<?php
include 'footer.php';
?>
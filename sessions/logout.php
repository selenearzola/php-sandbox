<?php

session_start();

// Then
session_destroy();

$_SESSION = [];

// Delete the cookie.	

header("Location: login.php");

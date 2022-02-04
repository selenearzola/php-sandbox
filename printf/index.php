<?php


// 1.- printf : prints information into the screen,  we're able to format it and bind values. Use it for existing variables.

// 2.- sprintf : it does the same as printf but this one assigns to a variable rather than print it into the screen.
$posted = sprintf("This posted was made on %s %s, %d", 'June', '7th', '2012');
echo $posted;

// 3.- sscanf : we provide a string and we parse into variables. Use it for dynamic variables.

list($month, $day, $year) = sscanf("June 7th, 2012", "%s %[^,], %d");
echo $year;

// We're assigning the array values into the list vars
list($name, $age) = array('Candida Clementina', 24);
echo $age;


// We're assigning the values of the string to eah variable
sscanf("June 7th, 2012", "%s %[^,], %d", $month, $day, $year);
echo $day;

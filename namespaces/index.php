<?php

namespace App\DB;

require 'functions.php';

// Using the Use keyword: To use it we have to supply the subnamespace
// echo App\DB\connect();

// Just because the above code it's king of  modly, that's we're calling again the namespace just for make a reference of it's method's.
// echo connect();

// And if we use the keyword "Use' we have to provide the sub folder name (subnamespace) to make a reference to it's methods

use App\DB;

echo DB\connect();

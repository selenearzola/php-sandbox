<?php

require "file.php";

// Testing File static functions (methods)

// FILE EXISTS:
echo File::exists('my-file.txt') ? 'file exists' : 'file does not exists';

// FILE SIZE:
echo File::size('my-file.txt');

// FILE:NAME
echo File::name('my-file.txt');

// FILE:EXTENSION
echo File::extension('my-file.txt');

// FILE:DELETE
echo File::delete('my-file.txt');

// FILE:LAST_TIME_UPDATED
echo File::last_updated('my-file.txt');

// FILE:GET FILE
echo File::get('my-file2.txt', 'Thi is de default value');

// PHP_ENO: Means PHP_EndOfLine
// FILE: WRITE an append content, we use a flag for it.	
echo File::put('my-file.txt', ",i'm from Mexico." . PHP_EOL, true);

// FILE:APPEND we append a new text added directly, without using a flag like we did in put function. 
echo File::append("my-file.txt", "I'm 24 years old.");

// FILE: TRUNCATE, clears a file.
File::truncate('my-file.txt');

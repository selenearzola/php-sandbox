<?php

class File
{

	public static function exists($file)
	{
		return file_exists($file);
	}

	public static function size($file)
	{
		// PHP function
		return filesize($file);
	}

	public static function name($file)
	{
		// PHP function
		return pathinfo($file, PATHINFO_FILENAME);
	}

	public static function extension($file)
	{
		// PHP function
		return pathinfo($file, PATHINFO_EXTENSION);
	}

	public static function delete($file)
	{
		// PHP function
		return unlink($file);
	}

	public static function last_updated($file)
	{
		// PHP function
		return filemtime($file);
	}

	public static function get($file, $default)
	{

		return static::exists($file, $default) ? file_get_contents($file) :  $default;
	}

	public static function put($file, $data, $append = false)
	{
		if ($append) {

			// The FILE_APPEND it's a param flag to specify if the user choose  to append the "new" inserted text into the file that already exists.

			// The LOCK_EX param allows to read the file one at time.		
			return file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
		}
		return file_put_contents($file, $data);
	}

	// This a function to append "new added text" directly into a file without using a flag like we did un the put method.
	public static function append($file, $data)
	{
		return static::put($file, $data, true);
	}

	public static function truncate($file)
	{
		if (static::exists($file)) {

			$fp = fopen($file, 'w');
			fclose($fp);
		}
	}

	// Implement copy and move.
}

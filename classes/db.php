<?php

namespace App;

class Database
{

	protected $conn;
	protected $table;

	public function __construct()
	{
		//Conect to the database
		$this->conn = 'connected';
	}

	public function set_table($table)
	{
		$this->tabel = $table;
	}

	public function insert()
	{
		return 'inserted rows';
	}

	public function get($limit = 10)
	{
		return 'got the rows from the  ' . $this->table . ' table';
	}

	public function where($key, $value)
	{
		return "Return where $key equals $value.";
	}
}


$db = new Database();
$db->set_table('users');
$rows = $db->get(5);
echo $rows;

<?php

require_once '../config.php';

class Database
{
	protected $db;
	function __construct()
	{
		$this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$this->set_charset("utf8");
	}
}

?>
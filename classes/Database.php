<?php

class Database{
	// private $db_host;
	// private $db_user;
	// private $db_password;
	// private $db_database;
	private $db;

	function conDb($host,$user,$password,$database){
		 $this->db = mysqli_connect($host,$user,$password,$database);
		if (mysqli_connect_errno())
		  {
		  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
  return $this->db;

	}
}
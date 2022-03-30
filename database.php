<?php

define('HOST', 'localhost');
// database user
define('USER', 'root');
// user password
define('PASSWORD', '');
// database localhost name
define('DATABASE', 'thinkpositive');

function DB()
{
	try{
		$db = new PDO('mysql:host='.HOST.';dbname='.DATABASE.'',USER,PASSWORD);
		return $db;
	}catch(PDOException $e){
		return "Error: " .$e->getMessage();
		die();
	}
}




?>
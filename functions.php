<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require("database.php");

class Application{

	public function registerAdmin($email, $password,$username){

		

	}


	public function loginAdmin($email, $password){

	}

	public function contactUs($username, $email,$subject,$msg){

		$dbs = DB();

		$stmt = $dbs->prepare("INSERT INTO contact(username, email,subject, message) 
			VALUES(?,?,?,?)");
		$stmt->execute([$username, $email,$subject,$msg]);
		$inserted = $stmt->rowCount();
		if ($inserted>0) {
			return true;
		}else {
			return false;
		}

	}


	public function createBlog($title, $blog_date, $content,$blog_image){

	}







}


?>
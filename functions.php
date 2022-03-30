<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require("database.php");

class Business{

	function testInput($data)
	{

		$data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
	}

	public function registerAdmin($email, $password,$password2,$username)
	{

			$dbh = DB();

			$validated_email = filter_var($email,FILTER_VALIDATE_EMAIL);
			

			if (strlen($password)<6) {
				echo '<div class="alert alert-danger" role="alert">Password too short</div>';
			}else if ($password != $password2) {
				echo '<div class="alert alert-danger" role="alert">Password does not match</div>';
			}elseif(!$validated_email){
				echo '<div class="alert alert-danger" role="alert">Invalid Email</div>';

			}

			else{
				$verified = "No";
				$hashed = password_hash($password,PASSWORD_BCRYPT);
				$stmt = $dbh->prepare("INSERT INTO admin(email,username,password,verified) VALUES(?,?,?,?)");
				$stmt->execute([$validated_email,$username,$hashed,$verified]);
				$inserted = $stmt->rowCount();
				if ($inserted>0) {
					return true;
				}else {
					return $dbh->errorInfo();
				}
			}

		

	}


	public function loginAdmin($username, $password)
	{
		$dbh = DB();
		$stmt = $dbh->prepare("SELECT * FROM admin WHERE username = ?");

		$stmt->execute([$username]);
		$data = $stmt->fetch(PDO::FETCH_ASSOC);

		$count = $stmt->rowCount();
		if ($count == 1) {
			
			if (password_verify($password, $data['password'])) {
				return $data;
			}else{
				return false;
			}
			
		}else{
			return false;
		}
	}

	public function contactUs($username, $email,$subject,$msg)
	{

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

	public function uploadProperty($name,$district,$price,$location,$size,$property_type,$file_name,$feature1,$feature2,$fetaure3,$feature4,
		$description)
	{

		$dbs = DB();

		$dir = "advert/images/";
		$file_name = $_FILES['photo']['name'];
		$file_size = $_FILES['photo']['size'];
		$file_type = $_FILES['photo']['type'];
		$file_tmp = $_FILES['photo']['tmp_name'];

		$test_file = $dir.basename($_FILES["photo"]["name"]);
		$file_ext = pathinfo($test_file, PATHINFO_EXTENSION);

		$extensions= array("jpeg","jpg","png","gif");

		if(in_array($file_ext,$extensions) === false){
		$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}

		// check if image already exist
		if (file_exists($file_name)) {
			$errors[]="file already exist";
		}

		// check for 2mb file
		if($file_size > 4097152) {
		$errors[]='File size must be exactly 2MB';
		}

		if (empty($errors)==true) {

			move_uploaded_file($file_tmp, "advert/images/".$file_name);

			$stmt = $dbs->prepare("INSERT INTO properties(title,district,price,venue,size,property_type,picture,feature_1,feature_2,feature_3,feature_4,description) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->execute(array($name,$district,$price,$location,$size,$property_type,$dir.$file_name,$feature1,$feature2,$fetaure3,$feature4,
		$description));
			$inserted = $stmt->rowCount();
			if($inserted>0){
				return true;
			}else {
				return false;
			}


			
		}


	}

	public function getProperties(){
		$dbh = DB();
		$stmt = $dbh->prepare("SELECT * FROM properties");
		$stmt->execute();
		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}

	public function propertyDetails($id)
	{
		$dbh = DB();
		$stmt = $dbh->prepare("SELECT * FROM properties WHERE id =?");
		$stmt->execute([$id]);
		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}


	







}


?>
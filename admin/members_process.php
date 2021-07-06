<?php

require("../functions.php");
$ch = new Church();

    $firstName = "";
    $lastName = "";
    $otherName = "";
    $residence = "";
    $mobile = "";
    $email = "";
    $emergency = "";
    $nationality = "";
    $address = "";
    $hometown = "";
    $job = "";
    $depart = "";
    $birth_day = "";
    $date_joined = "";
    $gender = "";
    $status = "";
    $child1 = "";
    $child2 = "";
    $child3 = "";
    $child4 = "";

    if (isset($_POST['first_name'])) {

        $firstName = $_POST['first_name'];
    }

    if (isset($_POST['last_name'])) {
        
        $lastName = trim($_POST['last_name']);

    }

    if (isset($_POST['other_name'])) {
        
    $otherName = trim($_POST['other_name']);
    }

    if (isset($_POST['residence'])) {
        $residence = trim($_POST['residence']);
    }

    if (isset($_POST['tel'])) {
        
    $mobile = trim($_POST['tel']);
    }

    if (isset($_POST['email'])) {
    $email = trim($_POST['email']);
        
    }

    if (isset($_POST['emergency'])) {
        $emergency = $_POST['emergency'];
    }

    if (isset($_POST['emergency'])) {
        
    $emergency = trim($_POST['emergency']);
    }

    if (isset($_POST['nation'])) {
        
    $nationality = trim($_POST['nation']);
    }

    if (isset($_POST['address'])) {
    $address= trim($_POST['address']);
    }

    if (isset($_POST['hometown'])) {
    $hometown = trim($_POST['hometown']);
    }

    if (isset($_POST['job'])) {
        $job = trim($_POST['job']);
    }

    if (isset($_POST['department'])) {
    $depart = trim($_POST['department']);
        
    }

    if (isset($_POST['birth'])) {
        
    $birth_day = trim($_POST['birth']);
    }

    if (isset($_POST['date_joined'])) {
        
    $date_joined = trim($_POST['date_joined']);
    }

    if (isset($_POST['gender'])) {
    $gender = trim($_POST['gender']);
        
    }

    if (isset($_POST['status'])) {
    $status = trim($_POST['status']);
    }

    if (isset($_POST['child1'])) {
        $child1 = trim($_POST['child1']);
        
    }

    if (isset($_POST['child2'])) {
    $child2 = trim($_POST['child2']);
        
    }

    if (isset($_POST['child3'])) {
    $child3 = trim($_POST['child3']);
        
    }

    if (isset($_POST['child4'])) {
    $child4 = trim($_POST['child4']);
        
    }

        

    if (!empty($firstName) || !empty($lastName) || !empty($otherName) || !empty($mobile) || !empty($email)
        || !empty($residence) || !empty($nationality) || !empty($address) || !empty($hometown) || !empty($job) || !empty($depart) || !empty($emergency)||!empty($birth_day) || !empty($date_joined) || !empty($gender) || !empty($status)) {


        // Generate random password for each user.
    	$characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    	$random_password = substr(str_shuffle($characters), 0,10);

      

            $registered = $ch->addMember($firstName,$lastName,$otherName,$residence,$mobile,$email,$nationality,$emergency,$address,$hometown,$depart,$job,$birth_day,$gender,$status,$random_password);
            if ($registered) {
                echo '<div class="alert alert-success" role="alert">Member Added</div>';

              // send password and login link to member using mail function
              // $send_link = $ch->sendEmail($email,$random_password);
              
            }else{
                echo '<div class="alert alert-warning" role="alert">An errror occured</div>';
            }
            
        
        
       
    }

            
        


          



?>
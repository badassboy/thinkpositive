<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require("../functions.php");
$ch = new Church();


  
  $group_name = "";
  $desription ="";

  if (isset($_POST['group_name'])) {
  	$group_name = $_POST['group_name'];
  }

  if (isset($_POST['describe'])) {
  	$description = $_POST['describe'];
  }

  if (!empty($group_name) || !empty($description)) {
    $group = $ch->createGroup($group_name,$description);
    if ($group) {
    	echo '<div class="alert alert-success" role="alert">Success</div>';
    }else{
    	echo '<div class="alert alert-warning" role="alert">Failed</div>';
    }
  }else{
    echo '<div class="alert alert-warning" role="alert">Field required</div>';
  }


?>
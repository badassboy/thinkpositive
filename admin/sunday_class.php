<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require("../functions.php");
$ch = new Church();

	$first = "";
	$second = "";
	$class_name = "";
	

if (isset($_POST['first'])) {
	$first_name = trim($_POST['first']);
}


if (isset($_POST['last'])) {
	$last_name = trim($_POST['last']);
}

if (isset($_POST['selected_class'])) {
	$class_name = trim($_POST['selected_class']);
}

$child = $ch->sunday_class($first_name,$last_name,$class_name);
	if ($child == 1) {
		echo "member added";
	}else {
		echo "failed";
	}

?>




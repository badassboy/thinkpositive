<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require("../functions.php");
$ch = new Church();

$person = "";
$amount = "";
$date_paid = "";

if (isset($_POST['person'])) {
	$person = trim($_POST['person']);
}

if (isset($_POST['amount'])) {
	$amount = trim($_POST['amount']);
}

if (isset($_POST['date_paid'])) {
	$date_paid = trim($_POST['date_paid']);
}



$paid = $ch->welfare($person,$amount);
if ($paid) {
	echo '<div class="alert alert-success" role="alert">Success</div>';
}else {
	echo '<div class="alert alert-warning" role="alert">Failed</div>';
}




?>
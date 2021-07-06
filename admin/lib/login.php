<?php
require_once 'constants.php';
require_once 'MysqliDb.php';

session_start();

$error = [];

function hook_data($h){
	$_POST[$h] ??= '';
	return htmlspecialchars(stripslashes($_POST[$h]));
}

if(isset($_SESSION['thinkadmin']) && $_SESSION['thinkadmin'] === true){
    $id = $_SESSION['think_id'];
    $db = new Mysqlidb(tp_host, tp_user, tp_pass, tp_name);
    $db->where('user_email', $id);
    $t = $db->get(tp_users);
    $goal = count($t);
    if ($goal === 1){
        header('Location: login.php');exit;
    }else{
        //set session
        unset($_SESSION['thinkadmin']);
        unset($_SESSION['think_id']);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

	$user_id = hook_data('user_email');
    $user_pass = hook_data('user_pass');
    $user_passes = base64_encode(base64_encode($user_pass));
    
    $db = new Mysqlidb(tp_host, tp_user, tp_pass, tp_name);
    $db->where('user_email', $user_id);
    $db->where('user_pass', $user_passes);
    $t = $db->get(tp_users);
    $goal = count($t);

    if ($goal === 1 && $t[0]['user_status'] === 1) {

        $id = $user_id; 
        $level = $t[0]['user_status'];

        //Set Session
        $_SESSION['thinkadmin'] = true;

        // reload the page
        $_SESSION['think_id'] = $id;
        $_SESSION['think_lvl'] = $level;
        $_SESSION['think_mgs'] = '$.notify("Access granted", "success");';
        header('Location: index.php');exit;
    } else {
        // login failed save error to a session
        $_SESSION['think_mgs'] = false;
    }
}
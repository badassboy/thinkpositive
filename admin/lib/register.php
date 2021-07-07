<?php
require_once 'constants.php';
require_once 'MysqliDb.php';

session_start();

function hook_data($h){
	if(isset($_POST[$h])){
        $g = $_POST[$h];
    }else{
        $g = '';
    }
	return htmlspecialchars(stripslashes($g));
}

$user_id = '';
$user_pass = '';
$user_fname = '';
$user_lname = '';
$user_rpass = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

	$user_id = hook_data('user_email');
    $user_pass = hook_data('user_pass');
    $user_fname = hook_data('user_fname');
    $user_lname = hook_data('user_lname');
    $user_rpass = hook_data('user_rpass');
    
    
    $db = new Mysqlidb(tp_host, tp_user, tp_pass, tp_name);
    $db->where('user_email', $user_id);
    $v = $db->get(tp_users);
    $b = count($v);
    if($b > 0){
        // registration failed save error to a session
        $_SESSION['think_mgs'] = '$.notify("Email Exists!", "error");';
    }else{
        $iq = array(
            'user_email' => $user_id,
            'user_fname' => $user_fname,
            'user_lname' => $user_lname,
            'user_pass' => password_hash($user_pass, PASSWORD_DEFAULT),
            'user_status' => 1,
            'date_created' => date('Y-m-d h:i:s')
        );
        $dbs = new Mysqlidb(tp_host, tp_user, tp_pass, tp_name);
        $dbs->insert(tp_users, $iq);

        //Set Session
        $_SESSION['thinkadmin'] = true;

        // reload the page
        $_SESSION['think_id'] = $user_id;
        $_SESSION['think_lvl'] = 1;

        $_SESSION['think_mgs'] = '$.notify("Registration Successful!", "success");';
        header('Location: index.php');exit;
    }
}
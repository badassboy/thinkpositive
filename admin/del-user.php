<?php
require_once 'lib/constants.php';
require_once 'lib/MysqliDb.php';
session_start();

if(isset($_GET['user'])){
    $post = $_GET['user'];
    $user = $_SESSION['think_id'];
    $cd = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
    $cd->where('row_key', $post);
    $v = $cd->getOne(users);
    if($v['user_email'] ===  $user){
        $_SESSION['think_mgs'] = '$.notify("User '.$v['user_fname'].' '.$v['user_lname'].' Deleted Successfully!", "success");';
        $cd->delete(users);
        unset($_SESSION['thinkadmin']);
        unset($_SESSION['think_id']);
        unset($_SESSION['think_lvl']);
        session_destroy();
        header('Location: login.php');exit;
    }else{
        $_SESSION['think_mgs'] = '$.notify("User '.$v['user_fname'].' '.$v['user_lname'].' Deleted Successfully!", "success");';
        $cd->delete(users);
        header('Location: users.php');exit;
    }
}

?>
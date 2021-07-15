<?php
require_once 'lib/constants.php';
require_once 'lib/MysqliDb.php';
session_start();

if(isset($_GET['m'])){
    $m = $_GET['m'];
    $cd = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
    $cd->where('row_key', $m);
    $cd->delete(messages);
    $_SESSION['think_mgs'] = '$.notify("Message Deleted Successfully!", "success");';
    header('Location: messages.php');exit;
}

?>
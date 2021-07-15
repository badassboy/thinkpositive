<?php
require_once 'lib/constants.php';
require_once 'lib/MysqliDb.php';
session_start();

if(isset($_GET['post'])){
    $m = $_GET['post'];
    $cd = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
    $cd->where('row_key', $m);
    $cd->delete(services);
    $_SESSION['think_mgs'] = '$.notify("Service Deleted Successfully!", "success");';
    header('Location: services.php');exit;
}
?>
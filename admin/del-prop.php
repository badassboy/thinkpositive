<?php
require_once 'lib/constants.php';
require_once 'lib/MysqliDb.php';
session_start();

if(isset($_GET['item'])){
    $post = $_GET['item'];
    $cd = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
    $cd->where('row_key', $post);
    $cd->delete(properties);
    $v = $cd->getOne(properties);
    unlink("../img/property/".$v['p_img']);
    $_SESSION['think_mgs'] = '$.notify("Prppety Deleted Successfully!", "success");';
    header('Location: properties.php');exit;
}

?>
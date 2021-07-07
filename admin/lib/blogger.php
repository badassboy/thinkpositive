<?php 
require_once 'MysqliDb.php';
$id = $_SESSION['think_id'];
$iv = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
$iv->where('user_email', $id);
$ba = $iv->get(blogs);
?>
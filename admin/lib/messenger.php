<?php 
require_once 'MysqliDb.php';
$iv = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
$ba = $iv->get(messages);
?>
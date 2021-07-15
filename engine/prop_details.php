<?php
require_once 'lib/MysqliDb.php';
if(isset($_GET['property'])){
    $post = $_GET['property'];
    $db = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
    $db->where('row_key', $post);
    $blog = $db->getOne(properties);
}else{
    echo "<script>window.location.href='index.php'</script>";
}
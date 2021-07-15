<?php
require_once 'lib/MysqliDb.php';
if(isset($_GET['post'])){
    $post = $_GET['post'];
    $db = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
    $db->where('row_key', $post);
    $blog = $db->getOne(blogs);
}else{
    echo "<script>window.location.href='index.php'</script>";
}
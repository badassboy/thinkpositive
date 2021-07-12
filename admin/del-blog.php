<?php
require_once 'lib/constants.php';
require_once 'lib/MysqliDb.php';
session_start();

if(isset($_GET['post'])){
    $post = $_GET['post'];
    $cd = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
    $cd->where('row_key', $post);
    $cd->delete(blogs);
    $_SESSION['think_mgs'] = '$.notify("Post Deleted Successfully!", "success");';
    header('Location: blog.php');exit;
}

?>
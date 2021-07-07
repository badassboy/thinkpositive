<?php
session_start();

if(isset($_SESSION['thinkadmin']) && $_SESSION['thinkadmin'] === true){
}else{
    //set session
    unset($_SESSION['thinkadmin']);
    unset($_SESSION['think_id']); 
    header('Location: login.php');exit;
}

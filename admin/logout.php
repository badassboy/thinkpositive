<?php
session_start();
require_once 'lib/constants.php';
require_once 'lib/MysqliDb.php';

unset($_SESSION['thinkadmin']);
unset($_SESSION['think_id']);
unset($_SESSION['think_lvl']);
session_destroy();

header('Location: login.php');
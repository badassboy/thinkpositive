<?php
include_once 'lib/constants.php';
include_once 'lib/check.php';
require_once 'lib/MysqliDb.php';

?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashbord | <?=tp_app_admin?></title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><?=tp_app_admin?></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <?php include_once 'lib/user.php'?>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
            <?php include_once'lib/navMenu.php' ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Dashboard 
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <?php 
                            $nv = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
                            $nv->get(users);
                        ?>
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-users fa-5x"></i>
                                <h3><?=$nv->count?></h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                                System Users
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <?php 
                            $na = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
                            $na->get(messages);
                        ?>
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fa fa-envelope fa-5x"></i>
                                <h3><?=$na->count?></h3>
                            </div>
                            <div class="panel-footer back-footer-red">
                                New Messages
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <?php 
                            $nb = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
                            $nb->get(blogs);
                        ?>
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-rss-square fa-5x"></i>
                                <h3><?=$nb->count?></h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                Blog Posts
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <?php 
                            $nx = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
                            $nx->get(services);
                        ?>
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                                <i class="fa fa-info-circle fa-5x"></i>
                                <h3><?=$nx->count?></h3>
                            </div>
                            <div class="panel-footer back-footer-brown">
                                Service Posts
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->
                <footer>
                    <?php include_once 'footer.php'; ?>
                </footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="js/notify.js"></script>

    <script>
        <?php if (isset($_SESSION['think_mgs'])) { echo $_SESSION['think_mgs']; unset($_SESSION['think_mgs']); }?>
    </script>


</body>

</html>
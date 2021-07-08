<?php
include_once 'lib/constants.php';
include_once 'lib/check.php';
require_once 'lib/MysqliDb.php';

function hook_data($h){
	if(isset($_POST[$h])){
        $g = $_POST[$h];
    }else{
        $g = '';
    }
	return htmlspecialchars(stripslashes($g));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['savei'])){
    $p = $_GET['post'];
    $x1 = hook_data('subject');
    $x2 = $_POST['content'];
    
    //print_r($_POST); exit;
    $data = array(
        'blog_subj' => $x1,
        'blog_content' => $x2
    );
    $db = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
    $db->where('row_key', $p);
    $db->update(blogs, $data);
}

if(isset($_GET['post'])){
    $p = $_GET['post'];
    $eg = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
    $eg->where('row_key',$p);
    $rap = $eg->getOne(blogs);
}

?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog | <?=tp_app_admin?></title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/js/dataTables/dataTables.bootstrap.css">
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
                            Blog 
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Edit Blog
                            </div>
                            <div class="panel-body">
                                <form class="form-inline" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    Subject
                                                </span>
                                                <input type="text" class="form-control" name="subject" value="<?=$rap['blog_subj']?>" aria-label="...">
                                            </div><!-- /input-group -->
                                        </div><!-- /.col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    Date
                                                </span>
                                                <input type="text" class="form-control" name="date" value="<?=$rap['date_created']?>" readonly aria-label="...">
                                            </div><!-- /input-group -->
                                        </div><!-- /.col-lg-6 -->
                                        <div class="col-lg-12">
                                            <p></p>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    Content
                                                </span>
                                                <textarea id="editor" name="content"><?=$rap['blog_content']?></textarea>
                                            </div><!-- /input-group -->
                                        </div><!-- /.col-lg-12 -->
                                        <div class="col-lg-12">
                                            <p></p>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <input type="submit" class="form-control btn btn-primary" name="savei" value="Save">
                                            </div><!-- /input-group -->
                                        </div>
                                    </div><!-- /.row -->
                                </form>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>

                </div>
                <!-- /. ROW  -->
                <footer>
                    <p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p>
                </footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <!-- JS Scripts-->
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>

    <!-- jQuery Js -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="js/notify.js"></script>

    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

    <script>
        <?php if (isset($_SESSION['think_mgs'])) { echo $_SESSION['think_mgs']; unset($_SESSION['think_mgs']); }?>
    </script>


</body>

</html>
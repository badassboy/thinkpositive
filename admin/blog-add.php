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

function blogid(){
    $db = new Mysqlidb(tp_host, tp_user, tp_pass, tp_name);
    $db->orderBy('blog_count', 'DESC');
    $arc = $db->get(blogs, 1); $mit = count($arc);
    if($mit === 0){
        return "1";
    }else{
        $barc = substr($arc[0]['blog_count'], 5, 3);
        $vit = $barc + 1;
        if($barc < 9 && $barc > 0){
            return $vit;
        }elseif($barc < '99' && $barc >= '9'){
            return $vit;
        }elseif($barc < '999' && $barc >= '99'){
            return $vit;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['build'])){
    $x1 = hook_data('subject');
    $x2 = $_POST['content'];
    $id = $_SESSION['think_id'];
    
    if(isset($_FILES['blog_img'])){
        $errors= array();
        $file_name = $_FILES['blog_img']['name'];
        $file_size = $_FILES['blog_img']['size'];
        $file_tmp = $_FILES['blog_img']['tmp_name'];
        $file_type = $_FILES['blog_img']['type'];
        $exploded = explode('.', $_FILES['blog_img']['name']);
        $file_ext = strtolower(end($exploded));
  
        $expensions= array("jpeg","jpg","png");
        if(file_exists($file_name)) {
            $_SESSION['think_mgs'] = '$.notify("Sorry, file already exists!", "error");';
            $errors[]="error";
        }
        if(in_array($file_ext,$expensions)=== false){
            $_SESSION['think_mgs'] = '$.notify("Extension not allowed! Please choose a JPEG or PNG file.", "error");';
            $errors[]="error";
        }
        if($file_size > 2097152){
           $_SESSION['think_mgs'] = '$.notify("File size must be excately 2 MB!", "error");';
           $errors[]="error";
        }
        if(empty($errors)==true){
            $newfilename = 'blog-'.blogid();
            move_uploaded_file($file_tmp,"../img/blog/".$newfilename.".".$file_ext);
            $data = array(
                'blog_subj' => $x1,
                'blog_img' => $newfilename.".".$file_ext,
                'blog_count' => $newfilename,
                'user_email' => $id,
                'blog_content' => $x2,
                'date_created' => date('Y-m-d h:i:s')
            );
            $db = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
            $db->insert(blogs, $data);
            $_SESSION['think_mgs'] = '$.notify("Blog Added Successfully!", "success");';
            header('Location: blog.php');exit;
        }
  
    }
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
                                Add New Blog
                            </div>
                            <div class="panel-body">
                                <form class="form-inline" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    Subject
                                                </span>
                                                <input type="text" class="form-control" name="subject" value="" aria-label="...">
                                            </div><!-- /input-group -->
                                        </div><!-- /.col-lg-6 -->
                                        <div class="col-lg-12">
                                            <p></p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <input type="file" name="blog_img"/>
                                            </div><!-- /input-group -->
                                        </div><!-- /.col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <p></p>
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
                                                <textarea  class="form-control" id="editor" name="content"></textarea>
                                            </div><!-- /input-group -->
                                        </div><!-- /.col-lg-12 -->
                                        <div class="col-lg-12">
                                            <p></p>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <input type="submit" class="form-control btn btn-primary" name="build" value="Save">
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
                    <?php include_once 'footer.php'; ?>
                </footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <!-- JS Scripts-->
    <script type="text/javascript" src="js/nicEdit.js"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
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
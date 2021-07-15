<?php
include_once 'lib/constants.php';
include_once 'lib/check.php';

function state($v){
    if($v == 1){
        return 'Active';
    }else{
        return 'Inactive';
    }
}

?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services | <?=tp_app_admin?></title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/js/dataTables/dataTables.bootstrap.css">
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <style>
        .gap {
            float: right;
        }
    </style>
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
                            Posted Blogs
                            <button class="btn btn-sm btn-primary gap" onclick="window.location.href='service-add.php'"><i class="fa fa-plus "></i>Add a Service</button>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    require_once 'lib/MysqliDb.php';
                                    $id = $_SESSION['think_id'];
                                    $iv = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
                                    $ba = $iv->get(users);
                                    ?>
                                    <?php foreach($ba as $hi){ ?>
                                        <tr class="odd gradeX">
                                            <td  width="25%"><b><?=$hi['user_fname'].' '.$hi['user_lname']?></b></td>
                                            <td width="45%"><?=$hi['user_email']?></td>
                                            <td class="center"><?=state($hi['user_status'])?>  </td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-danger conf-del" data-id="<?=$hi['row_key']?>" data-toggle="modal" data-target="#delModal"><i class="fa fa-trash-o "></i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>

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

    <div class="modal" id="delModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Sure you want to delete this User?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary bang">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
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

            $('.conf-del').on('click', function (e) {
                var id = $(this).attr('data-id');
                $('.bang').attr('data-id',id);
            });
		    $(".bang").on('click', function (e) {
		    	var id = $(this).attr('data-id');
		    	location.href="del-user.php?user="+id;
		    });
        });
    </script>

    <script>
        <?php if (isset($_SESSION['think_mgs'])) { echo $_SESSION['think_mgs']; unset($_SESSION['think_mgs']); }?>
    </script>


</body>

</html>
<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    echo $ID;
    if ($_SESSION['IDadmin']) {
    include("module/xuly.php");
    include("module/conn.php");
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome CSS -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- END CSS for this page -->
</head>

<body class="adminbody">
    <div id="main">
        <?php 
        include("module/hearder.php");
        include("module/menu.php");

         ?>

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Dashboard</h1>
                                <ol class="breadcrumb float-right">
                                    <li > 
                                        <?php
                                         
                                        if ($active=="item") {
                                            include("module/add.php");
                                        }
                                        else{
                                            echo "Hi! "; 
                                            echo $_SESSION['nameadmin'];
                                        }
                                        ?>
                                         
                                     </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (isset($edit)) {
                        include('module/edit.php');
                    }
                    if ($active=="") {
                       include("module/top-tag.php");
                    }
                    elseif ($active=="item") {  
                        if ($item=="sanpham") {
                            include("module/sanpham.php");
                        }
                        elseif($item=="hang"){
                            include 'module/nhanhieu.php';
                        }
                        elseif($item=="loaisanpham"){
                            include 'module/type.php';
                        }
                        elseif($item=="donhang"){
                            include 'module/donhang.php';
                        }
                        elseif($item=="nguoidung"){
                            include 'module/nguoidung.php';
                        }
                        elseif($item=="khuyenmai"){
                            include 'module/khuyenmai.php';
                        }
                        elseif($item=="lienhe"){
                            include 'module/lienhe.php';
                        }
                    }   
                    ?>
                </div>
                <!-- END container-fluid -->
            </div>
            <!-- END content -->
        </div>
        <!-- END content-page -->
    </div>
    <!-- END main -->
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <!-- App js -->
    <script src="assets/js/pikeadmin.js"></script>
    <!-- BEGIN Java Script for this page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <!-- Counter-Up-->
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
    <script>
    $(document).ready(function() {
        // data-tables
        $('#example1').DataTable();

        // counter-up
        $('.counter').counterUp({
            delay: 10,
            time: 600
        });
    });
    </script>
    <!-- END Java Script for this page -->
</body>
<?php } 
else{
        header('location: ../admin/dangnhap.php ');
    } ?>    
</html>
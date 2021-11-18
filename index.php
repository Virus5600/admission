<?php
    include("connect.php");

    session_start();

    if(empty($_SESSION['user_id'])){
        echo "<script> window.location = 'login.php';</script>"; 
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        session_start(); 
        include('header.php');
    ?>
    <meta charset="utf-8">
    <link rel="icon" href="assets/wp-content/uploads/2018/01/cropped-icon2-92x92.png" sizes="32x32" />
    <link rel="icon" href="assets/wp-content/uploads/2018/01/cropped-icon2-200x200.png" sizes="192x192" />

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Sto. Niño School of Muntinlupa | Dashboard </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/material-dashboard1.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" id="theme-style" href="assets/css/app.css">
    <!-- <link rel="stylesheet" id="theme-style" href="assets/css/app-green.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/stylecustom.css">
</head>

<body class="fix-header fix-sidebar card-no-border" style="background: #f2f4f8 !important;">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <?php include('topbar.php'); ?>
        
        <?php 
            if($_SESSION['user_type'] == 1 && $_SESSION['staff_type'] == 1){
                include('registrar/sidebar.php'); 
            } else if ($_SESSION['user_type'] == 1 && $_SESSION['staff_type'] == 2){
                include('treasury/sidebar.php');
            } else{
                include('student/sidebar.php');
            }
        ?>

        <div class="page-wrapper">

            <div class="container-fluid" style="padding: 20px 20px !important;">
                <div style="margin-top: 35px;"></div>
                <?php
                    if($_SESSION['user_type'] == 1 && $_SESSION['staff_type'] == 1){
                        include('registrar/index.php'); 
                    } else if ($_SESSION['user_type'] == 1 && $_SESSION['staff_type'] == 2){
                        include('treasury/index.php');
                    } else{
                        include('student/index.php');
                    }
                ?>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <footer class="footer" style="padding: 20px 20px;">
               
            </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <script>
        (function(i, s, o, g, r, a, m){
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function()
            {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-80463319-4', 'auto');
        ga('send', 'pageview');
    </script>
    <script src="assets/js/app.js"></script>

    <?php include('jscripts.php'); ?>
    <?php include('mainscript.php'); ?>
</body>

</html>

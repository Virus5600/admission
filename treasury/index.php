<?php 
    $main_menu = base64_decode(urldecode($_GET["menu"]));
    $sub_menu = base64_decode(urldecode($_GET["sub"]));
    if(isset($main_menu) && $main_menu == 'Treasury' && $sub_menu == 'Student'){
        include ('treasurystudent/student.php');
    } else if(isset($main_menu) && $main_menu == 'Treasury' && $sub_menu == 'Reports'){
        include ('treasuryreports/reports.php');
    } else{
        include ('treasurydashboard/dashboard.php');
    }
?>
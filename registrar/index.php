<?php 
    $main_menu = base64_decode(urldecode($_GET["menu"]));
    $sub_menu = base64_decode(urldecode($_GET["sub"]));

    if(isset($main_menu) && $main_menu == 'Registrar' && $sub_menu == 'Student'){
        include ('registrarstudent/student.php');
    } else if(isset($main_menu) && $main_menu == 'Registrar' && $sub_menu == 'Reports'){
        include ('registrarreports/reports.php');
    } else if(isset($main_menu) && $main_menu == 'Registrar' && $sub_menu == 'Schedule'){
        include ('registrarschedule/schedule.php');
    } else{
        include ('registrardashboard/dashboard.php');
    }
?>
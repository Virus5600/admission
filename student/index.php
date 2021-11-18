<?php 
    $main_menu = base64_decode(urldecode($_GET["menu"]));
    $sub_menu = base64_decode(urldecode($_GET["sub"]));
    if(isset($main_menu) && $main_menu == 'Student' && $sub_menu == 'Schedule'){
        include ('studentschedule/studentsched.php');
    } else{
        include ('studentinformation/studentinfo.php');
    }
?>
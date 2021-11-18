<?php	
	$Target_dir = "../../snsm_images/schedule/". trim($_REQUEST['txtstudidschedule']) . "/"; 
	$pre = strtotime(date('Y-m-d H:i:s'))."_";
	$Filename = "schedule" . $pre . basename($_FILES["txtupdateScheduleDImagefile"]["name"]);
	$Target_file = $Target_dir . $Filename;

	include "../../connect.php";
	mkdir("../../snsm_images/schedule/". trim($_REQUEST['txtstudidschedule']), 0777, true);
	move_uploaded_file($_FILES["txtupdateScheduleDImagefile"]["tmp_name"], $Target_file);

	$addstudschedule = mysqli_query($connection, "INSERT INTO `stud_schedule` SET `stud_id` = '" . trim($_REQUEST['txtstudidschedule']) . "', `image` = '" . $Filename . "', `type` = 7, `date_uploaded` = '" . date('Y-m-d') . "', `req_status` = 1;");
	$updatestudinfo = mysqli_query($connection, "UPDATE `stud_information` SET `sched_stat`=1, `enroll_stat`=1 WHERE `stud_no` = $_REQUEST[txtstudidschedule]");
?>
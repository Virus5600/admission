<?php	
	$Target_dir = "../snsm_images/requirements/". trim($_REQUEST['txtstudidrequirementD']) . "/"; 
	$pre = strtotime(date('Y-m-d H:i:s'))."_";
	$Filename = "requirements" . $pre . basename($_FILES["txtupdateReqDImagefile"]["name"]);
	$Target_file = $Target_dir . $Filename;

	include "../connect.php";
	mkdir("../snsm_images/requirements/". trim($_REQUEST['txtstudidrequirementD']), 0777, true);
	move_uploaded_file($_FILES["txtupdateReqDImagefile"]["tmp_name"], $Target_file);
	$addstudrequirement = mysqli_query($connection, "INSERT INTO stud_req SET admission_id = '" . trim($_REQUEST['txtstudidrequirementD']) . "', image = '" . $Filename . "', type = '4', date_uploaded= '" . date('Y-m-d') . "';");
?>
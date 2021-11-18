<?php	
	$Target_dir = "../snsm_images/requirements/". trim($_REQUEST['txtstudidrequirementC']) . "/"; 
	$pre = strtotime(date('Y-m-d H:i:s'))."_";
	$Filename = "requirements" . $pre . basename($_FILES["txtupdateReqCImagefile"]["name"]);
	$Target_file = $Target_dir . $Filename;

	include "../connect.php";
	mkdir("../snsm_images/requirements/". trim($_REQUEST['txtstudidrequirementC']), 0777, true);
	move_uploaded_file($_FILES["txtupdateReqCImagefile"]["tmp_name"], $Target_file);
	$addstudrequirement = mysqli_query($connection, "INSERT INTO stud_req SET admission_id = '" . trim($_REQUEST['txtstudidrequirementC']) . "', image = '" . $Filename . "', type = '3', date_uploaded= '" . date('Y-m-d') . "';");
?>
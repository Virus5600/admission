<?php	
	$Target_dir = "../snsm_images/requirements/". trim($_REQUEST['txtstudidrequirementA']) . "/"; 
	$pre = strtotime(date('Y-m-d H:i:s'))."_";
	$Filename = "requirements" . $pre . basename($_FILES["txtupdateReqAImagefile"]["name"]);
	$Target_file = $Target_dir . $Filename;

	include "../connect.php";
	mkdir("../snsm_images/requirements/". trim($_REQUEST['txtstudidrequirementA']), 0777, true);
	move_uploaded_file($_FILES["txtupdateReqAImagefile"]["tmp_name"], $Target_file);
	$addstudrequirement = mysqli_query($connection, "INSERT INTO stud_req SET admission_id = '" . trim($_REQUEST['txtstudidrequirementA']) . "', image = '" . $Filename . "', type = '1', date_uploaded= '" . date('Y-m-d') . "';");
?>
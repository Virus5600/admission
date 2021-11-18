<?php	
	$Target_dir = "../snsm_images/requirements/". trim($_REQUEST['txtstudidrequirementE']) . "/"; 
	$pre = strtotime(date('Y-m-d H:i:s'))."_";
	$Filename = "requirements" . $pre . basename($_FILES["txtupdateReqEImagefile"]["name"]);
	$Target_file = $Target_dir . $Filename;

	include "../connect.php";
	mkdir("../snsm_images/requirements/". trim($_REQUEST['txtstudidrequirementE']), 0777, true);
	move_uploaded_file($_FILES["txtupdateReqEImagefile"]["tmp_name"], $Target_file);
	$addstudrequirement = mysqli_query($connection, "INSERT INTO stud_req SET admission_id = '" . trim($_REQUEST['txtstudidrequirementE']) . "', image = '" . $Filename . "', type = '5', date_uploaded= '" . date('Y-m-d') . "';");
?>
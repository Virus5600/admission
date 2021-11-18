<?php
	session_start();

	$Target_dir = "../../snsm_images/profile/". $_SESSION['user_id'] . "/"; 
	$pre = strtotime(date('Y-m-d H:i:s'))."_";
	$Filename = "profile" . $pre . basename($_FILES["txtupdateprofileImagefile"]["name"]);
	$Target_file = $Target_dir . $Filename;

	$imagepath = "snsm_images/profile/". $_SESSION['user_id'] . "/";

	include "../../connect.php";
	mkdir("../../snsm_images/profile/". $_SESSION['user_id']."/", 0777, true);
	move_uploaded_file($_FILES["txtupdateprofileImagefile"]["tmp_name"], $Target_file);
	$updateresult = mysqli_query($connection, "UPDATE useraccounts SET image_path = '" . $imagepath . "', image_name = '" . $Filename . "' WHERE user_id = '" . $_SESSION['user_id'] . "';");
?>
<?php	
	include "../../connect.php";
	session_start();

	$datetoday = date('Y-m-d');
	$genID = generateID2($connection, 'admission_id', 'admission', 'ADM');

	echo trim($_REQUEST['txtimgreqstudid']);

	$ressaveadmission = mysqli_query($connection, "INSERT INTO admission SET admission_id = '" . $genID . "', stud_no = '" . trim($_REQUEST['txtimgreqstudid']) . "', stud_Fname = '" . trim($_REQUEST['txtimgreqFname']) . "', stud_Mname = '" . trim($_REQUEST['txtimgreqMname']) . "', stud_Lname = '" . trim($_REQUEST['txtimgreqLname']) . "', stud_emailadd = '" . trim($_REQUEST['txtimgreqemail']) . "', date_of_admission = '" . $datetoday . "', stud_type = '1';");

	$resupdate = mysqli_query($connection, "UPDATE stud_information SET stud_type = '1' WHERE stud_no = '" . trim($_REQUEST['txtimgreqstudid']) . "';");

	$Target_dir = "../../snsm_images/requirements/". $genID . "/"; 
	$pre = strtotime(date('Y-m-d H:i:s'))."_";
	$Filename = "requirements" . $pre . basename($_FILES["txtupdateRequirementsImagefile"]["name"]);
	$Target_file = $Target_dir . $Filename;

	mkdir("../../snsm_images/requirements/". $genID, 0777, true);
	move_uploaded_file($_FILES["txtupdateRequirementsImagefile"]["tmp_name"], $Target_file);

	$addstudschedule = mysqli_query($connection, "INSERT INTO stud_req SET admission_id = '" . $genID . "', stud_id = '" . trim($_REQUEST['txtimgreqstudid']) . "', image = '" . $Filename . "', type = '3', date_uploaded = '" . date('Y-m-d') . "', req_status = '0';");
?>
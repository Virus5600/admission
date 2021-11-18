<?php	
	$Target_dir = "../../snsm_images/receipts/". trim($_REQUEST['txtimgadmissionidhidden']) . "/"; 
	$pre = strtotime(date('Y-m-d H:i:s'))."_";
	$Filename = "receipt" . $pre . basename($_FILES["txtupdateReceiptImagefile"]["name"]);
	$Target_file = $Target_dir . $Filename;

	include "../../connect.php";
	mkdir("../../snsm_images/receipts/". trim($_REQUEST['txtimgadmissionidhidden']), 0777, true);
	move_uploaded_file($_FILES["txtupdateReceiptImagefile"]["tmp_name"], $Target_file);

	$addstudschedule = mysqli_query($connection, "INSERT INTO stud_receipt SET admission_id = '" . trim($_REQUEST['txtimgadmissionidhidden']) . "', stud_id = '" . trim($_REQUEST['txtimgstudidhidden']) . "', image = '" . $Filename . "', type = '6', date_uploaded = '" . date('Y-m-d') . "', req_status = '0';");

	$resupdate = mysqli_query($connection, "UPDATE admission SET receipt_stat = '1', deny2 = '0', Remarks2 = '' WHERE admission_id = '" . trim($_REQUEST['txtimgadmissionidhidden']) . "';");
?>
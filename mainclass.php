<?php
	include_once("connect.php");	
	session_start();

	switch($_POST["form"]) {

		case 'getage':
			$birthDate = explode("/", date('m/d/Y', strtotime($_POST['Dateofbirth'])));
			$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
			    ? ((date("Y") - $birthDate[2]) - 1)
			    : (date("Y") - $birthDate[2]));

			if($_POST['Dateofbirth']!=""){
				if($age <= 0){
					echo "";
				}else{
					echo $age;
				}
			}else{
				echo "";
			}
		break;

		case 'submitrequirements':
			$datetoday = date('Y-m-d');
			$genID = generateID2($connection, 'admission_id', 'admission', 'ADM');

			$ressaveadmission = mysqli_query($connection, "INSERT INTO admission SET admission_id = '" . $genID . "', stud_Fname = '" . $_POST['textStudentFName'] . "', stud_Mname = '" . $_POST['textStudentMName'] . "', stud_Lname = '" . $_POST['textStudentLName'] . "', stud_emailadd = '" . $_POST['textStudEmail'] . "', date_of_admission = '" . $datetoday . "';");

			$ressaveadmissiondet = mysqli_query($connection, "INSERT INTO admission_details SET admission_id = '" . $genID . "', stud_last_school_attended = '" . $_POST['textSchoolAttended'] . "', stud_last_school_grade = '" . $_POST['textGrade'] . "', stud_last_school_year = '" . $_POST['textSchoolYear'] . "', stud_last_school_address = '" . $_POST['textSchoolAddress'] . "', stud_last_school_num = '" . $_POST['textSchoolNum'] . "', stud_Fname = '" . $_POST['textStudentFName'] . "', stud_Mname = '" . $_POST['textStudentMName'] . "', stud_Lname = '" . $_POST['textStudentLName'] . "', stud_sex = '" . $_POST['textSex'] . "', stud_address = '" . $_POST['textStudentAddress'] . "', stud_num = '" . $_POST['textStudPhone'] . "', stud_emailadd = '" . $_POST['textStudEmail'] . "', stud_birthday = '" . date('Y-m-d', strtotime($_POST['textStudBirthday'])) . "', stud_age = '" . $_POST['textAge'] . "', stud_birthplace = '" . $_POST['textBirthPlace'] . "', stud_religion = '" . $_POST['textReligion'] . "', stud_father = '" . $_POST['textFatherName'] . "', stud_father_occupation = '" . $_POST['textFatherOccupation'] . "', stud_mother = '" . $_POST['textMotherName'] . "', stud_mother_occupation = '" . $_POST['textMotherOccupation'] . "', stud_guardian = '" . $_POST['textGuardian'] . "', stud_guardian_relationship = '" . $_POST['textGuardianRelationship'] . "', stud_guardian_num = '" . $_POST['textGuardianPhone'] . "', username = '" . $_POST['textUserName'] . "', password = '" . md5($_POST['textPassword']) . "';");

			echo $genID;
			// $ressaveuseraccounts = mysqli_query($connection, "INSERT INTO useraccounts SET user_id = '" . $genID . "', user_type = '3', username = '" . $_POST['textUserName'] . "', password = '" . $_POST['textPassword'] . "', hashpass = '" . md5($_POST['textPassword']) . "';");
		break;

		case 'loginuser':
			$sqllogin = "SELECT id, user_id, user_type, staff_type, status FROM useraccounts WHERE username = '" . $_POST['txtusername'] . "' AND password = '" . md5($_POST['txtpassword']) . "'";

			$reslogin = mysqli_query($connection, $sqllogin);
			$rowlogin = mysqli_fetch_array($reslogin);
			$numlogin = mysqli_num_rows($reslogin);

			if($rowlogin['user_type'] == 3){
				if($rowlogin['status'] == 1){
					$getname = mysqli_fetch_array(mysqli_query($connection, "SELECT CASE WHEN stud_Mname = '' OR stud_Mname IS NULL THEN CONCAT(stud_Lname, ', ', stud_Fname) ELSE CONCAT(stud_Lname, ', ', stud_Fname, ' ', LEFT(stud_Mname, '1'), '.') END FROM stud_information WHERE stud_no = '" . $rowlogin['user_id'] . "'"));
					$fullname = $getname[0];
				} else{
					$getname = mysqli_fetch_array(mysqli_query($connection, "SELECT CASE WHEN stud_Mname = '' OR stud_Mname IS NULL THEN CONCAT(stud_Lname, ', ', stud_Fname) ELSE CONCAT(stud_Lname, ', ', stud_Fname, ' ', LEFT(stud_Mname, '1'), '.') END FROM admission_details WHERE admission_id = '" . $rowlogin['user_id'] . "'"));
					$fullname = $getname[0];
				}
			} else if ($rowlogin['user_type'] == 1){
				$getname = mysqli_fetch_array(mysqli_query($connection, "SELECT name FROM staff_accounts WHERE id = '" . $rowlogin['user_id'] . "'"));
				$fullname = $getname[0];
			} else{
				$fullname = "";
			}

			if($numlogin > 0) {
				$_SESSION['user_id'] = $rowlogin['user_id'];
				$_SESSION['user_type'] = $rowlogin['user_type'];
				$_SESSION['staff_type'] = $rowlogin['staff_type'];
				$_SESSION['status'] = $rowlogin['status'];
				$_SESSION['fullname'] = $fullname;
			} else {
				$_SESSION['user_id'] = "";
				$_SESSION['user_type'] = "";
				$_SESSION['staff_type'] = "";
				$_SESSION['status'] = "";
				$_SESSION['fullname'] = "";
			}

			// if($rowlogin['user_type'] == 3){
			// 	$checkifstudent = mysqli_fetch_array(mysqli_query($connection, "SELECT status FROM stud_information WHERE stud_no = '" . $rowlogin['user_id'] . "'"));
			// 	if ($checkifstudent[0] == 1){
			// 		$login = 1;
			// 	} else if($checkifstudent[0] == 0){
			// 		$login = 2;
			// 	} else{
			// 		$login = $numlogin;
			// 	}
			// } else{
			// 	$login = $numlogin;
			// }

			echo $numlogin;
		break;

		case 'loadtopbarimage':
			$sqllogin = "SELECT image_path, image_name, user_id FROM useraccounts WHERE user_id = '" . $_SESSION['user_id'] . "';";
			$reslogin = mysqli_query($connection, $sqllogin);
			$rowlogin = mysqli_fetch_array($reslogin);

			echo $rowlogin[0] . $rowlogin[1];
		break;

		case 'checkadmissionstatus':
			$checkadmissionstat = mysqli_fetch_array(mysqli_query($connection, "SELECT registrar_stat, receipt_stat, treasury_stat, sched_stat, deny, Remarks, deny2, Remarks2, stud_type FROM admission WHERE admission_id = '" . $_POST['textchkadmissionstatus'] . "'"));

			if($checkadmissionstat == TRUE){
				if($checkadmissionstat['deny'] == 0){
					if($checkadmissionstat['registrar_stat'] == 1 && $checkadmissionstat['receipt_stat'] == 0){
						$status = 1;
						$remarks = "";
					} else if($checkadmissionstat['registrar_stat'] == 1 && $checkadmissionstat['receipt_stat'] == 1 && $checkadmissionstat['treasury_stat'] == 0){
						if($checkadmissionstat['deny2'] == 1){
							$status = 2;
							$remarks = $checkadmissionstat['Remarks2'];
						} else {
							$status = 3;
							$remarks = "";
						}
					} else if($checkadmissionstat['registrar_stat'] == 1 && $checkadmissionstat['treasury_stat'] == 1 && $checkadmissionstat['sched_stat'] == 0){
						$status = 4;
						$remarks = "";
					} else if($checkadmissionstat['sched_stat'] == 1){
						$status = 5;
						$remarks = "";
					} else if($checkadmissionstat['registrar_stat'] == 0){
						$status = 6;
						$remarks = "";
					} else {
						$status = 7;
						$remarks = "";
					}
				} else {
					$status = 8;
					$remarks = $checkadmissionstat['Remarks'];
				}
			} else {
				$status = 7;
				$remarks = "";
			}

			echo $status . "|" . $remarks;
		break;
	}
?>
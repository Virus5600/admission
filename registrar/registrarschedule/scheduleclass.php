<?php
	include_once("../../connect.php");	
	session_start();

	switch($_POST["form"]) {

		case 'dsplaytblstudentadmissionlist':
			$res = mysqli_query($connection, "SELECT a.stud_no, CASE WHEN a.stud_Mname = '' OR a.stud_Mname IS NULL THEN CONCAT(a.stud_Lname, ', ', a.stud_Fname) ELSE CONCAT(a.stud_Lname, ', ', a.stud_Fname, ' ', LEFT(a.stud_Mname, '1'), '.') END, a.stud_sex, a.stud_address, a.stud_num, a.stud_type, b.id FROM stud_information AS a LEFT JOIN admission AS b ON a.stud_no = b.stud_no WHERE (CASE WHEN a.stud_Mname = '' OR a.stud_Mname IS NULL THEN CONCAT(a.stud_Lname, ', ', a.stud_Fname) ELSE CONCAT(a.stud_Lname, ', ', a.stud_Fname, ' ', LEFT(a.stud_Mname, '1'), '.') END LIKE '%" . $_POST['key'] . "%' OR a.stud_no LIKE '%". $_POST['key']. "%') AND b.registrar_stat = '1' AND b.treasury_stat = '1' AND b.sched_stat = '0'");

			// $res = mysqli_query($connection, "SELECT stud_no, CASE WHEN stud_Mname = '' OR stud_Mname IS NULL THEN CONCAT(stud_Lname, ', ', stud_Fname) ELSE CONCAT(stud_Lname, ', ', stud_Fname, ' ', LEFT(stud_Mname, '1'), '.') END, stud_sex, stud_address, stud_num, stud_type, id FROM stud_information WHERE (CASE WHEN stud_Mname = '' OR stud_Mname IS NULL THEN CONCAT(stud_Lname, ', ', stud_Fname) ELSE CONCAT(stud_Lname, ', ', stud_Fname, ' ', LEFT(stud_Mname, '1'), '.') END LIKE '%" . $_POST['key'] . "%' OR stud_no LIKE '%". $_POST['key']. "%') AND sched_stat = '0'");
			$countstud = mysqli_num_rows($res);

			if($countstud == TRUE){
				while($row = mysqli_fetch_array($res)){
						if($row[5] == 0){
							$studenttype = "NEW STUDENT";
						} else {
							$studenttype = "OLD STUDENT";
						}
					?>
						<tr>
							<td style="white-space: nowrap;"><b><?php echo $row[0]; ?></b></td>
							<td style="white-space: nowrap;"><?php echo $row[1]; ?></td>
							<td style=""><?php echo $row[3]; ?></td>
							<td style="white-space: nowrap;"><?php echo $row[4]; ?></td>
							<td style="white-space: nowrap;"><?php echo $studenttype; ?></td>
							<td style="white-space: nowrap; text-align: center;">
								<button class="buttsky" onclick="openadmissionstudinfo('<?php echo $row[0]; ?>','<?php echo $row[6]; ?>');"><i class="fa fa-eye" aria-hidden="true" style="font-size: 1rem"></i></button>
							</td>
						</tr>
					<?php
				}
			} else {
				?>  
					<tr>
						<td colspan="12" style="text-align: center;">No record found . . .</td>
					</tr>
				<?php
			}
		break;

		case 'dsplaytblstudentadmissioninfo':
			$getstudentinfo = mysqli_fetch_array(mysqli_query($connection, "SELECT a.stud_no, CASE WHEN a.stud_Mname = '' OR a.stud_Mname IS NULL THEN CONCAT(a.stud_Lname, ', ', a.stud_Fname) ELSE CONCAT(a.stud_Lname, ', ', a.stud_Fname, ' ', LEFT(a.stud_Mname, '1'), '.') END, a.stud_type, b.username, a.stud_sex, a.stud_address, a.stud_emailadd, a.stud_num, a.stud_last_school_attended, a.stud_last_school_address, a.stud_last_school_grade, a.stud_last_school_year, a.stud_last_school_num FROM stud_information AS a LEFT JOIN useraccounts AS b ON a.stud_no = b.user_id WHERE a.stud_no = '" . $_POST['stud_id'] . "';"));

			$getstudimage = mysqli_fetch_array(mysqli_query($connection, "SELECT image_path, image_name FROM useraccounts WHERE user_id = '" . $_POST['stud_id'] . "';"));

			if($getstudimage[0] == "" || $getstudimage[1] == ""){
				$dsplyimage = "assets2/images/noimage5.png";
			} else{
				$dsplyimage = $getstudimage[0] . $getstudimage[1];
			}

			echo $getstudentinfo[1] . "|" . $getstudentinfo[0] . "|" . $getstudentinfo[3] . "|" . $getstudentinfo[4] . "|" . $getstudentinfo[5] . "|" . $getstudentinfo[6] . "|" . $getstudentinfo[7] . "|" . $getstudentinfo[8] . "|" . $getstudentinfo[9] . "|" . $getstudentinfo[10] . "|" . $getstudentinfo[11] . "|" . $dsplyimage;
		break;

		case 'uploadschedule':
			$resupdate = mysqli_query($connection,
				"UPDATE `admission` SET
				`sched_stat` = 1,
				`grade` = '$_POST[textschedulegrade]',
				`section` = '$_POST[textschedulesection]'
				WHERE `stud_no` = '$_POST[textschedulestudid]'
				AND `sched_stat` = 0
				AND `deny` = 0;");


			$resupdate2 = mysqli_query($connection,
				"UPDATE `stud_information` SET
				`sched_stat` = 1,
				`enroll_stat` = 1,
				`grade` = '$_POST[textschedulegrade]',
				`section` = '$_POST[textschedulesection]'
				WHERE `stud_no` = '$_POST[textschedulestudid]';");
		break;
	}
?>
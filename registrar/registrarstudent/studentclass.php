<?php
	include_once("../../connect.php");	
	session_start();

	switch($_POST["form"]) {

		case 'dsplaytblstudentadmissionlist':
			// $res = mysqli_query($connection, "SELECT a.stud_no, CASE WHEN a.stud_Mname = '' OR a.stud_Mname IS NULL THEN CONCAT(a.stud_Lname, ', ', a.stud_Fname) ELSE CONCAT(a.stud_Lname, ', ', a.stud_Fname, ' ', LEFT(a.stud_Mname, '1'), '.') END, b.date_of_admission, a.stud_sex, a.stud_address, a.stud_num, a.stud_type, b.id FROM stud_information AS a LEFT JOIN admission AS b ON a.stud_no = b.stud_no WHERE (CASE WHEN a.stud_Mname = '' OR a.stud_Mname IS NULL THEN CONCAT(a.stud_Lname, ', ', a.stud_Fname) ELSE CONCAT(a.stud_Lname, ', ', a.stud_Fname, ' ', LEFT(a.stud_Mname, '1'), '.') END LIKE '%" . $_POST['key'] . "%' OR a.stud_no LIKE '%". $_POST['key']. "%') AND b.registrar_stat = '0'");
			$res = mysqli_query($connection, "SELECT a.admission_id, CASE WHEN a.stud_Mname = '' OR a.stud_Mname IS NULL THEN CONCAT(a.stud_Lname, ', ', a.stud_Fname) ELSE CONCAT(a.stud_Lname, ', ', a.stud_Fname, ' ', LEFT(a.stud_Mname, '1'), '.') END, a.date_of_admission, b.stud_sex, b.stud_address, b.stud_num, a.stud_type, a.id, a.stud_no FROM admission AS a LEFT JOIN admission_details AS b ON a.admission_id = b.admission_id WHERE (CASE WHEN a.stud_Mname = '' OR a.stud_Mname IS NULL THEN CONCAT(a.stud_Lname, ', ', a.stud_Fname) ELSE CONCAT(a.stud_Lname, ', ', a.stud_Fname, ' ', LEFT(a.stud_Mname, '1'), '.') END LIKE '%" . $_POST['key'] . "%' OR a.admission_id LIKE '%". $_POST['key']. "%') AND a.registrar_stat = '0' AND a.deny = '0'");
			$countstud = mysqli_num_rows($res);

			if($countstud == TRUE){
				while($row = mysqli_fetch_array($res)){
						if($row[6] == 0){
							$studenttype = "NEW STUDENT";
						} else {
							$studenttype = "OLD STUDENT";
						}

						if($row['stud_type'] == 0){
							$address = $row[4];
							$number = $row[5];
						} else {
							$getstudentaddress = mysqli_fetch_array(mysqli_query($connection, "SELECT b.stud_address, b.stud_num FROM admission AS a LEFT JOIN stud_information AS b ON a.stud_no = b.stud_no LEFT JOIN useraccounts AS c ON b.stud_no = c.user_id WHERE a.admission_id = '" . $row['admission_id'] . "';"));
							$address = $getstudentaddress[0];
							$number = $getstudentaddress[1];
						}
					?>
						<tr>
							<td style="white-space: nowrap;"><b><?php echo $row[0]; ?></b></td>
							<td style="white-space: nowrap;"><?php echo $row[1]; ?></td>
							<td style=""><?php echo $address; ?></td>
							<td style="white-space: nowrap;"><?php echo $number; ?></td>
							<td style="white-space: nowrap;"><?php echo $studenttype; ?></td>
							<td style="white-space: nowrap;"><?php echo date('F d, Y', strtotime($row[2])); ?></td>
							<td style="white-space: nowrap; text-align: center;">
								<button class="buttsky" onclick="openadmissionstudinfo('<?php echo $row[0]; ?>','<?php echo $row[7]; ?>', '<?php echo $row[6]; ?>', '<?php echo $row[8]; ?>'); dsplaystudinfo2x2pic('<?php echo $row[0]; ?>'); dsplaystudinfoPSAbirthcert('<?php echo $row[0]; ?>'); dsplaystudinforeportcard('<?php echo $row[0]; ?>'); dsplaystudinfocertgoodmoralcharacter('<?php echo $row[0]; ?>'); dsplaystudinfopermanentrecord('<?php echo $row[0]; ?>')"><i class="fa fa-eye" aria-hidden="true" style="font-size: 1rem"></i></button>
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
			// $getstudentinfo = mysqli_fetch_array(mysqli_query($connection, "SELECT a.stud_no, CASE WHEN a.stud_Mname = '' OR a.stud_Mname IS NULL THEN CONCAT(a.stud_Lname, ', ', a.stud_Fname) ELSE CONCAT(a.stud_Lname, ', ', a.stud_Fname, ' ', LEFT(a.stud_Mname, '1'), '.') END, a.stud_type, b.username, a.stud_sex, a.stud_address, a.stud_emailadd, a.stud_num, a.stud_last_school_attended, a.stud_last_school_address, a.stud_last_school_grade, a.stud_last_school_year, a.stud_last_school_num, c.date_of_admission FROM stud_information AS a LEFT JOIN useraccounts AS b ON a.stud_no = b.user_id LEFT JOIN admission AS c ON a.stud_no = c.stud_no WHERE a.stud_no = '" . $_POST['stud_id'] . "';"));
			if($_POST['studtype'] == 0){
				$getstudentinfo = mysqli_fetch_array(mysqli_query($connection, "SELECT a.admission_id, CASE WHEN a.stud_Mname = '' OR a.stud_Mname IS NULL THEN CONCAT(a.stud_Lname, ', ', a.stud_Fname) ELSE CONCAT(a.stud_Lname, ', ', a.stud_Fname, ' ', LEFT(a.stud_Mname, '1'), '.') END, a.stud_type, b.username, b.stud_sex, b.stud_address, b.stud_emailadd, b.stud_num, b.stud_last_school_attended, b.stud_last_school_address, b.stud_last_school_grade, b.stud_last_school_year, b.stud_last_school_num, a.date_of_admission FROM admission AS a LEFT JOIN admission_details AS b ON a.admission_id = b.admission_id WHERE a.admission_id = '" . $_POST['stud_id'] . "';"));
				$getstudimgid = $_POST['stud_id'];
			} else {
				$getstudentinfo = mysqli_fetch_array(mysqli_query($connection, "SELECT b.stud_no, CASE WHEN a.stud_Mname = '' OR a.stud_Mname IS NULL THEN CONCAT(a.stud_Lname, ', ', a.stud_Fname) ELSE CONCAT(a.stud_Lname, ', ', a.stud_Fname, ' ', LEFT(a.stud_Mname, '1'), '.') END, a.stud_type, c.username, b.stud_sex, b.stud_address, b.stud_emailadd, b.stud_num, b.stud_last_school_attended, b.stud_last_school_address, b.stud_last_school_grade, b.stud_last_school_year, b.stud_last_school_num, a.date_of_admission FROM admission AS a LEFT JOIN stud_information AS b ON a.stud_no = b.stud_no LEFT JOIN useraccounts AS c ON b.stud_no = c.user_id WHERE a.admission_id = '" . $_POST['stud_id'] . "';"));
				$getstudimgid = $_POST['stud_no'];
			}	

			$getstudimage = mysqli_fetch_array(mysqli_query($connection, "SELECT image_path, image_name FROM useraccounts WHERE user_id = '" . $getstudimgid . "';"));

			if($getstudimage == TRUE) {
				if($getstudimage[0] == "" || $getstudimage[1] == ""){
					$dsplyimage = "assets2/images/noimage5.png";
				} else{
					$dsplyimage = $getstudimage[0] . $getstudimage[1];
				}
			} else {
				$dsplyimage = "assets2/images/noimage5.png";
			}

			echo $getstudentinfo[1] . "|" . $getstudentinfo[0] . "|" . $getstudentinfo[3] . "|" . $getstudentinfo[4] . "|" . $getstudentinfo[5] . "|" . $getstudentinfo[6] . "|" . $getstudentinfo[7] . "|" . $getstudentinfo[8] . "|" . $getstudentinfo[9] . "|" . $getstudentinfo[10] . "|" . $getstudentinfo[11] . "|" . $getstudentinfo[12] . "|" . $getstudentinfo[13] . "|" . $dsplyimage;
		break;

		case 'dsplaystudinfo2x2pic':
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE admission_id = '" . $_POST['stud_id'] . "' AND req_status = '0' AND type = '1';");

			echo "<div class='row'>";
			while($row = mysqli_fetch_array($res)){
				$imagereq1 = "snsm_images/requirements/" . $row[0] . "/" . $row[1];

				echo "<div class='col-md-3 mr-2'> 
                    	<div class='card cardhover' style='width:160px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagereq1 ."\");'>
                    		<img class='b-all' src='snsm_images/requirements/" . $row[0] . "/" . $row[1] . "' height='120'> 
                    	</div>
                   	</div>";
			}
			echo "</div>";
		break;

		case 'dsplaystudinfoPSAbirthcert':
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE admission_id = '" . $_POST['stud_id'] . "' AND req_status = '0' AND type = '2';");

			echo "<div class='row'>";
			while($row = mysqli_fetch_array($res)){
				$imagereq2 = "snsm_images/requirements/" . $row[0] . "/" . $row[1];

				echo "<div class='col-md-3 mr-2'> 
                    	<div class='card cardhover' style='width:160px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagereq2 ."\");'>
                    		<img class='b-all' src='snsm_images/requirements/" . $row[0] . "/" . $row[1] . "' height='120'>
                    	</div>
                   	</div>";
			}
			echo "</div>";
		break;

		case 'dsplaystudinforeportcard':
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE admission_id = '" . $_POST['stud_id'] . "' AND req_status = '0' AND type = '3';");

			echo "<div class='row'>";
			while($row = mysqli_fetch_array($res)){
				$imagereq3 = "snsm_images/requirements/" . $row[0] . "/" . $row[1];

				echo "<div class='col-md-3 mr-2'> 
                    	<div class='card cardhover' style='width:160px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagereq3 ."\");'>
                    		<img class='b-all' src='snsm_images/requirements/" . $row[0] . "/" . $row[1] . "' height='120'> 
                    	</div>
                   	</div>";
			}
			echo "</div>";
		break;

		case 'dsplaystudinfocertgoodmoralcharacter':
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE admission_id = '" . $_POST['stud_id'] . "' AND req_status = '0' AND type = '4';");

			echo "<div class='row'>";
			while($row = mysqli_fetch_array($res)){
				$imagereq4 = "snsm_images/requirements/" . $row[0] . "/" . $row[1];

				echo "<div class='col-md-3 mr-2'> 
                    	<div class='card cardhover' style='width:160px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagereq4 ."\");'>
                    		<img class='b-all' src='snsm_images/requirements/" . $row[0] . "/" . $row[1] . "' height='120'>
                    	</div>
                   	</div>";
			}
			echo "</div>";
		break;

		case 'dsplaystudinfopermanentrecord':
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE admission_id = '" . $_POST['stud_id'] . "' AND req_status = '0' AND type = '5';");

			echo "<div class='row'>";
			while($row = mysqli_fetch_array($res)){
				$imagereq5 = "snsm_images/requirements/" . $row[0] . "/" . $row[1];

				echo "<div class='col-md-3 mr-2'> 
                    	<div class='card cardhover' style='width:160px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagereq5 ."\");'>
                    		<img class='b-all' src='snsm_images/requirements/" . $row[0] . "/" . $row[1] . "' height='120'>
                    	</div>
                   	</div>";
			}
			echo "</div>";
		break;

		case 'btnapproverequirementnew':
			$resupdate = mysqli_query($connection, "UPDATE admission SET registrar_stat = '1' WHERE admission_id = '" . $_POST['getstudID'] . "';");
			$resupdate3 = mysqli_query($connection, "UPDATE stud_req SET req_status = '1' WHERE admission_id = '" . $_POST['getstudID'] . "';");

			$getadmissionuser = mysqli_fetch_array(mysqli_query($connection, "SELECT username, password FROM admission_details WHERE admission_id = '" . $_POST['getstudID'] . "'"));
			$ressaveuseraccounts = mysqli_query($connection, "INSERT INTO useraccounts SET user_id = '" . $_POST['getstudID'] . "', user_type = '3', username = '" . $getadmissionuser[0] . "', password = '" . $getadmissionuser[1] . "';");
		break;

		case 'btnapproverequirementold':
			$resupdate = mysqli_query($connection, "UPDATE admission SET registrar_stat = '1' WHERE admission_id = '" . $_POST['getstudID'] . "';");
			$resupdate3 = mysqli_query($connection, "UPDATE stud_req SET req_status = '1' WHERE admission_id = '" . $_POST['getstudID'] . "';");
		break;

		case 'btndenystudrequirement':
			$resupdate = mysqli_query($connection, "UPDATE admission SET deny = '1', Remarks = '" . $_POST['getdenyremarks'] . "' WHERE admission_id = '" . $_POST['getadmission'] . "';");
			$resupdate3 = mysqli_query($connection, "UPDATE stud_req SET req_status = '2' WHERE admission_id = '" . $_POST['getadmission'] . "';");
		break;
	}
?>
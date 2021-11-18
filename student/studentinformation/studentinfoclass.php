<?php
	include_once("../../connect.php");	
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

		case 'loadstudinfo':
			if($_SESSION['status'] == 1){
				$getstudentinfo = mysqli_fetch_array(mysqli_query($connection, "SELECT stud_no, CASE WHEN stud_Mname = '' OR stud_Mname IS NULL THEN CONCAT(stud_Lname, ', ', stud_Fname) ELSE CONCAT(stud_Lname, ', ', stud_Fname, ' ', LEFT(stud_Mname, '1'), '.') END, grade, section, stud_emailadd, stud_num, stud_Fname, stud_Mname, stud_Lname, stud_sex, stud_address, stud_birthday, stud_age, stud_birthplace, stud_religion, stud_mother, stud_mother_occupation, stud_father, stud_father_occupation, stud_guardian, stud_guardian_relationship, stud_guardian_num, stud_last_school_attended, stud_last_school_address, stud_last_school_grade, stud_last_school_year, stud_last_school_num FROM stud_information WHERE stud_no = '" . $_SESSION['user_id'] . "';"));
			} else {
				$getstudentinfo = mysqli_fetch_array(mysqli_query($connection, "SELECT a.admission_id, CASE WHEN a.stud_Mname = '' OR a.stud_Mname IS NULL THEN CONCAT(a.stud_Lname, ', ', a.stud_Fname) ELSE CONCAT(a.stud_Lname, ', ', a.stud_Fname, ' ', LEFT(a.stud_Mname, '1'), '.') END, b.grade, b.section, a.stud_emailadd, a.stud_num, a.stud_Fname, a.stud_Mname, a.stud_Lname , a.stud_sex, a.stud_address, a.stud_birthday, a.stud_age, a.stud_birthplace, a.stud_religion, a.stud_mother, a.stud_mother_occupation, a.stud_father, a.stud_father_occupation, a.stud_guardian, a.stud_guardian_relationship, a.stud_guardian_num, a.stud_last_school_attended, a.stud_last_school_address, a.stud_last_school_grade, a.stud_last_school_year, a.stud_last_school_num FROM admission_details AS a LEFT JOIN admission AS b ON a.admission_id = b.admission_id WHERE a.admission_id = '" . $_SESSION['user_id'] . "';"));
			}

			$getstudimage = mysqli_fetch_array(mysqli_query($connection, "SELECT image_path, image_name FROM useraccounts WHERE user_id = '" . $_SESSION['user_id'] . "';"));

			if($getstudimage[0] == "" || $getstudimage[1] == ""){
				$dsplyimage = "assets2/images/noimage5.png";
			} else{
				$dsplyimage = $getstudimage[0] . $getstudimage[1];
			}

			echo $getstudentinfo[0] . "|" . $getstudentinfo[1] . "|" . $getstudentinfo[2] . "|" . $getstudentinfo[3] . "|" . $getstudentinfo[4] . "|" . $getstudentinfo[5] . "|" . $getstudentinfo[6] . "|" . $getstudentinfo[7] . "|" . $getstudentinfo[8] . "|" . $getstudentinfo[9] . "|" . $getstudentinfo[10] . "|" . $getstudentinfo[4] . "|" . $getstudentinfo[5] . "|" . date('F m, Y', strtotime($getstudentinfo[11])) . "|" . $getstudentinfo[12] . "|" . $getstudentinfo[13] . "|" . $getstudentinfo[14] . "|" . $getstudentinfo[15] . "|" . $getstudentinfo[16] . "|" . $getstudentinfo[17] . "|" . $getstudentinfo[18] . "|" . $getstudentinfo[19] . "|" . $getstudentinfo[20] . "|" . $getstudentinfo[21] . "|" . $getstudentinfo[22] . "|" . $getstudentinfo[23] . "|" . $getstudentinfo[24] . "|" . $getstudentinfo[25] . "|" . $getstudentinfo[26] . "|" . $dsplyimage;
		break;

		case 'openmodaleditinfo':
			if($_SESSION['status'] == 1){
				$getstudentinfo = mysqli_fetch_array(mysqli_query($connection, "SELECT stud_no, stud_emailadd, stud_num, stud_Fname, stud_Mname, stud_Lname, stud_sex, stud_address, stud_birthday, stud_age, stud_birthplace, stud_religion, stud_mother, stud_mother_occupation, stud_father, stud_father_occupation, stud_guardian, stud_guardian_relationship, stud_guardian_num, stud_last_school_attended, stud_last_school_address, stud_last_school_grade, stud_last_school_year, stud_last_school_num FROM stud_information WHERE stud_no = '" . $_SESSION['user_id'] . "';"));
			} else {
				$getstudentinfo = mysqli_fetch_array(mysqli_query($connection, "SELECT a.admission_id, a.stud_emailadd, a.stud_num, a.stud_Fname, a.stud_Mname, a.stud_Lname , a.stud_sex, a.stud_address, a.stud_birthday, a.stud_age, a.stud_birthplace, a.stud_religion, a.stud_mother, a.stud_mother_occupation, a.stud_father, a.stud_father_occupation, a.stud_guardian, a.stud_guardian_relationship, a.stud_guardian_num, a.stud_last_school_attended, a.stud_last_school_address, a.stud_last_school_grade, a.stud_last_school_year, a.stud_last_school_num FROM admission_details AS a LEFT JOIN admission AS b ON a.admission_id = b.admission_id WHERE a.admission_id = '" . $_SESSION['user_id'] . "';"));
			}

			$getstudimage = mysqli_fetch_array(mysqli_query($connection, "SELECT image_path, image_name FROM useraccounts WHERE user_id = '" . $_SESSION['user_id'] . "';"));

			if($getstudimage[0] == "" || $getstudimage[1] == ""){
				$dsplyimage = "assets2/images/noimage5.png";
			} else{
				$dsplyimage = $getstudimage[0] . $getstudimage[1];
			}

			echo $getstudentinfo[3] . "|" . $getstudentinfo[4] . "|" . $getstudentinfo[5] . "|" . $getstudentinfo[6] . "|" . $getstudentinfo[1] . "|" . $getstudentinfo[2] . "|" .  date('m/d/Y', strtotime($getstudentinfo[8])) . "|" . $getstudentinfo[9] . "|" . $getstudentinfo[10] . "|" . $getstudentinfo[11] . "|" . $getstudentinfo[7] . "|" . $getstudentinfo[12] . "|" . $getstudentinfo[13] . "|" . $getstudentinfo[14] . "|" . $getstudentinfo[15] . "|" . $getstudentinfo[16] . "|" . $getstudentinfo[17] . "|" . $getstudentinfo[18] . "|" . $getstudentinfo[19] . "|" . $getstudentinfo[20] . "|" . $getstudentinfo[21] . "|" . $getstudentinfo[22] . "|" . $getstudentinfo[23] . "|" . $dsplyimage . "|" . $getstudimage[1];
		break;

		case 'updatestudentprofile':
			if($_SESSION['status'] == 1){
				$resupdate = mysqli_query($connection, "UPDATE stud_information SET stud_Fname = '" . $_POST['textstudentFname'] . "', stud_Mname = '" . $_POST['textstudentMname'] . "', stud_Lname = '" . $_POST['textstudentLname'] . "', stud_sex = '" . $_POST['textstudentgender'] . "', stud_emailadd = '" . $_POST['textstudentemail'] . "', stud_num = '" . $_POST['textstudentcontactno'] . "', stud_birthday = '" . date('Y-m-d', strtotime($_POST['textstudentbirthday'])) . "', stud_age = '" . $_POST['textstudentage'] . "', stud_birthplace = '" . $_POST['textstudentbirthplace'] . "', stud_religion = '" . $_POST['textstudentreligion'] . "', stud_address = '" . $_POST['textstudentaddress'] . "', stud_mother = '" . $_POST['textstudentmothername'] . "', stud_mother_occupation = '" . $_POST['textstudentmotheroccu'] . "', stud_father = '" . $_POST['textstudentfather'] . "', stud_father_occupation = '" . $_POST['textstudentfatheroccu'] . "', stud_guardian = '" . $_POST['textstudentguardian'] . "', stud_guardian_relationship = '" . $_POST['textstudentrelationship'] . "', stud_guardian_num = '" . $_POST['textstudentguardianconno'] . "', stud_last_school_attended = '" . $_POST['textstudentschoolname'] . "', stud_last_school_address = '" . $_POST['textstudentschooladd'] . "', stud_last_school_grade = '" . $_POST['textstudentschoolgrade'] . "', stud_last_school_year = '" . $_POST['textstudentschoolSY'] . "', stud_last_school_num = '" . $_POST['textstudentschoolconnum'] . "' WHERE stud_no = '" . $_SESSION['user_id'] . "';");
			} else {
				$resupdate = mysqli_query($connection, "UPDATE admission_details SET stud_Fname = '" . $_POST['textstudentFname'] . "', stud_Mname = '" . $_POST['textstudentMname'] . "', stud_Lname = '" . $_POST['textstudentLname'] . "', stud_sex = '" . $_POST['textstudentgender'] . "', stud_emailadd = '" . $_POST['textstudentemail'] . "', stud_num = '" . $_POST['textstudentcontactno'] . "', stud_birthday = '" . date('Y-m-d', strtotime($_POST['textstudentbirthday'])) . "', stud_age = '" . $_POST['textstudentage'] . "', stud_birthplace = '" . $_POST['textstudentbirthplace'] . "', stud_religion = '" . $_POST['textstudentreligion'] . "', stud_address = '" . $_POST['textstudentaddress'] . "', stud_mother = '" . $_POST['textstudentmothername'] . "', stud_mother_occupation = '" . $_POST['textstudentmotheroccu'] . "', stud_father = '" . $_POST['textstudentfather'] . "', stud_father_occupation = '" . $_POST['textstudentfatheroccu'] . "', stud_guardian = '" . $_POST['textstudentguardian'] . "', stud_guardian_relationship = '" . $_POST['textstudentrelationship'] . "', stud_guardian_num = '" . $_POST['textstudentguardianconno'] . "', stud_last_school_attended = '" . $_POST['textstudentschoolname'] . "', stud_last_school_address = '" . $_POST['textstudentschooladd'] . "', stud_last_school_grade = '" . $_POST['textstudentschoolgrade'] . "', stud_last_school_year = '" . $_POST['textstudentschoolSY'] . "', stud_last_school_num = '" . $_POST['textstudentschoolconnum'] . "' WHERE admission_id = '" . $_SESSION['user_id'] . "';");
			}
		break;

		case 'modalaccountsettings':
			$getuseraccount = mysqli_fetch_array(mysqli_query($connection, "SELECT username, password FROM useraccounts WHERE user_id = '" . $_SESSION['user_id'] . "';"));
			echo $getuseraccount[0] . "|" . md5($getuseraccount[1]);
		break;

		case 'updatestudentaccount':
			$resupdate = mysqli_query($connection, "UPDATE useraccounts SET username = '" . $_POST['username'] . "', password = '" . md5($_POST['password']) . "' WHERE user_id = '" . $_SESSION['user_id'] . "';");
		break;

		case 'dsplaytbladmissionlist':
			if($_SESSION['status'] == 1){
				$getstat = "AND a.stud_no = '" . $_SESSION['user_id'] . "'";
			} else {
				$getstat = "AND a.admission_id = '" . $_SESSION['user_id'] . "'";
			}
			$res = mysqli_query($connection, "SELECT a.admission_id, a.date_of_admission, a.deny, a.deny2, a.registrar_stat, a.receipt_stat, a.treasury_stat, a.sched_stat, a.stud_no FROM admission AS a LEFT JOIN admission_details AS b ON a.admission_id = b.admission_id WHERE (a.admission_id LIKE '%". $_POST['key']. "%') AND a.deny = '0' " . $getstat . ";");
			$countstud = mysqli_num_rows($res);
			if($countstud == TRUE){
				while($row = mysqli_fetch_array($res)){
						if($row['deny'] == 0){
							if($row['registrar_stat'] == 1 && $row['receipt_stat'] == 0){
								$status = "Approved";
								$button = "<button class='buttpurple' onclick='fncopenmodaluploadreceipt(\"". $row[0] ."\", \"". $row[8] ."\");' title='Upload Receipt'><i class='fa fa-upload' aria-hidden='true' style='font-size: 1rem'></i></button>";
							} else if($row['registrar_stat'] == 1 && $row['receipt_stat'] == 1 && $row['treasury_stat'] == 0){
								if($row['deny2'] == 1){
									$status = "Payment denied";
									$button = "<button class='buttpurple' onclick='fncopenmodaluploadreceipt(\"". $row[0] ."\", \"". $row[8] ."\");' title='Upload Receipt'><i class='fa fa-upload' aria-hidden='true' style='font-size: 1rem'></i></button>";
								} else {
									$status = "For payment approval";
									$button = "";
								}
							} else if($row['registrar_stat'] == 1 && $row['treasury_stat'] == 1 && $row['sched_stat'] == 0){
								$status = "For Schedule";
								$button = "";
							} else if($row['sched_stat'] == 1){
								$status = "Scheduled";
								$button = "";
							} else if($row['registrar_stat'] == 0){
								$status = "For approval";
								$button = "";
							} else {
								$status = "No record found.";
								$button = "";
							}
						} else {
							$status = "Admission denied";
							$button = "";
						}
					?>
						<tr>
							<td style="white-space: nowrap;"><b><?php echo $row[0]; ?></b></td>
							<td style="white-space: nowrap;"><?php echo date('F d, Y', strtotime($row[1])); ?></td>
							<td style="white-space: nowrap;"><?php echo $status; ?></td>
							<td style="white-space: nowrap; text-align: center;">
								<button class="buttsky" onclick="openadmissionstudinfo('<?php echo $row[0]; ?>'); dsplaystudinfo2x2pic('<?php echo $row[0]; ?>'); dsplaystudinfoPSAbirthcert('<?php echo $row[0]; ?>'); dsplaystudinforeportcard('<?php echo $row[0]; ?>'); dsplaystudinfocertgoodmoralcharacter('<?php echo $row[0]; ?>'); dsplaystudinfopermanentrecord('<?php echo $row[0]; ?>'); dsplaystudinforeceipts('<?php echo $row[0]; ?>'); dsplaystudinfoschedule('<?php echo $row[8]; ?>');" title="View Details"><i class="fa fa-eye" aria-hidden="true" style="font-size: 1rem"></i></button>
								<?php echo $button; ?>
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

		case 'dsplaystudinfo2x2pic':
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE admission_id = '" . $_POST['stud_id'] . "' AND type = '1';");

			echo "<div class='row'>";
			while($row = mysqli_fetch_array($res)){
				$imagereq1 = "snsm_images/requirements/" . $row[0] . "/" . $row[1];

				echo "<div class='col-md-3 mr-2'> 
                    	<div class='card cardhover' style='width:160px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagereq1 ."\");'>
                    		<img class='b-all' src='snsm_images/requirements/" . $row[0] . "/" . $row[1] . "' height='120'/>  
                    	</div>
                   	</div>";
			}
			echo "</div>";
		break;

		case 'dsplaystudinfoPSAbirthcert':
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE admission_id = '" . $_POST['stud_id'] . "' AND type = '2';");

			echo "<div class='row'>";
			while($row = mysqli_fetch_array($res)){
				$imagereq2 = "snsm_images/requirements/" . $row[0] . "/" . $row[1];

				echo "<div class='col-md-3 mr-2'> 
                    	<div class='card cardhover' style='width:160px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagereq2 ."\");'>
                    		<img class='b-all' src='snsm_images/requirements/" . $row[0] . "/" . $row[1] . "' height='120'/>  
                    	</div>
                   	</div>";
			}
			echo "</div>";
		break;

		case 'dsplaystudinforeportcard':
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE admission_id = '" . $_POST['stud_id'] . "' AND type = '3';");

			echo "<div class='row'>";
			while($row = mysqli_fetch_array($res)){
				$imagereq3 = "snsm_images/requirements/" . $row[0] . "/" . $row[1];

				echo "<div class='col-md-3 mr-2'> 
                    	<div class='card cardhover' style='width:160px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagereq3 ."\");'>
                    		<img class='b-all' src='snsm_images/requirements/" . $row[0] . "/" . $row[1] . "' height='120'/>  
                    	</div>
                   	</div>";
			}
			echo "</div>";
		break;

		case 'dsplaystudinfocertgoodmoralcharacter':
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE admission_id = '" . $_POST['stud_id'] . "' AND type = '4';");

			echo "<div class='row'>";
			while($row = mysqli_fetch_array($res)){
				$imagereq4 = "snsm_images/requirements/" . $row[0] . "/" . $row[1];

				echo "<div class='col-md-3 mr-2'> 
                    	<div class='card cardhover' style='width:160px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagereq4 ."\");'>
                    		<img class='b-all' src='snsm_images/requirements/" . $row[0] . "/" . $row[1] . "' height='120'/>  
                    	</div>
                   	</div>";
			}
			echo "</div>";
		break;

		case 'dsplaystudinfopermanentrecord':
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE admission_id = '" . $_POST['stud_id'] . "' AND type = '5';");

			echo "<div class='row'>";
			while($row = mysqli_fetch_array($res)){
				$imagereq5 = "snsm_images/requirements/" . $row[0] . "/" . $row[1];

				echo "<div class='col-md-3 mr-2'> 
                    	<div class='card cardhover' style='width:160px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagereq5 ."\");'>
                    		<img class='b-all' src='snsm_images/requirements/" . $row[0] . "/" . $row[1] . "' height='120'/> 
                    	</div>
                   	</div>";
			}
			echo "</div>";
		break;

		case 'dsplaystudinforeceipts':
			$count = "";
			$res = mysqli_query($connection, "SELECT admission_id, image, date_uploaded FROM stud_receipt WHERE admission_id = '" . $_POST['stud_id'] . "' AND req_status != '2';");
			$countreceipts = mysqli_num_rows($res);

			echo "<div class='row'>";
			while($row = mysqli_fetch_array($res)){
				$imagerec = "snsm_images/receipts/" . $row[0] . "/" . $row[1];

				$count++;
				if($count == $countreceipts){
					echo "<div class='col-md-12'>
							<label class='control-label studproflabel'>" . date('F d, Y', strtotime($row[2])) . "</label> 
						</div>
						<div class='col-md-3 mr-2'> 
	                    	<div class='card cardhover' style='width:160px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagerec ."\");'>
	                    		<img class='b-all' src='snsm_images/receipts/" . $row[0] . "/" . $row[1] . "' height='150'/> 
	                    	</div>
	                   	</div>";
				} else {
					echo "<div class='col-md-12'>
							<label class='control-label studproflabel'>" . date('F d, Y', strtotime($row[2])) . "</label> 
						</div>
						<div class='col-md-3 mr-2'> 
	                    	<div class='card cardhover' style='width:160px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagerec ."\");'>
	                    		<img class='b-all' src='snsm_images/receipts/" . $row[0] . "/" . $row[1] . "' height='150'/> 
	                    	</div>
	                   	</div>
	                   	<div class='col-md-12'>
	                    	<hr style='width: 65%; margin-bottom: 5px;'>
	                    </div>";
				}
			}
			echo "</div>";

		break;

		case 'dsplaystudinfoschedule':
			$count = "";
			$res = mysqli_query($connection, "SELECT stud_id, image, date_uploaded FROM stud_schedule WHERE stud_id = '" . $_POST['stud_id'] . "';");
			$countreceipts = mysqli_num_rows($res);

			echo "<div class='row'>";
			while($row = mysqli_fetch_array($res)){
				$imagesched = "snsm_images/schedule/" . $row[0] . "/" . $row[1];

				$count++;
				if($count == $countreceipts){
					echo "<div class='col-md-12'>
							<label class='control-label studproflabel'>" . date('F d, Y', strtotime($row[2])) . "</label> 
						</div>
						<div class='col-md-3 mr-2'> 
	                    	<div class='card cardhover' style='width:160px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagesched ."\");'>
	                    		<img class='b-all' src='snsm_images/schedule/" . $row[0] . "/" . $row[1] . "' height='150'/> 
	                    	</div>
	                   	</div>";
				} else {
					echo "<div class='col-md-12'>
							<label class='control-label studproflabel'>" . date('F d, Y', strtotime($row[2])) . "</label> 
						</div>
						<div class='col-md-3 mr-2'> 
	                    	<div class='card cardhover' style='width:160px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagesched ."\");'>
	                    		<img class='b-all' src='snsm_images/schedule/" . $row[0] . "/" . $row[1] . "' height='150'/> 
	                    	</div>
	                   	</div>
	                   	<div class='col-md-12'>
	                    	<hr style='width: 65%; margin-bottom: 5px;'>
	                    </div>";
				}
			}
			echo "</div>";
		break;
	}
?>
<?php
	include_once("../../connect.php");	
	session_start();

	switch($_POST["form"]) {

		case 'dsplaytblstudentadmissionlist':
			// $res = mysqli_query($connection, "SELECT a.stud_no, CASE WHEN a.stud_Mname = '' OR a.stud_Mname IS NULL THEN CONCAT(a.stud_Lname, ', ', a.stud_Fname) ELSE CONCAT(a.stud_Lname, ', ', a.stud_Fname, ' ', LEFT(a.stud_Mname, '1'), '.') END, b.date_of_admission, a.stud_sex, a.stud_address, a.stud_num, a.stud_type FROM stud_information AS a LEFT JOIN admission AS b ON a.stud_no = b.stud_no WHERE (CASE WHEN a.stud_Mname = '' OR a.stud_Mname IS NULL THEN CONCAT(a.stud_Lname, ', ', a.stud_Fname) ELSE CONCAT(a.stud_Lname, ', ', a.stud_Fname, ' ', LEFT(a.stud_Mname, '1'), '.') END LIKE '%" . $_POST['key'] . "%' OR a.stud_no LIKE '%". $_POST['key']. "%')");

			$res = mysqli_query($connection, "SELECT stud_no, CASE WHEN stud_Mname = '' OR stud_Mname IS NULL THEN CONCAT(stud_Lname, ', ', stud_Fname) ELSE CONCAT(stud_Lname, ', ', stud_Fname, ' ', LEFT(stud_Mname, '1'), '.') END, stud_sex, stud_address, stud_num, stud_type FROM stud_information WHERE (CASE WHEN stud_Mname = '' OR stud_Mname IS NULL THEN CONCAT(stud_Lname, ', ', stud_Fname) ELSE CONCAT(stud_Lname, ', ', stud_Fname, ' ', LEFT(stud_Mname, '1'), '.') END LIKE '%" . $_POST['key'] . "%' OR stud_no LIKE '%". $_POST['key']. "%')");
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
							<td style="white-space: nowrap;"><?php echo $row[2]; ?></td>
							<td style=""><?php echo $row[3]; ?></td>
							<td style="white-space: nowrap;"><?php echo $row[4]; ?></td>
							<td style="white-space: nowrap;"><?php echo $studenttype; ?></td>
							<td style="white-space: nowrap; text-align: center;">
								<button class="buttsky" onclick="openadmissionstudinfo('<?php echo $row[0]; ?>'); dsplaystudinfo2x2pic('<?php echo $row[0]; ?>'); dsplaystudinfoPSAbirthcert('<?php echo $row[0]; ?>'); dsplaystudinforeportcard('<?php echo $row[0]; ?>'); dsplaystudinfocertgoodmoralcharacter('<?php echo $row[0]; ?>'); dsplaystudinfopermanentrecord('<?php echo $row[0]; ?>'); dsplaystudinforeceipts('<?php echo $row[0]; ?>'); dsplaystudinfoschedule('<?php echo $row[0]; ?>')"><i class="fa fa-eye" aria-hidden="true" style="font-size: 1rem"></i>
								</button>
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
			$getstudentinfo = mysqli_fetch_array(mysqli_query($connection, "SELECT a.stud_no, CASE WHEN a.stud_Mname = '' OR a.stud_Mname IS NULL THEN CONCAT(a.stud_Lname, ', ', a.stud_Fname) ELSE CONCAT(a.stud_Lname, ', ', a.stud_Fname, ' ', LEFT(a.stud_Mname, '1'), '.') END, a.stud_type, b.username, a.stud_sex, a.stud_address, a.stud_emailadd, a.stud_num, a.stud_last_school_attended, a.stud_last_school_address, a.stud_last_school_grade, a.stud_last_school_year, a.stud_last_school_num, a.stud_birthday, a.stud_age, a.stud_birthplace, a.stud_religion, a.stud_mother, a.stud_mother_occupation, a.stud_father, a.stud_father_occupation, a.stud_guardian, a.stud_guardian_relationship, a.stud_guardian_num FROM stud_information AS a LEFT JOIN useraccounts AS b ON a.stud_no = b.user_id WHERE a.stud_no = '" . $_POST['stud_id'] . "';"));

			$getstudimage = mysqli_fetch_array(mysqli_query($connection, "SELECT image_path, image_name FROM useraccounts WHERE user_id = '" . $_POST['stud_id'] . "';"));

			if($getstudimage[0] == "" || $getstudimage[1] == ""){
				$dsplyimage = "assets2/images/noimage5.png";
			} else{
				$dsplyimage = $getstudimage[0] . $getstudimage[1];
			}

			echo $getstudentinfo[1] . "|" . $getstudentinfo[0] . "|" . $getstudentinfo[3] . "|" . $getstudentinfo[4] . "|" . $getstudentinfo[5] . "|" . $getstudentinfo[6] . "|" . $getstudentinfo[7] . "|" . $getstudentinfo[8] . "|" . $getstudentinfo[9] . "|" . $getstudentinfo[10] . "|" . $getstudentinfo[11] . "|" . $getstudentinfo[12] . "|" . $dsplyimage . "|" . date('F m, Y', strtotime($getstudentinfo[13])) . "|" . $getstudentinfo[14] . "|" . $getstudentinfo[15] . "|" . $getstudentinfo[16] . "|" . $getstudentinfo[17] . "|" . $getstudentinfo[18] . "|" . $getstudentinfo[19] . "|" . $getstudentinfo[20] . "|" . $getstudentinfo[21] . "|" . $getstudentinfo[22] . "|" . $getstudentinfo[23];
		break;

		case 'dsplaystudinfo2x2pic':
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE stud_id = '" . $_POST['stud_id'] . "' AND type = '1';");

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
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE stud_id = '" . $_POST['stud_id'] . "' AND type = '2';");

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
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE stud_id = '" . $_POST['stud_id'] . "' AND type = '3';");

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
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE stud_id = '" . $_POST['stud_id'] . "' AND type = '4';");

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
			$res = mysqli_query($connection, "SELECT admission_id, image FROM stud_req WHERE stud_id = '" . $_POST['stud_id'] . "' AND type = '5';");

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
			$res = mysqli_query($connection, "SELECT admission_id, image, date_uploaded FROM stud_receipt WHERE stud_id = '" . $_POST['stud_id'] . "'AND req_status != '2';");
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
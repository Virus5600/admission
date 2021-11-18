<?php
	include_once("../../connect.php");	
	session_start();

	switch($_POST["form"]) {

		case 'dsplaynumnewadmission':
			$sql = "SELECT COUNT(*) FROM admission WHERE DATE(date_of_admission) = DATE(CURDATE()) AND ((registrar_stat = '0' OR treasury_stat = '0') OR (treasury_stat = '1' AND registrar_stat = '0')) AND deny = '0'";
			$res = mysqli_query($connection, $sql);
			$row = mysqli_fetch_array($res);
			echo number_format($row[0]);

			$resstudents = mysqli_query($connection, "SELECT id FROM stud_information WHERE status ='1';");
			$countstud = mysqli_num_rows($resstudents);
			$percenter = 100 / intval($countstud);

			$totalpercent = $percenter * $row[0];
			echo "|".$totalpercent;
		break;

		case 'dsplaynumnewstudents':
			$sql = "SELECT COUNT(*) FROM admission WHERE DATE(date_of_admission) = DATE(CURDATE()) AND sched_stat = '1' AND stud_type = '0';";
			$res = mysqli_query($connection, $sql);
			$row = mysqli_fetch_array($res);
			echo number_format($row[0]);

			$resstudents = mysqli_query($connection, "SELECT id FROM stud_information WHERE status = '1';");
			$countstud = mysqli_num_rows($resstudents);
			$percenter = 100 / intval($countstud);

			$totalpercent = $percenter * $row[0];
			echo "|".$totalpercent;
		break;

		case 'dsplaynumpendingstudents':
			$sql = "SELECT COUNT(*) FROM admission WHERE (registrar_stat = '0' OR treasury_stat = '0') AND deny = '0'";
			$res = mysqli_query($connection, $sql);
			$row = mysqli_fetch_array($res);
			echo number_format($row[0]);

			$resstudents = mysqli_query($connection, "SELECT id FROM stud_information WHERE status ='1';");
			$countstud = mysqli_num_rows($resstudents);
			$percenter = 100 / intval($countstud);

			$totalpercent = $percenter * $row[0];
			echo "|".$totalpercent;
		break;

		case 'dsplaynumtotalstudents':
			$sql = "SELECT COUNT(*) FROM stud_information WHERE status ='1'";
			$res = mysqli_query($connection, $sql);
			$row = mysqli_fetch_array($res);
			echo number_format($row[0]);

			$resstudents = mysqli_query($connection, "SELECT id FROM stud_information WHERE status ='1';");
			$countstud = mysqli_num_rows($resstudents);
			$percenter = 100 / intval($countstud);

			$totalpercent = $percenter * $row[0];
			echo "|".$totalpercent;
		break;

		case 'dsplaywaitingpaymentlist':
			$res = mysqli_query($connection, "SELECT admission_id, CASE WHEN stud_Mname = '' OR stud_Mname IS NULL THEN CONCAT(stud_Lname, ', ', stud_Fname) ELSE CONCAT(stud_Lname, ', ', stud_Fname, ' ', LEFT(stud_Mname, '1'), '.') END, date_of_admission, stud_type FROM admission WHERE registrar_stat = '1' AND receipt_stat = '0' AND treasury_stat = '0'");
			$countstud = mysqli_num_rows($res);
			if($countstud == TRUE){
				while($row = mysqli_fetch_array($res)){
					if($row[3] == 0){
						$studenttype = "NEW STUDENT";
					} else {
						$studenttype = "OLD STUDENT";
					}
					?>
					<li class="item itemhover" style="border-bottom: 1px solid #e9edf0;">
		                <div class="item-row">

		                    <div class="item-col item-col-sales no-overflow">
		                        <div> 
		                        	<a href="#">
		                            	<h4 class="item-title no-wrap"><?php echo $row[0]; ?></h4> 
		                        	</a>
		                        </div>
		                    </div>

		                    <div class="item-col item-col-title no-overflow">
		                        <div>
		                            <h4 class="item-title no-wrap" id="shasha"><?php echo $row[1]; ?></h4>
		                        </div>
		                    </div>

		                    <div class="item-col item-col-stats no-overflow">
		                        <div>
		                            <h4 class="item-title no-wrap"><?php echo $studenttype; ?></h4>
		                        </div>
		                    </div>

		                    <div class="item-col item-col-date no-overflow">
		                        <div>
		                            <h4 class="item-title no-wrap"><?php echo date('m-d-Y', strtotime($row[2])); ?></h4>
		                        </div>
		                    </div>

		                </div>
		            </li>
					<?php
				}
			} else {
				echo 2;
			}
		break;

		case 'dsplaywaitingforpayapplist':
			$res = mysqli_query($connection, "SELECT admission_id, CASE WHEN stud_Mname = '' OR stud_Mname IS NULL THEN CONCAT(stud_Lname, ', ', stud_Fname) ELSE CONCAT(stud_Lname, ', ', stud_Fname, ' ', LEFT(stud_Mname, '1'), '.') END, date_of_admission, stud_type FROM admission WHERE registrar_stat = '1' AND receipt_stat = '1' AND treasury_stat = '0'");
			$countstud = mysqli_num_rows($res);
			if($countstud == TRUE){
				while($row = mysqli_fetch_array($res)){
					if($row[3] == 0){
						$studenttype = "NEW STUDENT";
					} else {
						$studenttype = "OLD STUDENT";
					}
					?>
					<li class="item itemhover" style="border-bottom: 1px solid #e9edf0;">
		                <div class="item-row">

		                    <div class="item-col item-col-sales no-overflow">
		                        <div> 
		                        	<a href="#">
		                            	<h4 class="item-title no-wrap"><?php echo $row[0]; ?></h4> 
		                        	</a>
		                        </div>
		                    </div>

		                    <div class="item-col item-col-title no-overflow">
		                        <div>
		                            <h4 class="item-title no-wrap" id="shasha"><?php echo $row[1]; ?></h4>
		                        </div>
		                    </div>

		                    <div class="item-col item-col-stats no-overflow">
		                        <div>
		                            <h4 class="item-title no-wrap"><?php echo $studenttype; ?></h4>
		                        </div>
		                    </div>

		                    <div class="item-col item-col-date no-overflow">
		                        <div>
		                            <h4 class="item-title no-wrap"><?php echo date('m-d-Y', strtotime($row[2])); ?></h4>
		                        </div>
		                    </div>

		                </div>
		            </li>
					<?php
				}
			} else {
				echo 2;
			}
		break;

		case 'dsplayapprovepaymentlist':
			$res = mysqli_query($connection, "SELECT stud_no, CASE WHEN stud_Mname = '' OR stud_Mname IS NULL THEN CONCAT(stud_Lname, ', ', stud_Fname) ELSE CONCAT(stud_Lname, ', ', stud_Fname, ' ', LEFT(stud_Mname, '1'), '.') END, date_of_admission, stud_type FROM admission WHERE treasury_stat = '1'");
			$countstud = mysqli_num_rows($res);
			if($countstud == TRUE){
				while($row = mysqli_fetch_array($res)){
					if($row[3] == 0){
						$studenttype = "NEW STUDENT";
					} else {
						$studenttype = "OLD STUDENT";
					}
					?>
					<li class="item itemhover" style="border-bottom: 1px solid #e9edf0;">
		                <div class="item-row">

		                    <div class="item-col item-col-sales no-overflow">
		                        <div> 
		                        	<a href="#">
		                            	<h4 class="item-title no-wrap"><?php echo $row[0]; ?></h4> 
		                        	</a>
		                        </div>
		                    </div>

		                    <div class="item-col item-col-title no-overflow">
		                        <div>
		                            <h4 class="item-title no-wrap" id="shasha"><?php echo $row[1]; ?></h4>
		                        </div>
		                    </div>

		                    <div class="item-col item-col-stats no-overflow">
		                        <div>
		                            <h4 class="item-title no-wrap"><?php echo $studenttype; ?></h4>
		                        </div>
		                    </div>

		                    <div class="item-col item-col-date no-overflow">
		                        <div>
		                            <h4 class="item-title no-wrap"><?php echo date('m-d-Y', strtotime($row[2])); ?></h4>
		                        </div>
		                    </div>

		                </div>
		            </li>
					<?php
				}
			} else {
				echo 2;
			}
		break;
	}
?>
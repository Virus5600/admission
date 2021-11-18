<?php
	include_once("../../connect.php");	
	session_start();

	switch($_POST["form"]) {

		case 'displayschedule':
			$res = mysqli_query($connection, "SELECT stud_id, image, date_uploaded FROM stud_schedule WHERE stud_id = '" . $_SESSION['user_id'] . "' ORDER BY DATE(date_uploaded) DESC;");
			$count = mysqli_num_rows($res);
			if($count == TRUE){
				while($row = mysqli_fetch_array($res)){
					$imagesched = "snsm_images/schedule/" . $row[0] . "/" . $row[1];

					echo "<div class='row'>
	                    <div class='col-md-12 mb-2' style='padding-left: 0px; padding-right: 0px'>
	                        <button class='informationheader' style='width: 100%'><b>" . date('F d, Y', strtotime($row[2])) . "</b></button>
	                    </div>
	                </div>

	                <div class='row mb-3'>
	                    <div class='col-md-12'>
	                        <center>                                    
	                            <div class='card cardhover2' style='width:300px; margin-top: 10px;' onclick='fncopenreq1img(\"". $imagesched ."\");'>
	                                <img src='snsm_images/schedule/" . $row[0] . "/" . $row[1] . "' class='b-all' height='260' style='width: 300px'/>
	                            </div>
	                        </center>
	                    </div>
	                </div>";
				}
			} else {
				echo 2;
			}
		break;
	}
?>
<script type="text/javascript">
	$(function() {
		$(".dates-inputmask").inputmask("99/99/9999");
        $("#studentinfomenu").addClass('active');
        loadstudinfo();

        $('#txtsearchadmission').keyup(function(){
            dsplaytbladmissionlist();
        });
	})

	function reqField1 ( classN ){
        var isValid = 1;
        $('.'+classN).each(function(){
            if( $(this).val() == '' ){
                $(this).css('border','1px #a94442 solid');
                $(this).addClass('lala');
                isValid = 0;
            } else {
                $(this).css('border','');
                $(this).removeClass('lala');
            }
        });

        return isValid;
    }

	function loadstudinfo(){
		$.ajax ({
			type: 'POST',
			url: 'student/studentinformation/studentinfoclass.php',
			data: 'form=loadstudinfo',
			success: function(data) {
				var show = data.split('|');
				$('#txtstudLinfoID').text(show[0]);
				$('#txtstudLinfoname').text(show[1]);
				$('#txtstudLinfograde').text(show[2]);
				$('#txtstudLinfosection').text(show[3]);
				$('#txtstudLinfoemail').text(show[4]);
				$('#txtstudLinfoconnum').text(show[5]);
				$('#txtstudinfostudFname').text(show[6]);
				$('#txtstudinfostudMname').text(show[7]);
				$('#txtstudinfostudLname').text(show[8]);
				$('#txtstudinfostudgender').text(show[9]);
				$('#txtstudinfostudaddress').text(show[10]);
				$('#txtstudinfostudemail').text(show[11]);
				$('#txtstudinfostudnum').text(show[12]);
				$('#txtstudinfostudbirthday').text(show[13]);
				$('#txtstudinfostudage').text(show[14]);
				$('#txtstudinfostudbirthplace').text(show[15]);
				$('#txtstudinfostudreligion').text(show[16]);
				$('#txtstudinfostudmother').text(show[17]);
				$('#txtstudinfostudmotheroccu').text(show[18]);
				$('#txtstudinfostudfather').text(show[19]);
				$('#txtstudinfostudfatheroccu').text(show[20]);
				$('#txtstudinfostudguardian').text(show[21]);
				$('#txtstudinfostudguardianrel').text(show[22]);
				$('#txtstudinfostudguardiannum').text(show[23]);
				$('#txtstudinfostudprevschool').text(show[24]);
				$('#txtstudinfostudprevschooladd').text(show[25]);
				$('#txtstudinfostudprevschoolgrade').text(show[26]);
				$('#txtstudinfostudprevschoolyear').text(show[27]);
				$('#txtstudinfoschoolnum').text(show[28]);

				$('#studinfoimage').attr('src', show[29]);
			}
		})
	}

	function openmodaleditinfo(){
		$("#modaleditinfo").modal('show');
		$.ajax ({
			type: 'POST',
			url: 'student/studentinformation/studentinfoclass.php',
			data: 'form=openmodaleditinfo',
			success: function(data) {
				var show = data.split('|');
				$('#txtstudentFname').val(show[0]);
				$('#txtstudentMname').val(show[1]);
				$('#txtstudentLname').val(show[2]);
				$('#txtstudentgender').val(show[3]);
				$('#txtstudentemail').val(show[4]);
				$('#txtstudentcontactno').val(show[5]);
				$('#txtstudentbirthday').val(show[6]);
				$('#txtstudentage').val(show[7]);
				$('#txtstudentbirthplace').val(show[8]);
				$('#txtstudentreligion').val(show[9]);
				$('#txtstudentaddress').val(show[10]);
				$('#txtstudentmothername').val(show[11]);
				$('#txtstudentmotheroccu').val(show[12]);
				$('#txtstudentfather').val(show[13]);
				$('#txtstudentfatheroccu').val(show[14]);
				$('#txtstudentguardian').val(show[15]);
				$('#txtstudentrelationship').val(show[16]);
				$('#txtstudentguardianconno').val(show[17]);
				$('#txtstudentschoolname').val(show[18]);
				$('#txtstudentschooladd').val(show[19]);
				$('#txtstudentschoolgrade').val(show[20]);
				$('#txtstudentschoolSY').val(show[21]);
				$('#txtstudentschoolconnum').val(show[22]);

				$('#updateprofileImage').attr('src', show[23]);
				$('#txtupdateprofileImagefile').val(show[24]);
			}
		})
	}

	function getage(){
        var Dateofbirth = $("#txtstudentbirthday").val();
        $.ajax({
            type: 'POST',
            url: 'student/studentinformation/studentinfoclass.php',
            data:'Dateofbirth='+Dateofbirth+'&form=getage',
            success: function(data){
                $('#txtstudentage').val(data);
            }
        });
    }

	function fncShowstudPic(){
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("txtupdateprofileImagefile").files[0]);
		oFReader.onload = function (oFREvent) {
			document.getElementById("updateprofileImage").src = oFREvent.target.result;
		};
	}

	function updatestudentprofile(){
		var textstudentFname = $('#txtstudentFname').val().toUpperCase();
		var textstudentMname = $('#txtstudentMname').val().toUpperCase();
		var textstudentLname = $('#txtstudentLname').val().toUpperCase();
		var textstudentgender = $('#txtstudentgender').val().toUpperCase();
		var textstudentemail = $('#txtstudentemail').val();
		var textstudentcontactno = $('#txtstudentcontactno').val();
		var textstudentbirthday = $('#txtstudentbirthday').val();
		var textstudentage = $('#txtstudentage').val();
		var textstudentbirthplace = $('#txtstudentbirthplace').val().toUpperCase();
		var textstudentreligion = $('#txtstudentreligion').val().toUpperCase();
		var textstudentaddress = $('#txtstudentaddress').val().toUpperCase();
		var textstudentmothername = $('#txtstudentmothername').val().toUpperCase();
		var textstudentmotheroccu = $('#txtstudentmotheroccu').val().toUpperCase();
		var textstudentfather = $('#txtstudentfather').val().toUpperCase();
		var textstudentfatheroccu = $('#txtstudentfatheroccu').val().toUpperCase();
		var textstudentguardian = $('#txtstudentguardian').val().toUpperCase();
		var textstudentrelationship = $('#txtstudentrelationship').val().toUpperCase();
		var textstudentguardianconno = $('#txtstudentguardianconno').val().toUpperCase();
		var textstudentschoolname = $('#txtstudentschoolname').val().toUpperCase();
		var textstudentschooladd = $('#txtstudentschooladd').val().toUpperCase();
		var textstudentschoolgrade = $('#txtstudentschoolgrade').val().toUpperCase();
		var textstudentschoolSY = $('#txtstudentschoolSY').val();
		var textstudentschoolconnum = $('#txtstudentschoolconnum').val();
		var textprofimagename = $('#txtupdateprofileImagefile').val();

		$(".preloader").show().css('background','rgba(255,255,255,0.5)');
		$.ajax ({
			type: 'POST',
			url: 'student/studentinformation/studentinfoclass.php',
			data: 'textstudentFname=' + textstudentFname + '&textstudentMname=' + textstudentMname +  '&textstudentLname=' + textstudentLname +  '&textstudentgender=' + textstudentgender +  '&textstudentemail=' + textstudentemail +  '&textstudentcontactno=' + textstudentcontactno +  '&textstudentbirthday=' + textstudentbirthday +  '&textstudentage=' + textstudentage +  '&textstudentbirthplace=' + textstudentbirthplace +  '&textstudentreligion=' + textstudentreligion +  '&textstudentaddress=' + textstudentaddress +  '&textstudentmothername=' + textstudentmothername +  '&textstudentmotheroccu=' + textstudentmotheroccu +  '&textstudentfather=' + textstudentfather +  '&textstudentfatheroccu=' + textstudentfatheroccu +  '&textstudentguardian=' + textstudentguardian +  '&textstudentrelationship=' + textstudentrelationship +  '&textstudentguardianconno=' + textstudentguardianconno +  '&textstudentschoolname=' + textstudentschoolname +  '&textstudentschooladd=' + textstudentschooladd +  '&textstudentschoolgrade=' + textstudentschoolgrade +  '&textstudentschoolSY=' + textstudentschoolSY +  '&textstudentschoolconnum=' + textstudentschoolconnum + '&form=updatestudentprofile',
			success: function(data) {
				$("#modaleditinfo").modal('hide');
				fncUpdateImage();
				setTimeout(function(){
					$(".preloader").hide().css('background','');
					Swal.fire(
                      'Success!',
                      'Successfully Updated.',
                      'success'
                    )
	                window.location.reload();
				},2000);
			}
		})
	}

	function fncUpdateImage(){
        var textimage = $('#txtupdateprofileImagefile').val();
        if(textimage != ""){
            var data = new FormData($('#frmUploadstudimage')[0]);
            $.ajax({
                type: 'POST',
                url: 'student/studentinformation/uploadstudprofile.php',
                data: data,
                mimeType: 'multipart/form-data',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data){

                }
            });
        } else {

        }
    }

    function modalaccountsettings(){
    	$("#modalaccountsettings").modal('show');
		$.ajax ({
			type: 'POST',
			url: 'student/studentinformation/studentinfoclass.php',
			data: 'form=modalaccountsettings',
			success: function(data) {
				var show = data.split('|');
				$('#txtstudentusername').val(show[0]);
				// $('#txtstudentpass').val(show[1]);
				// $('#txtstudentconfirmpass').val(show[1]);
			}
		})
	}

	function updatestudentaccount(){
		var username = $('#txtstudentusername').val();
		var password = $('#txtstudentpass').val();
		var confirmpassword = $('#txtstudentconfirmpass').val();

		if( reqField1( 'reqstudentinfo2' ) == 1 ){
			if(password != confirmpassword){
	            alert("Password and confirm password mismatched!");
	            $("#txtstudentpass").css('border','1px #a94442 solid');
	            $("#txtstudentpass").addClass('lala');
	            $("#txtstudentconfirmpass").css('border','1px #a94442 solid');
	            $("#txtstudentconfirmpass").addClass('lala');
	        } else{
	            $("#txtstudentpass").css('border','');
	            $("#txtstudentpass").removeClass('lala');
	            $("#txtstudentconfirmpass").css('border','');
	            $("#txtstudentconfirmpass").removeClass('lala');

				$(".preloader").show().css('background','rgba(255,255,255,0.5)');
				$.ajax ({
					type: 'POST',
					url: 'student/studentinformation/studentinfoclass.php',
					data: 'username=' + username + '&password=' + password + '&form=updatestudentaccount',
					success: function(data) {
						$("#modalaccountsettings").modal('hide');
						setTimeout(function(){
							$(".preloader").hide().css('background','');
							Swal.fire(
		                      'Success!',
		                      'Successfully Updated.',
		                      'success'
		                    )
			                window.location.reload();
						},1500);
					}
				})
	        }
	    } else{
	    	alert('Please review your entries. Ensure all fields are filled out');
	    }
	}

	function modaladmission(){
    	$("#modaladmission").modal('show');
		dsplaytbladmissionlist();
	}

	function dsplaytbladmissionlist(){
		var textsearchstudadmission = $('#txtsearchadmission').val();
		$.ajax ({
			type: 'POST',
			url: 'student/studentinformation/studentinfoclass.php',
			data: 'key=' + textsearchstudadmission + '&form=dsplaytbladmissionlist',
			success: function(data) {
				$("#tbladmissionlist").html(data);
			}
		})
	}

	function openadmissionstudinfo(){
		$("#modaladmissionstudinfo").modal('show');
		openstudentrequirements();
	}

	function openstudentrequirements(){
		$('#dsplystuddet').css('color', '');
		$('#dsplystudentreq').css('color', '#85CE36');
		$('#dsplystudentreceipt').css('color', '');
		$('#dsplystudentschedule').css('color', '');

		$('#bodystudentdet').css('display', 'none');
		$('#bodystudentreq').css('display', 'block');
		$('#bodystudentrec').css('display', 'none');
		$('#bodystudentsched').css('display', 'none');

	}

	function openstudentreceipts(){
		$('#dsplystuddet').css('color', '');
		$('#dsplystudentreq').css('color', '');
		$('#dsplystudentreceipt').css('color', '#85CE36');
		$('#dsplystudentschedule').css('color', '');

		$('#bodystudentdet').css('display', 'none');
		$('#bodystudentreq').css('display', 'none');
		$('#bodystudentrec').css('display', 'block');
		$('#bodystudentsched').css('display', 'none');
	}

	function openstudentschedules(){
		$('#dsplystuddet').css('color', '');
		$('#dsplystudentreq').css('color', '');
		$('#dsplystudentreceipt').css('color', '');
		$('#dsplystudentschedule').css('color', '#85CE36');

		$('#bodystudentdet').css('display', 'none');
		$('#bodystudentreq').css('display', 'none');
		$('#bodystudentrec').css('display', 'none');
		$('#bodystudentsched').css('display', 'block');
	}

	function dsplaystudinfo2x2pic(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'student/studentinformation/studentinfoclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaystudinfo2x2pic',
			success: function(data) {
				$('#2x2idphotolist').html(data);
			}
		})
	}

	function dsplaystudinfoPSAbirthcert(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'student/studentinformation/studentinfoclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaystudinfoPSAbirthcert',
			success: function(data) {
				$('#PSAbirthcertlist').html(data);
			}
		})
	}

	function dsplaystudinforeportcard(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'student/studentinformation/studentinfoclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaystudinforeportcard',
			success: function(data) {
				$('#reportcardlist').html(data);
			}
		})
	}

	function dsplaystudinfocertgoodmoralcharacter(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'student/studentinformation/studentinfoclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaystudinfocertgoodmoralcharacter',
			success: function(data) {
				$('#certgoodmoralcharacterlist').html(data);
			}
		})
	}

	function dsplaystudinfopermanentrecord(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'student/studentinformation/studentinfoclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaystudinfopermanentrecord',
			success: function(data) {
				$('#permanentrecordlist').html(data);
			}
		})
	}

	function dsplaystudinforeceipts(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'student/studentinformation/studentinfoclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaystudinforeceipts',
			success: function(data) {
				$('#bodystudentrec').html(data);
			}
		})
	}

	function dsplaystudinfoschedule(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'student/studentinformation/studentinfoclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaystudinfoschedule',
			success: function(data) {
				$('#bodystudentsched').html(data);
			}
		})
	}

	function fncopenreq1img(image){
		$("#modalopenimage").modal('show');
		$("#studviewimage").attr('src', image);
	}

	function fncopenmodaluploadreceipt(admissionid, stud_no){
		$("#modaluploadreceipt").modal('show');
		$('#txtadmissionidhidden').val(admissionid);
		$('#txtimgadmissionidhidden').val(admissionid);
		$('#txtimgstudidhidden').val(stud_no);
	}

	function uploadscheduleimage(){
		var checkiimage = $('#txtupdateReceiptImagefile').val();
		if(checkiimage != ""){
	        var data = new FormData($('#frmUploadReceipt')[0]);
	        $(".preloader").show().css('background','rgba(255,255,255,0.5)');
	        $.ajax({
	            type: 'POST',
	            url: 'student/studentinformation/uploadadmissionreceipt.php',
	            data: data,
	            mimeType: 'multipart/form-data',
	            contentType: false,
	            cache: false,
	            processData: false,
	            success: function(data){
	            	$("#modaluploadreceipt").modal('hide');
					setTimeout(function(){
						$(".preloader").hide().css('background','');
						Swal.fire(
	                      'Success!',
	                      'Successfully Uploaded.',
	                      'success'
	                    )
						dsplaytbladmissionlist()
					},2000);
	            }
	        });
	    } else {
	    	alert("Please upload receipt.")
	    }
    }

    function fncShowreqPic(){
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("txtupdateRequirementsImagefile").files[0]);
		oFReader.onload = function (oFREvent) {
			document.getElementById("updateRequirementsImage").src = oFREvent.target.result;
		};
	}

    function fncopenmodaluploadrequirements(){
		$("#modaluploadrequirements").modal('show');
		var getemail = $('#txtstudLinfoemail').text();
		var getFname = $('#txtstudinfostudFname').text();
		var getMname = $('#txtstudinfostudMname').text();
		var getLname = $('#txtstudinfostudLname').text();
		var getstudid = $('#txtstudLinfoID').text();

		$('#txtimgreqemail').val(getemail);
		$('#txtimgreqFname').val(getFname);
		$('#txtimgreqMname').val(getMname);
		$('#txtimgreqLname').val(getLname);
		$('#txtimgreqstudid').val(getstudid);
	}

	function uploadgraderequirement(){
		var checkiimage = $('#txtupdateRequirementsImagefile').val();
		if(checkiimage != ""){
	        var data = new FormData($('#frmUploadRequirements')[0]);
	        $(".preloader").show().css('background','rgba(255,255,255,0.5)');
	        $.ajax({
	            type: 'POST',
	            url: 'student/studentinformation/uploadadmissionrequirement.php',
	            data: data,
	            mimeType: 'multipart/form-data',
	            contentType: false,
	            cache: false,
	            processData: false,
	            success: function(data){
	            	$("#modaluploadrequirements").modal('hide');
					setTimeout(function(){
						$(".preloader").hide().css('background','');
						Swal.fire(
	                      'Success!',
	                      'Successfully Uploaded.',
	                      'success'
	                    )
						dsplaytbladmissionlist();
					},2000);
	            }
	        });
	    } else {
	    	alert("Please upload your report card.");
	    }
    }

    function fncChangestudattribHash(){
        $("#txtstudentpass").attr("type", "password");
        $("#loginstudenteye").attr("onclick", "fncChangestudattribunHash()");
        $("#loginstudenteye").removeClass("fa-eye");
        $("#loginstudenteye").addClass("fa-eye-slash");
    }

    function fncChangestudattribunHash(){
        $("#txtstudentpass").attr("type", "text");
        $("#loginstudenteye").attr("onclick", "fncChangestudattribHash()");
        $("#loginstudenteye").addClass("fa-eye");
        $("#loginstudenteye").removeClass("fa-eye-slash");
    }

</script>
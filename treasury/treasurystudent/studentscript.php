<script type="text/javascript">
	$(function() {
        $("#treasurystudentmenu").addClass('active');
        dsplaytblstudentadmissionlist();

        $('#txtsearchstudentadmissionlist').keyup(function(){
            dsplaytblstudentadmissionlist();
        });
	})

	function dsplaytblstudentadmissionlist(){
		var textsearchstudadmission = $('#txtsearchstudentadmissionlist').val();
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasurystudent/studentclass.php',
			data: 'key=' + textsearchstudadmission + '&form=dsplaytblstudentadmissionlist',
			success: function(data) {
				$("#tblstudentadmissionlist").html(data);
			}
		})
	}

	function openadmissionstudinfo(stud_id, admissionID, studtype, stud_no){
		$("#modaladmissionstudinfo").modal('show');
		$('#idIDhidden').val(stud_id);
		$('#admissionIDhidden').val(admissionID);
		if(studtype == 0){
			$('#btnapprovereceipt').attr("onclick", "btnapprovereceiptnew();");
		} else{
			$('#btnapprovereceipt').attr("onclick", "btnapprovereceiptold();");
		}
		openstudentdetails();

		$.ajax ({
			type: 'POST',
			url: 'treasury/treasurystudent/studentclass.php',
			data: 'stud_id=' + stud_id + '&studtype=' + studtype + '&stud_no=' + stud_no + '&form=dsplaytblstudentadmissioninfo',
			success: function(data) {
				var show = data.split('|');
				$('#txtstudinfostudname').text(show[0]);
				$('#txtstudinfostudid').text(show[1]);
				$('#txtstudinfostudusername').text(show[2]);
				$('#txtstudinfostudgender').text(show[3]);
				$('#txtstudinfostudaddress').text(show[4]);
				$('#txtstudinfostudemail').text(show[5]);
				$('#txtstudinfostudnum').text(show[6]);
				$('#txtstudinfostudprevschool').text(show[7]);
				$('#txtstudinfostudprevschooladd').text(show[8]);
				$('#txtstudinfostudprevschoolgrade').text(show[9]);
				$('#txtstudinfostudprevschoolyear').text(show[10]);
				$('#txtstudinfoschoolnum').text(show[11]);

				$("#studinfoprofimage").attr('src', show[13]);
			}
		})
	}

	function dsplaystudinforeceipt(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasurystudent/studentclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaystudinforeceipt',
			success: function(data) {
				var show = data.split('|');
				$('#receiptslist').html(show[0]);
				$('#receiptdateuploaded').text(show[1]);
			}
		})
	}

	function fncopenreq1img(image){
		$("#modalopenimage").modal('show');
		$("#studviewimage").attr('src', image);
	}

	function openstudentdetails(){
		$('#dsplystuddet').css('color', '#85CE36');
		$('#dsplystudentreq').css('color', '');
		$('#bodystudentdet').css('display', 'block');
		$('#bodystudentreq').css('display', 'none');
	}

	function openstudentrequirements(){
		$('#dsplystuddet').css('color', '');
		$('#dsplystudentreq').css('color', '#85CE36');
		$('#bodystudentdet').css('display', 'none');
		$('#bodystudentreq').css('display', 'block');
	}

	function btnapprovereceiptnew(){
		var getstudID = $('#idIDhidden').val();
		var getadmissionID = $('#admissionIDhidden').val();
		$(".preloader").show().css('background','rgba(255,255,255,0.5)');
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasurystudent/studentclass.php',
			data: 'getadmissionID=' + getadmissionID + '&getstudID=' + getstudID + '&form=btnapprovereceiptnew',
			success: function(data) {
				$("#modaladmissionstudinfo").modal('hide');
				setTimeout(function(){
					$(".preloader").hide().css('background','');
					Swal.fire(
                      'Success!',
                      'Successfully Approved.',
                      'success'
                    )
					dsplaytblstudentadmissionlist();
				},1500);
			}
		})
	}

	function btnapprovereceiptold(){
		var getstudID = $('#idIDhidden').val();
		var getadmissionID = $('#admissionIDhidden').val();
		$(".preloader").show().css('background','rgba(255,255,255,0.5)');
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasurystudent/studentclass.php',
			data: 'getadmissionID=' + getadmissionID + '&getstudID=' + getstudID + '&form=btnapprovereceiptold',
			success: function(data) {
				$("#modaladmissionstudinfo").modal('hide');
				setTimeout(function(){
					$(".preloader").hide().css('background','');
					Swal.fire(
                      'Success!',
                      'Successfully Approved.',
                      'success'
                    )
					dsplaytblstudentadmissionlist();
				},1500);
			}
		})
	}

	function btnopenremarks(){
		Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Deny it!'
        }).then((result) => {
            if (result.value) {
            	var getstudID = $('#idIDhidden').val();
				$("#modalopeninputremarks").modal('show');
				$('#remadmissionIDhidden').val(getstudID);
            }
        })
    }

    function btndenystudrequirement(){
		var getadmission = $('#remadmissionIDhidden').val();
		var getdenyremarks = $('#txtstuddenyremarks').val();
    	if(getdenyremarks != ""){
			$(".preloader").show().css('background','rgba(255,255,255,0.5)');
			$.ajax ({
				type: 'POST',
				url: 'treasury/treasurystudent/studentclass.php',
				data: 'getadmission=' + getadmission + '&getdenyremarks=' + getdenyremarks + '&form=btndenystudrequirement',
				success: function(data) {
					$("#modalopeninputremarks").modal('hide');
					$("#modaladmissionstudinfo").modal('hide');
					setTimeout(function(){
						$(".preloader").hide().css('background','');
						Swal.fire(
	                      'Success!',
	                      'Successfully Denied.',
	                      'success'
	                    )
						dsplaytblstudentadmissionlist();
					},1500);
				}
			})
		} else{
			alert("Please input remarks to proceed.");
		}
	}
</script>
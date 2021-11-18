<script type="text/javascript">
	$(function() {
        $("#registschedulemenu").addClass('active');

        dsplaytblstudentadmissionlist();
        $('#txtsearchstudentadmissionlist').keyup(function(){
            dsplaytblstudentadmissionlist();
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

	function dsplaytblstudentadmissionlist(){
		var textsearchstudadmission = $('#txtsearchstudentadmissionlist').val();
		$.ajax ({
			type: 'POST',
			url: 'registrar/registrarschedule/scheduleclass.php',
			data: 'key=' + textsearchstudadmission + '&form=dsplaytblstudentadmissionlist',
			success: function(data) {
				$("#tblstudentadmissionlist").html(data);
			}
		})
	}

	function openadmissionstudinfo(stud_id, admissionID){
		$("#modaladmissionstudinfo").modal('show');
		$('#idIDhidden').val(stud_id);
		$('#admissionIDhidden').val(admissionID);
		$('#txtstudidschedule').val(stud_id);

		$.ajax ({
			type: 'POST',
			url: 'registrar/registrarschedule/scheduleclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaytblstudentadmissioninfo',
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

				$('#studinfoprofimage').attr('src', show[11]);
			}
		})
	}

	function uploadschedule(){
		var textschedprofimage = $('#txtupdateScheduleDImagefile').val();
		var textschedulestudid = $('#idIDhidden').val();
		var textscheduleadmissionid = $('#admissionIDhidden').val();
		var textschedulegrade = $('#txtschedulegrade').val().toUpperCase();
		var textschedulesection = $('#txtschedulesection').val().toUpperCase();

		if( reqField1( 'reqstudentinfo' ) == 1 ){
			if(textschedprofimage != ""){
				$(".preloader").show().css('background','rgba(255,255,255,0.5)');
				$.ajax ({
					type: 'POST',
					url: 'registrar/registrarschedule/scheduleclass.php',
					data: 'textschedulestudid=' + textschedulestudid + '&textscheduleadmissionid=' + textscheduleadmissionid + '&textschedulegrade=' + textschedulegrade + '&textschedulesection=' + textschedulesection + '&form=uploadschedule',
					success: function(data) {
						uploadscheduleimage();
						$("#modaladmissionstudinfo").modal('hide');
						setTimeout(function(){
							$(".preloader").hide().css('background','');
							Swal.fire(
		                      'Success!',
		                      'Successfully Uploaded.',
		                      'success'
		                    )
							dsplaytblstudentadmissionlist();
						},1500);
					}
				});
			} else{
				alert('Please upload schedule.');
			}
		} else {
            alert('Please review your entries. Ensure all fields are filled out');
        }
	}

	function fncSchedule(){
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("txtupdateScheduleDImagefile").files[0]);
        oFReader.onload = function (oFREvent) {
          document.getElementById("updateScheduleDImage").src = oFREvent.target.result;
        };
    }

    function uploadscheduleimage(){
        var data = new FormData($('#frmUploadSchedule')[0]);
        $.ajax({
            type: 'POST',
            url: 'registrar/registrarschedule/uploadschedule.php',
            data: data,
            mimeType: 'multipart/form-data',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
            	console.log('SUCCESS');
                console.log(data);
            },
            error: function(data) {
            	console.log('ERROR');
            	console.log(data);
            }
        });
    }

</script>
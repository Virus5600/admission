<script type="text/javascript">
	$(function() {
        $("#studentschedulemenu").addClass('active');
        displayschedule();
	})

	function displayschedule(){
        $.ajax({
            type: 'POST',
            url: 'student/studentschedule/studentschedclass.php',
            data:'form=displayschedule',
            success: function(data){
                if(data == 2){
					$("#dsplyschedulenorecordF").css('display', 'block');
					$("#dsplyStudentSchedule").css('display', 'none');
				} else {
					$("#dsplyschedulenorecordF").css('display', 'none');
					$("#dsplyStudentSchedule").css('display', 'block');
					$("#StudentScheduleList").html(data);
				}            
			}
        });
    }

    function fncopenreq1img(image){
		$("#modalopenimage").modal('show');
		$("#studviewimage").attr('src', image);
	}
	
</script>
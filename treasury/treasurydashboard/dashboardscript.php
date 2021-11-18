<script type="text/javascript">
	$(function() {
        $("#treasurydashboardmenu").addClass('active');
        dsplaynumnewadmission();
        dsplaynumnewstudents();
        dsplaynumpendingstudents();
        dsplaynumtotalstudents();
        dsplaywaitingpaymentlist();
        dsplayapprovepaymentlist();
        dsplaywaitingforpayapplist();
	})

    function dsplaynumnewadmission(){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasurydashboard/dashboardclass.php',
			data: 'form=dsplaynumnewadmission' ,
			success: function(data) {
				var arr = data.split("|");
				$("#txtNewAdmission").text(arr[0]);
				$("#progressNewAdmission").attr('style', 'width:'+ arr[1] + '%');
			}
		})
	}

	function dsplaynumnewstudents(){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasurydashboard/dashboardclass.php',
			data: 'form=dsplaynumnewstudents' ,
			success: function(data) {
				var arr = data.split("|");
				$("#txtnewstudents").text(arr[0]);
				$("#progressnewstudents").attr('style', 'width:'+ arr[1] + '%');
			}
		})
	}

	function dsplaynumpendingstudents(){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasurydashboard/dashboardclass.php',
			data: 'form=dsplaynumpendingstudents' ,
			success: function(data) {
				var arr = data.split("|");
				$("#txtpendingstudents").text(arr[0]);
				$("#progresspendingstudents").attr('style', 'width:'+ arr[1] + '%');
			}
		})
	}

	function dsplaynumtotalstudents(){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasurydashboard/dashboardclass.php',
			data: 'form=dsplaynumtotalstudents',
			success: function(data) {
				var arr = data.split("|");
				$("#txttotalstudents").text(arr[0]);
				$("#progresstotalstudents").attr('style', 'width:'+ arr[1] + '%');
			}
		})
	}

	function dsplaywaitingpaymentlist(){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasurydashboard/dashboardclass.php',
			data: 'form=dsplaywaitingpaymentlist',
			success: function(data) {
				if(data == 2){
					$("#dsplywaitingpaynorecordF").css('display', 'block');
					$("#dsplywaitingpay").css('display', 'none');
				} else {
					$("#dsplywaitingpaynorecordF").css('display', 'none');
					$("#dsplywaitingpay").css('display', 'block');
					$("#StudentwaitingpayList").html(data);
				}
			}
		})
	}

	function dsplaywaitingforpayapplist(){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasurydashboard/dashboardclass.php',
			data: 'form=dsplaywaitingforpayapplist',
			success: function(data) {
				if(data == 2){
					$("#dsplywaitingforpayappnorecordF").css('display', 'block');
					$("#dsplywaitingforpayapp").css('display', 'none');
				} else {
					$("#dsplywaitingforpayappnorecordF").css('display', 'none');
					$("#dsplywaitingforpayapp").css('display', 'block');
					$("#StudentwaitingforpayappList").html(data);
				}
			}
		})
	}

	function dsplayapprovepaymentlist(){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasurydashboard/dashboardclass.php',
			data: 'form=dsplayapprovepaymentlist',
			success: function(data) {
				if(data == 2){
					$("#dsplyapprovepaynorecordF").css('display', 'block');
					$("#dsplyapprovepay").css('display', 'none');
				} else {
					$("#dsplyapprovepaynorecordF").css('display', 'none');
					$("#dsplyapprovepay").css('display', 'block');
					$("#StudentapprovepayList").html(data);
				}
			}
		})
	}

</script>
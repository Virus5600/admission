
<script type="text/javascript">
	$(function() {
        $("#treasuryreportsmenu").addClass('active');
        dsplaytblstudentadmissionlist();

        $('#txtsearchstudentadmissionlist').keyup(function(){
            dsplaytblstudentadmissionlist();
        });
	})

	function dsplaytblstudentadmissionlist(){
		var textsearchstudadmission = $('#txtsearchstudentadmissionlist').val();
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasuryreports/reportsclass.php',
			data: 'key=' + textsearchstudadmission + '&form=dsplaytblstudentadmissionlist',
			success: function(data) {
				$("#tblstudentadmissionlist").html(data);
			}
		})
	}

	function openadmissionstudinfo(stud_id){
		$("#modaladmissionstudinfo").modal('show');
		openstudentdetails();

		$.ajax ({
			type: 'POST',
			url: 'treasury/treasuryreports/reportsclass.php',
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
				$('#txtstudinfoschoolnum').text(show[11]);
				$('#studinfoprofimage').attr('src', show[12]);

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
			}
		})
	}

	function dsplaystudinfo2x2pic(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasuryreports/reportsclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaystudinfo2x2pic',
			success: function(data) {
				$('#2x2idphotolist').html(data);
			}
		})
	}

	function dsplaystudinfoPSAbirthcert(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasuryreports/reportsclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaystudinfoPSAbirthcert',
			success: function(data) {
				$('#PSAbirthcertlist').html(data);
			}
		})
	}

	function dsplaystudinforeportcard(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasuryreports/reportsclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaystudinforeportcard',
			success: function(data) {
				$('#reportcardlist').html(data);
			}
		})
	}

	function dsplaystudinfocertgoodmoralcharacter(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasuryreports/reportsclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaystudinfocertgoodmoralcharacter',
			success: function(data) {
				$('#certgoodmoralcharacterlist').html(data);
			}
		})
	}

	function dsplaystudinfopermanentrecord(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasuryreports/reportsclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaystudinfopermanentrecord',
			success: function(data) {
				$('#permanentrecordlist').html(data);
			}
		})
	}

	function openstudentdetails(){
		$('#dsplystuddet').css('color', '#85CE36');
		$('#dsplystudentreq').css('color', '');
		$('#dsplystudentreceipt').css('color', '');
		$('#dsplystudentschedule').css('color', '');

		$('#bodystudentdet').css('display', 'block');
		$('#bodystudentreq').css('display', 'none');
		$('#bodystudentrec').css('display', 'none');
		$('#bodystudentsched').css('display', 'none');
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


	function dsplaystudinforeceipts(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasuryreports/reportsclass.php',
			data: 'stud_id=' + stud_id + '&form=dsplaystudinforeceipts',
			success: function(data) {
				$('#bodystudentrec').html(data);
			}
		})
	}

	function dsplaystudinfoschedule(stud_id){
		$.ajax ({
			type: 'POST',
			url: 'treasury/treasuryreports/reportsclass.php',
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

</script>
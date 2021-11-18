<script type="text/javascript">
    $(function(){
        $(".cp-inputmask").inputmask("+63 999-999-9999");
        $(".numonly").keydown(function(event) {
            if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 190 || event.keyCode == 9 || event.keyCode == 188) {

            }else{
                if (event.keyCode < 48 || event.keyCode > 57 || event.keyCode == 17) {
                   event.preventDefault(); 
                }   
            }
        });
    })

    function admissiontabhome(){
        $('.tabwelcomeA').addClass('active');
        $('.tabapplicantA').removeClass('active');
        $('.tabrequirementsA').removeClass('active');

        $('#welcometab').addClass('active');
        $('#applicanttab').removeClass('active');
        $('#requirementstab').removeClass('active');

        $('.reqstudentinfo').css('border','');
        $('.reqstudentinfo').removeClass('lala');
    }

    function checkadmissionstatus(){
        var textchkadmissionstatus = $('#txtchkadmissionstatus').val();
        if(textchkadmissionstatus != ""){
            $.ajax ({
                type: 'POST',
                url: 'mainclass.php',
                data: 'textchkadmissionstatus=' + textchkadmissionstatus + '&form=checkadmissionstatus',
                success: function(data) {
                    var show = data.split("|");
                    if(show[0] == 1){
                        alert("Approved! waiting for your payment receipt.");
                    } else if (show[0] == 2){
                        alert("Your payment was denied.\n\nRemarks: " + show[1]);
                    } else if (show[0] == 3){
                        alert("Still waiting for payment approval.");
                    } else if (show[0] == 4){
                        alert("Payment approved! Just wait for your schedule to be uploaded.");
                    } else if (show[0] == 5){
                        alert("Schedule uploaded! Just login your account to see your schedule.");
                    } else if (show[0] == 6){
                        alert("Still waiting for your requirements to be approved.");
                    } else if (show[0] == 7){
                        alert("No record found.");
                    } else if (show[0] == 8){
                        alert("Your admission was denied.\n\nRemarks: " + show[1]);
                    } else{
                        alert("No record found.");
                    }
                }
            })

        } else{
            alert("Please enter admission number.");
        }
    }
</script>

<script type="text/javascript">
    function admissiontabapplicant(){
        $('.tabwelcomeA').removeClass('active');
        $('.tabapplicantA').addClass('active');
        $('.tabrequirementsA').removeClass('active');

        $('#welcometab').removeClass('active');
        $('#applicanttab').addClass('active');
        $('#requirementstab').removeClass('active');
    }
</script>

<script type="text/javascript">
    function checkconfirmpassword(){
        var password = $("#txtPassword").val();
        var confirmpassword = $("#txtConfirmPassword").val();
        if(password != confirmpassword){
            alert("Password and confirm password mismatched!");
            $("#txtPassword").css('border','1px #a94442 solid');
            $("#txtPassword").addClass('lala');
            $("#txtConfirmPassword").css('border','1px #a94442 solid');
            $("#txtConfirmPassword").addClass('lala');
        } else{
            $("#txtPassword").css('border','');
            $("#txtPassword").removeClass('lala');
            $("#txtConfirmPassword").css('border','');
            $("#txtConfirmPassword").removeClass('lala');
        }
    }

    function checkusername(){
        var username = $("#txtUserName").val();
        if(username.length <= 6){
            alert("Invalid Username!");
            $("#txtUserName").css('border','1px #a94442 solid');
            $("#txtUserName").addClass('lala');
            $("#txtUserName").val("");
        } else{
            $("#txtUserName").css('border','');
            $("#txtUserName").removeClass('lala');
        }
    }

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

    function admissiontabrequirements(){
        if( reqField1( 'reqstudentinfo' ) == 1 ){
            var password = $("#txtPassword").val();
            var confirmpassword = $("#txtConfirmPassword").val();
            if(password != confirmpassword){
                alert("Password and confirm password mismatched!");
                $("#txtPassword").css('border','1px #a94442 solid');
                $("#txtPassword").addClass('lala');
                $("#txtConfirmPassword").css('border','1px #a94442 solid');
                $("#txtConfirmPassword").addClass('lala');
            } else{
                $("#txtPassword").css('border','');
                $("#txtPassword").removeClass('lala');
                $("#txtConfirmPassword").css('border','');
                $("#txtConfirmPassword").removeClass('lala');

                $('.tabrequirementsA').attr('data-toggle', 'tab');

                $('.tabwelcomeA').removeClass('active');
                $('.tabapplicantA').removeClass('active');
                $('.tabrequirementsA').addClass('active');

                $('#welcometab').removeClass('active');
                $('#applicanttab').removeClass('active');
                $('#requirementstab').addClass('active');
            }
        } else {
            $('.tabrequirementsA').attr('data-toggle', false);
            $('.tabwelcomeA').removeClass('active');
            $('.tabapplicantA').addClass('active');
            $('.tabrequirementsA').removeClass('active');

            $('#welcometab').removeClass('active');
            $('#applicanttab').addClass('active');
            $('#requirementstab').removeClass('active');
            alert('Please review your entries. Ensure all fields are filled out');
        }
    }

    function getage(){
        var Dateofbirth = $("#txtStudBirthday").val();
        $.ajax({
            type: 'POST',
            url: 'mainclass.php',
            data:'Dateofbirth='+Dateofbirth+'&form=getage',
            success: function(data){
                $('#txtAge').val(data);
            }
        });
    }

    function fncRequirementsA(){
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("txtupdateReqAImagefile").files[0]);
        oFReader.onload = function (oFREvent) {
          document.getElementById("updateReqAImage").src = oFREvent.target.result;
        };
    }

    function fncRequirementsB(){
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("txtupdateReqBImagefile").files[0]);
        oFReader.onload = function (oFREvent) {
          document.getElementById("updateReqBImage").src = oFREvent.target.result;
        };
    }

    function fncRequirementsC(){
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("txtupdateReqCImagefile").files[0]);
        oFReader.onload = function (oFREvent) {
          document.getElementById("updateReqCImage").src = oFREvent.target.result;
        };
    }

    function fncRequirementsD(){
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("txtupdateReqDImagefile").files[0]);
        oFReader.onload = function (oFREvent) {
          document.getElementById("updateReqDImage").src = oFREvent.target.result;
        };
    }

    function fncRequirementsE(){
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("txtupdateReqEImagefile").files[0]);
        oFReader.onload = function (oFREvent) {
          document.getElementById("updateReqEImage").src = oFREvent.target.result;
        };
    }

    function submitrequirements(){
        if( reqField1( 'reqstudentinfo' ) == 1 ){

            var textSchoolAttended = $("#txtSchoolAttended").val().toUpperCase();
            var textGrade = $("#txtGrade").val().toUpperCase();
            var textSchoolYear = $("#txtSchoolYear").val();
            var textSchoolAddress = $("#txtSchoolAddress").val().toUpperCase();
            var textSchoolNum = $("#txtSchoolNum").val();
            var textStudentFName = $("#txtStudentFName").val().toUpperCase();
            var textStudentMName = $("#txtStudentMName").val().toUpperCase();
            var textStudentLName = $("#txtStudentLName").val().toUpperCase();
            var textSex = $("#txtSex").val().toUpperCase();
            var textStudentAddress = $("#txtStudentAddress").val().toUpperCase();
            var textStudPhone = $("#txtStudPhone").val();
            var textStudEmail = $("#txtemailadd").val();
            var textStudBirthday = $("#txtStudBirthday").val();
            var textAge = $("#txtAge").val();
            var textBirthPlace = $("#txtBirthPlace").val().toUpperCase();
            var textReligion = $("#txtReligion").val().toUpperCase();
            var textFatherName = $("#txtFatherName").val().toUpperCase();
            var textFatherOccupation = $("#txtFatherOccupation").val().toUpperCase();
            var textMotherName = $("#txtMotherName").val().toUpperCase();
            var textMotherOccupation = $("#txtMotherOccupation").val().toUpperCase();
            var textGuardian = $("#txtGuardian").val().toUpperCase();
            var textGuardianRelationship = $("#txtGuardianRelationship").val().toUpperCase();
            var textGuardianPhone = $("#txtGuardianPhone").val().toUpperCase();
            var textUserName = $("#txtUserName").val();
            var textPassword = $("#txtPassword").val();

            var textupdateReqAImagefile = $("#txtupdateReqAImagefile").val();
            var textupdateReqBImagefile = $("#txtupdateReqBImagefile").val();
            var textupdateReqCImagefile = $("#txtupdateReqCImagefile").val();
            var textupdateReqDImagefile = $("#txtupdateReqDImagefile").val();
            var textupdateReqEImagefile = $("#txtupdateReqEImagefile").val();

            $.ajax({
                type: 'POST',
                url: 'mainclass.php',
                data:'textSchoolAttended=' + textSchoolAttended + '&textGrade=' + textGrade + '&textSchoolYear=' + textSchoolYear + '&textSchoolAddress=' + textSchoolAddress + '&textSchoolNum=' + textSchoolNum + '&textStudentFName=' + textStudentFName + '&textStudentMName=' + textStudentMName + '&textStudentLName=' + textStudentLName + '&textSex=' + textSex + '&textStudentAddress=' + textStudentAddress + '&textStudPhone=' + textStudPhone + '&textStudEmail=' + textStudEmail + '&textStudBirthday=' + textStudBirthday + '&textAge=' + textAge + '&textBirthPlace=' + textBirthPlace + '&textReligion=' + textReligion + '&textFatherName=' + textFatherName + '&textFatherOccupation=' + textFatherOccupation + '&textMotherName=' + textMotherName + '&textMotherOccupation=' + textMotherOccupation + '&textGuardian=' + textGuardian + '&textGuardianRelationship=' + textGuardianRelationship + '&textGuardianPhone=' + textGuardianPhone + '&textUserName=' + textUserName + '&textPassword=' + textPassword + '&form=submitrequirements',
                success: function(data){
                    if(textupdateReqAImagefile != ""){
                        uploadrequirementsA(data);
                    } else{

                    }
                    if(textupdateReqBImagefile != ""){
                        uploadrequirementsB(data);
                    } else{
                        
                    }
                    if(textupdateReqCImagefile != ""){
                        uploadrequirementsC(data);
                    } else{
                        
                    }
                    if(textupdateReqDImagefile != ""){
                        uploadrequirementsD(data);
                    } else{
                        
                    }
                    if(textupdateReqEImagefile != ""){
                        uploadrequirementsE(data);
                    } else{
                        
                    }
                    $("#modalsubmitted").modal('show');
                    $('#txtadmissionnumber').text(data);
                }
            });

        } else {
            $('.tabrequirementsA').attr('data-toggle', false);
            $('.tabwelcomeA').removeClass('active');
            $('.tabapplicantA').addClass('active');
            $('.tabrequirementsA').removeClass('active');

            $('#welcometab').removeClass('active');
            $('#applicanttab').addClass('active');
            $('#requirementstab').removeClass('active');
            alert('Please review your entries. Ensure all fields are filled out');
        }
    }

    function donebutton(){
        // window.location.reload();
        window.location = "admission.php";
    }

    function uploadrequirementsA(genid){
        $("#txtstudidrequirementA").val(genid);
        var data = new FormData($('#frmUploadReqA')[0]);
        $.ajax({
            type: 'POST',
            url: 'UploadRequirements/UploadRequirement1.php',
            data: data,
            mimeType: 'multipart/form-data',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                
            }
        });
    }

    function uploadrequirementsB(genid){
        $("#txtstudidrequirementB").val(genid);
        var data = new FormData($('#frmUploadReqB')[0]);
        $.ajax({
            type: 'POST',
            url: 'UploadRequirements/UploadRequirement2.php',
            data: data,
            mimeType: 'multipart/form-data',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                
            }
        });
    }

    function uploadrequirementsC(genid){
        $("#txtstudidrequirementC").val(genid);
        var data = new FormData($('#frmUploadReqC')[0]);
        $.ajax({
            type: 'POST',
            url: 'UploadRequirements/UploadRequirement3.php',
            data: data,
            mimeType: 'multipart/form-data',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                
            }
        });
    }

    function uploadrequirementsD(genid){
        $("#txtstudidrequirementD").val(genid);
        var data = new FormData($('#frmUploadReqD')[0]);
        $.ajax({
            type: 'POST',
            url: 'UploadRequirements/UploadRequirement4.php',
            data: data,
            mimeType: 'multipart/form-data',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                
            }
        });
    }

    function uploadrequirementsE(genid){
        $("#txtstudidrequirementE").val(genid);
        var data = new FormData($('#frmUploadReqE')[0]);
        $.ajax({
            type: 'POST',
            url: 'UploadRequirements/UploadRequirement5.php',
            data: data,
            mimeType: 'multipart/form-data',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                
            }
        });
    }

</script>

<!-- LOGIN -->
<script type="text/javascript">
    $(function() {
        loadtopbarimage();
    })

    function loadtopbarimage(){
        $.ajax({
            type: 'POST',
            url: 'mainclass.php',
            data: 'form=loadtopbarimage',
            success: function(data){
                $("#topbarimage").attr('src', data);
            }
        })
    }

    function gotologin(){
        window.location.href="login.php";
    }

    function loginuser(){
        var txtusername = $("#usercode").val();
        var txtpassword = $("#user_password").val();

        $.ajax({
            type: 'POST',
            url: 'mainclass.php',
            data: 'txtusername=' + txtusername + '&txtpassword=' + txtpassword + '&form=loginuser',
            success: function(data){
                if(data == 1){
                    window.location.href="index.php";
                } else if(data == 2){
                    alert("Account still waiting for approval.");
                } else {
                    alert("You have entered invalid username or password.");
                }
            }
        })
    }

    function logoutuser(){
        window.location = 'logout.php';
    }

    function fncChangeCCattribHash(){
        $("#user_password").attr("type", "password");
        $("#logineye").attr("onclick", "fncChangeCCattribunHash()");
        $("#logineye").removeClass("fa-eye");
        $("#logineye").addClass("fa-eye-slash");
    }

    function fncChangeCCattribunHash(){
        $("#user_password").attr("type", "text");
        $("#logineye").attr("onclick", "fncChangeCCattribHash()");
        $("#logineye").addClass("fa-eye");
        $("#logineye").removeClass("fa-eye-slash");
    }

    function fncChangeadmissionattribHash(){
        $("#txtPassword").attr("type", "password");
        $("#logineyeadmission").attr("onclick", "fncChangeadmissionattribunHash()");
        $("#logineyeadmission").removeClass("fa-eye");
        $("#logineyeadmission").addClass("fa-eye-slash");
    }

    function fncChangeadmissionattribunHash(){
        $("#txtPassword").attr("type", "text");
        $("#logineyeadmission").attr("onclick", "fncChangeadmissionattribHash()");
        $("#logineyeadmission").addClass("fa-eye");
        $("#logineyeadmission").removeClass("fa-eye-slash");
    }
</script>
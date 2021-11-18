// ENROLLMENT RELATED JAVA SCRIPT
var __closablemodal = false;
var teller = 0;

function js_checkbrowser() {
    var browserName = navigator.appName;
    if ((browserName == "Netscape") && (browserName == "Microsoft Internet Explorer"))
        alert("This application may not work properly on your current browser. If you are unable to submit your online application, please proceed to admission's office. Thank you.");
}

function js_disableselection(elementid) {
    var element = js_getElementById(elementid);
    if (element != null) {
        //  element.onselectstart = function () { return false; } // ie
        //  element.onmousedown = function () { return false; }   // mozilla
    }
}

function js_buildbody() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    var s = urlParams.get('s');    
    if (s === null)
         s = '';
    js_callserverfunction('MAIN_BODY', 'MAIN_BODY', s+'');
    js_disableselection('MAIN_BODY');
    js_checkbrowser();

    $('.cropme').simpleCropper(function(c, f) {
        var id = $(f).data('id');
        var cs = $(f).data('cs');
        var wrn = $(f).data('wrn');
        if ((id === undefined) || (cs == undefined) || (wrn == undefined))
            return;
        if ($('#tn' + id).length == 0)
            return;
        var data = $(f).children('img').prop('src');
        js_fileupload(id, 0, 'php/upload', wrn, cs, data, c.canvas.width, c.canvas.height);
    });
    $('#preview .buttons .ok').addClass('btn btn-success').html('<i class="glyphicon glyphicon-ok"></i>');
    $('#preview .buttons .cancel').addClass('btn btn-danger').html('<i class="glyphicon glyphicon-remove"></i>');
    $('#preview .buttons .switch').addClass('btn btn-info').html('<i class="glyphicon glyphicon-repeat"></i>');
}

function js_crop(id, wrn, cs, rotate, w, h, q) {
    var sizes = [
        ['1x1', 150, 150], // 1" x 1"
        ['2x2', 300, 300], // 2" x 2"
        ['atm', 319, 506], // 3.37 x 2.125"
        ['letter', 1275, 1650], // 8.5" x 11"
        ['folio', 1275, 1950], // 8.5" x 13"
        ['legal', 1275, 2100] // 8.5" x 14"
    ];

    if ($('#tn' + id).prop('src').match(/blank/) == null) {
        if (confirm('Do you want to overwrite uploaded file?') == false)
            return;
    }

    if (q === undefined)
        q = 0.92;
    var i = 0;
    var l = sizes.length;
    for (i = 0; i < l; i++) {
        if (sizes[i][0] === w) {
            w = sizes[i][1];
            h = sizes[i][2];
            break;
        }
    }
    if (isNaN(w)) w = 150;
    if (isNaN(h)) h = 150;
    if (isNaN(q)) q = 0.92;
    var cropperid = 'cropper';
    var style = "width:" + w + "px;height:" + h + "px;display:none;";
    $('#' + cropperid).prop('style', style);
    $('#' + cropperid).data('switchAspectRatio', rotate ? 1 : 0);
    $('#' + cropperid).data('id', id);
    $('#' + cropperid).data('wrn', wrn);
    $('#' + cropperid).data('cs', cs);
    $('#' + cropperid).data('imagequality', q);
    $('#' + cropperid).trigger('click');
}

function js_buildlogin(screenmode) {
    var id = ["LOGIN"];
    var result = new Array();
    if (screenmode == '')
        screenmode = 'fullscreen';
    for (i = 0; i < id.length; i++) {
        js_callserverfunction(id[i], id[i], screenmode);
    }
    js_disableselection('LOGIN');
}

// END SESSION
function js_endsession(url, id) {
    if (sessionstarted == true) {
        sessionstarted = false;
        alert('Session has expired!');
        window.location = "main.html";
    }
}

// REPLACE STRING
function js_replace(id, o, n) {
    var div = js_getElementById(id);
    if (div != null) {
        div.innerHTML = div.innerHTML.replace(new RegExp(o, "gi"), n);
    }
}

function js_apply(mode) {
    js_callserverfunction('TAB', 'BODY', mode);
    //$('body').removeClass('wall');
}

function js_applydirect(sem, id) {
    var course = $('#' + id).val();
    if (course == null) {
        alert('Please select course from the list.');
        $('#' + id).focus();
        return;
    }
    var shs = '0';
    if (sem.substr(6, 1) == '1') {
        shs = 'shs';
    }
    //alert(shs + ';' + sem.substr(0,5) + ';' + course + ';direct');
    js_hidediv('POP_WIN1');
    js_callserverfunction('TAB', 'BODY', shs + ';' + sem.substr(0, 5) + ';' + course + ';direct');
    js_removewallpaper();
}

function js_edit(reprint) {
    var username = js_getElementById('txtUsername');
    var password = js_getElementById('txtPassword');
    var referencenumber = js_getElementById('txtReferenceNumber');
    if (js_checkifempty(username, 'spnUsername', '*'))
        return;
    if (js_checkifempty(password, 'spnPassword', '*'))
        return;
    if (js_checkifempty(referencenumber, 'spnReferenceNumber', '*'))
        return;

    var parameters = Base64.encode(username.value + ';' + password.value + ';' + referencenumber.value);
    if (reprint == 2)
        js_callserverfunction('CHECKSTATUS', 'BODY', parameters);
    else if (reprint)
        js_callserverfunction('REPRINT', 'BODY', parameters);
    else
        js_callserverfunction('EDIT', 'BODY', parameters);
}

function js_checkifempty(item, spanid, remarks) {
    var div = js_getElementById(spanid);
    if ((item != null) && (div != null)) {
        if (item.value != '') {
            div.style.display = 'none';
            return false;
        } else {
            item.focus();
            div.style.display = 'inline';
            return true;
        }
    }
    return true;
}

function js_submit(tab) {
    
    var navs = js_getElementById('current');
    var home = js_getElementById('home');
    var homes = js_getElementById('homes');
    var well_desc = js_getElementById('well');
    var app_form = js_getElementById('app_form');
    var next_nav = js_getElementById('application');
    var b_button = js_getElementById('B_button');
    var n_button = js_getElementById('N_button');
    var applicant = js_getElementById('nav_applicant');
    var form = js_getElementById("form");
    var form_un = js_getElementById('stud_req');
    var stud_file_form  = js_getElementById("student_file");
    var s_button = js_getElementById('S_button');
    var error = 0;
    var focus = false;
    var parameters = '';
    var passwordtab = false;
    
    if(tab == 0)
    {
        if($('#current').hasClass('active') && (tab==0))
        {
            $('#current').removeClass('active');
            $('#current').addClass('');
            $('#home').addClass('active');
            home.id = "current";
            if(teller == 1)
            {
                navs.id="application";
            }else if(teller == 2)
            {
                navs.id="unfinished_sheet";
            }
            teller = 0;
            form_un.setAttribute('onclick',"alert('Please complete the current form and click next button.')");
            console.log(teller);
            b_button.setAttribute('hidden',0);
            app_form.setAttribute('hidden',0);
            n_button.setAttribute('hidden',0);
            n_button.removeAttribute("hidden");
            stud_file_form.setAttribute("hidden",0);
            s_button.style.display = "none";
            well_desc.removeAttribute("hidden");
            n_button.removeAttribute("onclick");
            n_button.setAttribute('onclick','js_submit(1)');
            
            homes.removeAttribute("onclick");
            applicant.setAttribute('onclick','js_submit(1)');
        }
        
    }
    else if(tab == 1)
    {
    
        if($('#current').hasClass('active') && (tab==1))
        {
            $('#current').removeClass('active');
            $('#current').addClass('');
            $('#application').addClass('active');
        // alert(b_button);
            form_un.setAttribute('onclick','js_submit(2)');
            b_button.removeAttribute("hidden");
            next_nav.id = "current";
            if(teller == 0)
            {
                navs.id="home";
            }else if(teller == 2)
            {
                navs.id="unfinished_sheet";
            }
            teller = 1;
            n_button.removeAttribute("onclick");
            n_button.removeAttribute("hidden");
            n_button.setAttribute('onclick','js_submit(2)');
            well_desc.setAttribute('hidden',0);
            app_form.removeAttribute("hidden");
            stud_file_form.setAttribute("hidden",0);
            s_button.style.display = "none";

        
            var x = document.getElementById("N_button");
            if (window.getComputedStyle(x).visibility === "hidden") {
                n_button.removeAttribute("hidden");
            }

            applicant.removeAttribute("onclick");
            homes.setAttribute('onclick','js_submit(0)');
            
        }
    }else{
        // var nodelist = form.getElementsByTagName("div");
        // //alert(nodelist.length);
        // //alert(nodelist[1]);
        // var element = nodelist[1]
        // var i = 0;
        // console.log(form.elements[13]);
        var student_type = $('input[name=StudentType]:checked').val();
        for (var i = 0; i < form.elements.length; i++) {
           
            var element = form.elements[i];
            var value = '';
            if (element.name.substring(0, 3) == "txt") {
                
                if (element.type == 'checkbox') {
                    parameters += element.name + '=' + (element.checked ? 1 : 0) + ';';
                } else if (element.type == 'radio') {
                    if (element.checked)
                        parameters += element.name + '=' + element.value + ';';
                } else {
                    parameters += element.name + '=' + element.value + ';';
                }
                checker = js_getElementById('checker' + element.name.substring(3));

                var fg = $('#fg' + element.name.substring(3));
                var valid = true;
                if ((checker != null)) {
                    value = element.value;
                   
                    if ((((student_type == "yes")&&(value == ""))||(value == "")  || (value == 'Please select...')) && (element.offsetParent !== null)) {
                        valid = false;
                    } else {
                        var pattern = $('#' + element.name).attr('pattern');
                        if (pattern) {
                            var r = new RegExp('^' + pattern + '$');
                            if (r.test(element.value) == false) {
                                valid = false;
                            }
                        }
                    }
                    if (valid) {
                        if (valid) {
                            checker.innerHTML = "";
                            if (fg) {
                                fg.removeClass('has-error');
                            }
                        }
    
                    } else {
                        error++;
                        if (fg)
                            fg.addClass('has-error');
                        else
                            checker.innerHTML = "&nbsp;*";
                        if (!focus) {
                            focusobject = element;
                            focus = true;
                        }
                    }
    
                }
                if (element.name == "txtPassword")
                    passwordtab = true;
                if (element.name == "txtDay")
                    birthdatetab = true;
                if (element.name == "txtExaminationDate")
                    examdatetab = true;
                if (element.name == "txtWithDisability")
                    disabilitytab = true;
                if (element.name == "txtPhilsatScore")
                    philsattab = true;
            }

        }

        var passwordmismatched = false;
        if (passwordtab) {
            var txtPassword = js_getElementById('txtPassword');
            var txtConfirmPassword = js_getElementById('txtConfirmPassword');
            if ((txtPassword != null) && (txtConfirmPassword != null)) {
                if (txtPassword.value != txtConfirmPassword.value) {
                    ++error;
                    js_updatechecker('checkerConfirmPassword');
                    passwordmismatched = true;
                }
            }
        }

        parameters = '' + tab + ';' + Base64.encode(parameters);
        //console.log(parameters);
    
        // check if file upoad is required     
        var filesuploaded = true;
        let target;
        let link = document.querySelector('#student_file');
            if (link) {
                target = link.getAttribute('hidden');
                //console.log(target);
            }

        if (error == 0  && target != 0) {
            $('img.fileupload').each(function() {
                if ($(this).prop('src').match(/blank/) && ($(this).data('required'))) {
                    ++error;
                    $(this).addClass('img-error');
                    filesuploaded = false;
                    return;
                }
                else
                {$(this).removeClass('img-error');
                return;}
            });
        }
      
       
        if ((error == 0) && (tab == 2)) {
            //js_callserverfunction('TAB', 'BODY', '' + parameters + '')
            var stud_files = js_getElementById('unfinished_sheet');
            $('#current').removeClass('active');
            $('#current').addClass('');
            $('#unfinished_sheet').addClass('active');  
            if(teller == 0)
            {
                navs.id="home";
            }else if(teller == 1)
            {
                navs.id="application";
            }
            teller = 2;
            stud_files.id = "current";
            stud_file_form.removeAttribute("hidden");
            app_form.setAttribute('hidden',0);
            well_desc.setAttribute('hidden',0);
            s_button.style.display = "block";
            
            
            b_button.setAttribute('onclick','js_submit(1)');
            // alert(b_button);
            // b_button.removeAttribute("hidden");
            // next_nav.id = "current";
            // navs.id="home";
            //n_button.removeAttribute("onclick");
            //n_button.setAttribute('onclick','js_submit(3)');
            // well_desc.setAttribute('hidden',0);
            // app_form.removeAttribute("hidden"); stud_req
            //n_button.setAttribute('hidden',0);
            js_getElementById('stud_req').removeAttribute('onclick');  
            applicant.removeAttribute("onclick");
            applicant.setAttribute('onclick','js_submit(1)');

        } else if(tab == 3 && error ==0 )
        {
                var img_1 = js_getElementById("tnfile2011");
				var img_2 = js_getElementById("tnfile2011");
				var img_3 = js_getElementById("tnfile2011");
				var img_4 = js_getElementById("tnfile2011");

				//console.log(img_1.getAttribute('src'));
               // window.location="http://localhost/snsm-admission/index.php/student/submit";
              // location.href = "http://localhost/snsm-admission/index.php/student/submit";
              // alert("Successfully Registered!");
        }
         else {
            var course = js_getElementById('txtStudentName');
            
            if (filesuploaded == false && target != 0) 
                alert('Please upload required file!');
            else {
                if (error != 0) {
                    alert('Please review your entries. Ensure all fields are filled out')
                }
                if ((error == 1) && (passwordmismatched == true))
                    alert('Password and confirm password mismatched!');
            }
        }
        if (error !=0)
        {
            if (focus) {
                focusobject.focus();
                focusobject.focus();
            }
        }
        

    }
   // console.log(teller);
}

function user_login()
{
	location.replace("account/login");
}

function check_user()
{
    var valid = true;
    var error = 0;
    var focus = false;
    var fg = $('#fsg' + 'CheckUserName');
	var username = js_getElementById('textCheckUserName');
    var pattern = $('#' + 'textCheckUserName').attr('pattern');
    var checker = js_getElementById('checkers' + 'CheckUserName');

    var uname = username.value;
    if (pattern) {
        var r = new RegExp('^' + pattern + '$');
        if (r.test(username.value) == false) {
            valid = false;
        }
    }
    if (valid) {
        if (valid) {
            checker.innerHTML = "";
            if (fg) {
                fg.removeClass('has-error');
            }
        }

    } else {
        error++;
        checker.innerHTML = "Input Valid E-mail";
        if (fg)
            fg.addClass('has-error');
        else
            checker.innerHTML = "&nbsp;*";
        if (!focus) {
            focusobject = username;
            focus = true;
        }
    }
    if (focus) {
        focusobject.focus();
        focusobject.focus();
    }

    if(error == 0)
    {
    var settings = {
        "url": "http://localhost/snsm-admission/index.php/StudentController/check_status/"+ uname,
        "method": "GET",
        "timeout": 0,
      };
      
      $.ajax(settings).done(function (response) {
        let stats = response; 
        var stud_stat = "";
        //console.log(response);
        if(stats == 0)
        {
            stud_stat = "You are currently under reviewing";
        }
        else if(stats == 1)
        {
            stud_stat = "We're currently reviewing your payment. If you're not yet submitted your payment, login and submit your receipt.";
        }
        else if(stats == 2)
        {
            stud_stat = "You're now all set. Login and view your schedule";
        }
        else if(stats == 3)
        {
            stud_stat = "Sorry your admission is canceled";
        }
        else
        {
            stud_stat = "Unknown Student";
        }
        if(stud_stat)
        {
            alert(stud_stat);
            location.replace("admissions");
        }


      });
    }

}
function get_age()
{
	var birthday = js_getElementById('txtStudBirthday');
    var set_age = js_getElementById('txtAge');
    var dob = new Date(birthday.value);
    //calculate month difference from current date in time
    var month_diff = Date.now() - dob.getTime();
    
    //convert the calculated difference in date format
    var age_dt = new Date(month_diff); 
    
    //extract year from date    
    var year = age_dt.getUTCFullYear();
    
    //now calculate the age of the user
    var age = Math.abs(year - 1970);
    
    //display the calculated age
    console.log(age);

    set_age.value = age;
    //document.write("Age of the date entered: " + age + " years");

}
function js_addmission_accept()
{
    var id = js_getElementById('stud_id');
    if (confirm("Are you sure?")) {

        var settings = {
            "url": "http://localhost/snsm-admission/index.php/AdminController/accept_student/" + id.value,
            "method": "POST",
            "timeout": 0,
          };
          
          $.ajax(settings).done(function (response) {
            let stats = response; 
            console.log(response);
            if(stats == "OKAY")
            {
                alert("Student Accepted!");
                location.replace('http://localhost/snsm-admission/admin/students/admission/' + id.value);
            }
    
    
          });
    }

}

function js_addmission_decline()
{
    var id = js_getElementById('stud_id');
    if (confirm("Are you sure?")) {

        var settings = {
            "url": "http://localhost/snsm-admission/index.php/AdminController/decline_student/" + id.value,
            "method": "POST",
            "timeout": 0,
          };
          
          $.ajax(settings).done(function (response) {
            let stats = response; 
            console.log(response);
            if(stats == "OKAY")
            {
                alert("Student Declined!");
                location.replace('http://localhost/snsm-admission/admin/students/admission/' + id.value);
            }
    
    
          });
    }

}





// function js_prev_form(id)
// {
//     if(id == 1)
//     {
//         $('#current').removeClass('active');
//         $('#current').addClass('');
//         $('#home').addClass('active');
//         home.id = "current";
//         navs.id = "application";
       
//         form_un.setAttribute('onclick',"alert('Please complete the current form and click next button.')");

//         b_button.setAttribute('hidden',0);
//         app_form.setAttribute('hidden',0);
//         well_desc.removeAttribute("hidden");
//         n_button.removeAttribute("onclick");
//         n_button.setAttribute('onclick','js_submit(1)');
        
//         homes.removeAttribute("onclick");
//         applicant.setAttribute('onclick','js_submit(1)');
//     }else if(id == 2)
//     {

//         $('#current').removeClass('active');
//         $('#current').addClass('');
//         $('#application').addClass('active');
//     // alert(b_button);
//         form_un.setAttribute('onclick','js_submit(2)');
//         b_button.removeAttribute("hidden");
//         next_nav.id = "current";
//         navs.id="home";
//         n_button.removeAttribute("onclick");
//         n_button.setAttribute('onclick','js_submit(2)');
//         well_desc.setAttribute('hidden',0);
//         app_form.removeAttribute("hidden");

//         applicant.removeAttribute("onclick");
//         homes.setAttribute('onclick','js_submit(0)');

//     }
// }

function js_updatechecker(id) {
    var checker = js_getElementById('' + id);
    if (checker != null) {
        fg = $('#' + id.replace('checker', 'fg'));
        if (fg)
            fg.addClass('has-error');
        else
            checker.innerHTML = "&nbsp;*";
    }
}

function js_loadcampus() {
    var course = js_getElementById('txtCourse');
    var semester = js_getElementById('txtSemester');
    var campus = js_getElementById('txtCampusCode');
    if (campus != null)
        campus.options.length = null;

    if ((course == null) || (semester == null) || (course == null))
        return;
    js_callserverfunction('CAMPUSCODE', '', '' + semester.value + ';' + course.value + ';' + campus.name)
}

// function js_loadcourses() {
//     var course = js_getElementById('txtCourse');
//     var semester = js_getElementById('txtSemester');
//     var txtclass = js_getElementById('txtClass');

//     // basic education
//     // #txtStatus
//     if ($('#txtClass').length > 0) {
//         if ($('#txtClass option:selected').val().substr(0, 1) == 'O') {
//             $('#fgSN').removeClass('hidden');
//             $('#txtSN').focus();
//             // $('#fgPaymentMode').removeClass('hidden');
//         } else {
//             $('#fgSN').addClass('hidden');
//             // $('#fgPaymentMode').addClass('hidden');
//             document.getElementById('txtMiddleName').disabled = false;
//             document.getElementById('txtLastName').disabled = false;
//             document.getElementById('txtFirstName').disabled = false;
//             document.getElementById('txtMiddleName').value = "";
//             document.getElementById('txtLastName').value = "";
//             document.getElementById('txtFirstName').value = "";
//             document.getElementById('txtSN').value = "";

//         }
        
//     }
    

//     //if (course != null)
//     //course.options.length = null;
//     if ((semester == null) || (course == null) || (txtClass == null))
//         return;
//     js_callserverfunction('COURSECODE', '', '' + semester.value + ';' + course.name + ';' + txtClass.value + ';' + course.value)
// }


function js_validdate(fld) {
    var RegExPattern = /^(?=\d)(?:(?:(?:(?:(?:0?[13578]|1[02])(\/|-|\.)31)\1|(?:(?:0?[1,3-9]|1[0-2])(\/|-|\.)(?:29|30)\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})|(?:0?2(\/|-|\.)29\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))|(?:(?:0?[1-9])|(?:1[0-2]))(\/|-|\.)(?:0?[1-9]|1\d|2[0-8])\4(?:(?:1[6-9]|[2-9]\d)?\d{2}))($|\ (?=\d)))?(((0?[1-9]|1[012])(:[0-5]\d){0,2}(\ [AP]M))|([01]\d|2[0-3])(:[0-5]\d){1,2})?$/;
    if ((fld.match(RegExPattern)) && (fld != '')) {
        return true;
    } else {
        return false;
    }
}

function js_zip(zip, tb) {
    var textbox = js_getElementById(tb);
    if (textbox != null) {
        textbox.value = '' + zip;
        js_hidediv('POP_WIN1');
        textbox.focus();
    }
}

function js_showhidecombobox(visible) {
    return;
    for (var i = 0; i < form.elements.length; i++) {
        var element = form.elements[i];
        if (element.name.substring(0, 3) == "txt") {
            if (element.options != null) {
                if (visible)
                    element.style.visibility = "visible";
                else
                    element.style.visibility = "hidden";
            }
        }
    }
}

function js_course(zip, tb, targetclass) {
    var textbox = js_getElementById(tb);
    if (textbox != null) {
        $("#txtStrand").val([]);
        if (targetclass !== undefined)
            $('#txtClass').val(targetclass.substr(0, 1));
        textbox.value = '' + zip;
        js_hidediv('POP_WIN1');
        js_showhidecombobox(true);
        textbox.focus();
        js_loadcampus();
    }
}


function js_setfocus() {
    var form = js_getElementById("form");
    if (form != null) {
        for (var i = 0; i < form.elements.length; i++) {
            var element = form.elements[i];
            if (element.name.substring(0, 3) == "txt") {
                element.focus();
                element.focus();
                return;
            }
        }
    }
}

function js_setotherschool() {
    var fields = ["txtLastSchoolAttended", "txtLastSchoolAddress", "txtLastSchoolType"];
    var form = js_getElementById("form");
    var focus = false;
    for (var i = 0; i < form.elements.length; i++) {
        var element = form.elements[i];
        for (var c = 0; c < fields.length; c++)
            if (element.name == fields[c]) {
                element.disabled = false;
                element.value = "";
                if (!focus) {
                    element.focus();
                    focus = true;
                }

            }
    }

    var f = js_getElementById("txtLastSchoolID")
    if (f != null)
        f.value = "0";

}

function js_fillcombobox(valueoption, receiver, selected) {
    var field = js_getElementById(receiver);
    if (field == null)
        return;
    field.options.length = 0;
    field.innerHTML = '';
    for (var i = 0; i < valueoption.length; i++) {
        var pair = valueoption[i];
        field.options[i] = new Option(pair[1], pair[0]);
        if (selected === undefined)
            field.options[i].selected = false;
        else {
            if (pair[0] == selected)
                field.options[i].selected = true;
        }
    }
    //field.options[0].selected = true;
}

function js_fillcomboboxcourse(valueoption, receiver, selected) {
    var field = js_getElementById(receiver);
    if (field == null)
        return;
    field.options.length = 0;
    field.innerHTML = '';
    for (var i = 0; i < valueoption.length; i++) {
        var pair = valueoption[i];
        field.options[i] = new Option(pair[1], pair[0]);

        if (pair[2] != '')
            field.options[i].setAttribute('data-strandwhitelist', pair[2]);
        if (pair[3] != '')
            field.options[i].setAttribute('data-strandblacklist', pair[3]);
        if (pair[4] != '')
            field.options[i].setAttribute('data-classwhitelist', pair[4]);

        if (selected === undefined)
            field.options[i].selected = false;
        else {
            if (pair[0] == selected)
                field.options[i].selected = true;
        }
    }
    js_filtercourses();
}


function js_clearhidecombobox(receiver) {
    var field = js_getElementById(receiver);
    if (field == null)
        return;
    field.value = null;
    field.options.length = 0;
}



function js_getschools(divisionid, districtid, divid) {
    var division = js_getElementById(divisionid);
    if (division == null)
        return;
    var district = js_getElementById(districtid);
    if (district == null)
        return;

    var div = js_getElementById(divid);
    if (div == null)
        return;
    div.innerHTML = "<div align=\"center\"><br/><br/><br/><img src=\"img/loadingsmall.gif\" align=\"absmiddle\">&nbsp;Loading Schools ...</div>";
    js_callserverfunction('popGetSchoolsByDistrict', divid, '' + division.value + ';' + district.value);
}

function js_setschool(schoolid) {
    var scfield = js_getElementById('txtLastSchoolID'); // school code
    var snfield = js_getElementById('txtLastSchoolAttended'); // school name
    var safield = js_getElementById('txtLastSchoolAddress'); // school address
    var stfield = js_getElementById('txtLastSchoolType'); // school type

    if ((schoolid == 'UE0') || (schoolid == 'UE1')) {
        var schoolname = $('#School' + schoolid).data('schoolname');
        var schooladdress = $('#School' + schoolid).data('schooladdress');
        var schooltype = $('#School' + schoolid).data('schooltype');
        schoolid = $('#School' + schoolid).data('schoolid');
    } else if (schoolid == '') {
        var schoolname = '';
        var schooladdress = '';
        var schooltype = '';
    } else {
        var schoolname = js_getElementById('SN_' + schoolid).innerHTML; // school name value
        var schooladdress = js_getElementById('SA_' + schoolid).innerHTML; // school address value    
        var schooltype = js_getElementById('ST_' + schoolid).innerHTML; // school type
    }

    if ((scfield == null) || (snfield == null) || (safield == null) || (schoolname == null) || (schooladdress == null))
        return;

    scfield.value = schoolid;
    snfield.value = schoolname;
    safield.value = schooladdress;
    stfield.value = schooltype;

    snfield.disabled = true;
    safield.disabled = true;
    stfield.disabled = true;
    scfield.disabled = true;

    js_hidediv('POP_WIN1');
    js_showhidecombobox(true);
}

function js_searchschool(id, regionid, divisionid, districtid, divid) {
    var search = js_getElementById(id);
    var region = js_getElementById(regionid);
    var division = js_getElementById(divisionid);
    var district = js_getElementById(districtid);
    var div = js_getElementById(divid);

    if ((search == null) || (region == null) || (division == null) || (district == null) || (div == null))
        return;

    region.value = "";
    division.options.length = null;
    district.options.length = null;

    if (search.value.length == 0) {
        alert('Please type your school name and click search button!     ');
        search.focus();
        return;
    }

    if (search.value.length <= 2) {
        alert('Search criteria must be three or more characters long!     ');
        search.value = '';
        search.focus();
        return;
    }

    div.innerHTML = "<div align=\"center\"><br/><br/><br/><img src=\"img/loadingsmall.gif\" align=\"absmiddle\">&nbsp;Searching Schools ...</div>";
    js_callserverfunction('popSearchSchools', divid, search.value + '');
    search.focus();
}

function js_searchcourse(receiver, semesterid) {
    var semester = js_getElementById(semesterid);
    if (semester == null)
        return;
    js_loadpopup('popCourse', 'POP_WIN1', receiver + ';' + semester.value, 470)
}

function js_displayotherrequirements(d, v, c) {
    var div = js_getElementById(d);
    if (div == null) return;
    if ((v == 'T') && (c != 'B'))
        div.innerHTML = 'Evaluation of academic records is a requirement prior to the conduct of entrance examination. Kindly submit to the Admissions Office your Transcript of Records or Certification of Grades';
    else if ((v == 'F') && (c == 'C'))
        div.innerHTML = 'Kindly bring photocopy of Grade 12 grade if already available';
    else if ((v == 'F') && (c == 'S'))
        div.innerHTML = 'Kindly bring photocopy of Grade 10 grade if already available';
    else
        div.innerHTML = '';
    js_loadcourses();
}

function js_disability(o) {
    var div = js_getElementById('txtDisability');

}

function js_setvalue(id, v) {
    var o = js_getElementById(id);
    if (o) {
        o.value = v;
    }
}

function js_loadPSGC(caller) {
    var select = js_getElementById(caller);
    if (select == null) {
        alert('Error: ' + caller);
        return;
    }
    if (select.value == '')
        return false;
    js_callserverfunction('PSGC', '', '' + caller + ';' + select.value)
    js_updatecompleteaddress(caller);
}

function js_switchaddress(local, suffix) {
    var province = js_getElementById('txtProvince' + suffix);
    var city = js_getElementById('txtCity' + suffix);
    var submun = js_getElementById('txtSubMun' + suffix);
    var barangay = js_getElementById('txtBarangay' + suffix);

    var province_tr = js_getElementById('fgProvince' + suffix);
    var city_tr = js_getElementById('fgCity' + suffix);
    var submun_tr = js_getElementById('fgSubMun' + suffix);
    var barangay_tr = js_getElementById('fgBarangay' + suffix);

    var addresslabel = js_getElementById('AddressLabel' + suffix);

    foreign = !local;
    province.disabled = foreign;
    city.disabled = foreign;
    submun.disabled = foreign;
    barangay.disabled = foreign;
    var display = 'block';
    if (foreign)
        display = 'none';

    province_tr.style.display = display;
    city_tr.style.display = display;
    submun_tr.style.display = display;
    barangay_tr.style.display = display;

    if (local)
        addresslabel.innerHTML = 'House No./Bldg/Street/Village';
    else
        addresslabel.innerHTML = 'Full Address';


}

function js_examdates() {
    js_loadpopup('popExamDates', 'POP_WIN1', '', 470)
}

function js_viewcourses() {
    js_loadpopup('popViewCourses', 'POP_WIN1', '', 470)
}

function js_resetpassword() {
    js_loadpopup('popResetPassword', 'POP_WIN1', '', 470)
}

function js_submitresetpassword(id1, id2, id3, id4, id5) {
    if ((id1 == undefined) || (id2 == undefined) || (id3 == undefined) || (id4 == undefined)) {
        alert('Invalid parameters');
        return;
    }
    var v1 = $('#' + id1).val();
    var v2 = $('#' + id2).val();
    var v3 = $('#' + id3).val();
    var v4 = $('#' + id4).val();
    var v5 = $('#' + id5).val();

    var p = Base64.encode(v1 + ';' + v2 + ';' + v3 + ';' + v4 + ';' + v5);
    js_callserverfunction('RESETPASSWORD', 'RESETPASSWORDDIV', p);
}


function js_hidemodal() {
    if (__closablemodal) {
        $('#myModal').modal('hide');
    }
}

function js_updatecompleteaddress(name) {
    n = name.substr(-1);

    var s = $('#txtSubAddress' + n).val();
    var b = $("#txtBarangay" + n + " option:selected").text();
    var sm = $("#txtSubMun" + n + " option:selected").text();
    var c = $("#txtCity" + n + " option:selected").text();
    var p = $("#txtProvince" + n + " option:selected").text();
    var r = $('#txtRegion' + n + " option:selected").val();

    var address = s;
    if ((b != '') && (b != 'Select...')) {
        if (address != '')
            address += ', ';
        address += b;
    }
    if ((sm != '') && (sm != 'Select...')) {
        if (address != '')
            address += ', ';
        address += sm;
    }
    if ((c != '') && (c != 'Select...')) {
        if (address != '')
            address += ', ';
        address += c;
    }
    if ((p != '') && (p != 'Select...')) {
        if (address != '')
            address += ', ';
        address += p;
    }
    //if ( r.length == 2) 
    //    address += ', ' + $('#txtRegion' + n + " option:selected" ).text();   

    while (address.indexOf('  ') > -1) {
        address = address.replace('  ', ' ');
    }
    $('#txtAddress' + n).val(address.toUpperCase());
}

function js_showaddress1() {
    var value = $('#txtSameAddress').prop('checked');
    if (value == false) {
        $('#fgRegion1').show();
        $('#fgProvince1').show();
        $('#fgCity1').show();
        $('#fgSubMun1').show();
        $('#fgBarangay1').show();
        $('#fgSubAddress1').show();
        $('#fgAddress1').show();
        $('#fgZipCode1').show();
    } else {
        $('#fgRegion1').hide();
        $('#fgProvince1').hide();
        $('#fgCity1').hide();
        $('#fgSubMun1').hide();
        $('#fgBarangay1').hide();
        $('#fgSubAddress1').hide();
        $('#fgAddress1').hide();
        $('#fgZipCode1').hide();
    }
}

var walltimer = setInterval(walltimerfx, 22000);
var wall = 0;

function walltimerfx() {
    if ($('body').hasClass('wall')) {
        if (wall > 0)
            $('body').removeClass('wall' + wall);
        wall++;
        if (wall > 3)
            wall = 0;
        if (wall > 0)
            $('body').addClass('wall' + wall)
            //window.setTitle(wall);
    }
}

function js_filtercourses() {
    var strand = $('#txtStrand').val();
    var sclass = $('#txtClass').val();
    var list = '';
    if (strand === undefined)
        strand = '';
    if (sclass === undefined)
        sclass = '';
    $('#txtCourse option').each(function(index, element) {
        var matched = true;
        if ($(this).data('strandwhitelist') !== undefined) {
            list = ',' + $(this).data('strandwhitelist') + ',';
            if (list.search(',' + strand + ',') == -1)
                matched = false;
        }
        if ($(this).data('strandblacklist') == undefined) {
            list = ',' + $(this).data('strandblacklist') + ',';
            if (list.search(',' + strand + ',') > -1)
                matched = false;
        }
        if ($(this).data('classwhitelist') !== undefined) {
            list = ',' + $(this).data('classwhitelist') + ',';
            if (list.search(',' + sclass + ',') == -1)
                matched = false;
        }

        $(this).prop('disabled', (matched) ? false : true);
        if ($(this).prop('selected') && !matched)
            $(this).prop('selected', false);
    });
    js_setrequiredfiles();
}

function js_setrequiredfiles(sclass) {
    var sclass = $('#txtClass').val();
    // file uploads for transferee/degree-holder
    // CSN-10/12/2020
    $('#tnfile2081,#tnfile2082').data('required', (sclass == 'D') || (sclass == 'T') ? true : false);
    if ((sclass == 'D') || (sclass == 'T'))
        $('#fgFile2081,#tnfile2082').removeClass('hidden');
    else
        $('#fgFile2081,#tnfile2082').addClass('hidden');
}


function js_fileupload(id, size, ss, wrn, cs, datas, w, h) {
    if ((datas === undefined) && $('#' + id).length) {

        var files = $('#' + id)[0].files[0];
        if (files.size > size * 1024) {
            alert('File size must not be greater than ' + size + 'KB.');
            $('#' + id).val('').focus();
            return;
        }
    }
    if (w === undefined)
        w = 0;
    if (h === undefined)
        h = 0;
    if ((files !== undefined) || (datas !== undefined)) {
        var fd = new FormData();
        if (files !== undefined)
            fd.append(id, files);
        if (datas !== undefined) {
            fd.append('data', datas);
            fd.append('w', w);
            fd.append('h', h);
        }
        fd.append('name', id);
        fd.append('wrn', wrn);
        fd.append('cs', cs);
        $.ajax({
            url: ss,
            type: "POST",
            data: {fd},
            contentType: false,
            processData: false,
            success: function(response) {
                
                //console.log(fd);
               // console.log(fd[0]);
                
                for (var pair of fd.entries()) {
                  // console.log(pair[0]+ ', ' + pair[1]); 
                }
                if (response.substr(0, 5) == 'OKAY:') {
                    var rv = response.substr(5, 255).split(';');
                    $('#tn' + id).prop('src', datas);
					let image = datas;					
					image = image.split(',');
					//console.log(image[1]);
					$('#tn2' + id).attr('value', image[1]);
                    if (rv[1])
                        $('#tn' + id).removeClass('fpPortrait fpLandscape fpSquare img-error').addClass(rv[1]);
                    //eval(response.substr(5,256));
                    alert('File accepted for uploading.');
                } else {
                    
// for(let i = 0; i < fd.length; i++){
//     console.log(fd[i]);
//   }
//console.log(response.substr(0, 5));
//console.log(fd);
                    alert(response);
                    $('#' + id).val('').focus();
                }
            },
        });
    } else {
        alert('No file selected!');
        $('#' + id).focus();
    }
}

function js_uploadlogin(mode) {
    if ((mode == 1) || (mode == 'pef') || (mode == 'trg') || (mode == 'portal')) {
        js_callserverfunction('UPLOADLOGINBODY', 'BODY', mode);
        $('body').removeClass('wall3 wall 2 wall1');
        $('body').removeClass('wall3 wall 2 wall1');
    } else if (mode == 0)
        js_callserverfunction('LOGOUT', 'BODY', '');
    else {
        /*<<<<<<< .mine
                if (mode == 9) {
        ||||||| .r56
                if (mode == 9) { 
        =======*/
        if ((mode == 9) || (mode == 10)) {
            /*>>>>>>> .r59*/
            var pw = $('#txtBirthDate').val();
            var ap = '';
            var sn = $('#txtSN').val();
        } else {
            var ap = $('#txtApplicationNumber').val();
            var pw = $('#txtPassword').val();
            var sn = $('#txtSN').val();
        }
        if (sn === 'undefined')
            sn = '';
        if ((mode != 9) && (mode != 10)) {
            if (ap == '') {
                $('#fgApplicationNumber').addClass('has-error');
                $('#txtApplicationNumber').focus();
                return;
            }
            if (pw == '') {
                $('#fgPassword').addClass('has-error');
                $('#txtPassword').focus();
                return;
            }
        } else {
            if (sn == '') {
                $('#fgSN').addClass('has-error');
                $('#txtSN').focus();
                return;
            }
            if (pw == '') {
                $('#fgBirthDate').addClass('has-error');
                $('#txtBirthDate').focus();
                return;
            }
            mode = (mode == 9) ? 5 : 6;
        }

        var p = mode + ';' + ap + ';' + pw + ';' + sn;
        js_callserverfunction('UPLOADLOGIN', 'BODY', p);
    }
}

function js_uploadpage(page, novalidate) {
    var p = '';
    var error = false;

    if (novalidate === undefined) {
        $('input,select').filter('[required]:visible').each(function() {
            var item = $(this);
            var id = item.prop('id');
            var val = item.val();
            var type = item.prop('type');

            if ((type == 'checkbox') && !item.prop('checked'))
                val = '';

            if (val == '') {
                if (type != 'checkbox')
                    item.parents('div').first().addClass('has-error');
                item.focus();
                error = true;
                return false;
            }
            if (item.prop('disabled') == false) {
                var pattern = item.prop('pattern');
                if (pattern) {
                    r = new RegExp('^' + pattern + '$', 'gi');
                    if (r.test(val) == false) {
                        item.parents('div').first().addClass('has-error');
                        item.focus();
                        error = true;
                        return false;
                    }
                }
                var min = item.prop('min');
                var max = item.prop('max');
                if ((min && (parseInt(val) < parseInt(min))) || (max && (parseInt(val) > parseInt(max)))) {
                    item.parents('div').first().addClass('has-error');
                    item.focus();
                    error = true;
                    return false;
                }
            }

            p = p + id + '=' + val + ';';
        });

        $('input,select').filter('[data-submit="1"]').each(function() {
            var item = $(this);
            var val = $(this).val();
            if (val == null)
                val = '';

            var min = item.prop('min');
            var max = item.prop('max');
            if ((min && (parseInt(val) < parseInt(min))) || (max && (parseInt(val) > parseInt(max)))) {
                item.parents('div').first().addClass('has-error');
                item.focus();
                error = true;
                return false;
            }
            p = p + $(this).prop('id') + '=' + val + ';';
        });

        if (!error && ($('.nstp').length > 0)) {
            if ($("input[name='txtNSTP']:checked").length == 0) {
                alert('Please select preferred NSTP type and schedule.');
                error = true;
            }
            var nstp = $("input[name='txtNSTP']:checked").val()
            p = p + 'txtNSTP=' + nstp + ';';
        }

        if ($('#txtAgree').length > 0) {
            if ($("#txtAgree:checked").length == 0) {
                alert('You must agree to the terms and conditions stated above to proceed.');
                error = true;
            }
        }

        if (!error && (($('#txtGuardianMobileNumber').length > 0) ||
                       ($('#txtMotherMobileNumber').length > 0)   ||
                       ($('#txtFatherMobileNumber').length > 0)) ) {
            if (($('#txtGuardianMobileNumber').val().length == 0) &&
                ($('#txtMotherMobileNumber').val().length == 0)    &&
                ($('#txtFatherMobileNumber').val().length == 0) )  {
                    alert('Please provide at least 1 contact number of parent/guardian.');
                    $('#txtFatherMobileNumber').focus();
                    error = true;

            }
        }

        var filesuploaded = true;
        if (!error) {
            $('.fileupload').filter('[data-required="1"]').each(function() {
                if ($(this).prop('src').match(/blank/)) {
                    error = true;
                    $(this).addClass('img-error');
                    filesuploaded = false;
                }
            });
        }
        if (!filesuploaded)
            alert('Please upload required files!');
    }

    if (!error) {
        if ((page == 5) && !confirm('You must submit your information and files to process your enrollment. Do you want to proceed?'))
            return;
        js_callserverfunction('UPLOADPAGE', 'BODY', page + ';' + p);
    }
}

function js_viewpaymentprocedures() {
    js_loadpopup('popPaymentProcedures', 'POP_WIN1', '', 470)
}

function js_viewpef() {
    alert('Sorry, this feature is not yet available.');
}

function js_zoom(id) {

    var script = '' +
        '<style>' +
        '@media print {' +
        'button {display:none}' +
        '}' +
        'img {border:2px solid #000000}' +
        'button {margin-bottom:5px;height:25px}' +
        '</style>' +
        '<div><button type="button" onclick="window.print()">Print</button> ' +
        '<button type="button" onclick="zoomin()">Zoom-In</button> ' +
        '<button type="button" onclick="zoomout()">Zoom-Out</button><br>' +
        '<script>' +
        '    function zoomin() {' +
        '        var csn = document.getElementById("csn");' +
        '        var currWidth = csn.clientWidth;' +
        '        csn.style.width = (currWidth + 100) + "px";' +
        '    }' +
        '    function zoomout() {' +
        '        var csn = document.getElementById("csn");' +
        '        var currWidth = csn.clientWidth;' +
        '        csn.style.width = (currWidth - 100) + "px";' +
        '    }' +
        '</script>';



    var image = new Image();
    image.src = $('#' + id).attr('src');
    image.id = 'csn';
    var w = window.open("", 'ImagePreviewV01');
    w.document.write('<title>Image Preview</title><body>' +
        script +
        image.outerHTML +
        '</body>');
    w.document.close();
    //alert('Zoom feature not yet available!');
}

function js_addwallpaper() {
    $('body').addClass('wall');
    if (walltimer)
        clearInterval(walltimer)
    walltimer = setInterval(walltimerfx, 22000);
    wall = 0;
}

function js_removewallpaper() {
    clearInterval(walltimer)
    $('body').removeClass('wall3 wall2 wall');
}

function js_getfees(pm) {
    js_callserverfunction('FEES', 'FEES', pm)
}

function js_toggleescqvr() {
    var txtESCSchoolNumber = $('#txtESCSchoolNumber');
    var txtESCNumber = $('#txtESCNumber');
    var txtQVRNumber = $('#txtQVRNumber');
    txtESCSchoolNumber.prop('disabled', false);
    txtESCNumber.prop('disabled', false);
    txtQVRNumber.prop('disabled', false);
    if ((txtESCSchoolNumber.val() != '') || (txtESCNumber.val() != '')) {
        txtQVRNumber.prop('disabled', true);
    }
    if (txtQVRNumber.val() != '') {
        txtESCSchoolNumber.prop('disabled', true);
        txtESCNumber.prop('disabled', true);
    }
}

function js_CheckSN() {

    var SN = js_getElementById('txtSN');
    // document.querySelector("#txtLastName").value = "SDfsdfSDF";
    js_callserverfunction('CheckSN', '', SN );
return;

    var data = new FormData();
    data.append("txtSN",sn);
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST","/onlineadmissionBS__test/ap_ajax/CheckSN.php ",{SN:sn})
    xhr.onload = function(){
        console.log(this.response);
    };
    xhr.send(data);

    alert("Student No. :" + sn);

    // $('#txtSN').load("/onlineadmissionBS__test/ap_ajax/CheckSN.php ",{SN:sn});
    // "<?php echo APP_BASE ?>fPaymentDistribution/plain",{PayMode:selectedValue,cs:getRandom}
    // $.get("/onlineadmissionBS__test/ap_ajax/CheckSN.php",{SN:sn});
    
}

function js_checkals(o) {
    val = $('#txtHSALS :selected').val();
    var disabled = (val != 'N/A') && (val != '');
    $('.als').attr('disabled', disabled);
    if (disabled) {
        $('.als').val('0');
    }
    else {
        $('#txtHS_English').focus();
    }
    
}

function js_checkg12gwa(s) {
    var t = (s == 1) ? 2 : 1;
    var vs = $('#txtG12GWA' + s).val();
    var vt = $('#txtG12GWA' + t).val();
    if (isNaN(vs)) {
        $('#txtG12GWA' + t).val(vs);
    }
    else {
        if (isNaN(vt))
            $('#txtG12GWA' + t).val('');
    }
}

function js_submitdpcform(minor) {
    var name = '';
    if (minor == 1) {
        name = $('#ParentGuardian').val().trim();
        if (name == '') {
            alert('Please provide name of parent or guardian.');
            $('#ParentGuardian').focus();
            return;
        }
    }
   
    p = minor + ';' + name + ';' + $('#Semester').val() + ';' + $('#SN').val() + ';' + $('#RCNo').val() + ';' + $('#cs').val() + ';';
    js_callserverfunction('ProcessACCEPTDPCFORM', 'BODY', p);
}


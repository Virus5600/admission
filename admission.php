<?php
    include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        session_start(); 
        include('header.php');
        include('mainpageheader.php');
    ?>

    <style type="text/css">
        .lala:focus{
            border-color:#843534 !important;
            -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483 !important;
            box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483 !important;
        }

        .buttt.buttt1 {
            color: #ffffff;
            background-color: #002147;
            border-color: #002147;
        }

        .buttt.buttt1:hover {
            color: #fff;
            background-color: #0a396f;
            border-color: #0a396f;
        }

        .buttsky {
            color: #ffffff;
            background-color: #64acff;
            border: 0px;
            padding: 5px 10px;
            border-radius: .25rem;
        }

        .buttsky:hover {
            color: #fff;
            background-color: #7cb9ff;
            border-color: #7cb9ff;
        }

        .studproflabel {
            color:#516171;
            margin-bottom: 0px;
            font-size: 1.9rem;
            font-weight: 700;
        }

        .studproflabel1 {
            color:#516171;
            margin-bottom: 0px;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .studproflabel2 {
            color:#516171;
            margin-bottom: 0px;
            font-size: 1.5rem;
            font-weight: 400;
        }

        .studproflabel3 {
            color:#516171;
            margin-bottom: 0px;
            font-size: 1.8rem;
            font-weight: 400;
        }
    </style>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div id="preloader" style="background-image:url(assets/wp-content/uploads/2020/09/preloader.gif);"></div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->

        <body class="page-template-default page page-id-1111 wp-embed-responsive theme-eikra woocommerce-no-js header-style-1 has-topbar topbar-style-1 no-sidebar rt-course-grid-view product-grid-view wpb-js-composer js-comp-ver-6.2.0 vc_responsive elementor-default elementor-kit-1973 elementor-page elementor-page-1111">
            <div id="page" class="site">
                <header id="masthead" class="site-header">
                    <div id="tophead">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="tophead-contact">
                                        <ul>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:(02) 8861 8922">(02) 8861 8922</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@snsm.edu.ph">info@snsm.edu.ph</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tophead-right tophead-address">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>Block 1 Lot 6 Phase I, Sto. Niño Village, Tunasan Muntinlupa City, Philippines</span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container masthead-container">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <div class="site-branding">
                                    <a class="dark-logo" href="https://snsm.edu.ph/"><img src="assets/wp-content/uploads/2020/11/SNSM-Logo-Limejuice.png" alt="Sto. Niño School of Muntinlupa"></a>
                                    <a class="light-logo" href="https://snsm.edu.ph/"><img src="assets/wp-content/themes/eikra/assets/img/logo-light.png" alt="Sto. Niño School of Muntinlupa"></a>
                                </div>
                            </div>
                            <div class="col-sm-9 col-xs-12">
                                        <div class="header-icon-area">
                                <div class="search-box-area">
                                <div class="search-box">
                                    <form role="search" method="get" action="https://snsm.edu.ph/">
                                        <a href="#" class="search-close">x</a>
                                        <input type="text" name="s" class="search-text" placeholder="Search Here..." required>
                                        <a href="#" class="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </form>
                                </div>
                            </div>  <div class="clear"></div>                               
                            </div>          
                            <div id="site-navigation" class="main-navigation">
                                <nav class="menu-onepage-menu-home-1-container">
                                    <ul id="menu-onepage-menu-home-1" class="menu">
                                        <li id="menu-item-1579" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1579">
                                            <a href="#">Home</a>
                                        </li>
                                        <li id="menu-item-1549" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1549">
                                            <a href="#">About</a>
                                        </li>
                                        <li id="menu-item-1551" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-1551">
                                            <a href="#sec-admissions">Admissions</a>
                                        </li>
                                        <li id="menu-item-1552" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1552">
                                            <a href="#">Student Life</a>
                                        </li>
                                        <li id="menu-item-1553" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1553">
                                            <a href="#" aria-current="page">Contact</a>
                                        </li>
                                    </ul>
                                </nav>          
                            </div>
                            </div>
                        </div>
                    </div>
                </header>

                <div id="content" class="site-content">
                    <div class="entry-banner">
                         <div class="container">
                            <div class="entry-banner-content">
                                <h1 class="entry-title">Admission</h1>
                                <div class="breadcrumb-area">
                                    <div class="entry-breadcrumb"><!-- Breadcrumb NavXT 6.6.0 -->
                                        <span property="itemListElement" typeof="ListItem">
                                            <a property="item" typeof="WebPage" title="Go to Sto. Niño School of Muntinlupa." href="https://snsm.edu.ph/" class="home">
                                                <span property="name">Sto. Niño School of Muntinlupa</span>
                                            </a>
                                            <meta property="position" content="1">
                                        </span>
                                        <span class="breadcrumb-seperator"> - </span>
                                        <span property="itemListElement" typeof="ListItem">
                                            <span property="name">Admission</span>
                                            <meta property="position" content="2">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="primary" class="content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <main id="main" class="site-main">
                                    <article id="post-1111" class="post-1111 page type-page status-publish hentry">
                                        <div class="entry-content">
                                            <div data-elementor-type="wp-page" data-elementor-id="1111" class="elementor elementor-1111" data-elementor-settings="[]">
                                                <div class="elementor-inner">
                                                    <div class="elementor-section-wrap">
                                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-fd03453 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fd03453" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9bbe8af" data-id="9bbe8af" data-element_type="column">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-23e1a46 elementor-widget elementor-widget-rt-contact-info" data-id="23e1a46" data-element_type="widget" data-widget_type="rt-contact-info.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="rt-vc-contact-2">
                                                                                            <ul class="rtin-item">
                                                                                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                                                                    <span class="contact-content">B1 L6 St. Mary Street, Sto. Nino Village, Tunasan, Muntinlupa, 1773</span>
                                                                                                </li>
                                                                                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                                                                    <span class="contact-content">info@snsm.edu.ph</span>
                                                                                                </li>
                                                                                                <li><i class="fa fa-phone" aria-hidden="true"></i>
                                                                                                    <span class="contact-content">(02) 8861 8922</span>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-c90d101 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="c90d101" data-element_type="widget" data-widget_type="social-icons.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                                                                            <div class="elementor-grid-item">
                                                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-43d6ce9" href="https://www.facebook.com/stoninoschoolofmuntinlupaofficial/" target="_blank">
                                                                                                <span class="elementor-screen-only">Facebook</span>
                                                                                                <i class="fab fa-facebook"></i>                 </a>
                                                                                            </div>
                                                                                            <div class="elementor-grid-item">
                                                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-238b775" target="_blank">
                                                                                                <span class="elementor-screen-only">Twitter</span>
                                                                                                <i class="fab fa-twitter"></i>                  </a>
                                                                                            </div>
                                                                                            <div class="elementor-grid-item">
                                                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-aa45bb9" target="_blank">
                                                                                                <span class="elementor-screen-only">Youtube</span>
                                                                                                <i class="fab fa-youtube"></i>                  </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b8bca83" data-id="b8bca83" data-element_type="column">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-3f5e540 elementor-widget elementor-widget-heading" data-id="3f5e540" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h2 class="elementor-heading-title elementor-size-xl">Admission</h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-3bddf97 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="3bddf97" data-element_type="widget" data-widget_type="divider.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-divider">
                                                                                            <span class="elementor-divider-separator"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-16232e2 elementor-widget elementor-widget-shortcode" data-id="16232e2" data-element_type="widget" data-widget_type="shortcode.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-shortcode">
                                                                                            <div role="form" class="wpcf7" id="wpcf7-f7-p1111-o1" lang="en-US" dir="ltr">
                                                                                                <div class="screen-reader-response">
                                                                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                                                                </div>


                        <!-- <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Warning!</strong> <font id="txtdesc">Better check yourself, you're not looking too good.</font>
                            </div>
                        </div> -->
                        
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link tabwelcomeA active" data-toggle="tab" href="#welcometab" role="tab" onclick="admissiontabhome()"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Welcome</span></a> </li>
                            <li class="nav-item"> <a class="nav-link tabapplicantA" data-toggle="tab" href="#applicanttab" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Applicant</span></a> </li>
                            <li class="nav-item"> <a class="nav-link tabrequirementsA" data-toggle="tab" href="#requirementstab" role="tab" onclick="admissiontabrequirements()"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Requirements</span></a> </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border" style="border: none;">
                            <div class="tab-pane active" id="welcometab" role="tabpanel">
                                <br>
                                <div class="well">
                                    <strong>Welcome to the Sto. Niño School of Muntinlupa Online Application for Admission!</strong><br>
                                    <br>
                                    <ul>
                                        <li>Be ready to upload your pre-admission requirements:
                                            <ul style= "list-style-type: decimal;">
                                                <li>2”x2” photo with white background</li>
                                                <li>Report Card (Form 138)</li>
                                                <li>Authenticated Copy of Birth Certificate</li>
                                                <li>Certificate of Good Moral Character</li>
                                                <li>Permanent Record (Form 137)</li>
                                            </ul>
                                        </li>
                                        <li>Review all the information that you entered in the application form before clicking the Submit button.  Once submitted, you cannot edit the application form.</li>
                                    </ul>
                                    <hr>
                                    <div class="container pt-3 pb-3">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="pb-3">
                                                    <span property="name"><i>  Check your admission status here..</i></span><meta property="position" content="1">  
                                                </div>
                                                <div class="tml-field-wrap tml-submit-wrap"  id="fsgCheckUserName">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                                            <span class="wpcf7-form-control-wrap tel-871">
                                                                <input id="txtchkadmissionstatus" name="txtchkadmissionstatus" type="email" class="form-control" value="" autocomplete="off" placeholder="Enter admission number" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                                                <span class="fw-lighter text-danger" id="checkersCheckUserName"></span>
                                                            </span>
                                                        </div>
                                                    <button onclick="checkadmissionstatus();" class="buttt buttt1">Check</button> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="container pt-3">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="pb-3">
                                                <span property="name"><i>  Already have an account? Login here..</i></span><meta property="position" content="1">   
                                                </div>
                                                <div class="tml-field-wrap tml-submit-wrap">
                                                    <button onclick="gotologin()" class="buttt buttt1">Log In</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-top:1em; padding-left: 0px">
                                    <div id="">
                                        <button class="btn btn-danger" onclick="admissiontabapplicant()" style="color:white; width: 100px">Next</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane p-3" id="applicanttab" role="tabpanel">
                                <div class="contact-us-form">
                                    <div class="row">
                                        <div class="col-sm-12" name="app_form" id="app_form">
                                            <span property="name"><i>*Fill the required feild that has (*) on it</i></span><meta property="position" content="1">
                                            <br><br>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div id="demo" class="collapseOne panel-collapse collapsed">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                                <div class="form-group" id="fgSchoolAttended">
                                                                    <span class="wpcf7-form-control-wrap email-788">
                                                                    <input type="text" name="txtSchoolAttended" id="txtSchoolAttended" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control reqstudentinfo" aria-required="true" aria-invalid="false" placeholder="School last attended*" style="text-transform:uppercase"/>
                                                                    <span id="checkerSchoolAttended"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                                <div class="form-group">
                                                                    <span class="wpcf7-form-control-wrap email-788">
                                                                        <select name="txtGrade" id="txtGrade" class="form-control reqstudentinfo" style="height: 45px; color: #555555;">
                                                                            <option value="" selected="selected">SELECT GRADE</option>
                                                                            <option value="GRADE 1">GRADE 1</option>
                                                                            <option value="GRADE 2">GRADE 2</option>
                                                                            <option value="GRADE 3">GRADE 3</option>
                                                                            <option value="GRADE 4">GRADE 4</option>
                                                                            <option value="GRADE 5">GRADE 5</option>
                                                                            <option value="GRADE 6">GRADE 6</option>
                                                                            <option value="GRADE 7">GRADE 7</option>
                                                                            <option value="GRADE 8">GRADE 8</option>
                                                                            <option value="GRADE 9">GRADE 9</option>
                                                                            <option value="GRADE 10">GRADE 10</option>
                                                                            <option value="GRADE 11">GRADE 11</option>
                                                                            <option value="GRADE 12">GRADE 12</option>
                                                                            <option value="KINDER II">KINDER II</option>
                                                                        </select>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                                <div class="form-group">
                                                                    <span class="wpcf7-form-control-wrap email-788">
                                                                    <input type="text" name="txtSchoolYear" id="txtSchoolYear" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control reqstudentinfo" aria-required="true" aria-invalid="false" placeholder="SY*" />
                                                                    <span id="checkerSchoolYear"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9">
                                                                <div class="form-group">
                                                                    <span class="wpcf7-form-control-wrap email-788">
                                                                    <input type="text" name="txtSchoolAddress" id="txtSchoolAddress" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control reqstudentinfo" aria-required="true" aria-invalid="false" placeholder="Address*" style="text-transform:uppercase"/>
                                                                    <span id="checkerSchoolAddress"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                                <div class="form-group">
                                                                    <span class="wpcf7-form-control-wrap email-788">
                                                                        <input type="text" name="txtSchoolNum" id="txtSchoolNum" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Tel./Mobile No." style="text-transform:uppercase"/>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 pb-3">
                                                                <hr>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                     
                                            <br>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">             
                                                        <span class="wpcf7-form-control-wrap text-215">
                                                            <label for="txtStudentMName" class="col-sm-3 control-label">Student's Name:</label>
                                                            <div class="col-lg-3 col-md-3 col-sm-3" style="padding-right: 5px;">
                                                                <input type="text" name="txtStudentFName" id="txtStudentFName" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control reqstudentinfo" aria-required="true" aria-invalid="false" placeholder="First Name*" style="text-transform:uppercase"/>
                                                                <span id=""></span>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3" style="padding-right: 5px; padding-left: 5px;">
                                                                <input type="text" name="txtStudentMName" id="txtStudentMName" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Middle Name" style="text-transform:uppercase"/>
                                                                <span id=""></span>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3" style="padding-left: 5px;">
                                                                <input type="text" name="txtStudentLName" id="txtStudentLName" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control reqstudentinfo" aria-required="true" aria-invalid="false" placeholder="Last Name*" style="text-transform:uppercase"/>
                                                                <span id=""></span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <div class="form-group">
                                                        <label for="txtLastSchoolType" class="col-sm-3 control-label">GENDER:</label>
                                                        <div class="col-sm-3">
                                                            <select name="txtSex" id="txtSex" class="form-control reqstudentinfo" style="height: 45px; color: #555555;">
                                                            <option value="" selected="selected">SELECT GENDER</option>
                                                            <option value="MALE">MALE</option>
                                                            <option value="FEMALE">FEMALE</option></select>
                                                            <span id="checkerSex"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap text-216">
                                                            <label for="txtStudentAddress" class="col-sm-3 control-label">Address:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-9">
                                                            <input type="text" name="txtStudentAddress" id="txtStudentAddress" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control reqstudentinfo" aria-required="true" aria-invalid="false" placeholder="Address*" style="box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%); text-transform:uppercase" />
                                                            <span id="checkerStudentAddress"></span>
                                                            </div>
                                                        </span>         
                                                    </div>              
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap tel-871">
                                                            <label for="txtStudPhone" class="col-sm-3 control-label">Telephone/Mobile Number:</label>
                                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                                <input type="tel" name="txtStudPhone" id="txtStudPhone" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control" aria-invalid="false" placeholder="Tel./Mobile No." style="text-transform:uppercase"/>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-2">
                                                    <div class="form-group">      
                                                        <span class="wpcf7-form-control-wrap tel-871">
                                                            <label for="txtemailadd" class="col-sm-3 control-label">Email Address:</label>
                                                            <div class="col-lg-6 col-md-6 col-sm-3">
                                                                <input type="tel" name="txtemailadd" id="txtemailadd" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control reqstudentinfo" aria-invalid="false" placeholder="EMAIL ADDRESS*"/>
                                                                <span id=""></span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap tel-871">
                                                            <label for="txtMiddleName" class="col-sm-3 control-label">Birthday:</label>
                                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                                <input type="date" id="txtStudBirthday" name="txtStudBirthday" onchange="getage()" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control reqstudentinfo" style="text-transform:uppercase">
                                                                <span id="checkerStudBirthday"></span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap tel-871">
                                                        <label for="txtMiddleName" class="col-sm-3 control-label">Age:</label>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <input type="text" name="txtAge" id="txtAge" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control reqstudentinfo" aria-invalid="false" placeholder="AGE*" disabled/>
                                                                <span id="checkerAge"></span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <div class="form-group">      
                                                        <span class="wpcf7-form-control-wrap tel-871">
                                                            <label for="txtMiddleName" class="col-sm-3 control-label">Birthplace:</label>
                                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                                <input type="tel" name="txtBirthPlace" id="txtBirthPlace" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control reqstudentinfo" aria-invalid="false" placeholder="Birthplace*" style="text-transform:uppercase"/>
                                                                <span id="checkerBirthPlace"></span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <div class="form-group">
                                                        <label for="txtMiddleName" class="col-sm-3 control-label">Religion:</label>
                                                        <div class="col-sm-4">
                                                            <select name="txtReligion" id="txtReligion" class="form-control reqstudentinfo" style="height: 45px; color: #555555;">
                                                                <option value="" selected="selected">SELECT RELIGION</option>
                                                                <option value="ROMAN CATHOLIC">ROMAN CATHOLIC</option>
                                                                <option value="CHRISTIAN">CHRISTIAN</option>
                                                                <option value="MUSLIM">MUSLIM</option>
                                                                <option value="OTHER">OTHER</option>
                                                            </select>
                                                            <span id="checkerReligion"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap text-215">
                                                            <label for="txtMiddleName" class="col-sm-3 control-label">Father's Name:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-9">
                                                                <input type="text" name="txtFatherName" id="txtFatherName" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control reqstudentinfo" aria-required="true" aria-invalid="false" placeholder="Father's Name*" style="text-transform:uppercase"/>
                                                                <span id="checkerFatherName"></span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap email-788">
                                                            <label for="txtMiddleName" class="col-sm-3 control-label">Occupation</label>
                                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                                <input type="text" name="txtFatherOccupation" id="txtFatherOccupation" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control reqstudentinfo" aria-required="true" aria-invalid="false" placeholder="Occupation*" style="text-transform:uppercase"/>
                                                                <span id="checkerFatherOccupation"></span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap text-215">
                                                            <label for="txtMiddleName" class="col-sm-3 control-label">Mother's Name:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-9">
                                                                <input type="text" name="txtMotherName" id="txtMotherName" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control reqstudentinfo" aria-required="true" aria-invalid="false" placeholder="Mother's Name*" style="text-transform:uppercase"/>
                                                                <span id="checkerMotherName"></span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap email-788">
                                                            <label for="txtMiddleName" class="col-sm-3 control-label">Occupation:</label>
                                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                                <input type="text" name="txtMotherOccupation" id="txtMotherOccupation" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control reqstudentinfo" aria-required="true" aria-invalid="false" placeholder="Occupation*" style="text-transform:uppercase"/>
                                                                <span id="checkerMotherOccupation"></span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <hr>    
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap email-788">
                                                            <label for="txtMiddleName" class="col-sm-3 control-label">Guardian:</label>
                                                            <div class="col-lg-9 col-md-9 col-sm-9">
                                                                <input type="text" name="txtGuardian" id="txtGuardian" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Guardian" style="text-transform:uppercase"/>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap email-788">
                                                            <label for="txtMiddleName" class="col-sm-3 control-label">Relationship:</label>
                                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                                <input type="text" name="txtGuardianRelationship" id="txtGuardianRelationship" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Relationship" style="text-transform:uppercase"/>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <div class="form-group">
                                                        <span class="wpcf7-form-control-wrap email-788">
                                                            <label for="txtMiddleName" class="col-sm-3 control-label">Telephone/Mobile Number:</label>
                                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                                <input type="text" name="txtGuardianPhone" id="txtGuardianPhone" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Tel./Mobile No." style="text-transform:uppercase"/>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                                                    <hr>    
                                                </div>
                                                     
                                                <div class="col-lg-12 col-md-12 col-sm-12 pt-5" style="padding-bottom:.1em;">
                                                    <div class="form-group">
                                                        <label for="txtUserName" class="col-sm-3 control-label">Username *<br><sup><em>Minimum 6 alphanumeric</em></sup></label>
                                                        <div class="col-sm-4">
                                                            <input id="txtUserName" name="txtUserName" type="text" class="form-control reqstudentinfo" value="" autocomplete="off" placeholder="USERNAME" maxlength="32" onchange="checkusername();"><span id="checkerUserName"></span>
                                                        </div>
                                                        <em>Please remember this password, you will use it for your enrollment</em>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom:.5em;">
                                                    <div class="form-group">
                                                        <label for="txtPassword" class="col-sm-3 control-label">Password *<br><sup><em>Minimum 6 characters</em></sup></label>
                                                        <div class="col-sm-4">
                                                            <input id="txtPassword" name="txtPassword" type="password" class="form-control reqstudentinfo" autocomplete="off" placeholder="PASSWORD" maxlength="32" pattern=".{6,32}"><span id="checkerPassword"></span>
                                                        </div>
                                                        <span><i class="fa fa-eye-slash" style="margin-top: 14px;cursor: pointer; font-size: 1.7rem;" id="logineyeadmission" onclick="fncChangeadmissionattribunHash()"></i></span>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom:2em;">
                                                    <div class="form-group">
                                                        <label for="txtConfirmPassword" class="col-sm-3 control-label">Confirm Password *</label>
                                                        <div class="col-sm-4">
                                                            <input id="txtConfirmPassword" name="txtConfirmPassword" type="password" class="form-control reqstudentinfo" autocomplete="off" placeholder="CONFIRM PASSWORD" maxlength="32" onchange="checkconfirmpassword();"><span id="checkerConfirmPassword"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-top:1em; padding-left: 0px">
                                                <div id="">
                                                    <button class="btn btn-warning" onclick="admissiontabhome();" style="color:white; width: 100px">Go Back</button> 
                                                    <button class="btn btn-danger" onclick="admissiontabrequirements();" style="color:white; width: 100px">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane p-3" id="requirementstab" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-12" name="student_file" id= "student_file"> 
                                        <span property="name"><i>*Fill the required field that has (*) on it</i></span><meta property="position" content="1">
                                        <br><br>
                                        
                                        <div class="row">
                                            <div class="col-sm-12"style="padding-bottom:2em;"> Scan and Upload enrollment documents:<br> Allowed file type (PDF,JPEG)(jpg,png,bmp,gif filesize 256KB maximum)<br>
                                            </div>
                                        </div>
                                        <br>
                             
                                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom:2em;">
                                            <div class="form-group" id="fg2x2IDPhoto">
                                                <div class="col-sm-5">
                                                    <label for="txtPSA" class="control-label">A. 2"x 2" ID photo (recent) <span style="color: red;">*</span> <br><sup><em><br></em></sup> </label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <form method="post" action="#" enctype="multipart/form-data" id="frmUploadReqA">
                                                        <div class="row justify-content-md-center">
                                                            <div class="col-sm-12" style="display: none;">
                                                                <img src="assets2/images/blank.png" class="img-thumbnail" width="200" height="50" style="border: 2px solid #bdc3c7;" id="updateReqAImage"><br>
                                                            </div>
                                                            <input type="file" class="dropify" id="txtupdateReqAImagefile" name="txtupdateReqAImagefile" onchange="fncRequirementsA();" accept="image/*" data-height="150">
                                                            <input type="hidden" id="txtstudidrequirementA" name="txtstudidrequirementA">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                             
                                        <br>
                                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom:2em;">
                                            <div class="form-group" id="fgBirthCertificate">
                                                <div class="col-sm-5">
                                                    <label for="txtPSA" class="control-label">B. PSA Birth Certificate <span style="color: red;">*</span><br><sup><em><br></em></sup> </label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <form method="post" action="#" enctype="multipart/form-data" id="frmUploadReqB">
                                                        <div class="row justify-content-md-center">
                                                            <div class="col-sm-12" style="display: none;">
                                                                <img src="assets2/images/blank.png" class="img-thumbnail" width="200" height="50" style="border: 2px solid #bdc3c7;" id="updateReqBImage"><br>
                                                            </div>
                                                            <input type="file" class="dropify" id="txtupdateReqBImagefile" name="txtupdateReqBImagefile" onchange="fncRequirementsB();" accept="image/*" data-height="150">
                                                            <input type="hidden" id="txtstudidrequirementB" name="txtstudidrequirementB">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                             
                                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom:2em;">
                                            <div class="form-group" id="fgForm138">
                                                <div class="col-sm-5">
                                                    <label for="txtPSA" class="control-label">C. Report Card (FORM 138)<span style="color: red;">*</span><br><sup><em><br></em></sup> </label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <form method="post" action="#" enctype="multipart/form-data" id="frmUploadReqC">
                                                        <div class="row justify-content-md-center">
                                                            <div class="col-sm-12" style="display: none;">
                                                                <img src="assets2/images/blank.png" class="img-thumbnail" width="200" height="50" style="border: 2px solid #bdc3c7;" id="updateReqCImage"><br>
                                                            </div>
                                                            <input type="file" class="dropify" id="txtupdateReqCImagefile" name="txtupdateReqCImagefile" onchange="fncRequirementsC();" accept="image/*" data-height="150">
                                                            <input type="hidden" id="txtstudidrequirementC" name="txtstudidrequirementC">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                             
                                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom:2em;">
                                            <div class="form-group" id="fgForm138">
                                                <div class="col-sm-5">
                                                    <label for="txtPSA" class="control-label">D. Certificate of Good Moral Character<span style="color: red;">*</span><br><sup><em><br></em></sup> </label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <form method="post" action="#" enctype="multipart/form-data" id="frmUploadReqD">
                                                        <div class="row justify-content-md-center">
                                                            <div class="col-sm-12" style="display: none;">
                                                                <img src="assets2/images/blank.png" class="img-thumbnail" width="200" height="50" style="border: 2px solid #bdc3c7;" id="updateReqDImage"><br>
                                                            </div>
                                                            <input type="file" class="dropify" id="txtupdateReqDImagefile" name="txtupdateReqDImagefile" onchange="fncRequirementsD();" accept="image/*" data-height="150">
                                                            <input type="hidden" id="txtstudidrequirementD" name="txtstudidrequirementD">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                             
                                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom:2em;">
                                            <div class="form-group" id="fgForm138">
                                                <div class="col-sm-5">
                                                    <label for="txtPSA" class="control-label">E. Permanent Record (Form 137)<span style="color: red;">*</span><br><sup><em><br></em></sup> </label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <form method="post" action="#" enctype="multipart/form-data" id="frmUploadReqE">
                                                        <div class="row justify-content-md-center">
                                                            <div class="col-sm-12" style="display: none;">
                                                                <img src="assets2/images/blank.png" class="img-thumbnail" width="200" height="50" style="border: 2px solid #bdc3c7;" id="updateReqEImage"><br>
                                                            </div>
                                                            <input type="file" class="dropify" id="txtupdateReqEImagefile" name="txtupdateReqEImagefile" onchange="fncRequirementsE();" accept="image/*" data-height="150">
                                                            <input type="hidden" id="txtstudidrequirementE" name="txtstudidrequirementE">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-top:1em; padding-left: 0px">
                                        <button class="btn btn-info float-right" onclick="submitrequirements();" style="color:white; width: 100px">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="modalsubmitted" class="modal" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog modal-lg" style="max-width: 550px;">
                        <div class="modal-content">
                            <div class="modal-body mb-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label studproflabel">Successfully Submitted!&nbsp;</label>
                                        <br><br>
                                        <label class="control-label studproflabel1">Note:&nbsp;<span class="studproflabel2">Please copy the Admission Number below to check your admission status.&nbsp;</span></label>

                                        <br><br><label class="control-label studproflabel1">Admission Number:&nbsp;<span class="studproflabel3" id="txtadmissionnumber"></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="padding: 6px 0px 6px 0px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="float-right mr-3 buttsky" onclick="donebutton();" style="width: 80px;"><i class="fa fa-check"></i>&nbsp;DONE</button>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>

        <?php include('footer.php'); ?>

    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <script type="text/javascript">
        (function () {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>

    <?php include('mainpagejscripts.php'); ?>

    <?php include('jscripts.php'); ?>

    <?php include('mainscript.php'); ?>
    
</body>

</html>

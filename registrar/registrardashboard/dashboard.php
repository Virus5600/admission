<style type="text/css">
	.dboxicon {
	    -webkit-transition: all .3s linear;
	    -o-transition: all .3s linear;
	    transition: all .3s linear;
	    position: absolute;
	    top: -5px;
	    right: 10px;
	    z-index: 0;
	    font-size: 80px;
	    color: rgba(0,0,0,0.15);
	}

	.itemhover:hover {
	    background-color: #fcfcfd;
	}

	.progress-bar {
		background-color: #85ce36 !important;
	}
</style>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-xs-12 col-md-3 col-lg-3 col-xlg-3">
                <div class="card" style="margin-bottom: 15px;">
                    <div class="box">
                        <div class="box">
                            <h1 class="text-secondary" style="margin-bottom: 0px;" id="txtNewAdmission">0</h1>

                            <h6 class="font-light text-secondary">New Admission</h6>
                            <div class="dboxicon">
                              <i class="fa fa-line-chart"></i>
                            </div>

                            <div class="progress stat-progress" style="height: .5rem !important; margin-bottom: 5px; width:90%">
	                            <div class="progress-bar" id="progressNewAdmission"></div>
	                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3 col-lg-3 col-xlg-3">
                <div class="card" style="margin-bottom: 15px;">
                    <div class="box">
                        <div class="box">
                            <h1 class="text-secondary" style="margin-bottom: 0px;" id="txtnewstudents">0</h1>

                            <h6 class="font-light text-secondary">New Students</h6>
                            <div class="dboxicon">
                              <i class="fa fa-line-chart"></i>
                            </div>

                            <div class="progress stat-progress" style="height: .5rem !important; margin-bottom: 5px; width:90%">
	                            <div class="progress-bar" id="progressnewstudents"></div>
	                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3 col-lg-3 col-xlg-3">
                <div class="card" style="margin-bottom: 15px;">
                    <div class="box">
                        <div class="box">
                            <h1 class="text-secondary" style="margin-bottom: 0px;" id="txtpendingstudents">0</h1>

                            <h6 class="font-light text-secondary">Pending Students</h6>
                            <div class="dboxicon">
                              <i class="fa fa-users"></i>
                            </div>

                            <div class="progress stat-progress" style="height: .5rem !important; margin-bottom: 5px; width:90%">
	                            <div class="progress-bar" id="progresspendingstudents"></div>
	                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3 col-lg-3 col-xlg-3">
                <div class="card" style="margin-bottom: 15px;">
                    <div class="box" >
                        <div class="box">
                            <h1 class="text-secondary" style="margin-bottom: 0px;" id="txttotalstudents">0</h1>

                            <h6 class="font-light text-secondary">Total Students</h6>
                            <div class="dboxicon">
                              	<i class="fa fa-users"></i>
                            </div>

                            <div class="progress stat-progress" style="height: .5rem !important; margin-bottom: 5px; width:90%">
	                            <div class="progress-bar" id="progresstotalstudents"></div>
	                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<article class="content dashboard-page" style="padding: 0px 0px 0px 0px;">
	<section class="section">
		<div class="row sameheight-container">
			<div class="col-xl-6">
			    <div class="card sameheight-item items" data-exclude="xs,sm,lg" style="margin-top: 15px;">
			        <div class="card-header bordered">
			            <div class="header-block">
			                <h3 class="title"> Student Admission List </h3>
			            </div>
			        </div>

			        <ul class="item-list striped">
			            <li class="item item-list-header">
			                <div class="item-row">
			                    <div class="item-col item-col-header item-col-sales">
			                        <div>
			                            <span>Student ID</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-title">
			                        <div>
			                            <span>Student Name</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-stats">
			                        <div class="no-overflow">
			                            <span>Type</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-date">
			                        <div>
			                            <span>Date of Admission</span>
			                        </div>
			                    </div>
			                </div>

			            </li>
			            <div id="dsplyadmissionnorecordF" style="height: 255px !important;text-align: center; display: none;">
			        		<label style="margin-top: 15px; font-weight: 400"><i>No record found . . .</i></label>
			        	</div>
			            <div id="dsplyStudentAdmission" style="height: 255px !important; overflow: auto;">
			            	<div id="StudentAdmissionList"></div>
				        </div>
			        </ul>

			    </div>
			</div>

			<div class="col-xl-6">
			    <div class="card sameheight-item items" data-exclude="xs,sm,lg" style="margin-top: 15px;">
			        <div class="card-header bordered">
			            <div class="header-block">
			                <h3 class="title"> Students - Approved (Waiting for payment)  </h3>
			            </div>
			        </div>

			        <ul class="item-list striped">
			            <li class="item item-list-header">
			                <div class="item-row">
			                    <div class="item-col item-col-header item-col-sales">
			                        <div>
			                            <span>Student ID</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-title">
			                        <div>
			                            <span>Student Name</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-stats">
			                        <div class="no-overflow">
			                            <span>Type</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-date">
			                        <div>
			                            <span>Date of Admission</span>
			                        </div>
			                    </div>
			                </div>

			            </li>
			            <div id="dsplywaitingpaynorecordF" style="height: 255px !important;text-align: center; display: none;">
			        		<label style="margin-top: 15px; font-weight: 400"><i>No record found . . .</i></label>
			        	</div>
			            <div id="dsplywaitingpay" style="height: 255px !important; overflow: auto;">
			            	<div id="StudentwaitingpayList"></div>
				        </div>
			        </ul>
			    </div>
			</div>

			<div class="col-xl-6">
			    <div class="card sameheight-item items" data-exclude="xs,sm,lg" style="margin-top: 15px;">
			        <div class="card-header bordered">
			            <div class="header-block">
			                <h3 class="title"> Students - Waiting for payment approval </h3>
			            </div>
			        </div>

			        <ul class="item-list striped">
			            <li class="item item-list-header">
			                <div class="item-row">
			                    <div class="item-col item-col-header item-col-sales">
			                        <div>
			                            <span>Student ID</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-title">
			                        <div>
			                            <span>Student Name</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-stats">
			                        <div class="no-overflow">
			                            <span>Type</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-date">
			                        <div>
			                            <span>Date of Admission</span>
			                        </div>
			                    </div>
			                </div>

			            </li>
			            <div id="dsplywaitingforpayappnorecordF" style="height: 255px !important;text-align: center; display: none;">
			        		<label style="margin-top: 15px; font-weight: 400"><i>No record found . . .</i></label>
			        	</div>
			            <div id="dsplywaitingforpayapp" style="height: 255px !important; overflow: auto;">
			            	<div id="StudentwaitingforpayappList"></div>
				        </div>
			        </ul>
			    </div>
			</div>

			<div class="col-xl-6">
			    <div class="card sameheight-item items" data-exclude="xs,sm,lg" style="margin-top: 15px;">
			        <div class="card-header bordered">
			            <div class="header-block">
			                <h3 class="title"> Students - Approved Payment </h3>
			            </div>
			        </div>

			        <ul class="item-list striped">
			            <li class="item item-list-header">
			                <div class="item-row">
			                    <div class="item-col item-col-header item-col-sales">
			                        <div>
			                            <span>Student ID</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-title">
			                        <div>
			                            <span>Student Name</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-stats">
			                        <div class="no-overflow">
			                            <span>Type</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-date">
			                        <div>
			                            <span>Date of Admission</span>
			                        </div>
			                    </div>
			                </div>

			            </li>
			            <div id="dsplyapprovepaynorecordF" style="height: 255px !important;text-align: center; display: none;">
			        		<label style="margin-top: 15px; font-weight: 400"><i>No record found . . .</i></label>
			        	</div>
			            <div id="dsplyapprovepay" style="height: 255px !important; overflow: auto;">
			            	<div id="StudentapprovepayList"></div>
				        </div>
			        </ul>
			    </div>
			</div>

			<div class="col-xl-6">
			    <div class="card sameheight-item items" data-exclude="xs,sm,lg" style="margin-top: 15px;">
			        <div class="card-header bordered">
			            <div class="header-block">
			                <h3 class="title"> Students - For Schedule </h3>
			            </div>
			        </div>

			        <ul class="item-list striped">
			            <li class="item item-list-header">
			                <div class="item-row">
			                    <div class="item-col item-col-header item-col-sales">
			                        <div>
			                            <span>Student ID</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-title">
			                        <div>
			                            <span>Student Name</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-stats">
			                        <div class="no-overflow">
			                            <span>Type</span>
			                        </div>
			                    </div>
			                    <div class="item-col item-col-header item-col-date">
			                        <div>
			                            <span>Date of Admission</span>
			                        </div>
			                    </div>
			                </div>
			            </li>
			            <div id="dsplyschedulenorecordF" style="height: 255px !important;text-align: center; display: none;">
			        		<label style="margin-top: 15px; font-weight: 400"><i>No record found . . .</i></label>
			        	</div>
			            <div id="dsplyschedule" style="height: 255px !important; overflow: auto;">
			            	<div id="StudentscheduleList"></div>
				        </div>
			        </ul>
			    </div>
			</div>
		</div>
	</section>
</article>

<script src="assets2/plugins/jquery/jquery.min.js"></script>
<?php include("dashboardscript.php"); ?>
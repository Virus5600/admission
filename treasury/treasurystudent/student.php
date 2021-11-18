<style type="text/css">
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

    .buttclose {
        color: #ffffff;
        background-color: #f34646;
        border: 0px;
        padding: 5px 10px;
        border-radius: .25rem;
    }

    .buttclose:hover {
        color: #fff;
        background-color: #fb5b5b;
        border-color: #fb5b5b;
    }

    .buttgreen {
        color: #ffffff;
        background-color: #81ca32 !important;
        border: 0px;
        padding: 5px 10px;
        border-radius: .25rem;
    }

    .buttgreen:hover {
        color: #fff;
        background-color: #94d251 !important;
        border-color: #94d251 !important;
    }

    .h6hover {
        margin-top: 0.5rem;
        font-weight: 700;
        cursor:pointer;
        font-size: .8rem;
    }

    .h6hover:hover {
        color: #85CE36;
    }

    .table thead tr th {
	    font-size: .9rem !important;
	    font-weight: 600 !important
	}

	.modal .modal-content {
	    border-radius: .4rem;
	}

	.inputform {
	    color: #54667a;
	    display: initial;
	    width: 100%;
	    height: calc(1.5em + .75rem + 2px);
	    padding: .75rem .75rem;
	    font-size: .9rem;
	    font-weight: 400;
	    line-height: 1.5;
	    background-color: #fff;
	    background-clip: padding-box;
	    border: 1px solid #ced4da;
	    border-radius: .25rem;
	    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	    font-family: inherit;
	}

	.studprofnamelabel {
	    color:#516171;
	    margin-bottom: 0px;
	    font-size: 1.5rem;
	}

	.studproflabel {
	    color:#516171;
	    margin-bottom: 0px;
	    font-size: .85rem;
	    font-weight: 700;
	}

	.cardhover{
		cursor: pointer;
		box-shadow: 0px;
	}

	.cardhover:hover{
		background-color: transparent;
		opacity: 0.7;
		box-shadow: 1px 1px 5px rgb(126 142 159);
	}
</style>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-block" style="padding: 0px 15px;">
				<div class="card-title-block" style="margin-bottom: 5px;">
					<h3 class="title" style="margin: 5px; font-weight: 700; font-size: 1.3rem">List of students (For Payment Approval)</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card" style="margin-top: 8px;">
			<div class="card-block">
				<div class="row mb-3">
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="text" class="form-control" id="txtsearchstudentadmissionlist" placeholder="Search Student . . ." >
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

				<table class="table table-hover">
					<thead>
						<tr>
							<th style="width: 10%; white-space: nowrap;">ID</th>
							<th style="width: 20%; white-space: nowrap;">NAME</th>
							<th style="white-space: nowrap;">ADDRESS</th>
                            <th style="width: 10%; white-space: nowrap;">CONTACT NO.</th>
                            <th style="width: 10%; white-space: nowrap;">STUDENT TYPE</th>
                            <th style="width: 10%; white-space: nowrap;">ADMISSION DATE</th>
                            <th style="width: 10%; white-space: nowrap;text-align: center;">ACTION</th>
						</tr>
					</thead>
					<tbody id="tblstudentadmissionlist"></tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div id="modaladmissionstudinfo" class="modal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" style="max-width: 650px;">
        <div class="modal-content">
            <div class="modal-header" style="background: #3a4651 !important;">
                <h4 class="modal-title text-white"><b>Student Admission Information</b></h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true"><b>×</b></span></button>
            </div>
            <div class="modal-body" style="padding-bottom: 0px;">
            	<input type="hidden" id="idIDhidden">
            	<input type="hidden" id="admissionIDhidden">

            	<div class="row">
					<div class="col-md-12">
						<span>
							<span class="h6hover mr-3" onclick="openstudentdetails();" id="dsplystuddet">
								<i class="fa fa-user"></i>&nbsp;Student Details
							</span>
							<span class="h6hover" onclick="openstudentrequirements();" id="dsplystudentreq">
								<i class="fa fa-files-o"></i>&nbsp;Receipt
							</span>
						</span>
					</div>
				</div>
            	<hr style="margin-top: 8px; margin-bottom: 25px; border-color: black">
            	<div id="bodystudentdet">
                	<div class="row mb-3">
                		<div class="col-md-12 mb-1">
		  					<div class="row">
		            			<div class="col-md-3 mr-2"> 
			                    	<div class="card cardhover" style="width:160px; margin-top: 10px;">
			                    		<img src="assets2/images/noimage5.png" class="b-all" height="130" id="studinfoprofimage" />
			                    	</div>
			                   	</div>
			                </div>
		                </div>
						<div class="col-md-12">
	                        <label class="control-label studprofnamelabel" id="txtstudinfostudname"></label> 
	                        <br><span id="txtstudinfostudid"></span>    
	                    </div>

	                    <div class="col-md-12">
	                    	<hr style="width: 65%; margin-bottom: 5px;">
	                    </div>

	                    <div class="col-md-12 mb-1">
	                        <label class="control-label studproflabel">Username:&nbsp;</label> 
	                        <span id="txtstudinfostudusername"></span>    
	                    </div>
	                    <div class="col-md-12 mb-1">
	                        <label class="control-label studproflabel">Gender:&nbsp;</label> 
	                        <span id="txtstudinfostudgender"></span>    
	                    </div>
	                    <div class="col-md-12 mb-1">
	                        <label class="control-label studproflabel">Address:&nbsp;</label> 
	                        <span id="txtstudinfostudaddress"></span>    
	                    </div>
	                    <div class="col-md-12 mb-1">
	                        <label class="control-label studproflabel">Email:&nbsp;</label> 
	                        <span id="txtstudinfostudemail"></span>    
	                    </div>
	                    <div class="col-md-12">
	                        <label class="control-label studproflabel">Contact No.&nbsp;</label> 
	                        <span id="txtstudinfostudnum"></span>    
	                    </div>
                	</div>

                	<div class="row mb-3">
	                    <div class="col-md-12">
	                    	<hr style="width: 65%; border-top: .1rem solid #c0c0c0; margin-bottom: 5px;">
	                    </div>

	                    <div class="col-md-12 mb-3">
	                        <label class="control-label studproflabel" style="font-size: 1rem;">Previous School Details</label>    
	                    </div>

	                    <div class="col-md-12 mb-1">
	                        <label class="control-label studproflabel">School Name:&nbsp;</label> 
	                        <span id="txtstudinfostudprevschool"></span>    
	                    </div>
	                    <div class="col-md-12 mb-1">
	                        <label class="control-label studproflabel">School Address:&nbsp;</label> 
	                        <span id="txtstudinfostudprevschooladd"></span>    
	                    </div>
	                    <div class="col-md-12 mb-1">
	                        <label class="control-label studproflabel">Grade:&nbsp;</label> 
	                        <span id="txtstudinfostudprevschoolgrade"></span>    
	                    </div>
	                    <div class="col-md-12">
	                        <label class="control-label studproflabel">SY*</label> 
	                        <span id="txtstudinfostudprevschoolyear"></span>    
	                    </div>
	                    <div class="col-md-12">
	                        <label class="control-label studproflabel">Contact No.&nbsp;</label> 
	                        <span id="txtstudinfoschoolnum"></span>    
	                    </div>
                	</div>
				</div>	
				<div id="bodystudentreq">
					<div class="row mb-3">
						<div class="col-md-12 mb-1">
	                        <label class="control-label studproflabel" id="receiptdateuploaded"></label>
                        	<div id="receiptslist"></div>
	                    </div>
                	</div>
				</div>	
            </div>
            <div class="modal-footer" style="padding: 8px 0px 8px 0px;">
            	<div class="row">
	                <div class="col-md-12">
	                    <button class="float-right mr-3 buttclose" onclick="btnopenremarks();"><i class="fa fa-thumbs-down"></i>&nbsp;Deny</button>
	                    <button class="float-right mr-2 buttgreen" onclick="" id="btnapprovereceipt"><i class="fa fa-thumbs-up"></i>&nbsp;Approve</button>
	                </div> 
            	</div>
            </div>
        </div>
    </div>
</div>

<div id="modalopenimage" class="modal">
    <div class="modal-dialog modal-lg" style="min-width: 600px;">
        <div class="modal-content">
            <div class="modal-body" style="padding:0px">
	        	<div class="row">
	        		<div class="col-md-12">
	  					<img src="assets2/images/noimage5.png" class="b-all" height="700" style="width: 100%;" id="studviewimage" />	
	                </div>
	            </div>
        	</div>
        </div>
    </div>
</div>

<div id="modalopeninputremarks" class="modal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg" style="min-width: 600px;">
        <div class="modal-content">
        	<div class="modal-header" style="background: #3a4651 !important;">
                <h4 class="modal-title text-white"><b>Input Remarks</b></h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true"><b>×</b></span></button>
            </div>
            <div class="modal-body">
	        	<div class="row">
	        		<div class="col-md-12">
	  					<input type="hidden" id="remadmissionIDhidden">
	  					<textarea class="inputform" id="txtstuddenyremarks" name="txtstuddenyremarks" maxlength="500" placeholder="Maximum of 500" style="height: 100px"></textarea>
	                </div>
	            </div>
        	</div>
        	<div class="modal-footer" style="padding: 8px 0px 8px 0px;">
            	<div class="row">
	                <div class="col-md-12">
	                    <button class="float-right mr-3 buttsky" onclick="btndenystudrequirement();"><i class="fa fa-floppy-o"></i>&nbsp;Save</button>
	                </div> 
            	</div>
            </div>
        </div>
    </div>
</div>

<script src="assets2/plugins/jquery/jquery.min.js"></script>
<?php include("studentscript.php"); ?>
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

    .lala:focus{
        border-color:#843534 !important;
        -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483 !important;
        box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483 !important;
    }
</style>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-block" style="padding: 0px 15px;">
				<div class="card-title-block" style="margin-bottom: 5px;">
					<h3 class="title" style="margin: 5px; font-weight: 700; font-size: 1.3rem">List of students (For Schedule)</h3>
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
                <h4 class="modal-title text-white"><b>Upload Schedule</b></h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true"><b>×</b></span></button>
            </div>
            <div class="modal-body" style="padding-bottom: 0px;">
            	<input type="hidden" id="idIDhidden">
            	<input type="hidden" id="admissionIDhidden">

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

                    <div class="row">
                        <div class="col-md-12">
                            <hr style="width: 65%; margin-bottom: 5px; margin-top: 1rem">
                        </div>

						<div class="col-md-4 mb-1">
	                        <div class="form-group">
                                <label for="txtschedulegrade" class="control-label" style="color:#516171; margin-bottom: 5px;">Enter Grade</label>
                                <select name="txtschedulegrade" id="txtschedulegrade" class="inputform reqstudentinfo" style="color: #555555; padding: 0rem .75rem;">
                                    <option value="" selected="selected"></option>
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
	                        </div>              
	                    </div>

	                    <div class="col-md-6 mb-1">
	                        <div class="form-group">
                                <label for="txtschedulesection" class="control-label" style="color:#516171; margin-bottom: 5px;">Enter Section</label>
                                <input type="text" name="txtschedulesection" id="txtschedulesection" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
	                        </div>              
	                    </div>

	                    <div class="col-md-12 mb-1">
	                        <label class="control-label" style="color:#516171; margin-bottom: 5px;">Upload Schedule</label>   
	                    </div>

	                    <div class="col-md-5 ml-3">
                            <form method="post" action="#" enctype="multipart/form-data" id="frmUploadSchedule">
                                <div class="row">
                                    <div class="col-sm-12" style="display: none;">
                                        <img src="assets2/images/blank.png" class="img-thumbnail" width="150" height="130" style="border: 2px solid #bdc3c7;" id="updateScheduleDImage"><br>
                                    </div>
                                    <input type="file" class="dropify" id="txtupdateScheduleDImagefile" name="txtupdateScheduleDImagefile" onchange="fncSchedule();" accept="image/*" data-height="190">
                                    <input type="hidden" id="txtstudidschedule" name="txtstudidschedule">
                                </div>
                            </form>
                        </div>
                	</div>
				</div>

            </div>
            <div class="modal-footer" style="padding: 8px 0px 8px 0px;">
            	<div class="row">
	                <div class="col-md-12">
	                    <button class="float-right mr-3 buttsky" onclick="uploadschedule();"><i class="fa fa-floppy-o"></i>&nbsp;Save</button>
	                </div> 
            	</div>
            </div>
        </div>
    </div>
</div>

<script src="assets2/plugins/jquery/jquery.min.js"></script>
<?php include("schedulescript.php"); ?>
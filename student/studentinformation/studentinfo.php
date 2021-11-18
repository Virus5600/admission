<style type="text/css">
	.informationheader {
        color: #4f5f6f;
        background-color: #e7e7e7;
        border: 0px;
        padding: 1px 5px;
        border-radius: 0;
        font-weight: 400;
        font-size: .8rem;
    }

    .buttheader {
        color: #ffffff;
        background-color: #3a4651;
        border: 0px;
        padding: 10px 15px;
        border-radius: .25rem;
        font-size: .8rem;
    }

    .buttheader:hover {
        color: #fff;
        background-color: #5a6d7e;
        border-color: #5a6d7e;
    }

    .buttpurple {
        color: #ffffff;
        background-color: #7942e4;
        border: 0px;
        padding: 5px 10px;
        border-radius: .25rem;
    }

    .buttpurple:hover {
        color: #fff;
        background-color: #9666f3;
        border-color: #9666f3;
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

	.cardhover2{
		cursor: pointer;
		box-shadow: 1px 1px 5px rgb(126 142 159);
	}
</style>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-block" style="padding: 0px 15px;">
				<div class="card-title-block" style="margin-bottom: 5px;">
					<h3 class="title" style="margin: 5px; font-weight: 700; font-size: 1.3rem"><i class="fa fa-user"></i>&nbsp;Student Information</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4" style="flex: 0 0 28.333333%; max-width: 28.333333%;">
		<div class="card" style="margin-top: 8px;">
			<div class="card-block">

				<div class="row mb-2">
            		<div class="col-md-12">
        				<center>			                    	
        					<div class="card cardhover2" style="width:200px; margin-top: 10px;">
	                    		<img src="assets2/images/noimage5.png" class="b-all" height="170" style="width: 200px" id="studinfoimage"/>
	                    	</div>
                    	</center>
	                </div>
	            </div>

	            <div class="row">
	            	<div class="col-md-12" style="padding-left: 0px; padding-right: 0px">
                    	<hr style="width: 100%; margin-bottom: 15px;">
                    </div>

                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Student ID&nbsp;</label> 
                    </div>

                    <div class="col-md-8 mb-1">
                        <span id="txtstudLinfoID"></span>    
                    </div>

                    <div class="col-md-12" style="padding-left: 0px; padding-right: 0px">
                    	<hr style="width: 100%; margin-bottom: 15px; margin-top: 10px;">
                    </div>

                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Name&nbsp;</label> 
                    </div>

                    <div class="col-md-8 mb-1">
                        <span id="txtstudLinfoname"></span>    
                    </div>

                    <div class="col-md-12" style="padding-left: 0px; padding-right: 0px">
                    	<hr style="width: 100%; margin-bottom: 15px; margin-top: 10px;">
                    </div>

                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Grade&nbsp;</label> 
                    </div>

                    <div class="col-md-8 mb-1">
                        <span id="txtstudLinfograde"></span>    
                    </div>

                    <div class="col-md-12" style="padding-left: 0px; padding-right: 0px">
                    	<hr style="width: 100%; margin-bottom: 15px; margin-top: 10px;">
                    </div>

                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Section&nbsp;</label> 
                    </div>

                    <div class="col-md-8 mb-1">
                        <span id="txtstudLinfosection"></span>    
                    </div>

                    <div class="col-md-12" style="padding-left: 0px; padding-right: 0px">
                    	<hr style="width: 100%; margin-bottom: 15px; margin-top: 10px;">
                    </div>

                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Email&nbsp;</label> 
                    </div>

                    <div class="col-md-8 mb-1">
                        <span id="txtstudLinfoemail"></span>    
                    </div>

                    <div class="col-md-12" style="padding-left: 0px; padding-right: 0px">
                    	<hr style="width: 100%; margin-bottom: 15px; margin-top: 10px;">
                    </div>

                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Contact No&nbsp;</label> 
                    </div>

                    <div class="col-md-8 mb-1">
                        <span id="txtstudLinfoconnum"></span>    
                    </div>

                    <div class="col-md-12" style="padding-left: 0px; padding-right: 0px">
                    	<hr style="width: 100%; margin-bottom: 15px; margin-top: 10px;">
                    </div>
	            </div>

			</div>
		</div>
	</div>

	<div class="col-md-8" style="flex: 0 0 71.666667%;max-width: 71.666667%; padding-left: 5px;">
		<div class="card" style="margin-top: 8px;">
			<div class="card-block">

				<div class="row mb-3">
                    <div class="col-md-12 mb-2">
	                    <button class="float-right buttheader" onclick="openmodaleditinfo();" style="width: 150px"><b><i class="fa fa-pencil"></i><br>Edit Information</b></button>
	                    <button class="float-right buttheader mr-2" onclick="modalaccountsettings();" style="width: 150px"><b><i class="fa fa-cogs"></i><br>Account Settings</b></button>
	                    <button class="float-right buttheader mr-2" onclick="modaladmission();" style="width: 150px"><b><i class="fa fa-pencil-square-o"></i><br>Admission</b></button>
	                </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-12 mb-2" style="padding-left: 0px; padding-right: 0px">
	                    <button class="float-right informationheader" onclick="" style="width: 100%"><b>General Information</b></button>
	                </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Firstname:&nbsp;</label>
                        <span id="txtstudinfostudFname"></span>  
                    </div>

                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Middlename:&nbsp;</label> 
                        <span id="txtstudinfostudMname"></span>   
                    </div>

                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Lastname:&nbsp;</label> 
                        <span id="txtstudinfostudLname"></span> 
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Gender:&nbsp;</label>
                        <span id="txtstudinfostudgender"></span>  
                    </div>

                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Address:&nbsp;</label> 
                        <span id="txtstudinfostudaddress"></span>   
                    </div>

                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Email:&nbsp;</label> 
                        <span id="txtstudinfostudemail"></span> 
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Contact No:&nbsp;</label>
                        <span id="txtstudinfostudnum"></span>  
                    </div>

                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Birthday:&nbsp;</label> 
                        <span id="txtstudinfostudbirthday"></span>   
                    </div>

                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Age:&nbsp;</label> 
                        <span id="txtstudinfostudage"></span> 
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Birthplace:&nbsp;</label>
                        <span id="txtstudinfostudbirthplace"></span>  
                    </div>

                    <div class="col-md-4 mb-1">
                        <label class="control-label studproflabel">Religion:&nbsp;</label> 
                        <span id="txtstudinfostudreligion"></span>   
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-12 mb-2" style="padding-left: 0px; padding-right: 0px">
	                    <button class="float-right informationheader" onclick="" style="width: 100%"><b>Parent's Information</b></button>
	                </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-1">
                        <label class="control-label studproflabel">Mother's Name:&nbsp;</label>
                        <span id="txtstudinfostudmother"></span>  
                    </div>

                    <div class="col-md-6 mb-1">
                        <label class="control-label studproflabel">Occupation:&nbsp;</label> 
                        <span id="txtstudinfostudmotheroccu"></span>   
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-1">
                        <label class="control-label studproflabel">Father's Name:&nbsp;</label>
                        <span id="txtstudinfostudfather"></span>  
                    </div>

                    <div class="col-md-6 mb-1">
                        <label class="control-label studproflabel">Occupation:&nbsp;</label> 
                        <span id="txtstudinfostudfatheroccu"></span>   
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-12 mb-2" style="padding-left: 0px; padding-right: 0px">
	                    <button class="float-right informationheader" onclick="" style="width: 100%"><b>Guardian's Information</b></button>
	                </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-1">
                        <label class="control-label studproflabel">Guardan's Name:&nbsp;</label>
                        <span id="txtstudinfostudguardian"></span>  
                    </div>

                    <div class="col-md-6 mb-1">
                        <label class="control-label studproflabel">Relationship:&nbsp;</label> 
                        <span id="txtstudinfostudguardianrel"></span>   
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-1">
                        <label class="control-label studproflabel">Contact No:&nbsp;</label> 
                        <span id="txtstudinfostudguardiannum"></span>   
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-12 mb-2" style="padding-left: 0px; padding-right: 0px">
	                    <button class="float-right informationheader" onclick="" style="width: 100%"><b>Previous School Information</b></button>
	                </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-1">
                        <label class="control-label studproflabel">School Name:&nbsp;</label>
                        <span id="txtstudinfostudprevschool"></span>  
                    </div>

                    <div class="col-md-6 mb-1">
                        <label class="control-label studproflabel">School Address:&nbsp;</label> 
                        <span id="txtstudinfostudprevschooladd"></span>   
                    </div>
                </div>

                 <div class="row mb-3">
                 	<div class="col-md-3 mb-1">
                        <label class="control-label studproflabel">Grade:&nbsp;</label> 
                        <span id="txtstudinfostudprevschoolgrade"></span>   
                    </div>

                    <div class="col-md-3 mb-1">
                        <label class="control-label studproflabel">SY*&nbsp;</label> 
                        <span id="txtstudinfostudprevschoolyear"></span>   
                    </div>

                    <div class="col-md-3 mb-1">
                        <label class="control-label studproflabel">Contact No:&nbsp;</label> 
                        <span id="txtstudinfoschoolnum"></span>   
                    </div>
                </div>

			</div>
		</div>
	</div>
</div>

<div id="modaleditinfo" class="modal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" style="min-width: 600px;">
        <div class="modal-content">
        	<div class="modal-header" style="background: #3a4651 !important;">
                <h4 class="modal-title text-white"><b>Edit Information</b></h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true"><b>×</b></button>
            </div>
            <div class="modal-body">
            	<div class="row">
                    <div class="col-md-12">
                        <form method="post" action="#" enctype="multipart/form-data" id="frmUploadstudimage">
                            <center>
                                <div class="col-md-12">
                                    <img src="assets2/images/noimage5.png" class="img-thumbnail" width="200" height="250" style="border: 2px solid #bdc3c7; margin-bottom: 10px;" id="updateprofileImage"><br>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" class="inputform file" id="txtupdateprofileImagefile" name="txtupdateprofileImagefile" onchange="fncShowstudPic();" accept="image/*" style="overflow: hidden; height: 30px; padding: 0px 0px 0px 0px;">
                                    </div>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>

            	<div class="row">
                    <div class="col-md-12 mb-2" style="padding-left: 0px; padding-right: 0px">
	                    <button class="float-right informationheader" onclick="" style="width: 100%"><b>General Information</b></button>
	                </div>
                </div>

	        	<div class="row mb-2">
	        		<div class="col-md-4 mb-1">
                        <div class="form-group">
                            <label for="txtstudentFname" class="control-label" style="color:#516171; margin-bottom: 5px;">Firstname</label>
                            <input type="text" name="txtstudentFname" id="txtstudentFname" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>

                    <div class="col-md-4 mb-1">
                        <div class="form-group">
                            <label for="txtstudentMname" class="control-label" style="color:#516171; margin-bottom: 5px;">Middlename</label>
                            <input type="text" name="txtstudentMname" id="txtstudentMname" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>

                    <div class="col-md-4 mb-1">
                        <div class="form-group">
                            <label for="txtstudentLname" class="control-label" style="color:#516171; margin-bottom: 5px;">Lastname</label>
                            <input type="text" name="txtstudentLname" id="txtstudentLname" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>

                    <div class="col-md-4 mb-1">
                        <div class="form-group">
                            <label for="txtstudentgender" class="control-label" style="color:#516171; margin-bottom: 5px;">Gender</label>
                            <select name="txtstudentgender" id="txtstudentgender" class="inputform reqstudentinfo" style="color: #555555; padding: 0rem .75rem;">
                                <option value="" selected="selected"></option>
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                            </select>                                 
                        </div>              
                    </div>

                    <div class="col-md-4 mb-1">
                        <div class="form-group">
                            <label for="txtstudentemail" class="control-label" style="color:#516171; margin-bottom: 5px;">Email</label>
                            <input type="text" name="txtstudentemail" id="txtstudentemail" size="40" class="inputform reqstudentinfo" />     
                        </div>              
                    </div>

                    <div class="col-md-4 mb-1">
                        <div class="form-group">
                            <label for="txtstudentcontactno" class="control-label" style="color:#516171; margin-bottom: 5px;">Contact Number</label>
                            <input type="text" name="txtstudentcontactno" id="txtstudentcontactno" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>

                    <div class="col-md-4 mb-1">
                        <div class="form-group">
                            <label for="txtstudentbirthday" class="control-label" style="color:#516171; margin-bottom: 5px;">Birthday</label>
                            <input type="text" name="txtstudentbirthday" id="txtstudentbirthday" size="40" class="inputform dates-inputmask reqstudentinfo" placeholder="MM/DD/YYYY" style="text-transform:uppercase;"/>     
                        </div>              
                    </div>

                    <div class="col-md-4 mb-1">
                        <div class="form-group">
                            <label for="txtstudentage" class="control-label" style="color:#516171; margin-bottom: 5px;">Age</label>
                            <input type="text" name="txtstudentage" id="txtstudentage" size="40" class="inputform reqstudentinfo" aria-invalid="false">     
                        </div>              
                    </div>

                    <div class="col-md-4 mb-1">
                        <div class="form-group">
                            <label for="txtstudentbirthplace" class="control-label" style="color:#516171; margin-bottom: 5px;">Birthplace</label>
                            <input type="text" name="txtstudentbirthplace" id="txtstudentbirthplace" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>

                    <div class="col-md-4 mb-1">
                        <div class="form-group">
                            <label for="txtstudentreligion" class="control-label" style="color:#516171; margin-bottom: 5px;">Religion</label>
                            <select name="txtstudentreligion" id="txtstudentreligion" class="inputform reqstudentinfo" style="color: #555555; padding: 0rem .75rem;">
                                <option value="" selected="selected"></option>
                                <option value="ROMAN CATHOLIC">ROMAN CATHOLIC</option>
                                <option value="CHRISTIAN">CHRISTIAN</option>
                                <option value="MUSLIM">MUSLIM</option>
                                <option value="OTHER">OTHER</option>
                            </select>                                 
                        </div>              
                    </div>

	        		<div class="col-md-8 mb-1">
	        			<div class="form-group">
	  						<label for="txtstudentaddress" class="control-label" style="color:#516171; margin-bottom: 5px;">Address</label>
	  						<input type="text" name="txtstudentaddress" id="txtstudentaddress" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
	  						<!-- <textarea class="inputform reqstudentinfo" id="txtstudentaddress" name="txtstudentaddress" placeholder="" style="height: 100px"></textarea> -->
	  					</div>
	                </div>
	            </div>

	            <div class="row">
                    <div class="col-md-12 mb-2" style="padding-left: 0px; padding-right: 0px">
	                    <button class="float-right informationheader" onclick="" style="width: 100%"><b>Parent's Information</b></button>
	                </div>
                </div>

                <div class="row mb-2">
	        		<div class="col-md-7 mb-1">
                        <div class="form-group">
                            <label for="txtstudentmothername" class="control-label" style="color:#516171; margin-bottom: 5px;">Mother's Name</label>
                            <input type="text" name="txtstudentmothername" id="txtstudentmothername" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>

                    <div class="col-md-5 mb-1">
                        <div class="form-group">
                            <label for="txtstudentmotheroccu" class="control-label" style="color:#516171; margin-bottom: 5px;">Occupation</label>
                            <input type="text" name="txtstudentmotheroccu" id="txtstudentmotheroccu" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>

                    <div class="col-md-7 mb-1">
                        <div class="form-group">
                            <label for="txtstudentfather" class="control-label" style="color:#516171; margin-bottom: 5px;">Father's Name</label>
                            <input type="text" name="txtstudentfather" id="txtstudentfather" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>

                    <div class="col-md-5 mb-1">
                        <div class="form-group">
                            <label for="txtstudentfatheroccu" class="control-label" style="color:#516171; margin-bottom: 5px;">Occupation</label>
                            <input type="text" name="txtstudentfatheroccu" id="txtstudentfatheroccu" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>
	            </div>

	            <div class="row">
                    <div class="col-md-12 mb-2" style="padding-left: 0px; padding-right: 0px">
	                    <button class="float-right informationheader" onclick="" style="width: 100%"><b>Guardian's Information</b></button>
	                </div>
                </div>

                <div class="row mb-2">
	        		<div class="col-md-7 mb-1">
                        <div class="form-group">
                            <label for="txtstudentguardian" class="control-label" style="color:#516171; margin-bottom: 5px;">Guardian's Name</label>
                            <input type="text" name="txtstudentguardian" id="txtstudentguardian" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>

                    <div class="col-md-5 mb-1">
                        <div class="form-group">
                            <label for="txtstudentrelationship" class="control-label" style="color:#516171; margin-bottom: 5px;">Relationship</label>
                            <input type="text" name="txtstudentrelationship" id="txtstudentrelationship" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>

                    <div class="col-md-5 mb-1">
                        <div class="form-group">
                            <label for="txtstudentguardianconno" class="control-label" style="color:#516171; margin-bottom: 5px;">Contact Number</label>
                            <input type="text" name="txtstudentguardianconno" id="txtstudentguardianconno" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>
	            </div>

	            <div class="row">
                    <div class="col-md-12 mb-2" style="padding-left: 0px; padding-right: 0px">
	                    <button class="float-right informationheader" onclick="" style="width: 100%"><b>Previous School Information</b></button>
	                </div>
                </div>

                <div class="row mb-2">
	        		<div class="col-md-6 mb-1">
                        <div class="form-group">
                            <label for="txtstudentschoolname" class="control-label" style="color:#516171; margin-bottom: 5px;">School's Name</label>
                            <input type="text" name="txtstudentschoolname" id="txtstudentschoolname" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>

                    <div class="col-md-6 mb-1">
                        <div class="form-group">
                            <label for="txtstudentschooladd" class="control-label" style="color:#516171; margin-bottom: 5px;">School Address</label>
                            <input type="text" name="txtstudentschooladd" id="txtstudentschooladd" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>

                    <div class="col-md-4 mb-1">
                        <div class="form-group">
                            <label for="txtstudentschoolgrade" class="control-label" style="color:#516171; margin-bottom: 5px;">Grade</label>
                            <select name="txtstudentschoolgrade" id="txtstudentschoolgrade" class="inputform reqstudentinfo" style="color: #555555; padding: 0rem .75rem;">
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

                    <div class="col-md-4 mb-1">
                        <div class="form-group">
                            <label for="txtstudentschoolSY" class="control-label" style="color:#516171; margin-bottom: 5px;">SY*</label>
                            <input type="text" name="txtstudentschoolSY" id="txtstudentschoolSY" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>

                    <div class="col-md-4 mb-1">
                        <div class="form-group">
                            <label for="txtstudentschoolconnum" class="control-label" style="color:#516171; margin-bottom: 5px;">Contact Number</label>
                            <input type="text" name="txtstudentschoolconnum" id="txtstudentschoolconnum" size="40" class="inputform reqstudentinfo" style="text-transform:uppercase;" />     
                        </div>              
                    </div>
	            </div>
        	</div>
        	<div class="modal-footer" style="padding: 5px 0px 5px 0px;">
            	<div class="row">
	                <div class="col-md-12">
	                    <button class="float-right mr-3 buttsky" onclick="updatestudentprofile();"><i class="fa fa-floppy-o"></i>&nbsp;Update</button>
	                </div> 
            	</div>
            </div>
        </div>
    </div>
</div>

<div id="modalaccountsettings" class="modal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-sm"  style="min-width: 340px;">
        <div class="modal-content">
        	<div class="modal-header" style="background: #3a4651 !important;">
                <h4 class="modal-title text-white"><b>Account Settings</b></h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true"><b>×</b></button>
            </div>
            <div class="modal-body">
	        	<div class="row mb-2">
	        		<div class="col-md-11" style="width: 95%; flex: 0 0 95%; padding-right: 0px; padding-left: 20px">
                        <div class="form-group">
                            <label for="txtstudentusername" class="control-label" style="color:#516171; margin-bottom: 5px;">Username</label>
                            <input type="text" name="txtstudentusername" id="txtstudentusername" size="40" class="inputform reqstudentinfo2" autocomplete="off"/>     
                        </div>              
                    </div>

                    <div class="col-md-11" style="padding-left: 20px">
                        <label for="txtstudentpass" class="control-label" style="color:#516171; margin-bottom: 5px;">Password</label>
                    </div>

                    <div class="col-md-11" style="width: 100%; padding-right: 0px; padding-left: 20px">
                        <input type="password" name="txtstudentpass" id="txtstudentpass" size="40" class="inputform reqstudentinfo2" autocomplete="off"/>            
                    </div>

                    <div class="col-md-1" style="width: 0%; padding-left: 0px; padding-right: -15px;">
                        <i class="fa fa-eye-slash" style="margin-left: -28px; cursor: pointer; font-size: 1.1rem; margin-top: 8px;" id="loginstudenteye" onclick="fncChangestudattribunHash();"></i>
                    </div>

                    <div class="col-md-11" style="width: 95%; flex: 0 0 95%; padding-right: 0px; padding-left: 20px">
                        <div class="form-group">
                            <label for="txtstudentconfirmpass" class="control-label" style="color:#516171; margin-bottom: 5px;">Confirm Password</label>
                            <input type="password" name="txtstudentconfirmpass" id="txtstudentconfirmpass" size="40" class="inputform reqstudentinfo2" autocomplete="off"/>     
                        </div>              
                    </div>
	            </div>
        	</div>
        	<div class="modal-footer" style="padding: 5px 0px 5px 0px;">
            	<div class="row">
	                <div class="col-md-12">
	                    <button class="float-right mr-3 buttsky" onclick="updatestudentaccount();"><i class="fa fa-floppy-o"></i>&nbsp;Update</button>
	                </div> 
            	</div>
            </div>
        </div>
    </div>
</div>

<div id="modaladmission" class="modal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" style="max-width: 700px;">
        <div class="modal-content">
        	<div class="modal-header" style="background: #3a4651 !important;">
                <h4 class="modal-title text-white"><b>Admission List</b></h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true"><b>×</b></button>
            </div>
            <div class="modal-body">
	        	<div class="row mb-3">
                    <div class="col-md-7">
                        <div class="input-group">
                            <input type="text" class="form-control" id="txtsearchadmission" placeholder="Search Admission . . ." >
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <?php 
                            if($_SESSION['status'] == 1){ 
                                $getenrollstat = mysqli_fetch_array(mysqli_query($connection, "SELECT enroll_stat FROM stud_information WHERE stud_no = '" . $_SESSION['user_id'] . "';"));
                                if($getenrollstat[0] == 1){ ?>
                    	           <button class="float-right buttgreen" onclick="fncopenmodaluploadrequirements();"><i class="fa fa-plus"></i>&nbsp;Add</button>
                        <?php   }
                            }
                        ?>
                    </div>
                </div>

				<table class="table table-hover">
					<thead>
						<tr>
							<th style="width: 15%; white-space: nowrap;">ADMISSION ID</th>
                            <th style="width: 15%; white-space: nowrap;">DATE</th>
                            <th style="width: 10%; white-space: nowrap;">STATUS</th>
                            <th style="width: 10%; white-space: nowrap;text-align: center;">ACTION</th>
						</tr>
					</thead>
					<tbody id="tbladmissionlist"></tbody>
				</table>
        	</div>
        </div>
    </div>
</div>

<div id="modaladmissionstudinfo" class="modal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" style="max-width: 650px;">
        <div class="modal-content">
            <div class="modal-header" style="background: #3a4651 !important;">
                <h4 class="modal-title text-white"><b>Admission Details</b></h4>
            </div>
            <div class="modal-body" style="padding-bottom: 0px;">
            	<div class="row">
					<div class="col-md-12">
						<span>
							<span class="h6hover mr-3" onclick="openstudentrequirements();" id="dsplystudentreq">
								<i class="fa fa-files-o"></i>&nbsp;Requirements
							</span>
							<span class="h6hover mr-3" onclick="openstudentreceipts();" id="dsplystudentreceipt">
								<i class="fa fa-file"></i>&nbsp;Receipts
							</span>
							<!-- <span class="h6hover" onclick="openstudentschedules();" id="dsplystudentschedule">
								<i class="fa fa-calendar-check-o"></i>&nbsp;Schedules
							</span> -->
						</span>
					</div>
				</div>
            	<hr style="margin-top: 8px; margin-bottom: 25px; border-color: black">
				<div id="bodystudentreq">
					<div class="row mb-3">
						<div class="col-md-12 mb-1">
	                        <label class="control-label studproflabel">2x2 ID photo (recent)&nbsp;</label>
                        	<div id="2x2idphotolist"></div>
	                    </div>
						<div class="col-md-12">
	                    	<hr style="width: 65%; margin-bottom: 5px;">
	                    </div>

	                    <div class="col-md-12 mb-1">
	                        <label class="control-label studproflabel">PSA Birth Certificate&nbsp;</label> 
	                        <div id="PSAbirthcertlist"></div>   
	                    </div>
						<div class="col-md-12">
	                    	<hr style="width: 65%; margin-bottom: 5px;">
	                    </div>

	                    <div class="col-md-12 mb-1">
	                        <label class="control-label studproflabel">Report Card (FORM 138)&nbsp;</label> 
	                        <div id="reportcardlist"></div>      
	                    </div>
						<div class="col-md-12">
	                    	<hr style="width: 65%; margin-bottom: 5px;">
	                    </div>

	                    <div class="col-md-12 mb-1">
	                        <label class="control-label studproflabel">Certificate of Good Moral Character&nbsp;</label> 
	                        <div id="certgoodmoralcharacterlist"></div>      
	                    </div>
						<div class="col-md-12">
	                    	<hr style="width: 65%; margin-bottom: 5px;">
	                    </div>

	                    <div class="col-md-12 mb-1">
	                        <label class="control-label studproflabel">Permanent Record (Form 137)&nbsp;</label> 
	                        <div id="permanentrecordlist"></div>     
	                    </div>
                	</div>
				</div>	
				<div id="bodystudentrec">
				</div>	
				<div id="bodystudentsched">
				</div>	
            </div>
            <div class="modal-footer" style="padding: 5px 0px 5px 0px;">
            	<div class="row">
	                <div class="col-md-12">
	                    <button class="float-right mr-3 buttclose" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i>&nbsp;Close</button>
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

<div id="modaluploadreceipt" class="modal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg" style="max-width: 500px;">
        <div class="modal-content">
            <div class="modal-header" style="background: #3a4651 !important;">
                <h4 class="modal-title text-white"><b>Upload Receipt</b></h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true"><b>×</b></button>
            </div>
            <div class="modal-body" style="padding-bottom: 0px;">
            	<input type="hidden" id="txtadmissionidhidden">
                <div class="row">
                    <center>
	                    <div class="col-md-6 ml-3">
                            <form method="post" action="#" enctype="multipart/form-data" id="frmUploadReceipt">
                                <div class="row">
                                    <div class="col-sm-12" style="display: none;">
                                        <img src="assets2/images/blank.png" class="img-thumbnail" width="150" height="130" style="border: 2px solid #bdc3c7;" id="updateReceiptImage"><br>
                                    </div>
                                    <input type="file" class="dropify" id="txtupdateReceiptImagefile" name="txtupdateReceiptImagefile" onchange="fncSchedule();" accept="image/*" data-height="190">
                                    <input type="hidden" id="txtimgadmissionidhidden" name="txtimgadmissionidhidden">
                                    <input type="hidden" id="txtimgstudidhidden" name="txtimgstudidhidden">
                                </div>
                            </form>
                        </div>
                    </center>
            	</div>
            </div>
            <div class="modal-footer" style="padding: 5px 0px 5px 0px;">
            	<div class="row">
	                <div class="col-md-12">
	                    <button class="float-right mr-3 buttsky" onclick="uploadscheduleimage();"><i class="fa fa-floppy-o"></i>&nbsp;Save</button>
	                </div> 
            	</div>
            </div>
        </div>
    </div>
</div>

<div id="modaluploadrequirements" class="modal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg" style="max-width: 500px;">
        <div class="modal-content">
            <div class="modal-header" style="background: #3a4651 !important;">
                <h4 class="modal-title text-white"><b>Upload Report Card</b></h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true"><b>×</b></button>
            </div>
            <div class="modal-body" style="padding-bottom: 0px;">
            	<input type="hidden" id="txtadmissionidhidden">
                <div class="row">
                    <center>
	                    <div class="col-md-6 ml-3">
                            <form method="post" action="#" enctype="multipart/form-data" id="frmUploadRequirements">
                                <div class="row">
                                    <div class="col-sm-12" style="display: none;">
                                        <img src="assets2/images/blank.png" class="img-thumbnail" width="150" height="130" style="border: 2px solid #bdc3c7;" id="updateRequirementsImage"><br>
                                    </div>
                                    <input type="file" class="dropify" id="txtupdateRequirementsImagefile" name="txtupdateRequirementsImagefile" onchange="fncShowreqPic();" accept="image/*" data-height="190">
                                    <input type="hidden" id="txtimgreqemail" name="txtimgreqemail">
                                    <input type="hidden" id="txtimgreqFname" name="txtimgreqFname">
                                    <input type="hidden" id="txtimgreqMname" name="txtimgreqMname">
                                    <input type="hidden" id="txtimgreqLname" name="txtimgreqLname">
                                    <input type="hidden" id="txtimgreqstudid" name="txtimgreqstudid">
                                </div>
                            </form>
                        </div>
                    </center>
            	</div>
            </div>
            <div class="modal-footer" style="padding: 5px 0px 5px 0px;">
            	<div class="row">
	                <div class="col-md-12">
	                    <button class="float-right mr-3 buttsky" onclick="uploadgraderequirement();"><i class="fa fa-floppy-o"></i>&nbsp;Save</button>
	                </div> 
            	</div>
            </div>
        </div>
    </div>
</div>

<script src="assets2/plugins/jquery/jquery.min.js"></script>
<?php include("studentinfoscript.php"); ?>

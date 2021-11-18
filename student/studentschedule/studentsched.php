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
					<h3 class="title" style="margin: 5px; font-weight: 700; font-size: 1.3rem; text-align: center;">My Schedule</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card" style="margin-top: 8px;">
            <div class="card-block">
                <div id="dsplyschedulenorecordF" style="height: 100px !important;text-align: center;">
                    <label style="margin-top: 15px; font-weight: 400; font-size: 1rem"><i>No record found . . .</i></label>
                </div>

                <div id="dsplyStudentSchedule">
                    <div id="StudentScheduleList"></div>
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

<script src="assets2/plugins/jquery/jquery.min.js"></script>
<?php include("studentschedscript.php"); ?>

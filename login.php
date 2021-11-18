<?php
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	        session_start(); 
	        include('mainpageheader.php');
    	?>
    	<link rel="stylesheet" id="theme-style" href="assets/css/app.css">

    	<style type="text/css">
	    	.lala{
	    	    display: inline-block;
			    padding: 6px 12px;
			    margin-bottom: 0;
			    font-size: 14px;
			    font-weight: 400;
			    line-height: 1.42857143;
			    text-align: center;
			    white-space: nowrap;
			    vertical-align: middle;
			    -ms-touch-action: manipulation;
			    touch-action: manipulation;
			    cursor: pointer;
			    -webkit-user-select: none;
			    -moz-user-select: none;
			    -ms-user-select: none;
			    user-select: none;
			    background-image: none;
			    border: 1px solid transparent;
			    border-radius: 4px;

			    background-image: none;
	    		border-radius: 0;
	    		margin-bottom: 5px;
	    		line-height: 1.2;
			}

			.lala.lala1 {
			    color: #ffffff;
			    background-color: #85CE36;
			    border-color: #85CE36;
			}

			.lala.lala1:hover {
		      	color: #fff;
		      	background-color: #72b22b;
		      	border-color: #6ba829; 
	  		}
		</style>
	</head>
	<body>
		<div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                            <div class="logo">
                                <span class="l l1"></span>
                                <span class="l l2"></span>
                                <span class="l l3"></span>
                                <span class="l l4"></span>
                                <span class="l l5"></span>
                            </div> LOGIN
                        </h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-center">LOGIN TO YOUR SNSM ACCOUNT</p>
                        <div class="form-group">
                            <label for="username">Username</label>
							<span class="text-danger"></span>
                            <input type="email" class="form-control underlined" name="usercode" id="usercode" placeholder="Enter your username" required style="height: 28px;margin-top: 2px;">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
							<span class="text-danger"></span>
							<div class="row">
								<div class="col-md-11" style="width: 97%; padding-right: 0px;">
	                            	<input type="password" class="form-control underlined" name="user_password" id="user_password" placeholder="Enter your password" required style="height: 28px;margin-top: 2px;">
	                        	</div>
	                        	<div class="col-md-1" style="width: 1%; padding-left: 0px;padding-right: 0px;">
	                            	<i class="fa fa-eye-slash" style="margin-left: -25px; cursor: pointer; font-size: 1.7rem;" id="logineye" onclick="fncChangeCCattribunHash()"></i>
	                            </div>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 30px;">
                            <button class="lala lala1" onclick="loginuser()" style="width: 100%; font-weight: 500; background-color: #1f4762;">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('mainpagejscripts.php'); ?>

	    <?php include('mainscript.php'); ?>
	    
	    <?php include('jscripts.php'); ?>
	</body>
</html>

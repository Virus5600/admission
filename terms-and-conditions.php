<?php include("connect.php"); ?>
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
											<li id="menu-item-1551" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1551">
												<a href="/snsm-admission/admission.php">Admissions</a>
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
						<div class="row">
							<div class="my-5 mx-auto col-lg-6 col-12">
								<h3 class="mb-3">Terms and Conditions</h3>

								<ol>
									<li><b>Introduction:</b> document governs website use; consent to website document: implied; cookie consent.</li>
									<li><b>Copyright notice:</b> UCC copyright notice; ownership of rights in website.</li>
									<li><b>Permission to use website:</b> licence to use website; no downloading; website use: permitted purposes; no modification of website content; limitations on licence to use website (no redistributable content); suspension or restriction of access to website.</li>
									<li><b>Misuse of website:</b> acceptable use: prohibitions; using contact details prohibited; veracity of information supplied.</li>
									<li><b>Limited warranties:</b> no warranties for information; right to discontinue website publication; no implied warranties or representations relating to website.</li>
									<li><b>Limitations and exclusions of liability:</b> caveats to limits of liability; interpretation of limits of liability; no liability for free information or services; no liability for force majeure; no liability for business losses; no liability for loss of data or software; no liability for consequential loss; no personal liability.</li>
									<li><b>Breaches of these terms and conditions:</b> consequences of breach (no accounts); non circumvention of measures upon breach (no accounts).</li>
									<li><b>Third party</b> websites: third party websites:</b> hyperlinks not recommendations; third party websites: no control or liability.</li>
									<li><b>Variation:</b> document may be revised; variation of website document: unregistered users.</li>
									<li><b>Assignment:</b> assignment by first party; assignment by second party.</li>
									<li><b>Severability:</b> severability of whole; severability of parts.</li>
									<li><b>Third party rights:</b> third party rights: benefit; third party rights: exercise of rights.</li>
									<li><b>Entire agreement:</b> entire agreement - use of website.</li>
									<li><b>Law and jurisdiction:</b> governing law; jurisdiction.</li>
									<li><b>About our school:</b> school legal status; charitable status; non-commercial address; contacting the website operator (non-commercial).</li>
								</ol>
							</div>
						</div>
					</div>
			</body>
		</div>

		<?php include('footer.php'); ?>
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
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
	<meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
	<meta name="author" content="ThemeSelect">
	<title>Don Bosco College, Tura</title>
	<link rel="apple-touch-icon" href="https://themeselection.com/demo/chameleon-admin-template/app-assets/images/ico/apple-icon-120.png">
	<link rel="shortcut icon" type="image/x-icon" href="https://higradeonline.com/DBCTuraAdmission/images/DBCT Logo.png">
	<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- BEGIN: Vendor CSS-->
	<link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
	<link rel="stylesheet" type="text/css" href="https://donboscocollege.ac.in/OnlineAdmission2023/app-assets/vendors/css/forms/toggle/switchery.min.css">
	<link rel="stylesheet" type="text/css" href="https://donboscocollege.ac.in/OnlineAdmission2023/app-assets/css/plugins/forms/switch.min.css">
	<link rel="stylesheet" type="text/css" href="https://donboscocollege.ac.in/OnlineAdmission2023/app-assets/css/core/colors/palette-switch.min.css">
	<!-- END: Vendor CSS-->

	<!-- BEGIN: Theme CSS-->
	<link rel="stylesheet" type="text/css" href="https://donboscocollege.ac.in/OnlineAdmission2023/app-assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://donboscocollege.ac.in/OnlineAdmission2023/app-assets/css/bootstrap-extended.min.css">
	<link rel="stylesheet" type="text/css" href="https://donboscocollege.ac.in/OnlineAdmission2023/app-assets/css/colors.min.css">
	<link rel="stylesheet" type="text/css" href="https://donboscocollege.ac.in/OnlineAdmission2023/app-assets/css/components.min.css">
	<!-- END: Theme CSS-->

	<!-- BEGIN: Page CSS-->
	<link rel="stylesheet" type="text/css" href="https://donboscocollege.ac.in/OnlineAdmission2023/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
	<link rel="stylesheet" type="text/css" href="https://donboscocollege.ac.in/OnlineAdmission2023/app-assets/css/core/colors/palette-gradient.min.css">
	<link rel="stylesheet" type="text/css" href="https://donboscocollege.ac.in/OnlineAdmission2023/app-assets/css/pages/under-maintenance.min.css">
	<!-- END: Page CSS-->

	<!-- BEGIN: Custom CSS-->
	<link rel="stylesheet" type="text/css" href="https://donboscocollege.ac.in/OnlineAdmission2023/assets/css/style.css">
	<!-- END: Custom CSS-->
	<style>
		.bg-maintenance-image {
			background-image: url(images/Building.jpg) !important;
			background-repeat: no-repeat;
			-webkit-background-size: cover;
			background-size: cover;
			box-shadow: inset 0 0 0 1000px rgba(204, 162, 219, 0.6) !important;
			height: 100% !important;
		}

		.breadcrumb,
		.card,
		.card-footer,
		.card-header,
		.page-link {

			background-color: rgba(5, 136, 212, 0.6) !important;

		}

		.card-header {
			padding: 1rem !important;
			border: 2px solid #5daf81 !important;
		}

		.float-md-left {
			color: white;
			font-size: 16px;
			font-weight: bold;
			text-align: center;
		}

		.text-bold-800.grey.darken-2 {
			color: #09f850;
		}

		.mb-1 {
			margin-bottom: 0rem !important;
		}

		@import "compass/css3";

		/*Be sure to look into browser prefixes for keyframes and annimations*/
		.flash {
			animation-name: flash;
			animation-duration: 0.2s;
			animation-timing-function: linear;
			animation-iteration-count: infinite;
			animation-direction: alternate;
			animation-play-state: running;
			background: white;
			padding: 4px;
			border-radius: 8px;
		}

		@keyframes flash {
			from {
				color: #080808;
			}

			to {
				color: #0800ff;
			}
		}

		.app-content.content {
			background-image: url(images/Build-back.jpg) !important;
			background-size: cover !important;
			background-repeat: no-repeat !important;
			background-position: 0% 60% !important;
			height: 740px;
		}

		@media (max-width:767px) {
			.btn-primary {
				padding-right: 51px !important;
				margin-top: 0px;
				margin-left: 15px;
			}

			.module {
				word-wrap: normal !important;
			}

			.flash {
				font-size: 14px;
				padding: 8px;
			}

			.footer-light {
				background: #e4fee3;
				border-top: 3px solid #f5eb12;
				position: absolute !important;
				bottom: 0 !important;
				width: 100% !important;
			}

			.card-body {
				background: rgba(45, 131, 223, 0.2) !important;
				padding-bottom: 90px !important;
			}
		}
	</style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 1-column  bg-maintenance-image blank-page blank-page" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
	<!-- BEGIN: Content-->
	<div class="app-content content">
		<div class="content-wrapper" style="margin-top: 20px !important;">
			<div class="content-wrapper-before"></div>
			<div class="content-header row">
				<center style=""><img src="images/DBLogo.png" style="border-radius: 9px;margin-bottom: 11px;width: 78%;"></center>
			</div>
			<div class="content-body">
				<section class="flexbox-container">
					<div class="col-12 d-flex align-items-center justify-content-center">
						<div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">
							<div class="card border-grey border-lighten-3 px-1 py-1 box-shadow-3 m-0">
								<div class="card-header border-0">

									<div class="text-center mb-1">
										<!--img src="../../../app-assets/images/logo/logo.png" alt="branding logo"-->
									</div>
									<div class="text-center" style="font-weight: bold;font-size: 25px;color: white;font-family: 'Orelega One', cursive !important;">
										Applicant Login <br>
										<span style="font-size: 16px;">Welcome !!!</span>
									</div>
								</div>
								<div class="form-body" style="border: 2px solid #5daf81;padding: 2% 10% 2% 10%;">

									<form class="form" id="wizard" method="POST" class="steps-validation" action="personalInformation.php">
										<div class="form-group">
											<label for="UserName" style="font-weight: bold;font-size: 18px;color: white;">User Name</label>
											<input title="Please Enter Username" type="text" name="unique_id" maxlength="7" class="form-control" placeholder="User Name" autocomplete="off" required>
										</div>

										<div class="form-group">
											<label for="UserName" style="font-weight: bold;font-size: 18px;color: white;">Password</label>
											<input type="password" title="Please Enter Password" name="mobile" id="mobile" pattern="[1-9]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" class="form-control" placeholder="Password" autocomplete="off" required>
										</div>

										<div class="row">
											<div class="col-md-6">

												<div class="col-md-6">
													<div class="form-group">
														<input id="reg_no" type="hidden" value="<?php echo $reg_no; ?>" class="form-control" name="reg_no" placeholder="reg_no"></input>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<input id="app_name" type="hidden" value="<?php echo $app_name; ?>" class="form-control" name="app_name" placeholder="app_name"></input>
													</div>
												</div>

												<div class="form-group">
													<input id="t_status" type="hidden" value="<?php echo $t_status; ?>" class="form-control" name="t_status" placeholder="t_status"></input>
												</div>

											</div>
										</div>


										<div class="module">
											<center>
												<button type="submit" name="submit" class="col-3 mr-1 mb-1 btn btn-primary btn-save" style="width: 25%;font-size: 14px; font-variant:all-petite-caps; margin-top: 10px; margin-left: 35px;">Login</button>
											</center>

											<center>
												<p style="padding: 2px;border-radius: 3px;font-size: 17px;font-weight:bold;margin-top: 6%;"><a class="flash" style="color:#fff;font-weight: bold;" href="index.php">New Registration <i class="fa fa-forward"></i></a> </p>
											</center>

										</div>

								</div>
								</form>
								<hr>
								<span class="float-md-left d-block d-md-inline-block"><?php //include_once('footer.php');
																						?>Copyright © <?php echo date('Y'); ?> Don Bosco College, Tura. <br><a class="text-bold-800 grey darken-2" href="http://www.boscosofttech.com" target="_blank"> All rights reserved Powered by Boscosoft</a></span>
							</div>

						</div>
					</div>
				</section>

			</div>
		</div>
	</div>
	<?php //include_once('footer.php');
	?>
	<!-- BEGIN: Vendor JS-->
	<script src="https://donboscocollege.ac.in/OnlineAdmission2023/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
	<script src="https://donboscocollege.ac.in/OnlineAdmission2023/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
	<script src="https://donboscocollege.ac.in/OnlineAdmission2023/app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>

	<!-- BEGIN: Theme JS-->
	<script src="../../../app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
	<script src="../../../app-assets/js/core/app.min.js" type="text/javascript"></script>
	<!-- END: Theme JS-->

</body>
<!-- END: Body-->

</html>
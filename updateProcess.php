<?php

include_once('header.php');
?>

<style>
	.main-menu.menu-fixed.menu-light.menu-dbcmrm {
		background: url(images/Loginimg.jpg);
		background-repeat: repeat;
		background-size: auto;
		width: 21% !important;
		margin-left: -2%;
		padding-left: -20px !important;
		background-repeat: no-repeat;
		background-repeat: no-repeat;
		background-size: cover;
	}

	.top-wrapper {
		background: rgb(226, 230, 233) !important;
	}


	#wizard {
		margin: -2% 2% 0% 3%;
	}

	.card-header {
		background: rgba(45, 131, 223, 0.5) !important;
	}

	form .form-group {
		margin-bottom: 1em;
	}

	label {
		color: black !important;
		font-weight: bold;
		font-size: 16px;
	}

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
			color: #b11e18;
		}
	}

	.text-center {
		margin-bottom: 20% !important;
		margin-top: 8% !important;
		background: #657f89;
		padding: 3%;
	}

	.menu-dbcmrm {
		box-shadow: inset 0 0 0 1000px rgba(45, 131, 223, 0.5) !important;
		border-right: 3px solid white !important;
	}

	.card-title {
		background: #fff;
		color: black !important;
		font-size: 25px !important;
		font-weight: bold !important;
		padding: 1.5%;
		text-transform: uppercase;
		// font-family: 'Orelega One', cursive !important;
	}

	@media (min-width: 992px) {

		body.vertical-layout.vertical-menu .content,
		body.vertical-layout.vertical-menu .footer {
			margin-left: 0px !important;
		}
	}

	.card-header {
		background-image: url(images/Build-back.jpg) !important;
		background-size: cover !important;
		background-repeat: no-repeat !important;
		background-position: 0% 60% !important;
	}

	.card {
		background: #f8f5e3 !important;
	}

	footer.footer-light {
		background: #fff !important;
	}
</style>
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

	<!-- BEGIN: Header-->

	<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark header-back">
		<div class="navbar-wrapper">
			<div class="navbar-container content">
				<div class="collapse navbar-collapse show" id="navbar-mobile">


				</div>
			</div>
		</div>
	</nav>


	<!-- END: Header-->




	<style>
		form .form-control {
			height: 33px;
		}
	</style>
	<!-- BEGIN: Content-->
	<div class="app-content content">
		<div class="content-wrapper top-wrapper">
			<div class="content-wrapper-before personal-wrapper"></div>
			<div class="content-header row">
				<div class="content-header-left col-md-4 col-12 mb-2">
					<!--h3 class="content-header-title">Application Form</h3-->
				</div>
				<div class="content-header-right col-md-8 col-12">
					<div class="breadcrumbs-top float-md-right">
						<div class="breadcrumb-wrapper mr-1">

						</div>
					</div>
				</div>
			</div>
			<div class="content-body"><!-- Basic form layout section start -->
				<section id="basic-form-layouts">
					<div class="row match-height">
						<div class="col-md-12" style="background:#e3e7ea !important;">
							<div class="card">
								<div class="card-header">
									<div class="card-header">

										<center><img class="head-img" src="images/DBLogo.png" style="/*! height: 150px; */border-radius: 9px;margin-bottom: 11px;width: 100%;"></center>

									</div>
								</div>
								<br>
								<h1 style="margin: 3%;" class="card-title">Online Admission Registration For 2024 - 2025</h1>
								<?php
								if ($_SERVER['REQUEST_METHOD'] === 'POST') {

									$dbhost = 'localhost';
									$dbuser = 'root';
									$dbpass = '';
									$dbname = 'tura_admission';

									//Connect Database
									$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
									if (!$conn) {
										die("ERROR: Could not connect. " . mysqli_connect_error());
									}
									$unique_id = $_POST['unique_id'];
									$reg_no = $_POST['reg_no'];
									$email = $_POST['email'];
									$mobile = $_POST['mobile'];
									$m_status = $_POST['m_status'];
									$blood_group = $_POST['blood_group'];
									$category = $_POST['category'];
									$race_tribe = $_POST['race_tribe'];
									$religion = $_POST['religion'];
									$disability = $_POST['disability'];
									$weakeryes = $_POST['weakeryes'];
									$weakcert = isset($_POST['weakcert']) ? $_POST['weakcert'] : '';
									$tura_address = $_POST['tura_address'];
									$adhar_number = $_POST['adhar_number'];
									$home_address = $_POST['home_address'];
									$p_state = $_POST['p_state'];
									$studying = $_POST['studying'];
									$rollno1 = isset($_POST['rollno1']) ? $_POST['rollno1'] : '';
									$rollno2 = isset($_POST['rollno2']) ? $_POST['rollno2'] : '';
									$f_name = $_POST['f_name'];
									$f_age = $_POST['f_age'];
									$f_edu = $_POST['f_edu'];
									$f_occupation = $_POST['f_occupation'];
									$f_contact1 = $_POST['f_contact1'];
									$f_contact2 = $_POST['f_contact2'];
									$m_name = $_POST['m_name'];
									$m_age = $_POST['m_age'];
									$m_edu = $_POST['m_edu'];
									$m_occupation = $_POST['m_occupation'];
									$m_contact1 = $_POST['m_contact1'];
									$m_contact2 = $_POST['m_contact2'];
									$g_name = $_POST['g_name'];
									$g_age = $_POST['g_age'];
									$g_edu = $_POST['g_edu'];
									$g_occupation = $_POST['g_occupation'];
									$g_contact = $_POST['g_contact'];
									$urban = $_POST['urban'];
									$cuet_mark = $_POST['cuet_mark'];
									$area = isset($_POST['area']) ? $_POST['area'] : '';
									$twl_subject1 = $_POST['twl_subject1'];
									$twl_subject2 = $_POST['twl_subject2'];
									$twl_subject3 = $_POST['twl_subject3'];
									$twl_subject4 = $_POST['twl_subject4'];
									$twl_subject5 = $_POST['twl_subject5'];
									$twl_subject6 = $_POST['twl_subject6'];
									$twl_subject7 = $_POST['twl_subject7'];
									$twl_subject8 = $_POST['twl_subject8'];
									$twl_mark1 = $_POST['twl_mark1'];
									$twl_mark2 = $_POST['twl_mark2'];
									$twl_mark3 = $_POST['twl_mark3'];
									$twl_mark4 = $_POST['twl_mark4'];
									$twl_mark5 = $_POST['twl_mark5'];
									$twl_mark6 = $_POST['twl_mark6'];
									$twl_mark7 = $_POST['twl_mark7'];
									$twl_mark8 = $_POST['twl_mark8'];
									$twl_total = $_POST['twl_total'];
									$roll_no = $_POST['roll_no'];
									$comp_year = $_POST['comp_year'];
									$mark_percentage = $_POST['mark_percentage'];
									$division = $_POST['division'];
									$rank = $_POST['rank'];
									$board_univ = $_POST['board_univ'];
									$reg_pvt = $_POST['reg_pvt'];
									$percentage = $_POST['percentage'];
									$major_subject = $_POST['major_subject'];
									$minor_subject = $_POST['minor_subject'];
									$mdc_choice = $_POST['mdc_choice'];
									$aec_choice = $_POST['aec_choice'];
									$sec_choice = $_POST['sec_choice'];
									$mdc_secondsem = $_POST['mdc_secondsem'];
									$aec_secondsem = $_POST['aec_secondsem'];
									$sec_secondsem = $_POST['sec_secondsem'];
									$vac_secondsem = $_POST['vac_secondsem'];
									$per_year = $_POST['per_year'];
									$per_to = $_POST['per_to'];
									$ins_address = $_POST['ins_address'];

									try {

										mysqli_query($conn, "begin");

										$updateQuery = "UPDATE `admission_2024` SET m_status='" . $m_status . "', 
										blood_group='" . $blood_group . "', 
										category='" . $category . "', 
										race_tribe='" . $race_tribe . "', 
										disability='" . $disability . "', 
										weakeryes='" . $weakeryes . "',  
										weakcert='" . $weakcert . "', 
										religion='" . $religion . "', 
										tura_address='" . $tura_address . "', 
										adhar_number='" . $adhar_number . "', 
										home_address='" . $home_address . "', 
										p_state='" . $p_state . "', 
										studying='" . $studying . "', 
										rollno1='" . $rollno1 . "', 
										rollno2='" . $rollno2 . "', 
										f_name='" . $f_name . "', 
										f_age='" . $f_age . "', 
										f_edu='" . $f_edu . "', 
										f_occupation='" . $f_occupation . "', 
										f_contact1='" . $f_contact1 . "', 
										f_contact2='" . $f_contact2 . "', 
										m_name='" . $m_name . "', 
										m_age='" . $m_age . "', 
										m_edu='" . $m_edu . "', 
										m_occupation='" . $m_occupation . "', 
										m_contact1='" . $m_contact1 . "', 
										m_contact2='" . $m_contact2 . "', 
										g_name='" . $g_name . "', 
										g_age='" . $g_age . "', 
										g_edu='" . $g_edu . "', 
										g_occupation='" . $g_occupation . "', 
										g_contact='" . $g_contact . "',
										urban='" . $urban . "',
										cuet_mark='" . $cuet_mark . "',
										area='" . $area . "',
										twl_subject1='" . $twl_subject1 . "',
										twl_subject2='" . $twl_subject2 . "',
										twl_subject3='" . $twl_subject3 . "',
										twl_subject4='" . $twl_subject4 . "',
										twl_subject5='" . $twl_subject5 . "',
										twl_subject6='" . $twl_subject6 . "',
										twl_subject7='" . $twl_subject7 . "',
										twl_subject8='" . $twl_subject8 . "',
										twl_mark1='" . $twl_mark1 . "',
										twl_mark2='" . $twl_mark2 . "',
										twl_mark3='" . $twl_mark3 . "',
										twl_mark4='" . $twl_mark4 . "',
										twl_mark5='" . $twl_mark5 . "',
										twl_mark6='" . $twl_mark6 . "',
										twl_mark7='" . $twl_mark7 . "',
										twl_mark8='" . $twl_mark8 . "',
										twl_total='" . $twl_total . "',
										roll_no='" . $roll_no . "',
										comp_year='" . $comp_year . "',
										mark_percentage='" . $mark_percentage . "',
										division='" . $division . "',
										rank='" . $rank . "',
										board_univ='" . $board_univ . "',
										reg_pvt='" . $reg_pvt . "',
										percentage='" . $percentage . "',
										major_subject='" . $major_subject . "',
										minor_subject='" . $minor_subject . "',
										mdc_choice='" . $mdc_choice . "',
										aec_choice='" . $aec_choice . "',
										sec_choice='" . $sec_choice . "',
										mdc_secondsem='" . $mdc_secondsem . "',
										aec_secondsem='" . $aec_secondsem . "',
										sec_secondsem='" . $sec_secondsem . "',
										vac_secondsem='" . $vac_secondsem . "',
										per_year='" . $per_year . "',
										per_to='" . $per_to . "',
										ins_address='" . $ins_address . "'
										

										WHERE unique_id='" . $unique_id . "'";
										$updateQueryResults = mysqli_query($conn, $updateQuery);
										if (!$updateQueryResults) {
											mysqli_query("rollback");
											return mysqli_error();
											echo $Response = "Not able to insert data";
										} else {
											$Id = base64_encode($reg_no);

								?>

											<div class="text-center">
												<p style="font-size: 26px;font-weight: bold;color: #fff;">You have Updated Successfully.</p>
												<p style="font-size: 20px;font-weight: bold;color: #fff;">Your Registration No is : <?php echo $reg_no; ?></p>
												<p style="font-size: 19px;color: #fff;font-weight: bold;"><a class="flash" style="background: #e2f48e;color:greenyellow;font-weight: bold;" href="pdfgenerator.php?id=<?php echo $Id; ?>">Click Here</a> to download your Application Form </p>

											</div>
											<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

								<?php

										}

										mysqli_query($conn, "commit");
									} catch (Exception $e) {
										echo "transaction rolled back";

										exit;
									}
								}
								?>


								<script>
									//avoid backspace in browser
									(function(global) {

										if (typeof(global) === "undefined") {
											throw new Error("window is undefined");
										}

										var _hash = "!";
										var noBackPlease = function() {
											global.location.href += "#";

											// making sure we have the fruit available for juice (^__^)
											global.setTimeout(function() {
												global.location.href += "!";
											}, 50);
										};

										global.onhashchange = function() {
											if (global.location.hash !== _hash) {
												global.location.hash = _hash;
											}
										};

										global.onload = function() {
											noBackPlease();

											// disables backspace on page except on input fields and textarea..
											document.body.onkeydown = function(e) {
												var elm = e.target.nodeName.toLowerCase();
												if (e.which === 8 && (elm !== 'input' && elm !== 'textarea')) {
													e.preventDefault();
												}
												// stopping event bubbling up the DOM tree..
												e.stopPropagation();
											};
										}

									})(window);
								</script>

								<?php include_once('footer.php'); ?>
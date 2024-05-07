<?php

session_start();
include_once('header.php');
include('config.php');
?>
<style>
	footer.footer {
		padding: .8rem;
	}

	.card-header {
		background: rgba(45, 131, 223, 0.5) !important;
	}

	label {
		color: black !important;
		font-weight: bold;
		font-size: 16px;
	}

	#Groups {
		font-size: 17px;
		color: #b2204a;
		font-weight: bold;
	}

	.menu-dbcmrm {
		box-shadow: inset 0 0 0 1000px rgba(45, 131, 223, 0.5) !important;
		border-right: 3px solid white !important;
	}

	.card-title {
		background: #f3f3f3;
		color: black !important;
		font-size: 22px !important;
		font-weight: bold !important;
		padding: 1.5%;
		text-transform: uppercase;
	}

	table {
		border-collapse: collapse;
		border-spacing: 0;
		width: 100%;
		border: 1px solid #090707;
		margin-bottom: 14px;
	}

	th,
	td {
		text-align: center;
		padding: 6px;
	}

	table,
	th,
	td {
		border: 1px solid black;
		color: black !important;
		font-weight: bold;
		font-size: 16px;
	}

	.mdc {
		text-align: left;
	}

	input[type=radio] {
		width: 20px;
		height: 20px;
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

	.card-body {
		background: #f8f5e3;
	}

	.btn-bottom {
		padding-bottom: 25px;
		background: #d5e6f9;
	}
</style>
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">


	<!-- END: Main Menu-->


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
						<div class="col-md-12" style="background: #e3e7ea;">
							<div class="col-md-12" style="background: #e3e7ea;">
								<div class="card">
									<div class="card-header">
										<div class="card-header">
											<center><img src="images/DBLogo.png" style="/*! height: 150px; */border-radius: 9px;margin-bottom: 11px;width: 100%;"></center>

										</div>
									</div>

									<?php

									$id = $_GET['id'];
									$ids = base64_decode($id);
									$dbhost = 'localhost';
									$dbuser = 'root';
									$dbpass = '';
									$dbname = 'tura_admission';

									//Connect Database
									$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
									if (!$conn) {
										die("ERROR: Could not connect. " . mysqli_connect_error());
									}


									$Query = "SELECT * FROM `admission_2024` WHERE (id='" . $ids . "' AND t_status=1)";
									// $rows = mysql_fetch_row($Query);
									$result = mysqli_query($conn, $Query);
									$rows = mysqli_fetch_row($result);
									$rowcount = mysqli_num_rows($result);

									$reg_no = $rows[1];
									$app_name = $rows[4];
									$dob = $rows[5];
									$shift = $rows[6];
									$gender = $rows[7];
									$email = $rows[8];
									$mobile = $rows[9];
									$cuet_mark = $rows[11];
									$unique_id = $rows[13];
									$t_status = $rows[20];
									$m_status = $rows[21];
									$blood_group = $rows[22];
									$category = $rows[23];
									$race_tribe = $rows[24];
									$religion = $rows[25];
									$disability = $rows[26];
									$weakeryes = $rows[27];
									$weakcert = $rows[28];
									$tura_address = $rows[29];
									$adhar_number = $rows[32];
									$home_address = $rows[33];
									$p_state = $rows[35];
									$studying = $rows[37];
									$rollno1 = $rows[38];
									$rollno2 = $rows[39];
									$f_name = $rows[40];
									$f_age = $rows[41];
									$f_edu = $rows[42];
									$f_occupation = $rows[43];
									$f_contact1 = $rows[44];
									$f_contact2 = $rows[45];
									$m_name = $rows[46];
									$m_age = $rows[47];
									$m_edu = $rows[48];
									$m_occupation = $rows[49];
									$m_contact1 = $rows[50];
									$m_contact2 = $rows[51];
									$g_name = $rows[52];
									$g_age = $rows[53];
									$g_edu = $rows[54];
									$g_occupation = $rows[55];
									$g_contact = $rows[56];
									$urban = $rows[57];
									$area = $rows[58];
									$twl_subject1 = $rows[59];
									$twl_subject2 = $rows[60];
									$twl_subject3 = $rows[61];
									$twl_subject4 = $rows[62];
									$twl_subject5 = $rows[63];
									$twl_subject6 = $rows[64];
									$twl_subject7 = $rows[65];
									$twl_subject8 = $rows[66];
									$twl_mark1 = $rows[67];
									$twl_mark2 = $rows[68];
									$twl_mark3 = $rows[69];
									$twl_mark4 = $rows[70];
									$twl_mark5 = $rows[71];
									$twl_mark6 = $rows[72];
									$twl_mark7 = $rows[73];
									$twl_mark8 = $rows[74];
									$twl_total = $rows[75];
									$roll_no = $rows[76];
									$comp_year = $rows[77];
									$mark_percentage = $rows[78];
									$division = $rows[79];
									$rank = $rows[80];
									$board_univ = $rows[81];
									$reg_pvt = $rows[82];
									$percentage = $rows[83];
									$minor_subject = $rows[84];
									$major_subject = $rows[85];
									$mdc_choice = $rows[86];
									$aec_choice = $rows[87];
									$sec_choice = $rows[88];
									$mdc_secondsem = $rows[89];
									$aec_secondsem = $rows[90];
									$sec_secondsem = $rows[91];
									$vac_secondsem = $rows[92];
									$per_year = $rows[93];
									$per_to = $rows[94];
									$ins_address = $rows[95];




									?>


									<div class="card-content collapse show">
										<div class="card-body">
											<div class="card-text">

											</div>
											<form class="form" id="wizard" method="POST" class="steps-validation" action="updateProcess.php" enctype="multipart/form-data">
												<div class="form-body">

													<h1 class="card-title">Online Admission Registration For 2024 - 2025</h1>
													<!----------------Personal Information----------------------->
													<p style="text-align: right;font-weight:bold !important;color: black;font-size:19px;">Welcome Dear <span style="color: #2a1bdf;">
															<?php
															// echo $row[2], ' ', ($row[1]); 
															?></span> <?php echo $app_name; ?>.
													<p>
														<hr style="border-top: 1px solid #C0C0C0;">
														<br>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<label for="Name">
																	Name of the Candidate as in Cl. X Admit Card
																</label>
																<input type="text" name="app_name" Placeholder="Applicant Name" value="<?php echo $app_name; ?>" class="form-control" id="Name" autocomplete="off" Disabled>

															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="dob">Date of Birth</label>
																<input type="date" name="dob" class="form-control" id="dob" value="<?php echo $dob; ?>" autocomplete="off" disabled>

															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="gender" style="color: black;">Gender</label>
																<input type="text" id="gender" class="form-control" placeholder=" " name="gender" value="<?php echo $gender; ?>" autocomplete="off" disabled>
															</div>
														</div>
														<div class="col-md-4" id="shift">
															<div class="form-group">
																<label for="shift">
																	Shift
																</label>
																<input type="text" id="email" class="form-control" name="email" value="<?php echo $shift; ?>" autocomplete="off" disabled>

															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="m_status">
																	Marital Status
																</label>
																<input type="text" id="m_status" class="form-control" name="m_status" value="<?php echo $m_status; ?>" autocomplete="off" disabled>
															</div>

														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="blood_group">
																	Blood Group
																</label>

																<input type="text" id="blood_group" class="form-control" name="blood_group" value="<?php echo $blood_group; ?>" autocomplete="off" disabled>
															</div>

														</div>

													</div>


													<hr style="border-top: 1px solid #C0C0C0;">
													<br>
													<div class="row">
														<div class="col-md-2">
															<div class="form-group">
																<label for="category">
																	Category

																</label>
																<input type="text" id="category" class="form-control" name="category" value="<?php echo $category; ?>" autocomplete="off" disabled>
															</div>
														</div>

														<div class="col-md-2">
															<div class="form-group">
																<label for="RT">
																	Race / Tribe
																</label>

																<input type="text" id="race_tribe" class="form-control" name="race_tribe" value="<?php echo $race_tribe; ?>" autocomplete="off" disabled>
															</div>
														</div>


														<div class="col-md-2">
															<div class="form-group">
																<label for="religion">
																	Religion
																</label>
																<input type="text" id="religion" class="form-control" name="religion" value="<?php echo $religion; ?>" autocomplete="off" disabled>
															</div>
														</div>


														<div class="col-md-2" style="padding-top: 30px;">
															<div class="form-group">
																<label>Is Differently abled ? </label>
															</div>
														</div>
														<div class="col-md-3" style="padding-top: 30px;">
															<div class="form-group">
																<div class="c-inputs-stacked">
																	<div class="d-inline-block custom-control custom-radio">
																		<input type="radio" name="disability" <?php echo ($disability == 'Yes') ? 'checked' : '' ?> value="Yes" class="custom-control-input" onchange="disablefunction(this)" id="catering9" autocomplete="off" required disabled>
																		<label class="custom-control-label" for="catering9">Yes</label>
																	</div>
																	<div class="d-inline-block custom-control custom-radio">
																		<input type="radio" name="disability" <?php echo ($disability == 'No') ? 'checked' : '' ?> value="No" class="custom-control-input" onchange="disablefunction(this)" id="catering10" autocomplete="off" required disabled>
																		<label class="custom-control-label" for="catering10">No</label>
																	</div>

																</div>
															</div>
														</div>


														<div class="col-md-3" style="padding-top: 30px;">
															<div class="form-group">
																<label>Economically Weaker</label>
															</div>
														</div>
														<div class="col-md-2" style="padding-top: 30px;">
															<div class="form-group">
																<div class="c-inputs-stacked">
																	<div class="d-inline-block custom-control custom-radio">
																		<input type="radio" name="weakeryes" <?php echo ($weakeryes == 'Yes') ? 'checked' : '' ?> value="Yes" class="custom-control-input" onchange="weakerfunction(this)" id="cateringweakeryes" autocomplete="off" required disabled>
																		<label class="custom-control-label" for="cateringweakeryes">Yes</label>
																	</div>
																	<div class="d-inline-block custom-control custom-radio">
																		<input type="radio" name="weakeryes" <?php echo ($weakeryes == 'No') ? 'checked' : '' ?> value="No" class="custom-control-input" onchange="weakerfunction(this)" id="cateringweakerno" autocomplete="off" required disabled>
																		<label class="custom-control-label" for="cateringweakerno">No</label>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-md-4" style="" id="Ruralarea">
															<div class="form-group">
																<label for="RollnoI">
																	<p style="font-size:12px;">(If Yes, attach Document Proof from DC / Village Head)</p>
																</label>

																<input type="text" id="weakcert" class="form-control" name="weakcert" value="<?php echo $weakcert; ?>" autocomplete="off" disabled>
															</div>
														</div>

													</div>

													<hr style="border-top: 1px solid #C0C0C0;"><br>
													<div class="row">
														<div class="col-md-6">
															<div class="row" style="padding-left: 16px;padding-right: 10px;">

																<div class="col-md-12">
																	<div class="form-group row">

																		<label style="margin-left: 10px;margin-top: 7px;" for="tura_address">Address in Tura </label>

																		<textarea name="tura_address" rows="5" rows="3" id="tura_address" class="form-control" onkeydown="upperCaseF(this)" value="<?php echo $tura_address; ?>" autocomplete="off" required disabled maxlength="255"><?php echo $tura_address; ?></textarea>
																	</div>
																</div>

																<div class="col-md-12">
																	<div class="form-group row">
																		<label for="tura_pincode">Pincode</label>
																		<input type="text" id="tura_pincode" class="form-control" name="tura_pincode" value="<?php echo $tura_pincode; ?>" autocomplete="off" disabled>
																	</div>
																</div>



																<div class="col-md-12">
																	<div class="form-group row">
																		<label for="adhar_number">
																			Aadhar Number
																		</label>
																		<input type="text" id="adhar_number" class="form-control" name="adhar_number" value="<?php echo $adhar_number; ?>" autocomplete="off" disabled>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-md-6">
															<div class="row" style="padding-left: 16px;padding-right: 10px;">
																<div class="col-md-12">
																	<div class="form-group row">
																		<label for="home_address">Home Address</label>

																		<textarea name="home_address" rows="5" value="<?php echo $home_address; ?>" id="home_address" class="form-control" onkeydown="upperCaseF(this)" autocomplete="off" required disabled maxlength="255"><?php echo $home_address; ?></textarea>
																	</div>
																</div>


																<div class="col-md-12">
																	<div class="form-group row">
																		<label for="p_state">State</label>

																		<input type="text" id="p_state" class="form-control" name="p_state" value="<?php echo $p_state; ?>" autocomplete="off" disabled>
																	</div>
																</div>

															</div>
														</div>
														<div class="col-md-12">
															<div class="form-group">
																<label for="email" style="color: black;">Email Id</label>
																<input type="text" id="email" class="form-control" name="email" value="<?php echo $email; ?>" autocomplete="off" disabled>
															</div>
														</div>
													</div>
													<hr style="border-top: 1px solid #C0C0C0;">
													<br>

													<div class="row">
														<div class="col-md-5" style="padding-top: 30px;">
															<div class="form-group">
																<label>If brother/sister studying in this College (Roll No.) </label>
															</div>
														</div>
														<div class="col-md-1" style="padding-top: 30px;">
															<div class="form-group">
																<div class="c-inputs-stacked">
																	<div class="d-inline-block custom-control custom-radio">
																		<input type="radio" name="studying" <?php echo ($studying == 'Yes') ? 'checked' : '' ?> value="Yes" class="custom-control-input" onchange="my_function(this)" id="catering7" autocomplete="off" required disabled>
																		<label class="custom-control-label" for="catering7">Yes</label>
																	</div>
																	<div class="d-inline-block custom-control custom-radio">
																		<input type="radio" name="studying" <?php echo ($studying == 'No') ? 'checked' : '' ?> value="No" class="custom-control-input" onchange="my_function(this)" id="catering8" autocomplete="off" required disabled>
																		<label class="custom-control-label" for="catering8">No</label>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-3" id="SCollege">
															<div class="form-group">
																<label for="rollno1">If Yes, Brother/Sister's Roll No </label>
																<input class="form-control" type="text" maxlength="10" disabled value="<?php echo $rollno1; ?>" autocomplete="off" id="rollno1" name="rollno1" <?php if ($studying == 'No') { ?> disabled <?php } ?>>
															</div>
														</div>
														<div class="col-md-3" id="SCollege1">
															<div class="form-group">
																<label for="rollno2">If Yes, Brother/Sister's Roll No</label>
																<input class="form-control" type="text" maxlength="10" disabled value="<?php echo $rollno2; ?>" autocomplete="off" id="rollno2" name="rollno2" <?php if ($studying == 'No') { ?> disabled <?php } ?>>
															</div>
														</div>
													</div>


													<hr style="border-top: 1px solid #C0C0C0;">
													<br>

													<h4 style="color: #123c73;font-weight:bold;font-family: cursive;font-size:20px;">Contact Details</h4>

													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<label for="f_name">
																	Father's Name
																</label>
																<input type="text" name="f_name" value="<?php echo $f_name; ?>" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="f_name" autocomplete="off" required maxlength="100" disabled>

															</div>
														</div>

														<div class="col-md-4">
															<div class="form-group">
																<label for="f_age">
																	Father's Age

																</label>
																<input type="text" name="f_age" value="<?php echo $f_age; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="f_age" autocomplete="off" maxlength="2" required disabled>
															</div>
														</div>

														<div class="col-md-4">
															<div class="form-group">
																<label for="f_edu">
																	Father's Education

																</label>
																<input type="text" name="f_edu" value="<?php echo $f_edu; ?>" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="f_edu" autocomplete="off" maxlength="50" required disabled>

															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="f_occupation">
																	Father's Occupation

																</label>
																<input type="text" name="f_occupation" value="<?php echo $f_occupation; ?>" onkeydown="upperCaseF(this)" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="f_occupation" autocomplete="off" maxlength="50" required disabled>

															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="f_contact1">
																	Father's Contact No.1
																</label>
																<input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" name="f_contact1" value="<?php echo $f_contact1; ?>" class="form-control" id="f_contact1" autocomplete="off" required disabled>

															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="f_contact2">
																	Father's Contact No.2
																</label>
																<input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" name="f_contact2" value="<?php echo $f_contact2; ?>" class="form-control" id="f_contact2" autocomplete="off" disabled>

															</div>
														</div>

														<div class="col-md-4">
															<div class="form-group">
																<label for="m_name">
																	Mother's Name

																</label>
																<input type="text" name="m_name" value="<?php echo $m_name; ?>" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="m_name" autocomplete="off" maxlength="100" required disabled>

															</div>
														</div>

														<div class="col-md-4">
															<div class="form-group">
																<label for="m_age">
																	Mother's Age

																</label>
																<input type="text" name="m_age" value="<?php echo $m_age; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="m_age" autocomplete="off" maxlength="2" required disabled>

															</div>
														</div>

														<div class="col-md-4">
															<div class="form-group">
																<label for="m_edu">
																	Mother's Education

																</label>
																<input type="text" name="m_edu" value="<?php echo $m_edu; ?>" onkeydown="upperCaseF(this)" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="m_edu" autocomplete="off" maxlength="50" required disabled>

															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="m_occupation">
																	Mother's Occupation

																</label>
																<input type="text" name="m_occupation" value="<?php echo $m_occupation; ?>" onkeydown="upperCaseF(this)" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="m_occupation" autocomplete="off" maxlength="50" required disabled>

															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="m_contact1">
																	Mother's Contact No.1

																</label>
																<input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" name="m_contact1" value="<?php echo $m_contact1; ?>" class="form-control" id="m_contact1" autocomplete="off" required disabled>

															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="m_contact2">
																	Mother's Contact No.2

																</label>
																<input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" name="m_contact2" value="<?php echo $m_contact2; ?>" class="form-control" id="m_contact2" autocomplete="off" disabled>

															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="g_name">
																	Local Guardian's Name
																</label>
																<input type="text" name="g_name" value="<?php echo $g_name; ?>" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="g_name" autocomplete="off" maxlength="100" required disabled>

															</div>
														</div>

														<div class="col-md-4">
															<div class="form-group">
																<label for="g_age">
																	Guardian's Age
																</label>
																<input type="text" name="g_age" value="<?php echo $g_age; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="g_age" autocomplete="off" maxlength="2" required disabled>

															</div>
														</div>

														<div class="col-md-4">
															<div class="form-group">
																<label for="g_edu">
																	Guardian's Education

																</label>
																<input type="text" name="g_edu" value="<?php echo $g_edu; ?>" onkeydown="upperCaseF(this)" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="g_edu" autocomplete="off" maxlength="50" required disabled>

															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="g_occupation">
																	Guardian's Occupation

																</label>
																<input type="text" name="g_occupation" value="<?php echo $g_occupation; ?>" onkeydown="upperCaseF(this)" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="g_occupation" autocomplete="off" maxlength="50" required disabled>
															</div>
														</div>
														<div class="col-md-5">
															<div class="form-group">
																<label for="g_contact">
																	Guardian's Contact No

																</label>
																<input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" name="g_contact" value="<?php echo $g_contact; ?>" class="form-control" id="g_contact" autocomplete="off" required disabled>

															</div>
														</div>
														<div class="col-md-4" style="padding-top: 30px;">
															<div class="form-group">
																<label>Whether belonging to Urban / Rural?</label>
															</div>
														</div>
														<div class="col-md-2" style="padding-top: 30px;">
															<div class="form-group">
																<div class="c-inputs-stacked">
																	<div class="d-inline-block custom-control custom-radio">
																		<input type="radio" name="urban" value="urban" <?php echo ($urban == 'urban') ? 'checked' : '' ?> class="custom-control-input" onchange="Areafunction(this)" id="cateringUrban" autocomplete="off" required disabled>
																		<label class="custom-control-label" for="cateringUrban">Urban</label>
																	</div>
																	<div class="d-inline-block custom-control custom-radio">
																		<input type="radio" name="urban" value="Rural" class="custom-control-input" <?php echo ($urban == 'urban') ? 'checked' : '' ?> onchange="Areafunction(this)" id="cateringRural" autocomplete="off" required disabled>
																		<label class="custom-control-label" for="cateringRural">Rural</label>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-md-3" style="" id="Ruralarea">
															<div class="form-group">
																<label for="area">Area</label>
																<input class="form-control" type="text" value="<?php echo $area; ?>" autocomplete="off" onkeydown="upperCaseF(this)" placeholder="Mention Place" id="area" name="area" maxlength="50" disabled>
															</div>
														</div>


													</div>

													<hr style="border-top: 1px solid #C0C0C0;">
													<br>

													<div class="row">
														<div class="col-md-12">
															<h4 style="color: #123c73;font-weight:bold;font-family: cursive;font-size:20px;">Detail of Examination Passed</h4><br>
															<table>
																<tr>
																	<th>Class</th>
																	<th colspan="9">Subjects with marks</th>
																</tr>
																<tr>
																	<th rowspan="2">XII</th>
																	<td><input class="form-control" Placeholder="Subject 1" type="text" value="<?php echo $twl_subject1; ?>" name="twl_subject1" onkeydown="upperCaseF(this)" id="twl_subject1" autocomplete="off" maxlength="50" required disabled></td>
																	</td>
																	<td><input class="form-control" Placeholder="Subject 2" type="text" value="<?php echo $twl_subject2; ?>" name="twl_subject2" onkeydown="upperCaseF(this)" id="twl_subject2" autocomplete="off" maxlength="50" required disabled></td>

																	<td><input class="form-control" type="text" value="<?php echo $twl_subject3; ?>" name="twl_subject3" placeholder="Subject 3" onkeydown="upperCaseF(this)" id="twl_subject3" autocomplete="off" maxlength="50" required disabled></td>

																	<td><input class="form-control" type="text" value="<?php echo $twl_subject4; ?>" name="twl_subject4" placeholder="Subject 4" onkeydown="upperCaseF(this)" id="twl_subject4" autocomplete="off" maxlength="50" required disabled></td>

																	<td><input class="form-control" type="text" value="<?php echo $twl_subject5; ?>" name="twl_subject5" placeholder="Subject 5" onkeydown="upperCaseF(this)" id="twl_subject5" autocomplete="off" maxlength="50" required disabled></td>

																	<td><input class="form-control" type="text" value="<?php echo $twl_subject6; ?>" name="twl_subject6" placeholder="Subject 6" onkeydown="upperCaseF(this)" id="twl_subject6" autocomplete="off" maxlength="50" required disabled></td>

																	<td><input class="form-control" type="text" value="<?php echo $twl_subject7; ?>" name="twl_subject7" placeholder="Subject 7" onkeydown="upperCaseF(this)" id="twl_subject7" autocomplete="off" maxlength="50" required disabled></td>

																	<td><input class="form-control" type="text" value="<?php echo $twl_subject8; ?>" name="twl_subject8" placeholder="Subject 8" onkeydown="upperCaseF(this)" id="twl_subject8" autocomplete="off" maxlength="50" required disabled></td>

																	<td>Total Mark</td>
																</tr>
																<tr>
																	<td><input class="form-control" placeholder="Mark 1" type="text" value="<?php echo $twl_mark1; ?>" name="twl_mark1" onkeydown="upperCaseF(this)" id="twl_mark1" autocomplete="off" minlength="2" maxlength="3" required disabled></td>

																	<td><input class="form-control" Placeholder="Mark 2" type="text" value="<?php echo $twl_mark2; ?>" name="twl_mark2" id="twl_mark3" autocomplete="off" minlength="2" maxlength="3" required disabled></td>

																	<td><input class="form-control" Placeholder="Mark 3" type="text" value="<?php echo $twl_mark3; ?>" name="twl_mark3" id="twl_mark3" autocomplete="off" minlength="2" maxlength="3" required disabled></td>

																	<td><input class="form-control" Placeholder="Mark 4" type="text" value="<?php echo $twl_mark4; ?>" name="twl_mark4" id="twl_mark4" autocomplete="off" minlength="2" maxlength="3" required disabled></td>

																	<td><input class="form-control" Placeholder="Mark 5" type="text" value="<?php echo $twl_mark5; ?>" name="twl_mark5" id="twl_mark5" autocomplete="off" minlength="2" maxlength="3" required disabled></td>

																	<td><input class="form-control" Placeholder="Mark 6" type="text" value="<?php echo $twl_mark6; ?>" name="twl_mark6" id="twl_mark6" autocomplete="off" minlength="2" maxlength="3" required disabled></td>

																	<td><input class="form-control" Placeholder="Mark 7" type="text" value="<?php echo $twl_mark7; ?>" id="twl_mark7" autocomplete="off" minlength="2" maxlength="3" required disabled></td>

																	<td><input class="form-control" Placeholder="Mark 8" type="text" value="<?php echo $twl_mark8; ?>" name="twl_mark8" onkeydown="upperCaseF(this)" id="twl_mark8" autocomplete="off" minlength="2" maxlength="3" required disabled></td>


																	<td><input class="form-control" type="text" value="<?php echo $twl_total; ?>" name="twl_total" placeholder="Total" id="twl_total" autocomplete="off" minlength="2" maxlength="3" required disabled></td>
																</tr>
															</table>

															<br>
															<table>
																<tr>
																	<th>Roll No</th>
																	<th>Year</th>
																	<th>% of Marks</th>
																	<th>Div</th>
																	<th>Rank</th>
																	<th>Name of Board/Univ</th>
																	<th>Reg/ Pvt.</th>
																</tr>
																<tr>
																	<td><input class="form-control" type="text" value="<?php echo $roll_no; ?>" name="roll_no" onkeydown="upperCaseF(this)" id="roll_no" autocomplete="off" maxlength="10" required disabled></td>

																	<td>
																		<input class="form-control" type="text" value="<?php echo $comp_year; ?>" name="comp_year" id="comp_year" oninput="this.value = this.value.replace(/\D/g, '').slice(0, 4);" maxlength="4" required disabled>
																	</td>


																	<td><input class="form-control" type=" text" value="<?php echo $mark_percentage; ?>" name="mark_percentage" id="mark_percentage" autocomplete="off" maxlength="5" required disabled></td>

																	<td><input class="form-control" type="text" value="<?php echo $division; ?>" name="division" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" onkeydown="upperCaseF(this)" id="division" autocomplete="off" maxlength="5" required disabled></td>

																	<td><input class="form-control" type="text" value="<?php echo $rank; ?>" name="rank" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" onkeydown="upperCaseF(this)" id="rank" autocomplete="off" maxlength="3" required disabled></td>

																	<td><input class="form-control" type="text" value="<?php echo $board_univ; ?>" name="board_univ" id="board_univ" onkeydown="upperCaseF(this)" autocomplete="off" maxlength="100" required disabled></td>

																	<td><input class="form-control" type="text" value="<?php echo $reg_pvt; ?>" name="reg_pvt" onkeydown="upperCaseF(this)" id="reg_pvt" autocomplete="off" maxlength="50" required disabled></td>
																</tr>
															</table>
															<br>
															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="cuet_mark">
																			Marks scored in CUET
																		</label>
																		<input type="text" name="cuet_mark" value="<?php echo $cuet_mark; ?>" class="form-control" id="cuet_mark" autocomplete="off" maxlength="3" required disabled>

																	</div>
																</div>

																<div class="col-md-4">
																	<div class="form-group">
																		<label for="percentage">
																			Percentage
																		</label>
																		<input type="text" name="percentage" value="<?php echo $percentage; ?>" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="percentage" autocomplete="off" maxlength="3" required disabled>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<hr style="border-top: 1px solid #C0C0C0;">
													<br>


													<div class="row">
														<div class="col-md-4">
															<div class="form-group row">
																<label for="ins_address">Name of the Institution last attended</label>

																<textarea name="ins_address" rows="5" id="ins_address" class="form-control" onkeydown="upperCaseF(this)" value="<?php echo $ins_address; ?>" autocomplete="off" maxlength="255" required disabled><?php echo $ins_address; ?></textarea>
															</div>
														</div>



														<div class="col-md-2" style="padding-top: 30px;     padding-left: 80px;">
															<div class="form-group">
																<label for="per_study">
																	Period of Study:
																</label>
															</div>
														</div><br>

														<div class="col-md-1" style="padding-top: 30px;     padding-left: 46px;">
															<div class="form-group">
																<label for="per_year">
																	Year
																</label>
															</div>
														</div>
														<div class="col-md-2" style="padding-top: 30px; padding-left: 0px;">
															<input type="text" name="per_year" value="<?php echo $per_year; ?>" class="form-control" id="per_year" autocomplete="off" maxlength="4" required disabled>
														</div>

														<div class="col-md-1" style="padding-top: 30px;     padding-left: 50px;">
															<div class="form-group">
																<label for="per_to">
																	To
																</label>
															</div>
														</div>
														<div class="col-md-2" style="padding-top: 30px; padding-left: 0px;">
															<input type="text" name="per_to" value="<?php echo $per_to; ?>" class="form-control" id="per_to" autocomplete="off" maxlength="4" required disabled>
														</div>
													</div>

													<hr style="border-top: 1px solid #C0C0C0;">
													<br>



													<h4 style="color: #123c73;font-weight:bold;font-family: cursive;font-size:20px;">MAJOR AND MINOR COURSES (For First Semester Choose any ONE)</h4><br>

													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label for="major">
																	MAJOR SUBJECTS
																</label>

																<input type="text" id="major" class="form-control" name="major_subject" value="<?php echo $major_subject; ?>" autocomplete="off" disabled>
															</div>
														</div>

														<div class="col-md-6">
															<div class="form-group">
																<label for="major">
																	ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR
																</label>

																<input type="text" id="minor_subject" class="form-control" name="minor_subject" value="<?php echo $minor_subject; ?>" autocomplete="off" disabled>
															</div>
														</div>
													</div>


												</div>

												<br>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="major">
																MDC (MULTIDISCIPLINARY COURSE) Choices For First Semester (Choose any ONE)
															</label>

															<input type="text" id="mdc_choice" class="form-control" name="mdc_choice" value="<?php echo $mdc_choice; ?>" autocomplete="off" disabled>
														</div>
													</div>

												</div>
												<br>

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="major">
																AEC (Ability Enhancement Course) Choices For First Semester (Choose any ONE)
															</label>

															<input type="text" id="aec_choice" class="form-control" name="aec_choice" value="<?php echo $aec_choice; ?>" autocomplete="off" disabled>
														</div>
													</div>
												</div>

												<br>

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="major">
																SEC (Skill Enhancement course) Choices For First Semester (Choose any ONE)
															</label>

															<input type="text" id="sec_choice" class="form-control" name="sec_choice" value="<?php echo $sec_choice; ?>" autocomplete="off" disabled>
														</div>
													</div>
												</div>
												<br>

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="major">
																VAC (Value Added Course)
															</label>

															<input type="text" id="sec_choice" class="form-control" name="sec_choice" value="VAC 140 - ENVIRONMENT STUDIES (Compulsory)" autocomplete="off" disabled>
														</div>
													</div>
												</div>



												<hr style="border-top: 1px solid #C0C0C0;">
												<br>

												<h4 style="color: #123c73;font-weight:bold;font-family: cursive;font-size:20px;">MDC- AEC- SEC- VAC COURSES FOR SECOND SEMESTER</h4><br>


												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="major">
																MDC (MULTIDISCIPLINARY COURSE) Choices For Second Semester (Choose any ONE)
															</label>

															<input type="text" id="mdc_secondsem" class="form-control" name="mdc_secondsem" value="<?php echo $mdc_secondsem; ?>" autocomplete="off" disabled>
														</div>
													</div>
												</div>



												<br>


												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="major">
																AEC (Ability Enhancement Course) Choices For Second Semester (Choose any ONE)
															</label>

															<input type="text" id="aec_secondsem" class="form-control" name="aec_secondsem" value="<?php echo $aec_secondsem; ?>" autocomplete="off" disabled>
														</div>
													</div>
												</div>



												<br>

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="major">
																SEC (Skill Enhancement course) Choices For Second Semester (Choose any ONE)
															</label>

															<input type="text" id="sec_secondsem" class="form-control" name="sec_secondsem" value="<?php echo $sec_secondsem; ?>" autocomplete="off" disabled>
														</div>
													</div>
												</div>




												<br>

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label for="major">
																VAC (Value Added Course Choices For Second Semester )(Choose any ONE)
															</label>

															<input type="text" id="vac_secondsem" class="form-control" name="vac_secondsem" value="<?php echo $vac_secondsem; ?>" autocomplete="off" disabled>
														</div>
													</div>
												</div>

										</div>
									</div>
									<div class="form-actions btn-bottom">
										<br><br>
										<div class="text-center">
											<button onclick="ValidateNo();" type="submit" name="submit" class="btn btn-primary btn-save">
												<a class="my-1" href="http://localhost/1BProject/turaRegisterAdmission2024/login-process.php" target="_blank">Back</a>

											</button>

										</div>
									</div>
								</div>

								</form>
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

	<?php include_once('footer.php'); ?>



</body>
<!-- END: Body-->

</html>
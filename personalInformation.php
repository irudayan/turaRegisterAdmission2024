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
									if ($_SERVER['REQUEST_METHOD'] === 'POST') {

										$reg_no = isset($_GET['id']) ? base64_decode($_GET['id']) : '';


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
										$mobile = $_POST['mobile'];
										$app_name = $_POST['app_name'];
										$reg_no = $_POST['reg_no'];
										$t_status = $_POST['t_status'];

										$sql = "Select * from admission_2024 where unique_id='" . $unique_id . "' AND mobile='" . $mobile . "' AND t_status=1";

										$result = mysqli_query($conn, $sql);

										$row = mysqli_fetch_row($result);

										if ($row == 0 || $row == 'NULL') {
											echo '<script type="text/javascript">
									   window.location = "Login.php?msg=incorrect"
								</script>';
											echo "test";
										} else {
											$reg_no = $row[1];
											$app_name = $row[4];
											$dob = $row[5];
											$shift = $row[6];
											$gender = $row[7];
											$email = $row[8];
											$mobile = $row[9];
											$cuet_mark = $row[11];
											$unique_id = $row[13];
											$t_status = $row[20];
											$m_status = $row[21];
											$blood_group = $row[22];
											$category = $row[23];
											$race_tribe = $row[24];
											$religion = $row[25];
											$disability = $row[26];
											$weakeryes = $row[27];
											$weakcert = $row[28];
											$tura_address = $row[29];
											$tura_pincode = $row[30];
											$tura_contact = $row[31];
											$adhar_number = $row[32];
											$home_address = $row[33];
											$p_pincode = $row[34];
											$p_state = $row[35];
											$p_contact = $row[36];
											$studying = $row[37];
											$rollno1 = $row[38];
											$rollno2 = $row[39];
											$f_name = $row[40];
											$f_age = $row[41];
											$f_edu = $row[42];
											$f_occupation = $row[43];
											$f_contact1 = $row[44];
											$f_contact2 = $row[45];
											$m_name = $row[46];
											$m_age = $row[47];
											$m_edu = $row[48];
											$m_occupation = $row[49];
											$m_contact1 = $row[50];
											$m_contact2 = $row[51];
											$g_name = $row[52];
											$g_age = $row[53];
											$g_edu = $row[54];
											$g_occupation = $row[55];
											$g_contact = $row[56];

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
																			Name of the Candidate as in Cl. X Admit Card<span class="danger">*</span>
																		</label>
																		<input type="text" name="app_name" Placeholder="Applicant Name" value="<?php echo $app_name; ?>" class="form-control" id="Name" autocomplete="off" Disabled>

																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="dob">Date of Birth<span class="danger">*</span></label>
																		<input type="date" name="dob" class="form-control" id="dob" value="<?php echo $dob; ?>" autocomplete="off" disabled>

																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="gender" style="color: black;">Gender<span class="danger">*</span></label>
																		<input type="text" id="gender" class="form-control" placeholder=" " name="gender" value="<?php echo $gender; ?>" autocomplete="off" disabled>
																	</div>
																</div>
																<div class="col-md-4" id="shift">
																	<div class="form-group">
																		<label for="shift">
																			Shift
																			<span class="danger">*</span>
																		</label>
																		<input type="text" id="email" class="form-control" name="email" value="<?php echo $shift; ?>" autocomplete="off" disabled>

																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="m_status">
																			Marital Status
																			<span class="danger">*</span>
																		</label>
																		<select class="custom-select form-control" id="m_status" name="m_status" autocomplete="off" required>
																			<option value="">-Please Select-</option>
																			<option <?php if (isset($m_status) && $m_status == 'Single') echo "selected"; ?> value="Single">Single</option>
																			<option <?php if (isset($m_status) && $m_status == 'Married') echo "selected"; ?> value="Married">Married</option>

																		</select>
																	</div>

																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="blood_group">
																			Blood Group
																			<span class="danger">*</span>
																		</label>
																		<select class="custom-select form-control" id="blood_group" name="blood_group" autocomplete="off" required>
																			<option value="">-Please Select-</option>
																			<option <?php if (isset($blood_group) && $blood_group == 'A+') echo "selected"; ?> value="A+">A+</option>
																			<option <?php if (isset($blood_group) && $blood_group == 'A-') echo "selected"; ?> value="A-">A-</option>
																			<option <?php if (isset($blood_group) && $blood_group == 'B+') echo "selected"; ?> value="B+">B+</option>
																			<option <?php if (isset($blood_group) && $blood_group == 'B-') echo "selected"; ?> value="B-">B-</option>
																			<option <?php if (isset($blood_group) && $blood_group == 'AB+') echo "selected"; ?> value="AB+">AB+</option>
																			<option <?php if (isset($blood_group) && $blood_group == 'AB-') echo "selected"; ?> value="AB-">AB-</option>
																			<option <?php if (isset($blood_group) && $blood_group == 'O+') echo "selected"; ?> value="O+">O+</option>
																			<option <?php if (isset($blood_group) && $blood_group == 'O-') echo "selected"; ?> value="O-">O-</option>

																		</select>

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
																			<span class="danger">*</span>
																		</label>
																		<select id="category" name="category" title="Please Select Category" class="custom-select form-control" autocomplete="off" required>
																			<option value="">-Please Select-</option>
																			<option <?php if (isset($category) && $category == 'General') echo "selected"; ?> value="General">General</option>
																			<option <?php if (isset($category) && $category == 'SC') echo "selected"; ?> value="SC">SC</option>
																			<option <?php if (isset($category) && $category == 'ST') echo "selected"; ?> value="ST">ST</option>
																			<option <?php if (isset($category) && $category == 'OBC') echo "selected"; ?> value="OBC">OBC</option>
																		</select>

																	</div>
																</div>

																<div class="col-md-2">
																	<div class="form-group">
																		<label for="RT">
																			Race / Tribe
																			<span class="danger">*</span>
																		</label>
																		<input type="text" Placeholder="-Please Enter-" onkeydown="upperCaseF(this)" name="race_tribe" value="<?php echo $race_tribe; ?>" class="form-control" id="race_tribe" autocomplete="off" required maxlength="100">
																	</div>
																</div>


																<div class="col-md-2">
																	<div class="form-group">
																		<label for="religion">
																			Religion
																			<span class="danger">*</span>
																		</label>
																		<select class="custom-select form-control" id="religion" name="religion" onchange="FuncReligionSelect(this.value)" autocomplete="off" required>
																			<option value="">-Please Select-</option>
																			<option <?php if (isset($religion) && $religion == 'CHRISTIAN') echo "selected"; ?> value="CHRISTIAN">CHRISTIAN</option>
																			<option <?php if (isset($religion) && $religion == 'HINDU') echo "selected"; ?> value="HINDU">HINDU</option>
																			<option <?php if (isset($religion) && $religion == 'ISLAM') echo "selected"; ?> value="ISLAM">ISLAM</option>
																			<option <?php if (isset($religion) && $religion == 'OTHER') echo "selected"; ?> value="OTHER">OTHER</option>
																		</select>


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
																				<input type="radio" name="disability" <?php echo ($disability == 'Yes') ? 'checked' : '' ?> value="Yes" class="custom-control-input" onchange="disablefunction(this)" id="catering9" autocomplete="off" required>
																				<label class="custom-control-label" for="catering9">Yes</label>
																			</div>
																			<div class="d-inline-block custom-control custom-radio">
																				<input type="radio" name="disability" <?php echo ($disability == 'No') ? 'checked' : '' ?> value="No" class="custom-control-input" onchange="disablefunction(this)" id="catering10" autocomplete="off" required>
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
																				<input type="radio" name="weakeryes" <?php echo ($weakeryes == 'Yes') ? 'checked' : '' ?> value="Yes" class="custom-control-input" onchange="weakerfunction(this)" id="cateringweakeryes" autocomplete="off" required>
																				<label class="custom-control-label" for="cateringweakeryes">Yes</label>
																			</div>
																			<div class="d-inline-block custom-control custom-radio">
																				<input type="radio" name="weakeryes" <?php echo ($weakeryes == 'No') ? 'checked' : '' ?> value="No" class="custom-control-input" onchange="weakerfunction(this)" id="cateringweakerno" autocomplete="off" required>
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
																		<span class="danger">*</span>
																		<input class="form-control" type="text" value="<?php echo $weakcert; ?>" autocomplete="off" onkeydown="upperCaseF(this)" placeholder="-Please Enter-" id="weakcert" name="weakcert" disabled maxlength="100">
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
																				<span class="danger">*</span>
																				<textarea name="tura_address" rows="5" Placeholder="-Please Enter-" rows="3" id="tura_address" class="form-control" onkeydown="upperCaseF(this)" value="<?php echo $tura_address; ?>" autocomplete="off" required maxlength="255"><?php echo $tura_address; ?></textarea>
																			</div>
																		</div>



																		<div class="col-md-12">
																			<div class="form-group row">
																				<label for="adhar_number">
																					Aadhar Number
																				</label>
																				<input type="text" Placeholder="-Please Enter-" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="\d{12}" minlength="12" maxlength="12" name="adhar_number" value="<?php echo $adhar_number; ?>" class="form-control" id="adhar_number" autocomplete="off">
																			</div>
																		</div>
																	</div>
																</div>

																<div class="col-md-6">
																	<div class="row" style="padding-left: 16px;padding-right: 10px;">
																		<div class="col-md-12">
																			<div class="form-group row">
																				<label for="home_address">Home Address</label>
																				<span class="danger">*</span>
																				<textarea name="home_address" rows="5" Placeholder="-Please Enter-" value="<?php echo $home_address; ?>" id="home_address" class="form-control" onkeydown="upperCaseF(this)" autocomplete="off" required maxlength="255"><?php echo $home_address; ?></textarea>
																			</div>
																		</div>



																		<div class="col-md-12">
																			<div class="form-group row">
																				<label for="p_state">State</label>
																				<span class="danger">*</span>
																				<select class="custom-select form-control" id="p_state" name="p_state" autocomplete="off" required>
																					<option value="">-Please Select-</option>
																					<option value="Andhra Pradesh">Andhra Pradesh</option>
																					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
																					<option value="Assam">Assam</option>
																					<option value="Bihar">Bihar</option>
																					<option value="Chhattisgarh">Chhattisgarh</option>
																					<option value="Goa">Goa</option>
																					<option value="Gujarat">Gujarat</option>
																					<option value="Haryana">Haryana</option>
																					<option value="Himachal Pradesh">Himachal Pradesh</option>
																					<option value="Jharkhand">Jharkhand</option>
																					<option value="Karnataka">Karnataka</option>
																					<option value="Kerala">Kerala</option>
																					<option value="Madhya Pradesh">Madhya Pradesh</option>
																					<option value="Maharashtra">Maharashtra</option>
																					<option value="Manipur">Manipur</option>
																					<option value="Meghalaya">Meghalaya</option>
																					<option value="Mizoram">Mizoram</option>
																					<option value="Nagaland">Nagaland</option>
																					<option value="Odisha">Odisha</option>
																					<option value="Punjab">Punjab</option>
																					<option value="Rajasthan">Rajasthan</option>
																					<option value="Sikkim">Sikkim</option>
																					<option value="Tamil Nadu">Tamil Nadu</option>
																					<option value="Telangana">Telangana</option>
																					<option value="Tripura">Tripura</option>
																					<option value="Uttar Pradesh">Uttar Pradesh</option>
																					<option value="Uttarakhand">Uttarakhand</option>
																					<option value="West Bengal">West Bengal</option>
																					<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
																					<option value="Chandigarh">Chandigarh</option>
																					<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
																					<option value="Daman and Diu">Daman and Diu</option>
																					<option value="Lakshadweep">Lakshadweep</option>
																					<option value="Delhi">Delhi</option>
																					<option value="Puducherry">Puducherry</option>
																				</select>


																			</div>
																		</div>

																		<div class="col-md-12">
																			<div class="form-group row">
																				<label for="p_contact">
																					Contact No
																					<span class="danger">*</span>
																				</label>
																				<input type="text" id="p_contact" name="p_contact" value="<?php echo $p_contact; ?>" title="Please Enter contact No" pattern="[1-9]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" Placeholder="-Please Enter-" onkeypress="return isNumber(event)" minlength="10" maxlength="10" class="form-control" autocomplete="off">

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
																				<input type="radio" name="studying" <?php echo ($studying == 'Yes') ? 'checked' : '' ?> value="Yes" class="custom-control-input" onchange="my_function(this)" id="catering7" autocomplete="off" required>
																				<label class="custom-control-label" for="catering7">Yes</label>
																			</div>
																			<div class="d-inline-block custom-control custom-radio">
																				<input type="radio" name="studying" <?php echo ($studying == 'No') ? 'checked' : '' ?> value="No" class="custom-control-input" onchange="my_function(this)" id="catering8" autocomplete="off" required>
																				<label class="custom-control-label" for="catering8">No</label>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-md-3" id="SCollege">
																	<div class="form-group">
																		<label for="rollno1">If Yes, Brother/Sister's Roll No </label>
																		<input class="form-control" type="text" Placeholder="-Please Enter-" maxlength="10" value="<?php echo $rollno1; ?>" autocomplete="off" id="rollno1" name="rollno1" <?php if ($studying == 'No') { ?> disabled <?php } ?>>
																	</div>
																</div>
																<div class="col-md-3" id="SCollege1">
																	<div class="form-group">
																		<label for="rollno2">If Yes, Brother/Sister's Roll No</label>
																		<input class="form-control" type="text" Placeholder="-Please Enter-" maxlength="10" value="<?php echo $rollno2; ?>" autocomplete="off" id="rollno2" name="rollno2" <?php if ($studying == 'No') { ?> disabled <?php } ?>>
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
																			<span class="danger">*</span>
																		</label>
																		<input type="text" name="f_name" Placeholder="-Please Enter-" value="<?php echo $f_name; ?>" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="f_name" autocomplete="off" required maxlength="100">

																	</div>
																</div>

																<div class="col-md-4">
																	<div class="form-group">
																		<label for="f_age">
																			Father's Age
																			<span class="danger">*</span>
																		</label>
																		<input type="text" name="f_age" Placeholder="-Please Enter-" value="<?php echo $f_age; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="f_age" autocomplete="off" maxlength="2" required>
																	</div>
																</div>

																<div class="col-md-4">
																	<div class="form-group">
																		<label for="f_edu">
																			Father's Education
																			<span class="danger">*</span>
																		</label>
																		<input type="text" name="f_edu" Placeholder="-Please Enter-" value="<?php echo $f_edu; ?>" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="f_edu" autocomplete="off" maxlength="50" required>

																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="f_occupation">
																			Father's Occupation
																			<span class="danger">*</span>
																		</label>
																		<input type="text" name="f_occupation" Placeholder="-Please Enter-" value="<?php echo $f_occupation; ?>" onkeydown="upperCaseF(this)" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="f_occupation" autocomplete="off" maxlength="50" required>

																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="f_contact1">
																			Father's Contact No.1
																			<span class="danger">*</span>
																		</label>
																		<input type="text" Placeholder="-Please Enter-" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" name="f_contact1" value="<?php echo $f_contact1; ?>" class="form-control" id="f_contact1" autocomplete="off" required>

																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="f_contact2">
																			Father's Contact No.2
																		</label>
																		<input type="text" Placeholder="-Please Enter-" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" name="f_contact2" value="<?php echo $f_contact2; ?>" class="form-control" id="f_contact2" autocomplete="off">

																	</div>
																</div>

																<div class="col-md-4">
																	<div class="form-group">
																		<label for="m_name">
																			Mother's Name
																			<span class="danger">*</span>
																		</label>
																		<input type="text" name="m_name" Placeholder="-Please Enter-" value="<?php echo $m_name; ?>" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="m_name" autocomplete="off" maxlength="100" required>

																	</div>
																</div>

																<div class="col-md-4">
																	<div class="form-group">
																		<label for="m_age">
																			Mother's Age
																			<span class="danger">*</span>
																		</label>
																		<input type="text" name="m_age" Placeholder="-Please Enter-" value="<?php echo $m_age; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="m_age" autocomplete="off" maxlength="2" required>

																	</div>
																</div>

																<div class="col-md-4">
																	<div class="form-group">
																		<label for="m_edu">
																			Mother's Education
																			<span class="danger">*</span>
																		</label>
																		<input type="text" name="m_edu" Placeholder="-Please Enter-" value="<?php echo $m_edu; ?>" onkeydown="upperCaseF(this)" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="m_edu" autocomplete="off" maxlength="50" required>

																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="m_occupation">
																			Mother's Occupation
																			<span class="danger">*</span>
																		</label>
																		<input type="text" name="m_occupation" Placeholder="-Please Enter-" value="<?php echo $m_occupation; ?>" onkeydown="upperCaseF(this)" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="m_occupation" autocomplete="off" maxlength="50" required>

																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="m_contact1">
																			Mother's Contact No.1
																			<span class="danger">*</span>
																		</label>
																		<input type="text" Placeholder="-Please Enter-" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" name="m_contact1" value="<?php echo $m_contact1; ?>" class="form-control" id="m_contact1" autocomplete="off" required>

																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="m_contact2">
																			Mother's Contact No.2

																		</label>
																		<input type="text" Placeholder="-Please Enter-" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" name="m_contact2" value="<?php echo $m_contact2; ?>" class="form-control" id="m_contact2" autocomplete="off">

																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="g_name">
																			Local Guardian's Name
																		</label>
																		<input type="text" Placeholder="-Please Enter-" name="g_name" value="<?php echo $g_name; ?>" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="g_name" autocomplete="off" maxlength="100" required>

																	</div>
																</div>

																<div class="col-md-4">
																	<div class="form-group">
																		<label for="g_age">
																			Guardian's Age
																			<span class="danger">*</span>
																		</label>
																		<input type="text" name="g_age" Placeholder="-Please Enter-" value="<?php echo $g_age; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="g_age" autocomplete="off" maxlength="2" required>

																	</div>
																</div>

																<div class="col-md-4">
																	<div class="form-group">
																		<label for="g_edu">
																			Guardian's Education
																			<span class="danger">*</span>
																		</label>
																		<input type="text" name="g_edu" Placeholder="-Please Enter-" value="<?php echo $g_edu; ?>" onkeydown="upperCaseF(this)" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="g_edu" autocomplete="off" maxlength="50" required>

																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="g_occupation">
																			Guardian's Occupation
																			<span class="danger">*</span>
																		</label>
																		<input type="text" name="g_occupation" Placeholder="-Please Enter-" value="<?php echo $g_occupation; ?>" onkeydown="upperCaseF(this)" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="g_occupation" autocomplete="off" maxlength="50" required>

																	</div>
																</div>
																<div class="col-md-5">
																	<div class="form-group">
																		<label for="g_contact">
																			Guardian's Contact No
																			<span class="danger">*</span>
																		</label>
																		<input type="text" Placeholder="-Please Enter-" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" name="g_contact" value="<?php echo $g_contact; ?>" class="form-control" id="g_contact" autocomplete="off" required>

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
																				<input type="radio" name="urban" value="urban" class="custom-control-input" onchange="Areafunction(this)" id="cateringUrban" autocomplete="off" required>
																				<label class="custom-control-label" for="cateringUrban">Urban</label>
																			</div>
																			<div class="d-inline-block custom-control custom-radio">
																				<input type="radio" name="urban" value="Rural" class="custom-control-input" onchange="Areafunction(this)" id="cateringRural" autocomplete="off" required>
																				<label class="custom-control-label" for="cateringRural">Rural</label>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="col-md-3" style="" id="Ruralarea">
																	<div class="form-group">
																		<label for="area">Area</label>
																		<span class="danger">*</span>
																		<input class="form-control" type="text" Placeholder="-Please Enter-" value="<?php echo isset($_POST['area']) ? $_POST['area'] : ''; ?>" autocomplete="off" onkeydown="upperCaseF(this)" placeholder="Mention Place" id="area" name="area" maxlength="50" disabled>
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
																			<th colspan="9">Subjects with marks<span class="danger">*</span></th>
																		</tr>
																		<tr>
																			<th rowspan="2">XII</th>
																			<td><input class="form-control" Placeholder="Subject 1" type="text" value="" name="twl_subject1" onkeydown="upperCaseF(this)" id="twl_subject1" autocomplete="off" maxlength="50" required></td>
																			</td>
																			<td><input class="form-control" Placeholder="Subject 2" type="text" value="" name="twl_subject2" onkeydown="upperCaseF(this)" id="twl_subject2" autocomplete="off" maxlength="50" required></td>

																			<td><input class="form-control" type="text" value="" name="twl_subject3" placeholder="Subject 3" onkeydown="upperCaseF(this)" id="twl_subject3" autocomplete="off" maxlength="50" required></td>

																			<td><input class="form-control" type="text" value="" name="twl_subject4" placeholder="Subject 4" onkeydown="upperCaseF(this)" id="twl_subject4" autocomplete="off" maxlength="50" required></td>

																			<td><input class="form-control" type="text" value="" name="twl_subject5" placeholder="Subject 5" onkeydown="upperCaseF(this)" id="twl_subject5" autocomplete="off" maxlength="50" required></td>

																			<td><input class="form-control" type="text" value="" name="twl_subject6" placeholder="Subject 6" onkeydown="upperCaseF(this)" id="twl_subject6" autocomplete="off" maxlength="50" required></td>

																			<td><input class="form-control" type="text" value="" name="twl_subject7" placeholder="Subject 7" onkeydown="upperCaseF(this)" id="twl_subject7" autocomplete="off" maxlength="50" required></td>

																			<td><input class="form-control" type="text" value="" name="twl_subject8" placeholder="Subject 8" onkeydown="upperCaseF(this)" id="twl_subject8" autocomplete="off" maxlength="50" required></td>

																			<td>Total Mark</td>
																		</tr>
																		<tr>
																			<td><input class="form-control" placeholder="Mark 1" type="text" value="" name="twl_mark1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateTotal();" id="twl_mark1" autocomplete="off" minlength="2" maxlength="3" required></td>
																			<td><input class="form-control" Placeholder="Mark 2" type="text" value="" name="twl_mark2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateTotal();" onkeydown="upperCaseF(this)" id="twl_mark2" autocomplete="off" minlength="2" maxlength="3" required></td>

																			<td><input class="form-control" Placeholder="Mark 3" type="text" value="" name="twl_mark3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateTotal();" onkeydown="upperCaseF(this)" id="twl_mark3" autocomplete="off" minlength="2" maxlength="3" required></td>

																			<td><input class="form-control" Placeholder="Mark 4" type="text" value="" name="twl_mark4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateTotal();" onkeydown="upperCaseF(this)" id="twl_mark4" autocomplete="off" minlength="2" maxlength="3" required></td>

																			<td><input class="form-control" Placeholder="Mark 5" type="text" value="" name="twl_mark5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateTotal();" onkeydown="upperCaseF(this)" id="twl_mark5" autocomplete="off" minlength="2" maxlength="3" required></td>

																			<td><input class="form-control" Placeholder="Mark 6" type="text" value="" name="twl_mark6" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateTotal();" onkeydown="upperCaseF(this)" id="twl_mark6" autocomplete="off" minlength="2" maxlength="3" required></td>

																			<td><input class="form-control" Placeholder="Mark 7" type="text" value="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateTotal();" name="twl_mark7" onkeydown="upperCaseF(this)" id="twl_mark7" autocomplete="off" minlength="2" maxlength="3" required></td>

																			<td><input class="form-control" Placeholder="Mark 8" type="text" value="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1'); calculateTotal();" name="twl_mark8" onkeydown="upperCaseF(this)" id="twl_mark8" autocomplete="off" minlength="2" maxlength="3" required></td>

																			<td><input class="form-control" type="text" value="" name="twl_total" placeholder="Total" id="twl_total" autocomplete="off" minlength="2" maxlength="3" required readonly></td>
																		</tr>
																	</table>

																	<br>
																	<table>
																		<tr>
																			<th>Roll No<span class="danger">*</span></th>
																			<th>Year<span class="danger">*</span></th>
																			<th>% of Marks<span class="danger">*</span></th>
																			<th>Div<span class="danger">*</span></th>
																			<th>Rank<span class="danger">*</span></th>
																			<th>Name of Board/Univ<span class="danger">*</span></th>
																			<th>Reg/ Pvt.<span class="danger">*</span></th>
																		</tr>
																		<tr>
																			<td><input class="form-control" type="text" value="" name="roll_no" placeholder="-Please Enter-" onkeydown="upperCaseF(this)" id="roll_no" autocomplete="off" maxlength="10" required></td>

																			<td>
																				<input class="form-control" type="text" value="" name="comp_year" id="comp_year" placeholder="-Please Enter-" oninput="this.value = this.value.replace(/\D/g, '').slice(0, 4);" maxlength="4" required>
																			</td>


																			<td><input class="form-control" type=" text" value="" name="mark_percentage" placeholder="-Please Enter-" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" onkeydown="upperCaseF(this)" id="mark_percentage" autocomplete="off" maxlength="5" required></td>

																			<td><input class="form-control" type="text" value="" name="division" placeholder="-Please Enter-" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" onkeydown="upperCaseF(this)" id="division" autocomplete="off" maxlength="5" required></td>

																			<td><input class="form-control" type="text" value="" name="rank" placeholder="-Please Enter-" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" onkeydown="upperCaseF(this)" id="rank" autocomplete="off" maxlength="3" required></td>

																			<td><input class="form-control" type="text" value="" name="board_univ" id="board_univ" placeholder="-Please Enter-" onkeydown="upperCaseF(this)" autocomplete="off" maxlength="100" required></td>

																			<td><input class="form-control" type="text" value="" name="reg_pvt" placeholder="-Please Enter-" onkeydown="upperCaseF(this)" id="reg_pvt" autocomplete="off" maxlength="50" required></td>
																		</tr>
																	</table>
																	<br>
																	<div class="row">
																		<div class="col-md-4">
																			<div class="form-group">
																				<label for="cuet_mark">
																					Marks scored in CUET
																					<span class="danger">*</span>
																				</label>
																				<input type="text" name="cuet_mark" Placeholder="Marks scored in CUET" value="<?php echo $cuet_mark; ?>" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="FQuali" autocomplete="off" maxlength="3" required>

																			</div>
																		</div>

																		<div class="col-md-4">
																			<div class="form-group">
																				<label for="percentage">
																					Percentage
																					<span class="danger">*</span>
																				</label>
																				<input type="text" name="percentage" Placeholder="-Please Enter-" value="" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="percentage" autocomplete="off" maxlength="3" required>
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
																		<span class="danger">*</span>
																		<textarea name="ins_address" rows="5" Placeholder="-Please Enter-" id="ins_address" class="form-control" onkeydown="upperCaseF(this)" autocomplete="off" maxlength="255" required></textarea>
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
																			Year<span class="danger">*</span>
																		</label>
																	</div>
																</div>
																<div class="col-md-2" style="padding-top: 30px; padding-left: 0px;">
																	<input type="text" name="per_year" Placeholder="-Please Enter-" value="" oninput="this.value = this.value.replace(/\D/g, '').slice(0, 4);" class="form-control" id="per_year" autocomplete="off" maxlength="4" required>
																</div>

																<div class="col-md-1" style="padding-top: 30px;     padding-left: 50px;">
																	<div class="form-group">
																		<label for="per_to">
																			To<span class="danger">*</span>
																		</label>
																	</div>
																</div>
																<div class="col-md-2" style="padding-top: 30px; padding-left: 0px;">
																	<input type="text" name="per_to" Placeholder="-Please Enter-" value="" ononinput="this.value = this.value.replace(/\D/g, '').slice(0, 4);" class="form-control" id="per_to" autocomplete="off" maxlength="4" required>
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
																			<span class="danger">*</span>
																		</label>
																		<select class="custom-select form-control" id="major" name="major_subject" autocomplete="off" required onchange="showTable()">

																			<option value="">-Please Select-</option>
																			<option value="ECONOMICS">ECONOMICS </option>
																			<option value="EDUCATION">EDUCATION</option>
																			<option value="ENGLISH">ENGLISH</option>
																			<option value="GARO">GARO</option>
																			<option value="GEOGRAPHY">GEOGRAPHY</option>
																			<option value="HISTORY">HISTORY</option>
																			<option value="PHILOSOPHY">PHILOSOPHY </option>
																			<option value="POL-SCIENCE">POL. SCIENCE</option>
																			<option value="SOCIOLOGY">SOCIOLOGY</option>
																			<option value="BOTANY">BOTANY</option>
																			<option value="CHEMISTRY">CHEMISTRY </option>
																			<option value="MATHEMATICS">MATHEMATICS</option>
																			<option value="ZOOLOGY">ZOOLOGY</option>
																			<option value="PHYSICS">PHYSICS</option>
																			<option value="ACCOUNTING FOR BUSINESS">ACCOUNTING
																				FOR BUSINESS</option>
																		</select>
																	</div>

																</div>

																<div class="col-md-6" id="majorsubject">
																	<table id="tableEconomics" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">GEOGRAPHY</td>
																			<td><input type="radio" name="minor_subject" value="GEOGRAPHY"></td>
																		</tr>
																		<tr>
																			<td class="mdc">HISTORY</td>
																			<td><input type="radio" name="minor_subject" value="HISTORY"></td>
																		</tr>
																		<tr>
																			<td class="mdc">POLITICAL SCIENCE</td>
																			<td><input type="radio" name="minor_subject" value="POLITICAL SCIENCE"></td>
																		</tr>
																		<tr>
																			<td class="mdc">SOCIOLOGY</td>
																			<td><input type="radio" name="minor_subject" value="SOCIOLOGY"></td>
																		</tr>
																	</table>

																	<table id="tableEducation" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">GARO </td>
																			<td><input type="radio" name="minor_subject" value="GARO"></td>
																		</tr>
																		<tr>
																			<td class="mdc">HISTORY</td>
																			<td><input type="radio" name="minor_subject" value="HISTORY"></td>
																		</tr>
																		<tr>
																			<td class="mdc">PHILOSOPHY</td>
																			<td><input type="radio" name="minor_subject" value="PHILOSOPHY"></td>
																		</tr>
																	</table>


																	<table id="tableEnglish" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">EDUCATION</td>
																			<td><input type="radio" name="minor_subject" value="EDUCATION"></td>
																		</tr>
																		<tr>
																			<td class="mdc">GEOGRAPHY</td>
																			<td><input type="radio" name="minor_subject" value="GEOGRAPHY"></td>
																		</tr>
																		<tr>
																			<td class="mdc">PHILOSOPHY</td>
																			<td><input type="radio" name="minor_subject" value="PHILOSOPHY"></td>
																		</tr>
																		<tr>
																			<td class="mdc">POL. SCIENCE</td>
																			<td><input type="radio" name="minor_subject" value="POL. SCIENCE"></td>
																		</tr>
																	</table>

																	<table id="tableGero" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">EDUCATION</td>
																			<td><input type="radio" name="minor_subject" value="EDUCATION"></td>
																		</tr>
																		<tr>
																			<td class="mdc">GEOGRAPHY</td>
																			<td><input type="radio" name="minor_subject" value="GEOGRAPHY"></td>
																		</tr>
																		<tr>
																			<td class="mdc">PHILOSOPHY</td>
																			<td><input type="radio" name="minor_subject" value="PHILOSOPHY"></td>
																		</tr>
																		<tr>
																			<td class="mdc">SOCIOLOGY</td>
																			<td><input type="radio" name="minor_subject" value="SOCIOLOGY"></td>
																		</tr>
																	</table>

																	<table id="tableGeography" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">ECONOMICS</td>
																			<td><input type="radio" name="minor_subject" value="ECONOMICS"></td>
																		</tr>
																		<tr>
																			<td class="mdc">GARO</td>
																			<td><input type="radio" name="minor_subject" value="GARO"></td>
																		</tr>
																	</table>

																	<table id="tableHistory" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">ECONOMICS</td>
																			<td><input type="radio" name="minor_subject" value="ECONOMICS"></td>
																		</tr>
																		<tr>
																			<td class="mdc">PHILOSOPHY</td>
																			<td><input type="radio" name="minor_subject" value="PHILOSOPHY"></td>
																		</tr>
																		<tr>
																			<td class="mdc">POL. SCIENCE</td>
																			<td><input type="radio" name="minor_subject" value="POL. SCIENCE"></td>
																		</tr>
																		<tr>
																			<td class="mdc">SOCIOLOGY</td>
																			<td><input type="radio" name="minor_subject" value="SOCIOLOGY"></td>
																		</tr>
																	</table>

																	<table id="tablePhilosophy" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">EDUCATION</td>
																			<td><input type="radio" name="minor_subject" value="EDUCATION"></td>
																		</tr>
																		<tr>
																			<td class="mdc">GARO</td>
																			<td><input type="radio" name="minor_subject" value="GARO"></td>
																		</tr>
																		<tr>
																			<td class="mdc">GEOGRAPHY</td>
																			<td><input type="radio" name="minor_subject" value="GEOGRAPHY"></td>
																		</tr>

																	</table>

																	<table id="tablePol-Science" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">ECONOMICS</td>
																			<td><input type="radio" name="minor_subject" value="ECONOMICS"></td>
																		</tr>
																		<tr>
																			<td class="mdc">EDUCATION</td>
																			<td><input type="radio" name="minor_subject" value="EDUCATION"></td>
																		</tr>
																		<tr>
																			<td class="mdc">HISTORY</td>
																			<td><input type="radio" name="minor_subject" value="HISTORY"></td>
																		</tr>
																		<tr>
																			<td class="mdc">SOCIOLOGY</td>
																			<td><input type="radio" name="minor_subject" value="SOCIOLOGY"></td>
																		</tr>
																	</table>

																	<table id="tableSociology" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">ECONOMICS</td>
																			<td><input type="radio" name="minor_subject" value="ECONOMICS"></td>
																		</tr>
																		<tr>
																			<td class="mdc">GARO</td>
																			<td><input type="radio" name="minor_subject" value="GARO"></td>
																		</tr>
																		<tr>
																			<td class="mdc">HISTORY</td>
																			<td><input type="radio" name="minor_subject" value="HISTORY"></td>
																		</tr>
																		<tr>
																			<td class="mdc">POL.SCIENCE</td>
																			<td><input type="radio" name="minor_subject" value="POL.SCIENCE"></td>
																		</tr>
																	</table>

																	<table id="tableBotany" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">ZOOLOGY </td>
																			<td><input type="radio" name="minor_subject" value="ZOOLOGY "></td>
																		</tr>
																		<tr>
																			<td class="mdc">CHEMISTRY</td>
																			<td><input type="radio" name="minor_subject" value="CHEMISTRY"></td>
																		</tr>

																	</table>

																	<table id="tableChemistry" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">MATHEMATICS </td>
																			<td><input type="radio" name="minor_subject" value="MATHEMATICS"></td>
																		</tr>
																		<tr>
																			<td class="mdc">PHYSICS</td>
																			<td><input type="radio" name="minor_subject" value="PHYSICS"></td>
																		</tr>
																		<tr>
																			<td class="mdc">CHEMISTRY</td>
																			<td><input type="radio" name="minor_subject" value="CHEMISTRY"></td>
																		</tr>

																	</table>

																	<table id="tableMathematics" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">PHYSICS </td>
																			<td><input type="radio" name="minor_subject" value="PHYSICS"></td>
																		</tr>
																		<tr>
																			<td class="mdc">CHEMISTRY</td>
																			<td><input type="radio" name="minor_subject" value="CHEMISTRY"></td>
																		</tr>
																	</table>

																	<table id="tableZoology" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">BOTANY</td>
																			<td><input type="radio" name="minor_subject" value="BOTANY"></td>
																		</tr>
																		<tr>
																			<td class="mdc">CHEMISTRY</td>
																			<td><input type="radio" name="minor_subject" value="CHEMISTRY"></td>
																		</tr>
																	</table>

																	<table id="tablePhysics" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">CHEMISTRY</td>
																			<td><input type="radio" name="minor_subject" value="CHEMISTRY"></td>
																		</tr>
																		<tr>
																			<td class="mdc">MATHEMATICS</td>
																			<td><input type="radio" name="minor_subject" value="MATHEMATICS"></td>
																		</tr>
																	</table>

																	<table id="tableAccounting" style="display: none;">
																		<tr>
																			<th colspan="3">ANY ONE OF THE FOLLOWING SUBJECTS AS MINOR</th>
																		</tr>
																		<tr>
																			<td class="mdc">ECONOMICS</td>
																			<td><input type="radio" name="minor_subject" value="ECONOMICS"></td>
																		</tr>
																		<tr>
																			<td class="mdc">MATHEMATICS</td>
																			<td><input type="radio" name="minor_subject" value="MATHEMATICS"></td>
																		</tr>
																		<tr>
																			<td class="mdc">GEOGRAPHY</td>
																			<td><input type="radio" name="minor_subject" value="GEOGRAPHY"></td>
																		</tr>
																	</table>


																</div>

															</div>


														</div>


														<div class="row">
															<table>
																<tr>
																	<th colspan="3">MDC (MULTIDISCIPLINARY COURSE) Choices For First Semester (Choose any ONE) <span class="danger">*</span></th>
																</tr>
																<tr>
																	<td>MDC 111</td>
																	<td class="mdc">CULTURE AND SOCIETY</td>
																	<td><input type="radio" name="mdc_choice" value="MDC 111 - CULTURE AND SOCIETY" required></td>
																</tr>
																<tr>
																	<td>MDC 118</td>
																	<td class="mdc">MATHEMATICS IN DAILY LIFE</td>
																	<td><input type="radio" name="mdc_choice" value="MDC 118 - MATHEMATICS IN DAILY LIFE"></td>
																</tr>
																<tr>
																	<td>MDC 119</td>
																	<td class="mdc">PHILOSOPHY OF CULTURE</td>
																	<td><input type="radio" name="mdc_choice" value="MDC 119 - PHILOSOPHY OF CULTURE"></td>
																</tr>
																<tr>
																	<td>MDC 116</td>
																	<td class="mdc">INTRODUCTION TO NATIONAL CADET CORPS</td>
																	<td><input type="radio" name="mdc_choice" value="MDC 116 -INTRODUCTION TO NATIONAL CADET CORPS"></td>
																</tr>
																<tr>
																	<td>MDC 112</td>
																	<td class="mdc">FUNDAMENTALS OF COMPUTER SYSTEMS</td>
																	<td><input type="radio" name="mdc_choice" value="MDC 112 - FUNDAMENTALS OF COMPUTER SYSTEMS"></td>
																</tr>
																<tr>
																	<td>MDC 115</td>
																	<td class="mdc">INTRODUCTORY TO LIFE SCIENCES</td>
																	<td><input type="radio" name="mdc_choice" value="MDC 115 - INTRODUCTORY TO LIFE SCIENCES"></td>
																</tr>
																<tr>
																	<td>MDC 110</td>
																	<td class="mdc">COMMERCIAL ARITHMETIC & ELEMENTARY STATISTICS</td>
																	<td><input type="radio" name="mdc_choice" value="MDC 110 - COMMERCIAL ARITHMETIC & ELEMENTARY STATISTICS"></td>
																</tr>
															</table>
														</div>

														<br>

														<div class="row">
															<table>
																<tr>
																	<th colspan="3">AEC (Ability Enhancement Course) Choices For First Semester (Choose any ONE) <span class="danger">*</span></th>
																</tr>
																<tr>
																	<td>AEC 120</td>
																	<td class="mdc">ALTERNATIVE ENGLISH</td>
																	<td><input type="radio" name="aec_choice" value="AEC 120 - ALTERNATIVE ENGLISH" required></td>
																</tr>
																<tr>
																	<td>AEC 123</td>
																	<td class="mdc">MIL-I: GARO</td>
																	<td><input type="radio" name="aec_choice" value="AEC 123 - MIL-I: GARO"></td>
																</tr>
															</table>
														</div>
														<br>

														<div class="row">
															<table>
																<tr>
																	<th colspan="3">SEC (Skill Enhancement course) Choices For First Semester (Choose any ONE)
																	</th>
																</tr>
																<tr>
																	<td>SEC 131 </td>
																	<td class="mdc">MOTIVATION</td>
																	<td><input type="radio" name="sec_choice" value="SEC 131 - MOTIVATION" required></td>
																</tr>
																<tr>
																	<td>SEC 132</td>
																	<td class="mdc">PERSONALITY DEVELOPMENT
																	</td>
																	<td><input type="radio" name="sec_choice" value="SEC 132 - PERSONALITY DEVELOPMENT"></td>
																</tr>
																<tr>
																	<td>SEC 133</td>
																	<td class="mdc">PUBLIC SPEAKING</td>
																	<td><input type="radio" name="sec_choice" value="SEC 133 - PUBLIC SPEAKING"></td>
																</tr>
															</table>
														</div>
														<br>

														<div class="row">
															<table>
																<tr>
																	<th colspan="3">VAC (Value Added Course)
																	</th>
																</tr>
																<tr>
																	<td>VAC 140 </td>
																	<td class="mdc">ENVIRONMENT STUDIES (Compulsory)</td>

																</tr>

															</table>
														</div>

														<hr style="border-top: 1px solid #C0C0C0;">
														<br>

														<h4 style="color: #123c73;font-weight:bold;font-family: cursive;font-size:20px;">MDC- AEC- SEC- VAC COURSES FOR SECOND SEMESTER</h4><br>
														<div class="row">
															<table>
																<tr>
																	<th colspan="3">MDC (MULTIDISCIPLINARY COURSE) Choices For Second Semester (Choose any ONE)
																	</th>
																</tr>
																<tr>
																	<td>MDC 161 </td>
																	<td class="mdc">ENTREPRENEURSHIP</td>
																	<td><input type="radio" name="mdc_secondsem" value="MDC 161 - ENTREPRENEURSHIP" required></td>
																</tr>
																<tr>
																	<td>MDC 162 </td>
																	<td class="mdc">ENVIRONMENTAL ETHICS
																	</td>
																	<td><input type="radio" name="mdc_secondsem" value="MDC 162 - ENVIRONMENTAL ETHICS"></td>
																</tr>
																<tr>
																	<td>MDC 163</td>
																	<td class="mdc">FUNDAMENTALS OF STATISTICS</td>
																	<td><input type="radio" name="mdc_secondsem" value="MDC 163 - FUNDAMENTALS OF STATISTICS"></td>
																</tr>
																<tr>
																	<td>MDC 164</td>
																	<td class="mdc">HEALTH & HYGIENE, ENVIRONMENTAL EDUCATION AND DISASTER MANAGEMENT</td>
																	<td><input type="radio" name="mdc_secondsem" value="MDC 164 - HEALTH & HYGIENE, ENVIRONMENTAL EDUCATION AND DISASTER MANAGEMENT"></td>
																</tr>
																<tr>
																	<td>MDC 165</td>
																	<td class="mdc">INTRODUCTION TO EDUCATIONAL PSYCHOLOGY</td>
																	<td><input type="radio" name="mdc_secondsem" value="MDC 165 - INTRODUCTION TO EDUCATIONAL PSYCHOLOGY"></td>
																</tr>
																<tr>
																	<td>MDC 167</td>
																	<td class="mdc">PHYSICAL EDUCATION AND SPORTS SCIENCE</td>
																	<td><input type="radio" name="mdc_secondsem" value="MDC 167 - PHYSICAL EDUCATION AND SPORTS SCIENCE"></td>
																</tr>
																<tr>
																	<td>MDC 168 </td>
																	<td class="mdc">PHYSICAL GEOLOGY & GEODYNAMICS</td>
																	<td><input type="radio" name="mdc_secondsem" value="MDC 168 - PHYSICAL GEOLOGY & GEODYNAMICS"></td>
																</tr>
																<tr>
																	<td>MDC 169 </td>
																	<td class="mdc">UNDERSTANDING HUMAN RIGHTS</td>
																	<td><input type="radio" name="mdc_secondsem" value="MDC 169 - UNDERSTANDING HUMAN RIGHTS"></td>
																</tr>
															</table>
														</div>
														<br>
														<div class="row">
															<table>
																<tr>
																	<th colspan="3">AEC (Ability Enhancement Course) Choices For Second Semester (Choose any ONE)
																	</th>
																</tr>
																<tr>
																	<td>AEC 170 </td>
																	<td class="mdc">COMMUNICATIVE ENGLISH
																	</td>
																	<td><input type="radio" name="aec_secondsem" value="AEC 170 - COMMUNICATIVE ENGLISH" required></td>
																</tr>
																<tr>
																	<td>AEC 173</td>
																	<td class="mdc">MIL-II: COMMUNICATIVE GARO
																	</td>
																	<td><input type="radio" name="aec_secondsem" value="AEC 173 - MIL-II: COMMUNICATIVE GARO"></td>
																</tr>

															</table>
														</div>

														<br>
														<div class="row">
															<table>
																<tr>
																	<th colspan="3">SEC (Skill Enhancement course) Choices For Second Semester (Choose any ONE)
																	</th>
																</tr>
																<tr>
																	<td>SEC 180 </td>
																	<td class="mdc">COMMUNICATION SKILLS
																	</td>
																	<td><input type="radio" name="sec_secondsem" value="SEC 180 - COMMUNICATION SKILLS" required></td>
																</tr>
																<tr>
																	<td>SEC 181</td>
																	<td class="mdc">CONFIDENCE BUILDING
																	</td>
																	<td><input type="radio" name="sec_secondsem" value="SEC 181 - CONFIDENCE BUILDING"></td>
																</tr>
																<tr>
																	<td>SEC 182</td>
																	<td class="mdc">E- COMMERCE
																	</td>
																	<td><input type="radio" name="sec_secondsem" value="SEC 182 - E- COMMERCE"></td>
																</tr>
																<tr>
																	<td>SEC 183 </td>
																	<td class="mdc">PYTHON PROGRAMMING
																	</td>
																	<td><input type="radio" name="sec_secondsem" value="SEC 183 - PYTHON PROGRAMMING"></td>
																</tr>

															</table>
														</div>

														<br>
														<div class="row">
															<table>
																<tr>
																	<th colspan="3">VAC (Value Added Course Choices For Second Semester )(Choose any ONE)
																	</th>
																</tr>
																<tr>
																	<td>VAC 190</td>
																	<td class="mdc">HEALTH AND WELLNESS
																	</td>
																	<td><input type="radio" name="vac_secondsem" value="VAC 190 - HEALTH AND WELLNESS" required></td>
																</tr>
																<tr>
																	<td>VAC 191</td>
																	<td class="mdc">LIFE SKILLS EDUCATION
																	</td>
																	<td><input type="radio" name="vac_secondsem" value="VAC 191 - LIFE SKILLS EDUCATION"></td>
																</tr>
																<tr>
																	<td>VAC 192</td>
																	<td class="mdc">UNDERSTANDING INDIA
																	</td>
																	<td><input type="radio" name="vac_secondsem" value="VAC 192 - UNDERSTANDING INDIA"></td>
																</tr>

															</table>
														</div>

														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<input id="unique_id" type="hidden" value="<?php echo $unique_id; ?>" class="form-control" name="unique_id" placeholder="unique_id"></input>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<input id="reg_no" type="hidden" value="
																		<?php echo $reg_no; ?>" class="form-control" name="reg_no" placeholder="reg_no"></input>
																	</div>
																</div>

																<div class="col-md-6">
																	<div class="form-group">
																		<input id="mobile" type="hidden" value="<?php echo $mobile; ?>" class="form-control" name="mobile"></input>
																	</div>
																</div>



																<div class="form-group">
																	<input id="unique_id" type="hidden" value="<?php echo $email; ?>" class="form-control" name="email" placeholder="unique_id"></input>
																</div>


																<div class="form-group">
																	<input id="t_status" type="hidden" value="<?php echo $t_status; ?>" class="form-control" name="t_status" placeholder="t_status"></input>
																</div>
															</div>
														</div>
												</div>

												<div class="row">
													<div class="col-md-12">
														<h5 style="font-weight: bold;">Declaration</h5>
														<input type="checkbox" id="declaration" name="declaration" value="Declaration" required>
														<label for="declaration"> All the particulars given above are true to best of our knowledge. We agree to abide by the rules and regulations of the college.</label>
													</div>
												</div>
											</div>


											<div class="form-actions btn-bottom">
												<br><br>
												<div class="text-center">
													<button onclick="ValidateNo();" type="submit" value="Save" name="submit" class="btn btn-primary btn-save">
														Save & Continue
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script>
		function calculateTotal() {
			var marks = document.querySelectorAll('input[name^="twl_mark"]');
			var total = 0;
			marks.forEach(function(mark) {
				if (mark.value !== '') {
					total += parseFloat(mark.value);
				}
			});
			document.getElementById('twl_total').value = total;
		}

		function showTable() {
			var selectBox = document.getElementById("major");
			var selectedValue = selectBox.options[selectBox.selectedIndex].value;

			// Hide all tables
			var tables = document.querySelectorAll('#majorsubject table');
			tables.forEach(function(table) {
				table.style.display = 'none';
			});

			// Show the selected table
			if (selectedValue === "ECONOMICS") {
				document.getElementById("tableEconomics").style.display = "block";
			} else if (selectedValue === "EDUCATION") {
				document.getElementById("tableEducation").style.display = "block";
			} else if (selectedValue === "ENGLISH") {
				document.getElementById("tableEnglish").style.display = "block";
			} else if (selectedValue === "GARO") {
				document.getElementById("tableGero").style.display = "block";
			} else if (selectedValue === "GEOGRAPHY") {
				document.getElementById("tableGeography").style.display = "block";
			} else if (selectedValue === "HISTORY") {
				document.getElementById("tableHistory").style.display = "block";
			} else if (selectedValue === "PHILOSOPHY") {
				document.getElementById("tablePhilosophy").style.display = "block";
			} else if (selectedValue === "POL-SCIENCE") {
				document.getElementById("tablePol-Science").style.display = "block";
			} else if (selectedValue === "SOCIOLOGY") {
				document.getElementById("tableSociology").style.display = "block";
			} else if (selectedValue === "BOTANY") {
				document.getElementById("tableBotany").style.display = "block";
			} else if (selectedValue === "CHEMISTRY") {
				document.getElementById("tableChemistry").style.display = "block";
			} else if (selectedValue === "MATHEMATICS") {
				document.getElementById("tableMathematics").style.display = "block";
			} else if (selectedValue === "ZOOLOGY") {
				document.getElementById("tableZoology").style.display = "block";
			} else if (selectedValue === "PHYSICS") {
				document.getElementById("tablePhysics").style.display = "block";
			} else if (selectedValue === "ACCOUNTING FOR BUSINESS") {
				document.getElementById("tableAccounting").style.display = "block";
			}
		}


		function isNumber(evt) {
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				alert("Please enter only Numbers.");
				return false;
			}

			return true;
		}

		function ValidateNo() {
			var phoneNo = document.getElementById('FMMobile');

			if (phoneNo.value == "" || phoneNo.value == null) {
				// alert("Please enter your Mobile No.");
				return false;
			}
			if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
				//alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
				return false;
			}

			//alert("Success ");
			return true;
		}

		$(document).ready(function() {

			$('#inputGroupFile02').change(function() {
				var file_size = $('#inputGroupFile02')[0].files[0].size;
				if (file_size > 300000) {
					alert('File size is greater than 300KB');
					document.getElementById("inputGroupFile02").value = "";
				}
			});
		});

		function FuncReligionSelect(txtSelectReligion) {
			if (txtSelectreligion == "CHRISTIAN") {
				//alert(txtSelectreligion);
				// $('#subreligion').show();
				// $('#subreligion').css("display", "visible");
				// $('#Sreligion').prop('required',true);

				$("#SReligion").removeAttr("disabled");
				$("#Sreligion").focus();
				$('#Sreligion').prop('required', true);
			} else {
				// $('#subreligion').hide();
				// $('#subreligion').css("display", "none");
				// $('#SReligion').prop('required',false);

				$("#SReligion").attr("disabled", "disabled");
				$('#SReligion').prop('required', false);
				document.getElementById("SReligion").value = "";

			}
		}

		function my_function(val) {
			sibling = val.value;
			if (sibling == 'Yes') {
				// $('#SCollege').show();
				// $('#SCollege').css("display", "visible");
				// //$('#RollnoI').prop('required',true);

				// $('#SCollege1').show();
				// $('#SCollege1').css("display", "visible");
				// //$('#rollno2').prop('required',true);

				$("#rollno1").removeAttr("disabled");
				$("#rollno1").focus();
				$('#rollno1').prop('required', true);

				$("#rollno2").removeAttr("disabled");
				$("#rollno2").focus();
				$('#rollno2').prop('required', true);


			} else if (sibling == 'No') {
				// $('#SCollege').hide();
				// $('#SCollege').css("display", "none");
				// $('#RollnoI').prop('required',false); 

				// $('#SCollege1').hide();
				// $('#SCollege1').css("display", "none");
				// $('#rollno2').prop('required',false);

				$("#rollno1").attr("disabled", "disabled");
				$('#rollno1').prop('required', false);
				document.getElementById("rollno1").value = "";

				$("#rollno2").attr("disabled", "disabled");
				$('#rollno2').prop('required', false);
				document.getElementById("rollno2").value = "";
			} else {
				$("#rollno1").attr("disabled", "disabled");
				$('#rollno1').prop('required', false);
				document.getElementById("rollno1").value = "";

				$("#rollno2").attr("disabled", "disabled");
				$('#rollno2').prop('required', false);
				document.getElementById("rollno2").value = "";

			}
		}

		function disablefunction(val) {
			disable = val.value;
			if (disable == 'Yes') {
				// $('#Disable').show();
				// $('#Disable').css("display", "visible");
				// //$('#DC').prop('required',true);

				$("#DC").removeAttr("disabled");
				$("#DC").focus();
				$('#DC').prop('required', true);
			} else {
				// $('#Disable').hide();
				// $('#Disable').css("display", "none");
				// $('#DC').prop('required',false);

				$("#DC").attr("disabled", "disabled");
				$('#DC').prop('required', false);

			}
		}

		function Areafunction(val) {
			var Area = val.value;
			var RAreaInput = document.getElementById("area");

			if (Area === 'Rural') {
				RAreaInput.disabled = false;
				RAreaInput.focus();
				RAreaInput.required = true;
			} else {
				RAreaInput.disabled = true;
				RAreaInput.required = false;
				RAreaInput.value = "";
			}
		}


		function weakerfunction(val) {
			var isWeaker = val.value === 'Yes'; // Check if the selected value is 'Yes'
			var weakcertInput = document.getElementById("weakcert");

			if (isWeaker) {
				weakcertInput.removeAttribute("disabled");
				weakcertInput.focus();
				weakcertInput.required = true;
			} else {
				weakcertInput.setAttribute("disabled", "disabled");
				weakcertInput.required = false;
				weakcertInput.value = "";
			}
		}



		$(document).ready(function() {
			$("#checkbox1").on("change", function() {

				if (this.checked) {
					$("#home_address").val($("#tura_address").val());
					$("#PCity").val($("#City").val());
					$("#p_state").val($("#State").val());
					$("#p_pincode").val($("#Pincode").val());

				} else {

					$('#home_address').val("");
					$("#home_address").attr("placeholder", "tura_address");

					$('#PCity').val("");
					$("#PCity").attr("placeholder", "City");

					$('#p_state').val("");
					$("#p_state").attr("placeholder", "State");

					$('#p_pincode').val("");
					$("#p_pincode").attr("placeholder", "Pincode");
				}

			});

		});
	</script>
	<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>

<?php
										}
									}
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
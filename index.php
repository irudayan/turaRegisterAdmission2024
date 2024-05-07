<?php include_once('headerregister.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
	label {
		font-weight: bold !important;

	}

	.form-section {
		font-weight: bold !important;
	}

	.content-wrapper-before {
		height: 1087px !important;
		background-image: linear-gradient(to right, #ece8a1 10%, #9994e7, #7ce9d7) !important;
		background-image: url(images/Build-back.jpg) !important;
		background-size: cover !important;
		background-repeat: no-repeat !important;
		background-position: 0% 60% !important;
		height: 1330px !important;
	}

	.card {
		/*-moz-box-shadow: 3px 3px 3px #ccc;
    -webkit-box-shadow: 3px 3px 3px #ccc;
    box-shadow: 7px 3px 3px #6967ce;
    -moz-box-shadow: 0 0 3px #ccc !important;
    -webkit-box-shadow: 0 0 3px #ccc !important;
    box-shadow: 0 0 53px #067ac5 !important;*/
		background-color: coral;
		color: white;
		animation: mymove 5s infinite;
		border: 3px solid #d3898b;

	}

	@keyframes mymove {
		50% {
			box-shadow: 10px 20px 30px #008fda;
		}
	}

	#horz-layout-colored-controls {
		background: #f3f3f3;
		color: black;
		font-size: 22px;
		font-weight: bold !important;
	}

	.card-header {
		background: #749ed2 !important;
	}

	.btn-primary {
		color: #fff;
		background-color: #bb4f42;
	}

	footer.footer-light {
		background: #6bd076;
	}

	// .row{
	// background: rgba(45, 131, 223, 0.2) !important;
	// }
	.content-wrapper,
	.card-body {
		background: rgba(45, 131, 223, 0.2) !important;
	}

	#horz-layout-colored-controls {
		font-family: 'Orelega One', cursive !important;
	}

	.float-md-left.d-block.d-md-inline-block {
		font-family: 'Orelega One', cursive !important;
		color: white;
		font-size: 17px;
	}

	.my-1 {
		color: #f9fdf9;
		font-size: 17px;
		font-family: 'Orelega One', cursive !important;
	}

	label {
		font-family: 'Castoro', serif;
		font-size: 16px;
		color: black !important;
		font-weight: bold !important;
	}

	.blink {
		background: #0588d4;
		padding: 1.5%;
		color: white;
		font-size: 17px !important;
		border-radius: 9px;
	}

	.blink:hover {
		color: green;
		background: white;
		border: 2px solid #0588d4;
	}

	@media screen and (min-width:360px) {
		.blink {
			display: inline-table !important;
		}

		.blink:hover {
			color: green;
			background: white;
			border: 2px solid #0588d4;
		}
	}

	@media (max-width:767px) {
		.blink {
			background: #0588d4;
			padding: 5.5%;
			color: white;
			font-size: 10px !important;
			border-radius: 9px;
			clear: both;
			margin-left: 0% !important;
		}

		.blink:hover {
			padding: 3.5%;
			color: #000;
			font-size: 10px !important;
			border-radius: 9px;
			clear: both;
			margin-left: 0% !important;
		}
	}

	.card-body {
		background: rgba(45, 131, 223, 0.2) !important;
	}

	@media (max-width:360px) {
		.pop-up {
			bottom: 78px !important;
			padding: 2px !important;
			font-size: 12px !important;

		}

		span {
			font-size: 12px !important;
		}
	}

	.error {
		color: red !important;
		font-size: 15px;
	}
</style>

<div class="row" style="">
	<div class="col-md-6 online-reg" style="">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title" id="horz-layout-colored-controls" style="text-transform: uppercase;line-height: 2em;">Online Admission Registration For 2023 - 2024</h4>
			</div>
			<div class="card-content collpase show">
				<div class="card-body">
					<div class="card-text">
					</div>
					<form class="form form-horizontal" method="POST" id="admissionform" action="registrationProcess.php" enctype="multipart/form-data">
						<div class="form-body">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="Name">
											Applicant Name (As in CI. X Admit Card)
											<span class="danger">*</span>
										</label>
									</div>
									<div class="form-group">
										<label for="dob">
											Date of Birth
											<span class="danger">*</span>
										</label>
									</div>
									<div class="form-group">
										<label for="shift">
											Shift
											<span class="danger">*</span>
										</label>
									</div>
									<br>
									<div class="form-group">
										<label for="gender">
											Gender
											<span class="danger"> *</span>
										</label>
									</div>
									<br>
									<div class="form-group">
										<label for="email" style="color: black;">Email Id <span class="danger">*</span></label>
									</div>
									<div class="form-group">
										<label for="mobile">
											Mobile No
											<span class="danger">*</span>
										</label>
									</div>
									<div class="form-group">
										<label for="inputGroupFile012">
											Upload Photo
											<span class="danger">*</span>
										</label>
									</div>
									<br><br>
									<div class="form-group">
										<label for="cuet_mark">
											Mark Scored in CUET
											<span class="danger">*</span>
										</label>
									</div>
									<div class="form-group">
										<label for="cuet_certificate">
											Upload CUET Mark Sheet
											<span class="danger">*</span>
										</label>
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<input type="text" name="app_name" Placeholder=" Please Enter " value="" onkeydown="upperCaseF(this)" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32" class="form-control" id="AName" autocomplete="off" maxlength="100" required>
									</div>
									<div class="form-group">
										<input type="date" name="dob" value="" class="form-control" id="dob" min="1993-01-01" max="2020-12-31" autocomplete="off" required>
									</div>
									<div class="form-group">
										<select class="custom-select form-control" id="shift" title="This field is required" onchange="my_function(this)" name="shift" data-live-search="true" autocomplete="off" required>
											<option value="">-Please Select-</option>
											<option value="Shift - I (Timing : 6:30 am to 9:30 am)">Shift - I (Timing : 6:30 am to 9:30 am)</option>
											<option value="Shift - II (Timing : 9.45 am - 3.30 pm)">Shift - II (Timing : 9.45 am - 3.30 pm)</option>
											<option value="Shift - III (Timing : 3.45 pm - 6.45 pm)">Shift - III (Timing : 3.45 pm - 6.45 pm)</option>
										</select>
									</div>
									<div class="form-group">
										<select class="custom-select form-control" title="This field is required" id="gender" name="gender" autocomplete="off" required>
											<option value="">-Please Select-</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
									<div class="form-group">
										<input type="email" id="email" class="form-control" title="Please enter the valid format" placeholder=" Please Enter " name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" autocomplete="off" required>
									</div>
									<div class="form-group">
										<input type="text" id="mobile" name="mobile" title="Please enter the valid Enter Mobile No" pattern="[1-9]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" Placeholder=" Please Enter " onkeypress="return isNumber(event)" minlength="10" maxlength="10" class="form-control" autocomplete="off" required>
									</div>
									<div class="form-group">
										<input style="color: red;font-size: 17px;font-weight: bold;" type="file" class="" title="This field is required" id="file_photo1" name="stu_photo" aria-describedby="file_photo1" accept="image/*" onchange="return fileValidationstup(),validate(this.value)" autocomplete="off" required>
										<label class="" for="stu_photo">Choose file</label>
									</div>
									<div class="form-group">
										<input type="text" id="cuet_mark" class="form-control" title="This field is required" placeholder=" Please Enter " name="cuet_mark" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" autocomplete="off" maxlength="3" required>
									</div>

									<div class="form-group">
										<input style="color: red;font-size: 17px;font-weight: bold;" type="file" class="" title="This field is required" id="file_photo1" name="cuet_certificate" aria-describedby="file_photo1" accept="image/*" onchange="return fileValidationstup(),validate(this.value)" autocomplete="off" required>
										<label class="" for="stu_photo">Choose file</label>
									</div>
								</div>
							</div>

							<div class="form-actions center">
								<button type="submit" name="submit" class=" btn btn-primary">
									Register
								</button>
							</div>
							<div class="pop-up" style="position:fixed; right:0px; bottom:199px;padding:10px; background:#c22;z-index:10;font-size:16px;z-index:999999999;">
								<span style="color:white;font-weight:bold;font-size: 18px;">Admission Helpline Number : 9402152496</span>
								<br><a target="_blank" style="color:#0f2873;font-weight: bold;/*! background: grey; */color: white;padding: 5px;" href="https://donboscocollege.ac.in/OnlineAdmission2023/Procedure.html"><i class="fa fa-forward"></i> Click Here to View Online Admission Procedure</i></a>

								<br><a target="_blank" style="color:white;font-weight: bold;padding: 5px;" title="Prospectus" href="https://donboscocollege.ac.in/OnlineAdmission2023/images/DBCT Prospectus 2023 Final.pdf"><i class="fa fa-forward"></i> Click Here to Download Admission Prospectus</a>
							</div>




							<a class="blink" target="_blank" style="font-size: 16px;font-weight:bold !important;text-align:center !important;margin-left: 14%;" href="Login.php">If Already Registered, Click Here to Login</a>
							<br><br><br>
							<marquee direction="up" scrollamount="2" onMouseOver="this.setAttribute('scrollamount', 0, 0);this.stop();" OnMouseOut="this.setAttribute('scrollamount', 2, 0);this.start();">
								<p style="color:blue;"><b>ADMISSION DATES for ARTS</b></p>
								<ol style="display: inline-block;">
									<li style="font-size: 15px;color: red;font-weight: bold;">Last Date for Submission of Online Forms - 16.06.2023</li>
									<li style="font-size: 15px;color: red;font-weight: bold;">Declaration of Results (1st List) - 20.06.2023</li>
									<li style="font-size: 15px;color: red;font-weight: bold;">Last Date for Admission (1st List) - 23.06.2023</li>
									<li style="font-size: 15px;color: red;font-weight: bold;">Declaration of Results (2nd List) - 25.06.2023</li>
									<li style="font-size: 15px;color: red;font-weight: bold;">Last Date for Admission (2nd List)- 27.06.2023</li>
									<li style="font-size: 15px;color: red;font-weight: bold;">Declaration of Results (3rd List) - 29.06.2023</li>
									<li style="font-size: 15px;color: red;font-weight: bold;">Last Date for Admission (3rd List)- 02.07.2023</li>
									<li style="font-size: 15px;color: red;font-weight: bold;">Orientation Programme for ARTS 7, 8 and 9 July 2023</li>
									<li style="font-size: 15px;color: red;font-weight: bold;">Commencement of Classes - 11.07.2023</li>
								</ol>
							</marquee>


					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<script>
	// function upperCaseF(a) {
	// 	setTimeout(function() {
	// 		a.value = a.value.toUpperCase();
	// 	}, 1);
	// }




	function ValidateNo() {
		var phoneNo = document.getElementById('mobile');

		if (phoneNo.value == "" || phoneNo.value == null) {
			alert("Please enter your Mobile No.");
			return false;
		}
		if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
			alert("Please Enter 10 Digit Mobile No.");
			return false;
		}

		//alert("Success ");
		return true;
	}
</script>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#admissionform").validate({});
	});

	//image size



	//Student Photo
	$(document).ready(function() {

		$('#file_PHOTO1').change(function() {
			var file_size = $('#file_PHOTO1')[0].files[0].size;
			if (file_size > 300000) {
				alert('File size shouldbe less than or equal to 300KB');
				document.getElementById("file_PHOTO1").value = "";
			}
		});
	});

	function fileValidationstup() {
		var fileInput =
			document.getElementById('file_PHOTO1');

		var filePath = fileInput.value;

		// Allowing file type 
		var allowedExtensions =
			/(\.jpg|\.jpeg|\.png)$/i;

		if (!allowedExtensions.exec(filePath)) {
			alert('Please select jpg / jpeg /png Image');
			fileInput.value = '';
			return false;
		} else {
			//Here
		}
	}
</script>


<?php include_once('footer.php'); ?>
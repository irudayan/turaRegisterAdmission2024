<?php
include_once('headerregister.php');

?>
<style>
	label {
		font-weight: bold !important;
	}

	.form-section {
		font-weight: bold !important;
	}

	.content-wrapper-before {
		height: 212px !important;
		background-image: linear-gradient(to right, #ece8a1 10%, #9994e7, #7ce9d7) !important;
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

	.btn-primary {
		color: #fff;
		background-color: #bb4f42;
	}

	footer.footer-light {
		background: #6bd076;
	}

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

	@media screen and (min-width: 360px) {
		.blink {
			display: inline-table !important;
		}

		.blink:hover {
			color: green;
			background: white;
			border: 2px solid #0588d4;
		}
	}

	@media (max-width: 767px) {
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
</style>
<div class="content-body">
	<!--<section id="validation">-->
	<div class="row" style="margin-top: -16px;">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Online Admission Registration For 2024 - 2025</h4>
				</div>
				<?php
				if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					$username = $_POST['username'];
					$password = $_POST['password'];
					//Store value in session
					$_SESSION["username"] = $username;
					$_SESSION["password"] = $password;

					if ($username == 'Admin' && $password == 'DBCT@#uA%!22') {
						$dbhost = 'localhost';
						$dbuser = 'root';
						$dbpass = '';
						$dbname = 'tura_admission';

						//Connect Database
						$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
						if (!$conn) {
							die("ERROR: Could not connect. " . mysqli_connect_error());
						}


						// Total Registration
						$TotalCountQuery = mysqli_query($conn, "SELECT count(*) FROM `admission_2024`");
						$TotalCountValues = mysqli_fetch_row($TotalCountQuery);
						$TotalCount = $TotalCountValues[0];

						// Successful Registration
						$TotalSCountQuery = mysqli_query($conn, "SELECT count(*) FROM `admission_2024` WHERE `t_status`=1");
						$TotalSCountValues = mysqli_fetch_row($TotalSCountQuery);
						$TotalSCount = $TotalSCountValues[0];

						// Unsuccessful Registration 
						$TotalSICountQuery = mysqli_query($conn, "SELECT count(*) FROM `admission_2024` WHERE `t_status`=0");
						$TotalSICountValues = mysqli_fetch_row($TotalSICountQuery);
						$TotalSICount = $TotalSICountValues[0];
				?>

						<div class="row align-center" style="">
							<div class="col-md-10">
							</div>
							<div class="col-md-2">
								<a class="btn btn-danger text-right" href="https://donboscocollege.ac.in/OnlineAdmission2023/adminlogin.php">Logout !!!</a>
							</div>
						</div>

						<div class="row align-center" style="">
							<div class="col-md-3">
								<div class="card m-0 p-1 text-white bg-pink border-top-radius-palette">
									<div class="card-content" style="background: #2e4fa3;border-radius: 15px;">
										<div class="card-body" style="padding-left: 16px;padding-right: 16px;">
											<div class="float-left">
												<p class="card-title" style="font-size: 15px !important;">Total Registration</p>
											</div>
											<div class="float-right">
												<p class="card-title"><small class="float-right"><?php echo $TotalCount; ?></small></p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="card m-0 p-1 text-white bg-success  border-top-radius-palette">
									<div class="card-content" style="background: #3094d6;border-radius: 15px;">
										<div class="card-body" style="padding-left: 16px;padding-right: 16px;">
											<div class="float-left">
												<p class="card-title" style="font-size: 15px !important;">Successful Registration</p>
											</div>
											<div class="float-right">
												<p class="card-title"><small class="float-right"><?php echo $TotalSCount; ?></small></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card m-0 p-1 text-white bg-warning  border-top-radius-palette">
									<div class="card-content" style="background: #2f6ab8;border-radius: 15px;">
										<div class="card-body" style="padding-left: 16px;padding-right: 16px;">
											<div class="float-left">
												<p class="card-title" style="font-size: 15px !important;">Unsuccessful Registration</p>
											</div>
											<div class="float-right">
												<p class="card-title"><small class="float-right"><?php echo $TotalSICount; ?></small></p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="card m-0 p-1 text-white bg-pink border-top-radius-palette">
									<div class="card-content" style="background: #32c8fd;border-radius: 15px;">
										<div class="card-body" style="padding-left: 16px;padding-right: 16px;">
											<div class="float-left">
												<p class="card-title" style="font-size: 15px !important;">Download Excel Report</p>
											</div>
											<div class="float-right">
												<p class="card-title"><small class="float-right"><a href="Report.php">CLICK</a></small></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php
						$sql = "SELECT id, reg_no, app_name, mobile, dob, email, t_status, shift FROM admission_2024 WHERE t_status = 1";
						$result = mysqli_query($conn, $sql);
						$i = 1; // Initialize counter
						?>
						<div class="table-responsive">
							<table class="table table-striped table-bordered sourced-data">
								<thead>
									<tr>
										<th>Id</th>
										<th>Registration Number</th>
										<th>Name</th>
										<th>Mobile</th>
										<th>DOB</th>
										<th>Email</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									while ($row = mysqli_fetch_assoc($result)) {
									?>
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo $row['reg_no']; ?></td>
											<td style="width:20% !important;"><?php echo $row['app_name']; ?><br><?php echo isset($row['shift']) ? $row['shift'] : ''; ?></td>
											<td><?php echo $row['mobile']; ?></td>
											<td><?php echo date('d-m-Y', strtotime($row['dob'])); ?></td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['t_status'] == 1 ? 'Successful' : 'Unsuccessful'; ?></td>
											<td>
												<a target="_blank" href="viewDetails.php?id=<?php echo base64_encode($row['id']); ?>">View</a>
											</td>
										</tr>
									<?php
										$i++;
									} ?>
								</tbody>
							</table>
						</div>
				<?php
					} else {
						echo "<script>window.location.href='adminlogin.php?msg=incorrect';</script>";
					}
				} else {
					echo "<script>window.location.href='adminlogin.php?msg=incorrect';</script>";
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php include_once('footer.php'); ?>
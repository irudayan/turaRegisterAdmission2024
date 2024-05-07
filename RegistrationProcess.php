<?php
ob_start();
include_once('headerregister.php');
include('config.php'); ?>

<style>
	.content-wrapper-before {
		height: 212px !important;
		/* background-image: linear-gradient(to right,#f5eb13 10%,#2BF3D9 ) !important; */
		background-image: linear-gradient(to right, #ece8a1 10%, #9994e7, #7ce9d7) !important;
	}

	.card .card-title {
		text-align: center;
		font-size: 19px;
		font-family: 'Orelega One', cursive !important;
		color: black;
		font-size: 24px;
	}
</style>

<div class="content-body"><!-- Basic form layout section start -->
	<section id="basic-form-layouts">
		<div class="row match-height">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Online Admission Registration For 2023 - 2024</h4>
					</div>
				</div>
				<?php

				if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					if (isset($_POST['submit'])) {

						$shift = isset($_POST['shift']) ? mysqli_real_escape_string($conn, $_POST['shift']) : '';

						$app_name = mysqli_real_escape_string($conn, $_POST['app_name']);
						$dob = $_POST['dob'];
						$gender = mysqli_real_escape_string($conn, $_POST['gender']);
						$email = mysqli_real_escape_string($conn, $_POST['email']);
						$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
						$cuet_mark = mysqli_real_escape_string($conn, $_POST['cuet_mark']);

						// Handle photo upload
						$photo = isset($_FILES['stu_photo']) ? uniqid('photo', true) . '.' . strtolower(pathinfo($_FILES['stu_photo']['name'], PATHINFO_EXTENSION)) : '';
						if ($photo) {
							move_uploaded_file($_FILES['stu_photo']['tmp_name'], 'Uploads/Photo/' . $photo);
						}

						// Handle marksheet upload
						$marksheet = isset($_FILES['cuet_certificate']) ? uniqid('cuet_certificate', true) . '.' . strtolower(pathinfo($_FILES['cuet_certificate']['name'], PATHINFO_EXTENSION)) : '';
						if ($marksheet) {
							move_uploaded_file($_FILES['cuet_certificate']['tmp_name'], 'Uploads/Marksheet/' . $marksheet);
						}

						$reg_year = '2024';

						//Username & Tranx
						function RandomStringGenerator($n)
						{
							$generated_string = ""; // Variable which store final string  
							$domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; // Create a string with the 
							$len = strlen($domain); // Find the length of created string 
							for ($i = 0; $i < $n; $i++) { // Loop to create random string 
								$index = rand(0, $len - 1); // Generate a random index to pick characters 
								$generated_string .= $domain[$index]; // Concatenating the character in the resultant string 
							}
							return $generated_string; // Return the randomly generated string 
						}
						$n = 7; // Driver code to test above function 
						$unique_id = RandomStringGenerator($n);

						$reg_year = '2024';

						try {
							// $validatesql = "SELECT * FROM admission_2024 WHERE app_name='" . $app_name . "' AND mobile='" . $mobile . "' AND `t_status`=1";
							// $retval = mysqli_query($conn, $validatesql);
							// if (mysqli_num_rows($retval) == 0) {
							$insertQuery = "INSERT INTO admission_2024 (`reg_no`, `app_name`, `dob`, `shift`, `gender`, `email`, `mobile`, `stu_photo`, `cuet_mark`, `cuet_certificate`, `unique_id`, `reg_year`)
                                VALUES ('0', '$app_name', '$dob', '$shift', '$gender', '$email', '$mobile', '$photo', '$cuet_mark', '$marksheet', '$unique_id', '$reg_year')";

							$Results = mysqli_query($conn, $insertQuery);
							if (!$Results) {
								mysqli_query($conn, "rollback");
								return mysqli_error($conn);
								echo $Response = "Not able to insert data";
							} else {
								date_default_timezone_set('Asia/Calcutta');
								$datenow = date("d/m/Y h:m:s");
								$transactionDate = str_replace(" ", "%20", $datenow);
								require_once 'TransactionRequest.php';
								$transactionRequest = new TransactionRequest();

								$transactionRequest->setMode("test");
								$transactionRequest->setLogin(197);
								$transactionRequest->setPassword("Test@123");
								$transactionRequest->setProductId("NSE");
								$transactionRequest->setAmount(50);
								$transactionRequest->setTransactionCurrency("INR");
								$transactionRequest->setTransactionAmount(0);
								$transactionRequest->setReturnUrl("http://localhost/1BProject/turaRegisterAdmission2024/response.php");
								$transactionRequest->setClientCode(7); // Removed leading zero as it may cause issues
								$transactionRequest->setTransactionId($unique_id);
								$transactionRequest->setTransactionDate($transactionDate);
								$transactionRequest->setCustomerName($app_name);
								$transactionRequest->setCustomerEmailId($email);
								$transactionRequest->setCustomerMobile($mobile);
								$transactionRequest->setCustomerBillingAddress("DBC Tura");
								$transactionRequest->setCustomerAccount("639827");
								$transactionRequest->setReqHashKey("KEY123657234");
								$url = $transactionRequest->getPGUrl();

								header("Location: $url");
								echo "<script>location='$url'</script>";

								mysqli_query($conn, "commit");
							}
							// }
							//  else {
							// 	echo "<script>location='index.php?msg=registered already'</script>";
							// }
						} catch (Exception $e) {
							echo "transaction rolled back";
							exit;
						}
					}
				}
				ob_end_flush();
				?>

				<?php include_once('footer.php'); ?>
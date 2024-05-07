<?php
include_once('headerregister.php');
?>
<style>
	.content-wrapper-before {
		height: 280px !important;
		background-image: linear-gradient(to right, #ece8a1 10%, #9994e7, #7ce9d7) !important;
		background-image: url(images/Build-back.jpg) !important;
		background-size: cover !important;
		background-repeat: no-repeat !important;
		background-position: 0% 60% !important;
	}

	.content-wrapper {
		/*background-image: url(images/Build-back.jpg) !important;*/
	}

	.card .card-title {
		text-align: center;
		font-size: 19px;
		font-family: 'Orelega One', cursive !important;
		color: black;
		font-size: 24px;
	}

	.card-header {
		background: #749ed2 !important;
	}

	.card-title {
		background: #f3f3f3;
		color: black !important;
		font-size: 22px !important;
		font-weight: bold !important;
		padding: 1.5%;
		text-transform: uppercase;
	}

	.app-content.content {
		background: rgba(45, 131, 223, 0.2) !important;
	}

	.btn.btn-outline-info.btn-min-width.mr-1.mb-1 {
		font-size: 16px;
		font-weight: bold;
	}
</style>
<div class="content-body" style="">
	<!--<section id="validation">-->
	<div class="row">
		<div class="col-md-6 online-reg" style="">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Online Admission Registration For 2024 - 2025</h4>
				</div>
				<?php
				require_once 'TransactionResponse.php';
				$transactionResponse = new TransactionResponse();
				$transactionResponse->setRespHashKey("KEYRESP123657234");


				if ($transactionResponse->validateResponse($_POST)) {
					$data = $_POST;
					$trans_id = $data['mer_txn'];
					$payment_id = $data['ipg_txn_id'];
					$paid_amount = $data['amt'];
					$pay_date = $data['date'];
					$date_time = date("Y-m-d H:i:s", strtotime($pay_date));

					$FTransId = base64_encode($trans_id);
					$f_code = $data['f_code'];
					if ($f_code == 'Ok') {
						$dbhost = 'localhost';
						$dbuser = 'root';
						$dbpass = '';
						$dbname = 'tura_admission';
						$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
						if (!$conn) {
							die('Could not connect: ' . mysqli_error());
						}
						try {
							$GetTransIdIdQuery = mysqli_query($conn, "SELECT reg_no, app_name, mobile, dob, unique_id FROM admission_2024 WHERE unique_id='" . $trans_id . "'");
							$row = mysqli_fetch_row($GetTransIdIdQuery);
							$reg_no = $row[0];
							$app_name = $row[1];
							$mobile = $row[2];
							$dob = $row[3];
							$unique_id = $row[4];

							$id = base64_encode($reg_no);

							if ($row == Null || $row == 0) {
								echo "<center><p style='text-align:center;color: red;font-size: 16px;'>Transaction Failed. <b><a href='failed-process.php?id='" . $id . "''>Click here to Pay Registration Fee</a></p>.</center>";
							} else {
								$reg_year = '2024';
								$ACode = "DBCT00";
								// $sql = "Select max(cid) as cid from admission_2024 where reg_year='" . $reg_year . "' AND t_status=1";
								$sql = "SELECT MAX(cid) AS cid FROM admission_2024 WHERE t_status=1";
								$Results = mysqli_query($conn, $sql);
								$row = mysqli_fetch_row($Results);
								$reg_no = $row[0];
								if ($reg_no == Null || $reg_no == 0) {
									// print_r($reg_no);
									// exit;
									$AppId = $ACode . '1';
									$GenNo = 1;
									// echo "here";
								} else {
									$GenNo = $row[0] + 1;
									$AppId = $ACode . $GenNo;
									$Cid = $row[0] + 1;
									//echo "1";
								}

								// print_r($AppId);
								// exit;
								$InsertTransIdQuery = "UPDATE admission_2024 
                      SET reg_no='" . $AppId . "',
                          cid='" . $GenNo . "',
                          t_status=1,
                          paid_amount='" . $paid_amount . "',
                          payment_date='" . $date_time . "',
                          payment_id='" . $payment_id . "'  
                      WHERE unique_id='" . $unique_id . "' AND t_status=0";

								$InsertIdQueryResults = mysqli_query($conn, $InsertTransIdQuery);
								if (!$InsertIdQueryResults) {
									echo "<center>unable to process Your Request.</center>";
								} else {
									//SMS
									$ch = curl_init();
									$user = "20230188";
									//$mobile="7708800697";
									//$RegId="1";
									$receipientno = $mobile;
									//$senderID="DBSHCL";
									$senderID = "DBTURA";
									$url = "https://tinyurl.com/2p8brhb8";
									$msgtxt = "Dear Applicant, Your Registration for Admission at Don Bosco College Tura is Successful. Your Application No is {$AppId} You can login using the Link {$url} with Username {$unique_id} and Password {$mobile}. Thank You. Management-DBCTURA";

									//$msgtxt="Dear Applicant, Your Registration for Admission at Don Bosco College Tura is Successful. Your Application No is {$RegId} You can login using the Link https://bit.ly/3LNnQed with Username {$uniqeId} and Password {$mobile}. Thank You. Management-DBCTURA";  
									curl_setopt($ch, CURLOPT_URL,  "http://164.52.195.161/API/SendMsg.aspx?");
									curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
									curl_setopt($ch, CURLOPT_POST, 1);
									curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&key=1ff9c00beaXX&mobile=$mobile&message=$msgtxt&senderid=DBCTRA&accusage=1");
									$buffer = curl_exec($ch);
									if (empty($buffer)) { //echo " buffer is empty "; 
									} else { //echo $buffer; 
									}
									curl_close($ch);

				?>
									<div class="text-center">
										<p style="padding-top: 20px;font-size: 26px;font-weight: bold;color: #0d2f64;">You have Registered Successfully.</p>
										<p style="font-size: 20px;font-weight: bold;color:black;">Your Registration No is : <?php echo $AppId; ?></p>
										<center>
											<p style="font-size: 20px;font-weight: bold;color:#fffefe;background: #028268;width: 75%;">User Name : <?php echo $unique_id; ?> <br> Password : <?php echo $mobile; ?> </p>
										</center>
										<a type="button" class="btn btn-outline-info btn-min-width mr-1 mb-1" href="Login.php" target="_blank">Click Here to Login</a></p>
									</div>
				<?php
								}
							}
						} catch (Exception $e) {
							echo "Error: " . $e->getMessage();
						}
					} else {
						echo "<center><p style='text-align:center;color: red;font-size: 16px;'>Transaction Failed. <b><a href='failed-process.php?id=" . $FTransId . "'>Click here to Pay Registration Fee</a></p>.</center>";
					}
				} else {
					echo "Invalid Signature";
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php include_once('footer.php'); ?>
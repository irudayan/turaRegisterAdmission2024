<?php

                                                require 'PHPMailer-master/PHPMailerAutoload.php';			
									$mail = new PHPMailer;
									$mail->SMTPDebug = 1;                               // Enable verbose debug output
									$mail->isSMTP();                                      // Set mailer to use SMTP
									$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
									$mail->SMTPAuth = true;                               // Enable SMTP authentication
									$mail->Username = 'admissions@donboscocollege.ac.in';                 // SMTP username
									$mail->Password = 'admissions@2021';                           // SMTP password
									$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
									$mail->Port = 587;  
									$mail->SMTPOptions = array(
									'ssl' => array(
									'verify_peer' => false,
									'verify_peer_name' => false,
									'allow_self_signed' => true
									)
									);                                  // TCP port to connect to
									$mail->setFrom('admissions@donboscocollege.ac.in', 'Don Bosco College Tura');
									$mail->addReplyTo('admissions@donboscocollege.ac.in', 'Online Admission');  //Set an alternative reply-to address
									$mail->addAddress($email);     // Add a recipient
									//$mail->addAddress('lavanyaelvs@gmail.com', 'Online Admission');
									//$mail->addAddress('DbcTutaAdmission@gmail.com', 'DBCTURA Online Admission');     // Add a recipient
									$mail->isHTML(true);                                   // Set email format to HTML
									$mail->Subject = 'Registration Successful !!!';
									$mail->Body    = '<!doctype html>
									<html lang="en">
									<head>
										<meta charset="UTF-8">
										<meta name="viewport" content="width=device-width, initial-scale=1">
										<meta http-equiv="X-UA-Compatible" content="IE=edge">
										<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
										<title>Holiday</title>

										<style>
											@media screen and (max-width: 600px) {
												.remove-flex-mobile {
													display: block !important;
												}

												.display-grid-mobile {
													display: block !important;
													padding-right: 20px !important;
												}

												.display-grid-mobile div {
													margin-right: 0 !important;
													margin-bottom: 30px !important;
												}

												.mobile-footer {
													display: block !important;
													text-align: center;
												}
												
												.mobile-footer a {
													padding: 10px 0 !important;
												}
											}
										</style>
									</head>
									<body style="margin:0;">
										<table style="border: none; margin: 0 auto ; padding: 0;">
											<tr>
												<td style="padding: 0; background-color: #FFFFFF;">
													<div style="background-color: #11176c; padding:10px; text-align: center;">
														<center><img style="background:#fff;border-radius: 10%;width: 71px;" src="http://www.jayaranischoolsalem.org/Admission/images/DBCTlogo.png"/></center>
														<h1 style="margin-bottom: 10px; color:#FFFFFF;font-weight:bold;font-size: 27px;">DON BOSCO COLLEGE</h1>         
														<P style="color:#fff;font-weight:bold;font-size:14px;">Affiliated to the North Eastern Hill University, Shillong - 793022<br>Recognised by University Grants Commission UGC, New Delhi</P>					
													</div>
													<div style="max-width: 600px; min-width: 200px; font-family: sans-serif; font-size: 16px; background-color: #F8F9FA; line-height: 1.4; color: #4A4A4A; border: 1px solid #DFDFDF; border-radius: 10px; overflow: hidden;">
														<div style="background-size: cover; width: 100%;">
															<div style="padding: 25px 25px;">
																<div style="background: rgba(255, 255, 255, .8); padding: 30px; text-align: center; border-radius: 10px;">
																	<h1 style="font-size:22px;text-align:left; color:#11176c; margin:0; padding-bottom:10px;border-radius: 10px; font-weight: 700;">Dear Applicant,</h1>
																	<p style="color:#000;text-align:center;font-size: 19px;">You have registered Successfully.</p>
																	<p style="color:#000;text-align:center;font-size: 19px;padding-bottom:20px;">Your Registration No is : '.$RegId.'</p>
																	<p style="color:#000;text-align:center;font-size: 19px;padding-bottom:20px;">You can Login the below Link with<br> Username : '.$uniqeId.' And Password : '.$mobile.'</p>
																	<a style="font-size: 16px;background-color:orange !important;border-color:orange !important;padding: 10px;border-radius: 5px;text-decoration: none;color: white;" href="https://higradeonline.com/DBCTuraAdmission/Login.php" class="btn btn-primary">Click Here to Login</a>
																	<!--a style="font-size: 16px;background-color:orange !important;border-color:orange !important;padding: 10px;border-radius: 5px;text-decoration: none;color: white;" href="https://higradeonline.com/DBCTURAAdmission/generate_pdf.php?id='.$id.'" class="btn btn-primary">Download Application Form Here</a-->
																	<!--p style="color:#000;text-align:left;padding-top:20px;font-size: 17px;"><strong>Note : </strong>You are requested to submit the Registration Form along with the necessary documents on 8th February 2020 at the school office between 9 AM & 1 PM.</p-->
																	
																	
																</div>                            
															</div>
														</div>
													</div>
													<div style="background-color: #11176c; padding: 10px; text-align: center;">
														<p></p>
													</div>
												</td>
											</tr>
										</table>
									</body>
									</html>';
									if(!$mail->send()) {
										//echo 'Message could not be sent.';
										//echo 'Mailer Error: ' . $mail->ErrorInfo;
									}
?>
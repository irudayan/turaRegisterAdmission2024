<?php
										                                                
											// $ch = curl_init();
											// $user="BOSCOIT";
											// $mobile="7708800697";
											// $receipientno=$mobile; 
											// $senderID="DBSHCL";
											// $senderID="DBCTRA";											
											// $url='https://dbcmaram.ac.in/UG_ADMISSION/pdfgenerator.php?id='.$Id;					
											// $msgtxt="Dear Applicant, Your Registration for Admission at Don Bosco College Tura is Successful. Your Application No is {#var#} You can login using the Link https://bit.ly/3eRgCHW with Username {#var#} and Password {#var#}. Thank You. Management-DBCTURA";  
											// curl_setopt($ch,CURLOPT_URL,  "http://boscoit.tk/submitsms.jsp?");
											// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
											// curl_setopt($ch, CURLOPT_POST, 1);
											// curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&key=1ff9c00beaXX&mobile=$mobile&message=$msgtxt&senderid=DBCTRA&accusage=1");
											// $buffer = curl_exec($ch);
											// if(empty ($buffer))
											// { //echo " buffer is empty "; 
											// }
											// else
											// { //echo $buffer; 
											// } 
											// curl_close($ch);
											
											//SMS
									$ch = curl_init();
									$user="20230188";
									$mobile="9566363655";
									$RegId="1";
									$uniqeId="1qweqe";
									$receipientno=$mobile; 
									//$senderID="DBSHCL";
									$senderID="DBTURA";											
									$url="https://tinyurl.com/2p8brhb8";					
									
									$msgtxt="Dear {#var#} Congratulations! You are ADMITTED to DONBOSCO COLLEGE TURA in {#var#}. Kindly pay the admission fee by {#var#}. If not, you will forfeit your seat.";
//$msgtxt="Dear Applicant, Your Registration for Admission at Don Bosco College Tura is Successful. Your Application No is {$RegId} You can login using the Link https://tinyurl.com/2p8vxyhv with Username {$uniqeId} and Password {$mobile}. Thank You. Management-DBCTURA";  
									curl_setopt($ch,CURLOPT_URL,  "http://164.52.195.161/API/SendMsg.aspx?");
									curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
									curl_setopt($ch, CURLOPT_POST, 1);
									curl_setopt($ch, CURLOPT_POSTFIELDS, "uname=$user&pass=E6nJu9k9&send=$senderID&dest=$mobile&msg=$msgtxt&priority=1");
									$buffer = curl_exec($ch);
									if(empty ($buffer))
									{ //echo " buffer is empty "; 
									}
									else
									{ //echo $buffer; 
									} 
									curl_close($ch);
?>
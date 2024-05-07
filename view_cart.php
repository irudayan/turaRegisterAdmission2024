<?php
mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
session_start(); //start session
require 'PHPMailer/PHPMailerAutoload.php';


/*Start Email sending*/

            $to = 'elavanyaelvs@gmail.com'; // this is your Email address
            $from = 'elavanyaelvs@gmail.com'; // this is the sender's Email address 
            
            $name = 'Nirmal';
            $email = 'elavanyaelvs@gmail.com';
            $address = 'test address';
            $phone_number = '9043657754';
            $comment = 'No Comments';
            
          

            $message = '<div class="header" style="width: 71%;margin: 0px 21%;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <p style=" color: #fff !important;text-align: center;font-weight: bold;font-size: 20px;padding: 1%; margin-bottom: 1px;background-color: rgb(0, 174, 84);">
          <a href="https://potnpaatti.com" style="color:#fff !important; text-decoration: none !important;">Pot &apos;N&apos; Paatti</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="form" style="width: 70%; margin: 0px 20%; ">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="registration">
            <style>
              td,th{
                padding: 15px;
              }
            </style>
            <table>
                <tr>
                  <td colspan="2" align="center" class="bmeImage" style="border-collapse: collapse; padding: 20px;">
                        <p><img src="https://potnpaatti.com/images/1.png" style="width: 200px; height: 150px;"></p>
                    </td>
                </tr>
            <tr>
                
              </tr>

              <tr>
                <td><strong>Name</strong></td>
                <td>' . $name . '</td>
              </tr>
              <tr>
                <td><strong>Email</strong></td>
                <td>' . $email . '</td>
              </tr>
            <tr>
                <td><strong>Area of Delivery / City</strong></td>
                <td>' . $address . '</td>
              </tr>
              <tr>
                <td><strong>Phone Number</strong></td>
                <td>' . $phone_number . '</td>
              </tr>
              <tr>
                <td><strong>Questions / Comments</strong></td>
                <td>' . $comment . '</td>
              </tr>
          
            </table>

          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="footer" style="width: 71%;margin: 0px 21%;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <p style="color: #fff;text-align: center;font-size: 14px !important; padding: 1%;background-color: #605448;">Copyright © 2022 Pot &apos;N&apos; Paatti Foods. All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>';
           $mail = new PHPMailer();
            // Server settings
           # $mail->SMTPDebug = 1; // for detailed debug output
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->Username = 'elavanyaelvs@gmail.com'; // YOUR gmail email
            $mail->Password = 'LAVANYANOV@1993'; // YOUR gmail password

            // Sender and recipient settings
            $mail->setfrom('elavanyaelvs@gmail.com', "Testing By NR");
            $mail->addaddress('elavanyaelvs@gmail.com');
            // $mail->addreplyto('example@gmail.com', 'Sender Name'); // to set the reply to

            // Setting the email content
            $mail->IsHTML(true);
            $mail->Subject = "Testing By NR Submission";
            $mail->Body = $message;
            $mail->Body2 = $message;
            $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';
#echo"<pre>"; print_r($mail->Body); exit;
            $mail->send();
     

        if($mail == 1) {
             echo "<script type='text/javascript'> window.location.href='index.php?msgorder=success';</script>";
           } else {
             echo "<script type='text/javascript'> window.location.href='index.php?msgorder=error';</script>";
           }
        

        session_destroy();
/* End Email sending*/

    

?>


  
</body>

</html>
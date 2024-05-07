<?php ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="JDV">
    <title>Admin Login - Don Bosco College,Tura</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://donboscocollege.ac.in/OnlineAdmission2023/images/DBCT Logo.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-switch.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/login-register.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu 1-column  bg-full-screen-image blank-page blank-page" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0" style="margin-top: 9%;">
            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0" style="padding: 0rem !important;">
                    <div class="text-center mb-1">
                        <img src="https://donboscocollege.ac.in/OnlineAdmission2023/images/DBCT Logo.png" alt="branding logo" width="20%">
                    </div>
					<div class="text-center" style="font-weight: bold;font-size: 21px;color: #1e1466;">                       
                      Don Bosco College 
                    </div>
					<p class="text-center" style="font-size: 15px;color:#000;">
						Affiliated to the North Eastern Hill University, Shillong - 793022<br>Recognised by University Grants Commission UGC, New Delhi
					</p>
                </div>
                <div class="card-content">
					
                    <div class="card-body">
						<p class="text-center" style="font-size: 17px;font-weight: bold;">Admin Login</p>
						<?php
						include_once('includes/messages.php');
						$msg=$_REQUEST["msg"];
						if($msg){										
							if($msg=='invalid')
							{
								echo '<font color="#000">';
									echo '<center style="color: #ee3409;font-size: 19px;padding-top: 10px;padding-bottom: 10px;">';
										echo $message["user"][$msg]; 				//<!--displaying the acknowledgement message-->
									echo "</center>";
								echo '</font>';
							}
							elseif($msg == 'incorrect')
							{
								echo '<font color="#000">';
									echo '<center style="color: #ee3409;font-size: 19px;padding-top: 10px;padding-bottom: 10px;">';
										echo $message["user"][$msg]; 				//<!--displaying the acknowledgement message-->
									echo "</center>";
								echo '</font>';
							}	
							elseif($msg == 'timeout'){
								echo '<p style="text-align:center;color:#fff;">'.$message["user"][$msg].' <a href="login.php">Click back here to Register </a></p>';  
							}
							elseif($msg == 'changepassword'){
								echo $message["user"][$msg];  
							}
						}	 
						?>
                        <form class="form-horizontal" action="login-process.php" method="POST">
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="text" class="form-control round" id="user-name" name="username" placeholder="Username" required>
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
								<input type="password" class="form-control round" id="user-password" name="password" placeholder="Password" required>
                            </fieldset>
                      
                            <div class="form-group text-center">
                                <input type="submit" value="Submit" name="Login" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1" />    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.min.js" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/form-login-register.min.js" type="text/javascript"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->
</html>
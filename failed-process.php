<?php include_once('header.php');
include('config.php'); ?>

<?php
// $dbhost = 'localhost';
// // $dbuser = 'higradeonline';
// $dbuser = 'colleged_onbosco_career';
// // $dbpass = 'y8ahydu5u';
// $dbpass = 'wzD[5xMw9~CU';
// $dbname = 'colleged_onbosco_career_placement';

// //Connect Database
// $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// if (!$conn) {
// 	die("ERROR: Could not connect. " . mysqli_connect_error());
// }

$id = $_GET['id'];
$RegId = base64_decode($id);
$RegYear = 2021;

try {
	//echo "here";
	mysqli_query($conn, "begin");
	$GetIdQuery = "Select email,mobile,AName,Programme,Shift from dbctura_ugadmission where RegYear='" . $RegYear . "' AND TStatus=0 AND RegId='" . $RegId . "'";
	//print_r($GetIdQuery);
	$result2 = mysqli_query($conn, $GetIdQuery);
	$row = mysqli_fetch_array($result2);
	//print_r($row);
	//exit;
	if ($row) {
		$email = $row[0];
		$mobile = $row[1];
		$AName = $row[2];
		$Programme = $row[3];
		$Shift = $row[4];

		date_default_timezone_set('Asia/Calcutta');
		$datenow = date("d/m/Y h:m:s");
		$transactionDate = str_replace(" ", "%20", $datenow);
		require_once 'TransactionRequest.php';
		$transactionRequest = new TransactionRequest();
		// Setting all values here
		$transactionRequest->setMode("live");
		$transactionRequest->setLogin(109488);
		$transactionRequest->setPassword("7c990bc2");
		$transactionRequest->setProductId("COLLEGE");
		$transactionRequest->setAmount(550);
		$transactionRequest->setTransactionCurrency("INR");
		$transactionRequest->setTransactionAmount(0);
		$transactionRequest->setReturnUrl("https://donboscocollege.ac.in/OnlineAdmission2023/response.php");
		$transactionRequest->setClientCode(123);
		$transactionRequest->setTransactionId($RegId);
		$transactionRequest->setTransactionDate($transactionDate);
		$transactionRequest->setCustomerName($AName);
		$transactionRequest->setCustomerEmailId($email);
		$transactionRequest->setCustomerMobile($mobile);
		$transactionRequest->setstudepartment($Programme);
		$transactionRequest->setstushift($Shift);
		$transactionRequest->setCustomerBillingAddress("DBC Tura");
		$transactionRequest->setCustomerAccount("639827");
		$transactionRequest->setReqHashKey("464054992733902f41");
		$url = $transactionRequest->getPGUrl();
		header("Location: $url");
		echo "<script>location='$url'</script>";
		mysqli_query($conn, "commit");
	} else {


		echo "<script>location='https://donboscocollege.ac.in/OnlineAdmission2023/'</script>";
	}
} catch (Exception $e) {
	echo "transaction rolled back";
	exit;
}
?>
</div>
</div>
</div>
</div>
<!-- #END# Advanced Form Example With Validation -->
</div>
</section>
<?php include_once('footer.php'); ?>
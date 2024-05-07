<?php include_once('header.php');
// include('config.php'); 
?>

<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'tura_admission';

//Connect Database
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = $_GET['id'];
$unique_id = base64_decode($id);


try {
	mysqli_query($conn, "begin");

	$getIdQuery =
		"Select email,mobile,app_name,shift from admission_2024 WHERE t_status=0 AND unique_id='" . $unique_id . "'";

	$result2 = mysqli_query($conn, $getIdQuery);

	$row = mysqli_fetch_array($result2);

	if ($row) {
		$email = $row[0];
		$mobile = $row[1];
		$reg_no = $row[2];
		$shift = $row[4];

		date_default_timezone_set('Asia/Calcutta');
		$datenow = date("d/m/Y h:m:s");
		$transactionDate = str_replace(" ", "%20", $datenow);
		require_once 'TransactionRequest.php';
		$transactionRequest = new TransactionRequest();
		// Setting all values here
		$transactionRequest->setMode("test");
		$transactionRequest->setLogin(197);
		$transactionRequest->setPassword("Test@123");
		$transactionRequest->setProductId("NSE");
		$transactionRequest->setAmount(50);
		$transactionRequest->setTransactionCurrency("INR");
		$transactionRequest->setTransactionAmount(0);
		$transactionRequest->setReturnUrl("http://localhost/1BProject/turaRegisterAdmission2024/response.php");
		$transactionRequest->setClientCode(123);
		$transactionRequest->setTransactionId($unique_id);
		$transactionRequest->setTransactionDate($transactionDate);
		$transactionRequest->setCustomerName($app_name);
		$transactionRequest->setCustomerEmailId($email);
		$transactionRequest->setCustomerMobile($mobile);
		$transactionRequest->setstushift($shift);
		$transactionRequest->setCustomerBillingAddress("DBC Tura");
		$transactionRequest->setCustomerAccount("639827");
		$transactionRequest->setReqHashKey("KEY123657234");
		$url = $transactionRequest->getPGUrl();
		header("Location: $url");
		echo "<script>location='$url'</script>";
		mysqli_query($conn, "commit");
	} else {
		echo "hrkjnodgn";

		echo "<script>location='http://localhost/1BProject/turaRegisterAdmission2024/'</script>";
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
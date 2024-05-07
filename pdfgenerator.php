<?php
require_once('mpdf/vendor/autoload.php');

$id = $_GET['id'];
$ids = base64_decode($id);
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'tura_admission';

//Connect Database
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
// $Query = "SELECT * FROM `admission_2024` where (reg_no='" . $ids . "' AND TStatus=1 AND PIStatus=1 AND t_status=1) OR (reg_no='" . $ids . "' AND TStatus=1 AND PIStatus=1 AND MIStatus=2)";


$query = "SELECT * FROM `admission_2024` WHERE (id='" . $ids . "' AND t_status=1)";

print_r($query);
exit;
// $rows = mysql_fetch_row($query);
$result = mysqli_query($conn, $query);
$rows = mysqli_fetch_row($result);
$rowcount = mysqli_num_rows($result);
if ($rows == Null || $rows == 0) {
	echo "<p style='text-align:center;color:#000;'>No details available for this Id <a href='index.php'>Click Back to Register</a></p>";
} else {
	// $emparray[] = array(
	// "STUDENTID"=>($row['RegId']) ? $row['RegId']: 'NIL'
	// );

	$RegId = $rows[1];
	$AName = $rows[2];
	$Dob = $rows[3];
	$Shift = $rows[4];
	$Programme = $rows[5];
	$Course_Comb = $rows[6];
	$Gender = $rows[7];
	$email = $rows[8];
	$mobile = $rows[9];
	$PPhoto = $rows[10];
	$uniqeId = $rows[11];
	$MStatus = $rows[15];
	$BG  = $rows[16];
	$Nationality  = $rows[17];
	$Category = $rows[18];
	$AadharNumber = $rows[19];
	$PanNumber = $rows[20];
	$RT = $rows[21];
	$Religion = $rows[22];
	$SReligion = $rows[23];
	$RAddress = $rows[24];
	$City = $rows[25];
	$State = $rows[26];
	$Pincode = $rows[27];
	$PAddress = $rows[28];
	$PCity = $rows[29];
	$PState = $rows[30];
	$PPincode = $rows[31];
	$FName = $rows[32];
	$FQuali = $rows[33];
	$FOccupation = $rows[34];
	$FMobile = $rows[35];
	$MName = $rows[36];
	$MQuali = $rows[37];
	$MOccupation = $rows[38];
	$MMobile = $rows[39];
	$GName = $rows[40];
	$GQuali = $rows[41];
	$GOccupation = $rows[42];
	$GMobile = $rows[43];
	$AIncome = $rows[44];
	$Groups = $rows[45];
	$Honours = $rows[46];
	$ElectiveI = $rows[47];
	$ElectiveII = $rows[48];
	$Studying = $rows[49];
	$RollnoI = $rows[50];
	$RollnoII = $rows[51];
	$Disability = $rows[52];
	$DC = $rows[53];
	$URArea = $rows[54];
	$RArea = $rows[55];
	$School = $rows[57];
	$PStudyF = $rows[58];
	$PStudyT = $rows[59];
	$Board  = $rows[60];
	$Rollno = $rows[61];
	$YOp = $rows[62];
	$PMarks = $rows[63];
	$TMarks = $rows[64];
	$Division = $rows[65];
	$Rank = $rows[66];
	$RP = $rows[67];
	$SubI  = $rows[68];
	$SubIM = $rows[69];
	$SubII  = $rows[70];
	$SubIIM  = $rows[71];
	$SubIII  = $rows[72];
	$SubIIIM  = $rows[73];
	$SubIV = $rows[74];
	$SubIVM  = $rows[75];
	$SubV = $rows[76];
	$SubVM = $rows[77];
	$SubVI = $rows[78];
	$SubVIM = $rows[79];
	$BoardXII  = $rows[80];
	$RollnoXII  = $rows[81];
	$YOpXII  = $rows[82];
	$PMarksXII  = $rows[83];
	$TMarksXII  = $rows[84];
	$DivisionXII = $rows[85];
	$RankXII = $rows[86];
	$RPXII = $rows[87];
	$SubIXII = $rows[88];
	$SubIMXII = $rows[89];
	$SubIIXII  = $rows[90];
	$SubIIMXII = $rows[91];
	$SubIIIXII = $rows[92];
	$SubIIIMXII = $rows[93];
	$SubIVXII  = $rows[94];
	$SubIVMXII = $rows[95];
	$SubVXII = $rows[96];
	$SubVMXII  = $rows[97];
	$SubVIXII = $rows[98];
	$SubVIMXII = $rows[99];
	$tenTotal = $rows[100];
	$twlTotal = $rows[101];
	$Marksheet = $rows[102];
	$MIStatus = $rows[104];
	$XMarksheet = $rows[109];
	$CUET = $rows[110];
	$CUETper = $rows[111];
	$cuetMarksheet = $rows[112];
	$weaker = $rows[113];
	$weakcert = $rows[114];

	// $currentdate=date('d-m-Y');
	$dateOfBirth = date('d.m.Y', strtotime(str_replace('.', '/', $Dob)));

	if ($Disability == 'Yes' && $CUET == 'Yes' && $weaker == 'Yes') {

		$htmlData = '
	
	
   <div class="container"><table width="100%"><tr><td style="width:90%;"><img src="images/DBCT2.png" style="" /></td><td style="width:10%;"><img src="Uploads/Photo/' . $PPhoto . '" style="width:120px;height:120px;" /></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Admission No :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;" >' . $ids . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Admission Date :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;"></td></tr></table>
	<br>
	<div style="width:100%;text-align:center;padding-top:5px;padding-bottom:5px;font-weight:bold;">Online Admission Registration 2023 - 2024</div>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Personal Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:43%">Applicant Name (As in CI. X Admit Card) :</td><td style="border-bottom: 1px solid black;text-align:left;width:57%" >' . $AName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:10%">Shift :</td><td style="border-bottom: 1px solid black;text-align:left;width:90%" >' . $Shift . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:25%">Programme applied for :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Programme . '</td><td style="width:25%;">&nbsp;&nbsp;&nbsp;Course Combination :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;">' . $Course_Comb . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%;">Gender :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $Gender . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Blood Group :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $BG . '</td><td style="width:20%">&nbsp;&nbsp;&nbsp;Date of Birth :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;" >' . $dateOfBirth . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Nationality :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;" >' . $Nationality . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Marital Status :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $MStatus . '</td><td style="width:12%">Category :</td><td style="border-bottom: 1px solid black;text-align:left;width:18%" >' . $Category . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td style="width:15%">Race / Tribe :</td><td style="border-bottom: 1px solid black;text-align:left;width:85%" >' . $RT . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Religion :</td><td  style="border-bottom: 1px solid black;width:40%;text-align:left;" >' . $Religion . '</td><td style="width:18%;">&nbsp;&nbsp;&nbsp;Sub Religion :</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;"> ' . $SReligion . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Adhaar No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $AadharNumber . '</td><td style="width:12%;">&nbsp;&nbsp;&nbsp;Pan No :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $PanNumber . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $mobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:12%;">Email ID :</td><td  style="border-bottom: 1px solid black;width:88%;text-align:left;"> ' . $email . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Residential Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $RAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $City . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $State . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $Pincode . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Home Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $PAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $PCity . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PState . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PPincode . '</td></tr></table>
	
	<br>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Parents Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:22%">Name of the Father :</td><td style="border-bottom: 1px solid black;text-align:left;width:78%" >' . $FName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $FQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $FOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $FMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Mother :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $MName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $MQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $MOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $MMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Guardian :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $GName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $GQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $GOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $GMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Annual Income :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $AIncome . '</td><td style="width:18%;"></td><td  style="width:45%;text-align:left;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Sibling Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Is Brother / Sister Studying in this College :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $Studying . '</td><td style="width:20%"></td><td  style="width:20%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Roll No 1 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoI . '</td><td style="width:5%;"></td><td style="width:12%">Roll No 2 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoII . '</td><td style="width:18%;"></td></tr></table>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Previous Institution Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Name and Address of the Institution last attended :</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $School . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Period of Study Year From :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyF . '</td><td style="width:5%;"></td><td style="width:10%">Year To :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyT . '</td><td style="width:30%;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD X</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $Board . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Rank . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $Division . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $tenTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarks . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubI . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $Rollno . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOp . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVI . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIM . '</td></tr>
	   
	</table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD XII</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $BoardXII . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $RankXII . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $DivisionXII . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $twlTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarksXII . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RollnoXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOpXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIMXII . '</td></tr>
	   
	</table>
	<br>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Other Information</div>
	<br>
	<!--table border="1" style="border-spacing: 0;" width="100%">
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Group</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Honours</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective I</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective II</td></tr>
	   <tr style="height:50px;"><td style="font-size:14px;text-align:center;height:50px;width:25%;">' . $Groups . '  </td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;">' . $Honours . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveI . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveII . '</td></tr>
	   
	   </table-->
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Choice of Subjects ( Group, Honours, Elective I, Elective II ) :</td></tr></table>
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $Course_Comb . '</td></tr></table>
	   
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:10%"> Is Differently Abled ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $Disability . '</td><td style="width:40%"></td><td  style="width:25%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether belonging to Urban / Rural </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $URArea . '</td><td style="width:25%">&nbsp;&nbsp;If Rural, mention Place</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;" >' . $RArea . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether cleared CUET (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $CUET . '</td><td style="width:45%">&nbsp;&nbsp;If Yes, Marks scored in CUET Percentage</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $CUETper . '</td></tr></table>

		<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Economically Weaker (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $weaker . '</td><td style="width:45%"></td><td  style="width:10%;" ></td></tr></table>

	
	
	<p style="text-align:left;font-size:13px;"><b><u>IMPORTANT INSTRUCTIONS FOR CANDIDATES : </u></b></p>
	<ul>
	<li>Please retain the photocopy of the filled-in form for future reference.</li>
	<li>Documents to be attached :<br>
	      <p style="margin-left:10%;">a) Attested copy of Certificates and Mark sheets from Std. X onwards.<br>
			b) ST/SC/BC/OBC certificate.<br>
			c) Age Certificate / Class X Admit Card.<br>
			d) Baptism Certificate (for Catholic students)<br>
			e) CUET Certificate
			</p>
	</li>
	</ul>
	
	<p style="text-align:left;font-size:13px;"><b><u>UNDERTAKING : </u></b></p>
	<p style="text-align:justify;font-size:12px;font-weight:bold;">We certify that we have read and understood the prospectus and promise to abide by the rules and regulations of the College in all
matters of study, attendance and discipline.</p>
	<br><br><br>
	<table width="100%">
	<tr style ="margin-top:-100px !important;">
					<td style = "text-align:left;width:100%;font-size:15px;">Date______________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature of the Parent/Guardian</td>
					<!--td style = "text-align:center;width:30%;font-size:11px;">Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Place</td>
					<td style = "text-align:right;width:40%;font-size:11px;">Place</td-->
				</tr>
			</table>
	
	<br><br><br>
	<p style="font-weight:bold;margin-left:70%;">Signature of the Principal</p>
	<table width="100%"><tr><td style=""><img src="Uploads/XMarksheet/' . $XMarksheet . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/Marksheet/' . $Marksheet . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/DC/' . $DC . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/CUET/' . $cuetMarksheet . '" style="" /></td></tr></table>
	 <table width="100%"><tr><td style=""><img src="Uploads/Weaker/' . $weakcert . '" style="" /></td></tr></table>
  
	   
	   
	</div>
	';
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetHTMLHeader('<div style="text-align: right;font-weight:bold;">Application Number : ' . $ids . '</div>');
		$mpdf->WriteHTML($htmlData);

		$file_name = "" . $app_no . '-' . date('d-m-Y') . '.pdf';
		$mpdf->Output($file_name, "D");
	} elseif ($Disability == 'Yes' && $CUET == 'No' && $weaker == 'No') {

		$htmlData = '
	
	
   <div class="container"><table width="100%"><tr><td style="width:90%;"><img src="images/DBCT2.png" style="" /></td><td style="width:10%;"><img src="Uploads/Photo/' . $PPhoto . '" style="width:120px;height:120px;" /></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Admission No :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;" >' . $ids . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Admission Date :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;"></td></tr></table>
	<br>
	<div style="width:100%;text-align:center;padding-top:5px;padding-bottom:5px;font-weight:bold;">Online Admission Registration 2023 - 2024</div>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Personal Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:43%">Applicant Name (As in CI. X Admit Card) :</td><td style="border-bottom: 1px solid black;text-align:left;width:57%" >' . $AName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:10%">Shift :</td><td style="border-bottom: 1px solid black;text-align:left;width:90%" >' . $Shift . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:25%">Programme applied for :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Programme . '</td><td style="width:25%;">&nbsp;&nbsp;&nbsp;Course Combination :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;">' . $Course_Comb . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%;">Gender :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $Gender . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Blood Group :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $BG . '</td><td style="width:20%">&nbsp;&nbsp;&nbsp;Date of Birth :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;" >' . $dateOfBirth . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Nationality :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;" >' . $Nationality . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Marital Status :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $MStatus . '</td><td style="width:12%">Category :</td><td style="border-bottom: 1px solid black;text-align:left;width:18%" >' . $Category . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td style="width:15%">Race / Tribe :</td><td style="border-bottom: 1px solid black;text-align:left;width:85%" >' . $RT . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Religion :</td><td  style="border-bottom: 1px solid black;width:40%;text-align:left;" >' . $Religion . '</td><td style="width:18%;">&nbsp;&nbsp;&nbsp;Sub Religion :</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;"> ' . $SReligion . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Adhaar No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $AadharNumber . '</td><td style="width:12%;">&nbsp;&nbsp;&nbsp;Pan No :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $PanNumber . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $mobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:12%;">Email ID :</td><td  style="border-bottom: 1px solid black;width:88%;text-align:left;"> ' . $email . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Residential Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $RAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $City . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $State . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $Pincode . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Permanent Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $PAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $PCity . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PState . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PPincode . '</td></tr></table>
	
	<br>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Parents Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:22%">Name of the Father :</td><td style="border-bottom: 1px solid black;text-align:left;width:78%" >' . $FName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $FQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $FOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $FMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Mother :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $MName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $MQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $MOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $MMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Guardian :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $GName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $GQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $GOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $GMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Annual Income :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $AIncome . '</td><td style="width:18%;"></td><td  style="width:45%;text-align:left;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Sibling Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Is Brother / Sister Studying in this College :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $Studying . '</td><td style="width:20%"></td><td  style="width:20%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Roll No 1 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoI . '</td><td style="width:5%;"></td><td style="width:12%">Roll No 2 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoII . '</td><td style="width:18%;"></td></tr></table>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Previous Institution Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Name and Address of the Institution last attended :</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $School . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Period of Study Year From :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyF . '</td><td style="width:5%;"></td><td style="width:10%">Year To :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyT . '</td><td style="width:30%;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD X</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $Board . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Rank . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $Division . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $tenTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarks . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubI . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $Rollno . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOp . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVI . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIM . '</td></tr>
	   
	</table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD XII</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $BoardXII . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $RankXII . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $DivisionXII . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $twlTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarksXII . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RollnoXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOpXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIMXII . '</td></tr>
	   
	</table>
	<br>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Other Information</div>
	<br>
	<!--table border="1" style="border-spacing: 0;" width="100%">
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Group</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Honours</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective I</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective II</td></tr>
	   <tr style="height:50px;"><td style="font-size:14px;text-align:center;height:50px;width:25%;">' . $Groups . '  </td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;">' . $Honours . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveI . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveII . '</td></tr>
	   
	   </table-->
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Choice of Subjects ( Group, Honours, Elective I, Elective II ) :</td></tr></table>
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $Course_Comb . '</td></tr></table>
	   
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:10%"> Is Differently Abled ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $Disability . '</td><td style="width:40%"></td><td  style="width:25%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether belonging to Urban / Rural </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $URArea . '</td><td style="width:25%">&nbsp;&nbsp;If Rural, mention Place</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;" >' . $RArea . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether cleared CUET (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $CUET . '</td><td style="width:45%">&nbsp;&nbsp;If Yes, Marks scored in CUET Percentage</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $CUETper . '</td></tr></table>
    		<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Economically Weaker (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $weaker . '</td><td style="width:45%"></td><td  style="width:10%;" ></td></tr></table>

	
	
	
	<p style="text-align:left;font-size:13px;"><b><u>IMPORTANT INSTRUCTIONS FOR CANDIDATES : </u></b></p>
	<ul>
	<li>Please retain the photocopy of the filled-in form for future reference.</li>
	<li>Documents to be attached :<br>
	      <p style="margin-left:10%;">a) Attested copy of Certificates and Mark sheets from Std. X onwards.<br>
			b) ST/SC/BC/OBC certificate.<br>
			c) Age Certificate / Class X Admit Card.<br>
			d) Baptism Certificate (for Catholic students)<br>
			e) CUET Certificate
			</p>
	</li>
	</ul>
	
	<p style="text-align:left;font-size:13px;"><b><u>UNDERTAKING : </u></b></p>
	<p style="text-align:justify;font-size:12px;font-weight:bold;">We certify that we have read and understood the prospectus and promise to abide by the rules and regulations of the College in all
matters of study, attendance and discipline.</p>
	<br><br><br>
	<table width="100%">
	<tr style ="margin-top:-100px !important;">
					<td style = "text-align:left;width:100%;font-size:15px;">Date______________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature of the Parent/Guardian</td>
					<!--td style = "text-align:center;width:30%;font-size:11px;">Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Place</td>
					<td style = "text-align:right;width:40%;font-size:11px;">Place</td-->
				</tr>
			</table>
	
	<br><br><br>
	<p style="font-weight:bold;margin-left:70%;">Signature of the Principal</p>
	<table width="100%"><tr><td style=""><img src="Uploads/XMarksheet/' . $XMarksheet . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/Marksheet/' . $Marksheet . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/DC/' . $DC . '" style="" /></td></tr></table>
	
	   
	   
	   
	</div>
	';
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetHTMLHeader('<div style="text-align: right;font-weight:bold;">Application Number : ' . $ids . '</div>');
		$mpdf->WriteHTML($htmlData);

		$file_name = "" . $app_no . '-' . date('d-m-Y') . '.pdf';
		$mpdf->Output($file_name, "D");
	} elseif ($Disability == 'NO' && $CUET == 'Yes' && $weaker == 'Yes') {

		$htmlData = '
	
	
   <div class="container"><table width="100%"><tr><td style="width:90%;"><img src="images/DBCT2.png" style="" /></td><td style="width:10%;"><img src="Uploads/Photo/' . $PPhoto . '" style="width:120px;height:120px;" /></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Admission No :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;" >' . $ids . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Admission Date :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;"></td></tr></table>
	<br>
	<div style="width:100%;text-align:center;padding-top:5px;padding-bottom:5px;font-weight:bold;">Online Admission Registration 2023 - 2024</div>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Personal Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:43%">Applicant Name (As in CI. X Admit Card) :</td><td style="border-bottom: 1px solid black;text-align:left;width:57%" >' . $AName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:10%">Shift :</td><td style="border-bottom: 1px solid black;text-align:left;width:90%" >' . $Shift . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:25%">Programme applied for :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Programme . '</td><td style="width:25%;">&nbsp;&nbsp;&nbsp;Course Combination :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;">' . $Course_Comb . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%;">Gender :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $Gender . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Blood Group :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $BG . '</td><td style="width:20%">&nbsp;&nbsp;&nbsp;Date of Birth :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;" >' . $dateOfBirth . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Nationality :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;" >' . $Nationality . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Marital Status :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $MStatus . '</td><td style="width:12%">Category :</td><td style="border-bottom: 1px solid black;text-align:left;width:18%" >' . $Category . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td style="width:15%">Race / Tribe :</td><td style="border-bottom: 1px solid black;text-align:left;width:85%" >' . $RT . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Religion :</td><td  style="border-bottom: 1px solid black;width:40%;text-align:left;" >' . $Religion . '</td><td style="width:18%;">&nbsp;&nbsp;&nbsp;Sub Religion :</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;"> ' . $SReligion . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Adhaar No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $AadharNumber . '</td><td style="width:12%;">&nbsp;&nbsp;&nbsp;Pan No :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $PanNumber . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $mobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:12%;">Email ID :</td><td  style="border-bottom: 1px solid black;width:88%;text-align:left;"> ' . $email . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Residential Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $RAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $City . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $State . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $Pincode . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Permanent Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $PAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $PCity . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PState . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PPincode . '</td></tr></table>
	
	<br>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Parents Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:22%">Name of the Father :</td><td style="border-bottom: 1px solid black;text-align:left;width:78%" >' . $FName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $FQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $FOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $FMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Mother :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $MName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $MQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $MOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $MMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Guardian :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $GName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $GQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $GOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $GMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Annual Income :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $AIncome . '</td><td style="width:18%;"></td><td  style="width:45%;text-align:left;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Sibling Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Is Brother / Sister Studying in this College :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $Studying . '</td><td style="width:20%"></td><td  style="width:20%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Roll No 1 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoI . '</td><td style="width:5%;"></td><td style="width:12%">Roll No 2 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoII . '</td><td style="width:18%;"></td></tr></table>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Previous Institution Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Name and Address of the Institution last attended :</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $School . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Period of Study Year From :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyF . '</td><td style="width:5%;"></td><td style="width:10%">Year To :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyT . '</td><td style="width:30%;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD X</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $Board . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Rank . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $Division . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $tenTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarks . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubI . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $Rollno . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOp . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVI . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIM . '</td></tr>
	   
	</table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD XII</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $BoardXII . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $RankXII . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $DivisionXII . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $twlTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarksXII . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RollnoXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOpXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIMXII . '</td></tr>
	   
	</table>
	<br>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Other Information</div>
	<br>
	<!--table border="1" style="border-spacing: 0;" width="100%">
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Group</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Honours</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective I</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective II</td></tr>
	   <tr style="height:50px;"><td style="font-size:14px;text-align:center;height:50px;width:25%;">' . $Groups . '  </td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;">' . $Honours . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveI . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveII . '</td></tr>
	   
	   </table-->
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Choice of Subjects ( Group, Honours, Elective I, Elective II ) :</td></tr></table>
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $Course_Comb . '</td></tr></table>
	   
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:10%"> Is Differently Abled ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $Disability . '</td><td style="width:40%"></td><td  style="width:25%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether belonging to Urban / Rural </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $URArea . '</td><td style="width:25%">&nbsp;&nbsp;If Rural, mention Place</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;" >' . $RArea . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether cleared CUET (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $CUET . '</td><td style="width:45%">&nbsp;&nbsp;If Yes, Marks scored in CUET Percentage</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $CUETper . '</td></tr></table>
    		<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Economically Weaker (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $weaker . '</td><td style="width:45%"></td><td  style="width:10%;" ></td></tr></table>

	
	
	
	<p style="text-align:left;font-size:13px;"><b><u>IMPORTANT INSTRUCTIONS FOR CANDIDATES : </u></b></p>
	<ul>
	<li>Please retain the photocopy of the filled-in form for future reference.</li>
	<li>Documents to be attached :<br>
	      <p style="margin-left:10%;">a) Attested copy of Certificates and Mark sheets from Std. X onwards.<br>
			b) ST/SC/BC/OBC certificate.<br>
			c) Age Certificate / Class X Admit Card.<br>
			d) Baptism Certificate (for Catholic students)<br>
			e) CUET Certificate
			</p>
	</li>
	</ul>
	
	<p style="text-align:left;font-size:13px;"><b><u>UNDERTAKING : </u></b></p>
	<p style="text-align:justify;font-size:12px;font-weight:bold;">We certify that we have read and understood the prospectus and promise to abide by the rules and regulations of the College in all
matters of study, attendance and discipline.</p>
	<br><br><br>
	<table width="100%">
	<tr style ="margin-top:-100px !important;">
					<td style = "text-align:left;width:100%;font-size:15px;">Date______________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature of the Parent/Guardian</td>
					<!--td style = "text-align:center;width:30%;font-size:11px;">Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Place</td>
					<td style = "text-align:right;width:40%;font-size:11px;">Place</td-->
				</tr>
			</table>
	
	<br><br><br>
	<p style="font-weight:bold;margin-left:70%;">Signature of the Principal</p>
	<table width="100%"><tr><td style=""><img src="Uploads/XMarksheet/' . $XMarksheet . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/Marksheet/' . $Marksheet . '" style="" /></td></tr></table>
	
	<table width="100%"><tr><td style=""><img src="Uploads/CUET/' . $cuetMarksheet . '" style="" /></td></tr></table>
	  <table width="100%"><tr><td style=""><img src="Uploads/Weaker/' . $weakcert . '" style="" /></td></tr></table>  
	   
	   
	</div>
	';
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetHTMLHeader('<div style="text-align: right;font-weight:bold;">Application Number : ' . $ids . '</div>');
		$mpdf->WriteHTML($htmlData);

		$file_name = "" . $app_no . '-' . date('d-m-Y') . '.pdf';
		$mpdf->Output($file_name, "D");
	} elseif ($Disability == 'Yes' && $CUET == 'No' && $weaker == 'Yes') {

		$htmlData = '
	
	
   <div class="container"><table width="100%"><tr><td style="width:90%;"><img src="images/DBCT2.png" style="" /></td><td style="width:10%;"><img src="Uploads/Photo/' . $PPhoto . '" style="width:120px;height:120px;" /></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Admission No :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;" >' . $ids . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Admission Date :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;"></td></tr></table>
	<br>
	<div style="width:100%;text-align:center;padding-top:5px;padding-bottom:5px;font-weight:bold;">Online Admission Registration 2023 - 2024</div>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Personal Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:43%">Applicant Name (As in CI. X Admit Card) :</td><td style="border-bottom: 1px solid black;text-align:left;width:57%" >' . $AName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:10%">Shift :</td><td style="border-bottom: 1px solid black;text-align:left;width:90%" >' . $Shift . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:25%">Programme applied for :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Programme . '</td><td style="width:25%;">&nbsp;&nbsp;&nbsp;Course Combination :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;">' . $Course_Comb . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%;">Gender :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $Gender . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Blood Group :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $BG . '</td><td style="width:20%">&nbsp;&nbsp;&nbsp;Date of Birth :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;" >' . $dateOfBirth . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Nationality :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;" >' . $Nationality . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Marital Status :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $MStatus . '</td><td style="width:12%">Category :</td><td style="border-bottom: 1px solid black;text-align:left;width:18%" >' . $Category . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td style="width:15%">Race / Tribe :</td><td style="border-bottom: 1px solid black;text-align:left;width:85%" >' . $RT . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Religion :</td><td  style="border-bottom: 1px solid black;width:40%;text-align:left;" >' . $Religion . '</td><td style="width:18%;">&nbsp;&nbsp;&nbsp;Sub Religion :</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;"> ' . $SReligion . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Adhaar No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $AadharNumber . '</td><td style="width:12%;">&nbsp;&nbsp;&nbsp;Pan No :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $PanNumber . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $mobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:12%;">Email ID :</td><td  style="border-bottom: 1px solid black;width:88%;text-align:left;"> ' . $email . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Residential Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $RAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $City . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $State . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $Pincode . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Permanent Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $PAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $PCity . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PState . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PPincode . '</td></tr></table>
	
	<br>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Parents Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:22%">Name of the Father :</td><td style="border-bottom: 1px solid black;text-align:left;width:78%" >' . $FName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $FQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $FOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $FMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Mother :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $MName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $MQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $MOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $MMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Guardian :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $GName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $GQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $GOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $GMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Annual Income :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $AIncome . '</td><td style="width:18%;"></td><td  style="width:45%;text-align:left;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Sibling Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Is Brother / Sister Studying in this College :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $Studying . '</td><td style="width:20%"></td><td  style="width:20%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Roll No 1 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoI . '</td><td style="width:5%;"></td><td style="width:12%">Roll No 2 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoII . '</td><td style="width:18%;"></td></tr></table>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Previous Institution Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Name and Address of the Institution last attended :</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $School . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Period of Study Year From :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyF . '</td><td style="width:5%;"></td><td style="width:10%">Year To :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyT . '</td><td style="width:30%;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD X</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $Board . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Rank . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $Division . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $tenTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarks . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubI . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $Rollno . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOp . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVI . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIM . '</td></tr>
	   
	</table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD XII</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $BoardXII . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $RankXII . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $DivisionXII . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $twlTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarksXII . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RollnoXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOpXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIMXII . '</td></tr>
	   
	</table>
	<br>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Other Information</div>
	<br>
	<!--table border="1" style="border-spacing: 0;" width="100%">
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Group</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Honours</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective I</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective II</td></tr>
	   <tr style="height:50px;"><td style="font-size:14px;text-align:center;height:50px;width:25%;">' . $Groups . '  </td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;">' . $Honours . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveI . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveII . '</td></tr>
	   
	   </table-->
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Choice of Subjects ( Group, Honours, Elective I, Elective II ) :</td></tr></table>
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $Course_Comb . '</td></tr></table>
	   
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:10%"> Is Differently Abled ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $Disability . '</td><td style="width:40%"></td><td  style="width:25%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether belonging to Urban / Rural </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $URArea . '</td><td style="width:25%">&nbsp;&nbsp;If Rural, mention Place</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;" >' . $RArea . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether cleared CUET (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $CUET . '</td><td style="width:45%">&nbsp;&nbsp;If Yes, Marks scored in CUET Percentage</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $CUETper . '</td></tr></table>
    		<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Economically Weaker (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $weaker . '</td><td style="width:45%"></td><td  style="width:10%;" ></td></tr></table>

	
	
	
	<p style="text-align:left;font-size:13px;"><b><u>IMPORTANT INSTRUCTIONS FOR CANDIDATES : </u></b></p>
	<ul>
	<li>Please retain the photocopy of the filled-in form for future reference.</li>
	<li>Documents to be attached :<br>
	      <p style="margin-left:10%;">a) Attested copy of Certificates and Mark sheets from Std. X onwards.<br>
			b) ST/SC/BC/OBC certificate.<br>
			c) Age Certificate / Class X Admit Card.<br>
			d) Baptism Certificate (for Catholic students)<br>
			e) CUET Certificate
			</p>
	</li>
	</ul>
	
	<p style="text-align:left;font-size:13px;"><b><u>UNDERTAKING : </u></b></p>
	<p style="text-align:justify;font-size:12px;font-weight:bold;">We certify that we have read and understood the prospectus and promise to abide by the rules and regulations of the College in all
matters of study, attendance and discipline.</p>
	<br><br><br>
	<table width="100%">
	<tr style ="margin-top:-100px !important;">
					<td style = "text-align:left;width:100%;font-size:15px;">Date______________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature of the Parent/Guardian</td>
					<!--td style = "text-align:center;width:30%;font-size:11px;">Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Place</td>
					<td style = "text-align:right;width:40%;font-size:11px;">Place</td-->
				</tr>
			</table>
	
	<br><br><br>
	<p style="font-weight:bold;margin-left:70%;">Signature of the Principal</p>
	<table width="100%"><tr><td style=""><img src="Uploads/XMarksheet/' . $XMarksheet . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/Marksheet/' . $Marksheet . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/DC/' . $DC . '" style="" /></td></tr></table>
	<!--table width="100%"><tr><td style=""><img src="Uploads/CUET/' . $cuetMarksheet . '" style="" /></td></tr></table!-->
	  <table width="100%"><tr><td style=""><img src="Uploads/Weaker/' . $weakcert . '" style="" /></td></tr></table>  
	   
	   
	</div>
	';
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetHTMLHeader('<div style="text-align: right;font-weight:bold;">Application Number : ' . $ids . '</div>');
		$mpdf->WriteHTML($htmlData);

		$file_name = "" . $app_no . '-' . date('d-m-Y') . '.pdf';
		$mpdf->Output($file_name, "D");
	} elseif ($Disability == 'Yes' && $CUET == 'Yes' && $weaker == 'No') {

		$htmlData = '
	
	
   <div class="container"><table width="100%"><tr><td style="width:90%;"><img src="images/DBCT2.png" style="" /></td><td style="width:10%;"><img src="Uploads/Photo/' . $PPhoto . '" style="width:120px;height:120px;" /></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Admission No :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;" >' . $ids . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Admission Date :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;"></td></tr></table>
	<br>
	<div style="width:100%;text-align:center;padding-top:5px;padding-bottom:5px;font-weight:bold;">Online Admission Registration 2023 - 2024</div>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Personal Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:43%">Applicant Name (As in CI. X Admit Card) :</td><td style="border-bottom: 1px solid black;text-align:left;width:57%" >' . $AName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:10%">Shift :</td><td style="border-bottom: 1px solid black;text-align:left;width:90%" >' . $Shift . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:25%">Programme applied for :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Programme . '</td><td style="width:25%;">&nbsp;&nbsp;&nbsp;Course Combination :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;">' . $Course_Comb . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%;">Gender :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $Gender . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Blood Group :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $BG . '</td><td style="width:20%">&nbsp;&nbsp;&nbsp;Date of Birth :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;" >' . $dateOfBirth . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Nationality :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;" >' . $Nationality . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Marital Status :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $MStatus . '</td><td style="width:12%">Category :</td><td style="border-bottom: 1px solid black;text-align:left;width:18%" >' . $Category . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td style="width:15%">Race / Tribe :</td><td style="border-bottom: 1px solid black;text-align:left;width:85%" >' . $RT . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Religion :</td><td  style="border-bottom: 1px solid black;width:40%;text-align:left;" >' . $Religion . '</td><td style="width:18%;">&nbsp;&nbsp;&nbsp;Sub Religion :</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;"> ' . $SReligion . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Adhaar No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $AadharNumber . '</td><td style="width:12%;">&nbsp;&nbsp;&nbsp;Pan No :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $PanNumber . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $mobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:12%;">Email ID :</td><td  style="border-bottom: 1px solid black;width:88%;text-align:left;"> ' . $email . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Residential Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $RAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $City . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $State . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $Pincode . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Permanent Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $PAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $PCity . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PState . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PPincode . '</td></tr></table>
	
	<br>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Parents Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:22%">Name of the Father :</td><td style="border-bottom: 1px solid black;text-align:left;width:78%" >' . $FName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $FQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $FOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $FMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Mother :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $MName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $MQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $MOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $MMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Guardian :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $GName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $GQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $GOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $GMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Annual Income :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $AIncome . '</td><td style="width:18%;"></td><td  style="width:45%;text-align:left;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Sibling Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Is Brother / Sister Studying in this College :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $Studying . '</td><td style="width:20%"></td><td  style="width:20%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Roll No 1 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoI . '</td><td style="width:5%;"></td><td style="width:12%">Roll No 2 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoII . '</td><td style="width:18%;"></td></tr></table>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Previous Institution Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Name and Address of the Institution last attended :</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $School . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Period of Study Year From :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyF . '</td><td style="width:5%;"></td><td style="width:10%">Year To :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyT . '</td><td style="width:30%;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD X</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $Board . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Rank . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $Division . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $tenTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarks . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubI . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $Rollno . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOp . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVI . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIM . '</td></tr>
	   
	</table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD XII</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $BoardXII . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $RankXII . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $DivisionXII . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $twlTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarksXII . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RollnoXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOpXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIMXII . '</td></tr>
	   
	</table>
	<br>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Other Information</div>
	<br>
	<!--table border="1" style="border-spacing: 0;" width="100%">
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Group</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Honours</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective I</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective II</td></tr>
	   <tr style="height:50px;"><td style="font-size:14px;text-align:center;height:50px;width:25%;">' . $Groups . '  </td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;">' . $Honours . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveI . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveII . '</td></tr>
	   
	   </table-->
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Choice of Subjects ( Group, Honours, Elective I, Elective II ) :</td></tr></table>
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $Course_Comb . '</td></tr></table>
	   
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:10%"> Is Differently Abled ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $Disability . '</td><td style="width:40%"></td><td  style="width:25%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether belonging to Urban / Rural </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $URArea . '</td><td style="width:25%">&nbsp;&nbsp;If Rural, mention Place</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;" >' . $RArea . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether cleared CUET (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $CUET . '</td><td style="width:45%">&nbsp;&nbsp;If Yes, Marks scored in CUET Percentage</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $CUETper . '</td></tr></table>
    		<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Economically Weaker (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $weaker . '</td><td style="width:45%"></td><td  style="width:10%;" ></td></tr></table>

	
	
	
	<p style="text-align:left;font-size:13px;"><b><u>IMPORTANT INSTRUCTIONS FOR CANDIDATES : </u></b></p>
	<ul>
	<li>Please retain the photocopy of the filled-in form for future reference.</li>
	<li>Documents to be attached :<br>
	      <p style="margin-left:10%;">a) Attested copy of Certificates and Mark sheets from Std. X onwards.<br>
			b) ST/SC/BC/OBC certificate.<br>
			c) Age Certificate / Class X Admit Card.<br>
			d) Baptism Certificate (for Catholic students)<br>
			e) CUET Certificate
			</p>
	</li>
	</ul>
	
	<p style="text-align:left;font-size:13px;"><b><u>UNDERTAKING : </u></b></p>
	<p style="text-align:justify;font-size:12px;font-weight:bold;">We certify that we have read and understood the prospectus and promise to abide by the rules and regulations of the College in all
matters of study, attendance and discipline.</p>
	<br><br><br>
	<table width="100%">
	<tr style ="margin-top:-100px !important;">
					<td style = "text-align:left;width:100%;font-size:15px;">Date______________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature of the Parent/Guardian</td>
					<!--td style = "text-align:center;width:30%;font-size:11px;">Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Place</td>
					<td style = "text-align:right;width:40%;font-size:11px;">Place</td-->
				</tr>
			</table>
	
	<br><br><br>
	<p style="font-weight:bold;margin-left:70%;">Signature of the Principal</p>
	<table width="100%"><tr><td style=""><img src="Uploads/XMarksheet/' . $XMarksheet . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/Marksheet/' . $Marksheet . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/DC/' . $DC . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/CUET/' . $cuetMarksheet . '" style="" /></td></tr></table!>
	  <!--table width="100%"><tr><td style=""><img src="Uploads/Weaker/' . $weakcert . '" style="" /></td></tr></table-->  
	   
	   
	</div>
	';
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetHTMLHeader('<div style="text-align: right;font-weight:bold;">Application Number : ' . $ids . '</div>');
		$mpdf->WriteHTML($htmlData);

		$file_name = "" . $app_no . '-' . date('d-m-Y') . '.pdf';
		$mpdf->Output($file_name, "D");
	} elseif ($Disability == 'No' && $CUET == 'Yes' && $weaker == 'No') {

		$htmlData = '
	
	
   <div class="container"><table width="100%"><tr><td style="width:90%;"><img src="images/DBCT2.png" style="" /></td><td style="width:10%;"><img src="Uploads/Photo/' . $PPhoto . '" style="width:120px;height:120px;" /></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Admission No :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;" >' . $ids . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Admission Date :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;"></td></tr></table>
	<br>
	<div style="width:100%;text-align:center;padding-top:5px;padding-bottom:5px;font-weight:bold;">Online Admission Registration 2023 - 2024</div>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Personal Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:43%">Applicant Name (As in CI. X Admit Card) :</td><td style="border-bottom: 1px solid black;text-align:left;width:57%" >' . $AName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:10%">Shift :</td><td style="border-bottom: 1px solid black;text-align:left;width:90%" >' . $Shift . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:25%">Programme applied for :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Programme . '</td><td style="width:25%;">&nbsp;&nbsp;&nbsp;Course Combination :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;">' . $Course_Comb . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%;">Gender :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $Gender . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Blood Group :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $BG . '</td><td style="width:20%">&nbsp;&nbsp;&nbsp;Date of Birth :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;" >' . $dateOfBirth . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Nationality :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;" >' . $Nationality . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Marital Status :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $MStatus . '</td><td style="width:12%">Category :</td><td style="border-bottom: 1px solid black;text-align:left;width:18%" >' . $Category . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td style="width:15%">Race / Tribe :</td><td style="border-bottom: 1px solid black;text-align:left;width:85%" >' . $RT . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Religion :</td><td  style="border-bottom: 1px solid black;width:40%;text-align:left;" >' . $Religion . '</td><td style="width:18%;">&nbsp;&nbsp;&nbsp;Sub Religion :</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;"> ' . $SReligion . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Adhaar No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $AadharNumber . '</td><td style="width:12%;">&nbsp;&nbsp;&nbsp;Pan No :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $PanNumber . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $mobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:12%;">Email ID :</td><td  style="border-bottom: 1px solid black;width:88%;text-align:left;"> ' . $email . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Residential Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $RAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $City . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $State . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $Pincode . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Permanent Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $PAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $PCity . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PState . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PPincode . '</td></tr></table>
	
	<br>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Parents Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:22%">Name of the Father :</td><td style="border-bottom: 1px solid black;text-align:left;width:78%" >' . $FName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $FQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $FOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $FMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Mother :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $MName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $MQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $MOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $MMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Guardian :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $GName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $GQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $GOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $GMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Annual Income :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $AIncome . '</td><td style="width:18%;"></td><td  style="width:45%;text-align:left;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Sibling Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Is Brother / Sister Studying in this College :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $Studying . '</td><td style="width:20%"></td><td  style="width:20%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Roll No 1 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoI . '</td><td style="width:5%;"></td><td style="width:12%">Roll No 2 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoII . '</td><td style="width:18%;"></td></tr></table>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Previous Institution Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Name and Address of the Institution last attended :</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $School . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Period of Study Year From :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyF . '</td><td style="width:5%;"></td><td style="width:10%">Year To :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyT . '</td><td style="width:30%;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD X</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $Board . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Rank . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $Division . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $tenTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarks . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubI . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $Rollno . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOp . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVI . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIM . '</td></tr>
	   
	</table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD XII</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $BoardXII . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $RankXII . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $DivisionXII . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $twlTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarksXII . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RollnoXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOpXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIMXII . '</td></tr>
	   
	</table>
	<br>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Other Information</div>
	<br>
	<!--table border="1" style="border-spacing: 0;" width="100%">
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Group</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Honours</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective I</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective II</td></tr>
	   <tr style="height:50px;"><td style="font-size:14px;text-align:center;height:50px;width:25%;">' . $Groups . '  </td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;">' . $Honours . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveI . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveII . '</td></tr>
	   
	   </table-->
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Choice of Subjects ( Group, Honours, Elective I, Elective II ) :</td></tr></table>
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $Course_Comb . '</td></tr></table>
	   
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:10%"> Is Differently Abled ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $Disability . '</td><td style="width:40%"></td><td  style="width:25%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether belonging to Urban / Rural </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $URArea . '</td><td style="width:25%">&nbsp;&nbsp;If Rural, mention Place</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;" >' . $RArea . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether cleared CUET (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $CUET . '</td><td style="width:45%">&nbsp;&nbsp;If Yes, Marks scored in CUET Percentage</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $CUETper . '</td></tr></table>
    		<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Economically Weaker (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $weaker . '</td><td style="width:45%"></td><td  style="width:10%;" ></td></tr></table>

	
	
	
	<p style="text-align:left;font-size:13px;"><b><u>IMPORTANT INSTRUCTIONS FOR CANDIDATES : </u></b></p>
	<ul>
	<li>Please retain the photocopy of the filled-in form for future reference.</li>
	<li>Documents to be attached :<br>
	      <p style="margin-left:10%;">a) Attested copy of Certificates and Mark sheets from Std. X onwards.<br>
			b) ST/SC/BC/OBC certificate.<br>
			c) Age Certificate / Class X Admit Card.<br>
			d) Baptism Certificate (for Catholic students)<br>
			e) CUET Certificate
			</p>
	</li>
	</ul>
	
	<p style="text-align:left;font-size:13px;"><b><u>UNDERTAKING : </u></b></p>
	<p style="text-align:justify;font-size:12px;font-weight:bold;">We certify that we have read and understood the prospectus and promise to abide by the rules and regulations of the College in all
matters of study, attendance and discipline.</p>
	<br><br><br>
	<table width="100%">
	<tr style ="margin-top:-100px !important;">
					<td style = "text-align:left;width:100%;font-size:15px;">Date______________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature of the Parent/Guardian</td>
					<!--td style = "text-align:center;width:30%;font-size:11px;">Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Place</td>
					<td style = "text-align:right;width:40%;font-size:11px;">Place</td-->
				</tr>
			</table>
	
	<br><br><br>
	<p style="font-weight:bold;margin-left:70%;">Signature of the Principal</p>
	<table width="100%"><tr><td style=""><img src="Uploads/XMarksheet/' . $XMarksheet . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/Marksheet/' . $Marksheet . '" style="" /></td></tr></table>
	<!--table width="100%"><tr><td style=""><img src="Uploads/DC/' . $DC . '" style="" /></td></tr></table-->
	<table width="100%"><tr><td style=""><img src="Uploads/CUET/' . $cuetMarksheet . '" style="" /></td></tr></table!>
	  <!--table width="100%"><tr><td style=""><img src="Uploads/Weaker/' . $weakcert . '" style="" /></td></tr></table-->  
	   
	   
	</div>
	';
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetHTMLHeader('<div style="text-align: right;font-weight:bold;">Application Number : ' . $ids . '</div>');
		$mpdf->WriteHTML($htmlData);

		$file_name = "" . $app_no . '-' . date('d-m-Y') . '.pdf';
		$mpdf->Output($file_name, "D");
	} elseif ($Disability == 'No' && $CUET == 'Yes' && $weaker == 'Yes') {

		$htmlData = '
	
	
   <div class="container"><table width="100%"><tr><td style="width:90%;"><img src="images/DBCT2.png" style="" /></td><td style="width:10%;"><img src="Uploads/Photo/' . $PPhoto . '" style="width:120px;height:120px;" /></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Admission No :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;" >' . $ids . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Admission Date :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;"></td></tr></table>
	<br>
	<div style="width:100%;text-align:center;padding-top:5px;padding-bottom:5px;font-weight:bold;">Online Admission Registration 2023 - 2024</div>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Personal Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:43%">Applicant Name (As in CI. X Admit Card) :</td><td style="border-bottom: 1px solid black;text-align:left;width:57%" >' . $AName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:10%">Shift :</td><td style="border-bottom: 1px solid black;text-align:left;width:90%" >' . $Shift . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:25%">Programme applied for :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Programme . '</td><td style="width:25%;">&nbsp;&nbsp;&nbsp;Course Combination :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;">' . $Course_Comb . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%;">Gender :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $Gender . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Blood Group :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $BG . '</td><td style="width:20%">&nbsp;&nbsp;&nbsp;Date of Birth :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;" >' . $dateOfBirth . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Nationality :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;" >' . $Nationality . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Marital Status :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $MStatus . '</td><td style="width:12%">Category :</td><td style="border-bottom: 1px solid black;text-align:left;width:18%" >' . $Category . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td style="width:15%">Race / Tribe :</td><td style="border-bottom: 1px solid black;text-align:left;width:85%" >' . $RT . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Religion :</td><td  style="border-bottom: 1px solid black;width:40%;text-align:left;" >' . $Religion . '</td><td style="width:18%;">&nbsp;&nbsp;&nbsp;Sub Religion :</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;"> ' . $SReligion . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Adhaar No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $AadharNumber . '</td><td style="width:12%;">&nbsp;&nbsp;&nbsp;Pan No :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $PanNumber . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $mobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:12%;">Email ID :</td><td  style="border-bottom: 1px solid black;width:88%;text-align:left;"> ' . $email . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Residential Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $RAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $City . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $State . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $Pincode . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Permanent Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $PAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $PCity . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PState . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PPincode . '</td></tr></table>
	
	<br>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Parents Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:22%">Name of the Father :</td><td style="border-bottom: 1px solid black;text-align:left;width:78%" >' . $FName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $FQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $FOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $FMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Mother :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $MName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $MQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $MOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $MMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Guardian :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $GName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $GQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $GOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $GMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Annual Income :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $AIncome . '</td><td style="width:18%;"></td><td  style="width:45%;text-align:left;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Sibling Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Is Brother / Sister Studying in this College :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $Studying . '</td><td style="width:20%"></td><td  style="width:20%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Roll No 1 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoI . '</td><td style="width:5%;"></td><td style="width:12%">Roll No 2 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoII . '</td><td style="width:18%;"></td></tr></table>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Previous Institution Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Name and Address of the Institution last attended :</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $School . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Period of Study Year From :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyF . '</td><td style="width:5%;"></td><td style="width:10%">Year To :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyT . '</td><td style="width:30%;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD X</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $Board . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Rank . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $Division . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $tenTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarks . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubI . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $Rollno . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOp . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVI . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIM . '</td></tr>
	   
	</table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD XII</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $BoardXII . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $RankXII . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $DivisionXII . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $twlTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarksXII . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RollnoXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOpXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIMXII . '</td></tr>
	   
	</table>
	<br>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Other Information</div>
	<br>
	<!--table border="1" style="border-spacing: 0;" width="100%">
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Group</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Honours</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective I</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective II</td></tr>
	   <tr style="height:50px;"><td style="font-size:14px;text-align:center;height:50px;width:25%;">' . $Groups . '  </td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;">' . $Honours . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveI . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveII . '</td></tr>
	   
	   </table-->
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Choice of Subjects ( Group, Honours, Elective I, Elective II ) :</td></tr></table>
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $Course_Comb . '</td></tr></table>
	   
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:10%"> Is Differently Abled ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $Disability . '</td><td style="width:40%"></td><td  style="width:25%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether belonging to Urban / Rural </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $URArea . '</td><td style="width:25%">&nbsp;&nbsp;If Rural, mention Place</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;" >' . $RArea . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether cleared CUET (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $CUET . '</td><td style="width:45%">&nbsp;&nbsp;If Yes, Marks scored in CUET Percentage</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $CUETper . '</td></tr></table>
    		<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Economically Weaker (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $weaker . '</td><td style="width:45%"></td><td  style="width:10%;" ></td></tr></table>

	
	
	
	<p style="text-align:left;font-size:13px;"><b><u>IMPORTANT INSTRUCTIONS FOR CANDIDATES : </u></b></p>
	<ul>
	<li>Please retain the photocopy of the filled-in form for future reference.</li>
	<li>Documents to be attached :<br>
	      <p style="margin-left:10%;">a) Attested copy of Certificates and Mark sheets from Std. X onwards.<br>
			b) ST/SC/BC/OBC certificate.<br>
			c) Age Certificate / Class X Admit Card.<br>
			d) Baptism Certificate (for Catholic students)<br>
			e) CUET Certificate
			</p>
	</li>
	</ul>
	
	<p style="text-align:left;font-size:13px;"><b><u>UNDERTAKING : </u></b></p>
	<p style="text-align:justify;font-size:12px;font-weight:bold;">We certify that we have read and understood the prospectus and promise to abide by the rules and regulations of the College in all
matters of study, attendance and discipline.</p>
	<br><br><br>
	<table width="100%">
	<tr style ="margin-top:-100px !important;">
					<td style = "text-align:left;width:100%;font-size:15px;">Date______________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature of the Parent/Guardian</td>
					<!--td style = "text-align:center;width:30%;font-size:11px;">Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Place</td>
					<td style = "text-align:right;width:40%;font-size:11px;">Place</td-->
				</tr>
			</table>
	
	<br><br><br>
	<p style="font-weight:bold;margin-left:70%;">Signature of the Principal</p>
	<table width="100%"><tr><td style=""><img src="Uploads/XMarksheet/' . $XMarksheet . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/Marksheet/' . $Marksheet . '" style="" /></td></tr></table>
	<!--table width="100%"><tr><td style=""><img src="Uploads/DC/' . $DC . '" style="" /></td></tr></table-->
	<table width="100%"><tr><td style=""><img src="Uploads/CUET/' . $cuetMarksheet . '" style="" /></td></tr></table!>
	  <table width="100%"><tr><td style=""><img src="Uploads/Weaker/' . $weakcert . '" style="" /></td></tr></table>  
	   
	   
	</div>
	';
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetHTMLHeader('<div style="text-align: right;font-weight:bold;">Application Number : ' . $ids . '</div>');
		$mpdf->WriteHTML($htmlData);

		$file_name = "" . $app_no . '-' . date('d-m-Y') . '.pdf';
		$mpdf->Output($file_name, "D");
	} elseif ($Disability == 'No' && $CUET == 'No' && $weaker == 'Yes') {

		$htmlData = '
	
	
   <div class="container"><table width="100%"><tr><td style="width:90%;"><img src="images/DBCT2.png" style="" /></td><td style="width:10%;"><img src="Uploads/Photo/' . $PPhoto . '" style="width:120px;height:120px;" /></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Admission No :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;" >' . $ids . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Admission Date :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;"></td></tr></table>
	<br>
	<div style="width:100%;text-align:center;padding-top:5px;padding-bottom:5px;font-weight:bold;">Online Admission Registration 2023 - 2024</div>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Personal Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:43%">Applicant Name (As in CI. X Admit Card) :</td><td style="border-bottom: 1px solid black;text-align:left;width:57%" >' . $AName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:10%">Shift :</td><td style="border-bottom: 1px solid black;text-align:left;width:90%" >' . $Shift . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:25%">Programme applied for :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Programme . '</td><td style="width:25%;">&nbsp;&nbsp;&nbsp;Course Combination :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;">' . $Course_Comb . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%;">Gender :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $Gender . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Blood Group :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $BG . '</td><td style="width:20%">&nbsp;&nbsp;&nbsp;Date of Birth :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;" >' . $dateOfBirth . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Nationality :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;" >' . $Nationality . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Marital Status :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $MStatus . '</td><td style="width:12%">Category :</td><td style="border-bottom: 1px solid black;text-align:left;width:18%" >' . $Category . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td style="width:15%">Race / Tribe :</td><td style="border-bottom: 1px solid black;text-align:left;width:85%" >' . $RT . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Religion :</td><td  style="border-bottom: 1px solid black;width:40%;text-align:left;" >' . $Religion . '</td><td style="width:18%;">&nbsp;&nbsp;&nbsp;Sub Religion :</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;"> ' . $SReligion . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Adhaar No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $AadharNumber . '</td><td style="width:12%;">&nbsp;&nbsp;&nbsp;Pan No :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $PanNumber . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $mobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:12%;">Email ID :</td><td  style="border-bottom: 1px solid black;width:88%;text-align:left;"> ' . $email . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Residential Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $RAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $City . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $State . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $Pincode . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Permanent Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $PAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $PCity . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PState . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PPincode . '</td></tr></table>
	
	<br>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Parents Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:22%">Name of the Father :</td><td style="border-bottom: 1px solid black;text-align:left;width:78%" >' . $FName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $FQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $FOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $FMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Mother :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $MName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $MQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $MOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $MMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Guardian :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $GName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $GQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $GOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $GMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Annual Income :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $AIncome . '</td><td style="width:18%;"></td><td  style="width:45%;text-align:left;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Sibling Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Is Brother / Sister Studying in this College :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $Studying . '</td><td style="width:20%"></td><td  style="width:20%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Roll No 1 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoI . '</td><td style="width:5%;"></td><td style="width:12%">Roll No 2 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoII . '</td><td style="width:18%;"></td></tr></table>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Previous Institution Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Name and Address of the Institution last attended :</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $School . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Period of Study Year From :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyF . '</td><td style="width:5%;"></td><td style="width:10%">Year To :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyT . '</td><td style="width:30%;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD X</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $Board . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Rank . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $Division . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $tenTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarks . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubI . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $Rollno . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOp . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVI . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIM . '</td></tr>
	   
	</table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD XII</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $BoardXII . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $RankXII . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $DivisionXII . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $twlTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarksXII . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RollnoXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOpXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIMXII . '</td></tr>
	   
	</table>
	<br>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Other Information</div>
	<br>
	<!--table border="1" style="border-spacing: 0;" width="100%">
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Group</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Honours</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective I</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective II</td></tr>
	   <tr style="height:50px;"><td style="font-size:14px;text-align:center;height:50px;width:25%;">' . $Groups . '  </td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;">' . $Honours . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveI . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveII . '</td></tr>
	   
	   </table-->
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Choice of Subjects ( Group, Honours, Elective I, Elective II ) :</td></tr></table>
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $Course_Comb . '</td></tr></table>
	   
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:10%"> Is Differently Abled ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $Disability . '</td><td style="width:40%"></td><td  style="width:25%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether belonging to Urban / Rural </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $URArea . '</td><td style="width:25%">&nbsp;&nbsp;If Rural, mention Place</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;" >' . $RArea . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether cleared CUET (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $CUET . '</td><td style="width:45%">&nbsp;&nbsp;If Yes, Marks scored in CUET Percentage</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $CUETper . '</td></tr></table>
    		<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Economically Weaker (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $weaker . '</td><td style="width:45%"></td><td  style="width:10%;" ></td></tr></table>

	
	
	
	<p style="text-align:left;font-size:13px;"><b><u>IMPORTANT INSTRUCTIONS FOR CANDIDATES : </u></b></p>
	<ul>
	<li>Please retain the photocopy of the filled-in form for future reference.</li>
	<li>Documents to be attached :<br>
	      <p style="margin-left:10%;">a) Attested copy of Certificates and Mark sheets from Std. X onwards.<br>
			b) ST/SC/BC/OBC certificate.<br>
			c) Age Certificate / Class X Admit Card.<br>
			d) Baptism Certificate (for Catholic students)<br>
			e) CUET Certificate
			</p>
	</li>
	</ul>
	
	<p style="text-align:left;font-size:13px;"><b><u>UNDERTAKING : </u></b></p>
	<p style="text-align:justify;font-size:12px;font-weight:bold;">We certify that we have read and understood the prospectus and promise to abide by the rules and regulations of the College in all
matters of study, attendance and discipline.</p>
	<br><br><br>
	<table width="100%">
	<tr style ="margin-top:-100px !important;">
					<td style = "text-align:left;width:100%;font-size:15px;">Date______________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature of the Parent/Guardian</td>
					<!--td style = "text-align:center;width:30%;font-size:11px;">Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Place</td>
					<td style = "text-align:right;width:40%;font-size:11px;">Place</td-->
				</tr>
			</table>
	
	<br><br><br>
	<p style="font-weight:bold;margin-left:70%;">Signature of the Principal</p>
	<table width="100%"><tr><td style=""><img src="Uploads/XMarksheet/' . $XMarksheet . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/Marksheet/' . $Marksheet . '" style="" /></td></tr></table>
	
	  <table width="100%"><tr><td style=""><img src="Uploads/Weaker/' . $weakcert . '" style="" /></td></tr></table>  
	   
	   
	</div>
	';
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetHTMLHeader('<div style="text-align: right;font-weight:bold;">Application Number : ' . $ids . '</div>');
		$mpdf->WriteHTML($htmlData);

		$file_name = "" . $app_no . '-' . date('d-m-Y') . '.pdf';
		$mpdf->Output($file_name, "D");
	} else {

		$htmlData = '
	
	
   <div class="container"><table width="100%"><tr><td style="width:90%;"><img src="images/DBCT2.png" style="" /></td><td style="width:10%;"><img src="Uploads/Photo/' . $PPhoto . '" style="width:120px;height:120px;" /></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Admission No :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;" >' . $ids . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Admission Date :</td><td  style="border-bottom: 1px solid black;width:35%;text-align:left;"></td></tr></table>
	<br>
	<div style="width:100%;text-align:center;padding-top:5px;padding-bottom:5px;font-weight:bold;">Online Admission Registration 2023 - 2024</div>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Personal Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:43%">Applicant Name (As in CI. X Admit Card) :</td><td style="border-bottom: 1px solid black;text-align:left;width:57%" >' . $AName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:10%">Shift :</td><td style="border-bottom: 1px solid black;text-align:left;width:90%" >' . $Shift . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:25%">Programme applied for :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Programme . '</td><td style="width:25%;">&nbsp;&nbsp;&nbsp;Course Combination :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;">' . $Course_Comb . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%;">Gender :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $Gender . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Blood Group :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;">' . $BG . '</td><td style="width:20%">&nbsp;&nbsp;&nbsp;Date of Birth :</td><td  style="border-bottom: 1px solid black;width:33%;text-align:left;" >' . $dateOfBirth . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Nationality :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;" >' . $Nationality . '</td><td style="width:20%;">&nbsp;&nbsp;&nbsp;Marital Status :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $MStatus . '</td><td style="width:12%">Category :</td><td style="border-bottom: 1px solid black;text-align:left;width:18%" >' . $Category . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td style="width:15%">Race / Tribe :</td><td style="border-bottom: 1px solid black;text-align:left;width:85%" >' . $RT . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Religion :</td><td  style="border-bottom: 1px solid black;width:40%;text-align:left;" >' . $Religion . '</td><td style="width:18%;">&nbsp;&nbsp;&nbsp;Sub Religion :</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;"> ' . $SReligion . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Adhaar No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $AadharNumber . '</td><td style="width:12%;">&nbsp;&nbsp;&nbsp;Pan No :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $PanNumber . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $mobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:12%;">Email ID :</td><td  style="border-bottom: 1px solid black;width:88%;text-align:left;"> ' . $email . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Residential Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $RAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $City . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $State . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $Pincode . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:22%;">Permanent Address :</td><td  style="border-bottom: 1px solid black;width:78%;text-align:left;"> ' . $PAddress . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:7%">City :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $PCity . '</td><td style="width:10%;">&nbsp;&nbsp;&nbsp;State :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PState . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Pincode :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;"> ' . $PPincode . '</td></tr></table>
	
	<br>
	
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Parents Information</div>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:22%">Name of the Father :</td><td style="border-bottom: 1px solid black;text-align:left;width:78%" >' . $FName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $FQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $FOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $FMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Mother :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $MName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $MQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $MOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $MMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr><td colspan="3" style="width:24%">Name of the Guardian :</td><td style="border-bottom: 1px solid black;text-align:left;width:76%" >' . $GName . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:15%">Qualification :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $GQuali . '</td><td style="width:17%;">&nbsp;&nbsp;&nbsp;Occupation :</td><td  style="border-bottom: 1px solid black;width:23%;text-align:left;"> ' . $GOccupation . '</td><td style="width:15%;">&nbsp;&nbsp;&nbsp;Mobile No :</td><td  style="border-bottom: 1px solid black;width:13%;text-align:left;"> ' . $GMobile . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:20%">Annual Income :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $AIncome . '</td><td style="width:18%;"></td><td  style="width:45%;text-align:left;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Sibling Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Is Brother / Sister Studying in this College :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $Studying . '</td><td style="width:20%"></td><td  style="width:20%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:12%">Roll No 1 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoI . '</td><td style="width:5%;"></td><td style="width:12%">Roll No 2 :</td><td  style="border-bottom: 1px solid black;width:28%;text-align:left;" >' . $RollnoII . '</td><td style="width:18%;"></td></tr></table>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Previous Institution Information</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Name and Address of the Institution last attended :</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $School . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:30%">Period of Study Year From :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyF . '</td><td style="width:5%;"></td><td style="width:10%">Year To :</td><td  style="border-bottom: 1px solid black;width:20%;text-align:left;" >' . $PStudyT . '</td><td style="width:30%;"></td></tr></table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD X</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $Board . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $Rank . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $Division . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $tenTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarks . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubI . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $Rollno . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOp . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIM . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubV . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVM . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVI . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIM . '</td></tr>
	   
	</table>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Educational Information in STD XII</div>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:30%;">Name of Board / University :</td><td  style="width:70%;text-align:left;border-bottom: 1px solid black;"> ' . $BoardXII . '</td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:20px;"><td style="width:10%">Rank :</td><td  style="border-bottom: 1px solid black;width:18%;text-align:left;" >' . $RankXII . '</td><td style="width:13%;">&nbsp;&nbsp;Division :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $DivisionXII . '</td><td style="width:15%;">&nbsp;Total Marks :</td><td  style="border-bottom: 1px solid black;width:15%;text-align:left;"> ' . $twlTotal . '</td><td style="width:15%;">&nbsp;% of Marks :</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;"> ' . $PMarksXII . '</td></tr></table>
	<br>
	<table border="1" style="border-spacing: 0;" width="100%">
		<!--tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td colspa="3" style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Parent Information</td></tr-->
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Subject Name</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Roll No</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Year of Passing</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Regular/Private</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;"> Mark Secured</td></tr>
	   <tr style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RollnoXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $YOpXII . '</td><td rowspan="6" style="font-size:13px;padding-left:8px;text-align:left;height:30px;width:100px;text-align:center;">' . $RP . '</td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;text-align:center;">' . $SubIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIMXII . '</td></tr>
	  <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIIIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIIIMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubIVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubIVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVMXII . '</td></tr>
	   <tr  style="height:30px;"><td style="color:#fff;background-color:grey;font-size:14px;text-align:left;height:30px;width:200px;">' . $SubVIXII . '</td><td style="font-size:13px;padding-left:8px;width:100px; text-align:left;height:30px;text-align:center;">' . $SubVIMXII . '</td></tr>
	   
	</table>
	<br>
	<br>
	<br>
	<div style="background-color:#6E2A41;width:100%;text-align:center;color:#fff;padding-top:5px;padding-bottom:5px;">Other Information</div>
	<br>
	<!--table border="1" style="border-spacing: 0;" width="100%">
	   <tr style="height:30px;background-color:#6E2A41;text-align:center;color:#fff;"><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Group</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Honours</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective I</td><td style="color:#fff;font-size:14px;font-weight:bold;height: 30px; text-align:center;">Elective II</td></tr>
	   <tr style="height:50px;"><td style="font-size:14px;text-align:center;height:50px;width:25%;">' . $Groups . '  </td><td style="font-size:13px;padding-left:8px;text-align:left;height:30px;">' . $Honours . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveI . '</td><td style="font-size:13px;text-align:left;height:30px;padding-left:8px;">' . $ElectiveII . '</td></tr>
	   
	   </table-->
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:25%;">Choice of Subjects ( Group, Honours, Elective I, Elective II ) :</td></tr></table>
	   <table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td  style="width:100%;text-align:left;border-bottom: 1px solid black;"> ' . $Course_Comb . '</td></tr></table>
	   
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:10%"> Is Differently Abled ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $Disability . '</td><td style="width:40%"></td><td  style="width:25%;text-align:left;" ></td></tr></table>
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether belonging to Urban / Rural </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $URArea . '</td><td style="width:25%">&nbsp;&nbsp;If Rural, mention Place</td><td  style="border-bottom: 1px solid black;width:30%;text-align:left;" >' . $RArea . '</td></tr></table>
	
	<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Whether cleared CUET (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $CUET . '</td><td style="width:45%">&nbsp;&nbsp;If Yes, Marks scored in CUET Percentage</td><td  style="border-bottom: 1px solid black;width:10%;text-align:left;" >' . $CUETper . '</td></tr></table>
    		<table width="100%" style="padding-top:10px;"><tr style="padding-right:10px;"><td style="width:40%"> Economically Weaker (Yes / No) ? </td><td  style="border-bottom: 1px solid black;width:5%;text-align:left;" >' . $weaker . '</td><td style="width:45%"></td><td  style="width:10%;" ></td></tr></table>

	
	<p style="text-align:left;font-size:13px;"><b><u>IMPORTANT INSTRUCTIONS FOR CANDIDATES : </u></b></p>
	<ul>
	<li>Please retain the photocopy of the filled-in form for future reference.</li>
	<li>Documents to be attached :<br>
	      <p style="margin-left:10%;">a) Attested copy of Certificates and Mark sheets from Std. X onwards.<br>
			b) ST/SC/BC/OBC certificate.<br>
			c) Age Certificate / Class X Admit Card.<br>
			d) Baptism Certificate (for Catholic students)<br>
			e) CUET Certificate
			</p>
	</li>
	</ul>
	
	<p style="text-align:left;font-size:13px;"><b><u>UNDERTAKING : </u></b></p>
	<p style="text-align:justify;font-size:12px;font-weight:bold;">We certify that we have read and understood the prospectus and promise to abide by the rules and regulations of the College in all
matters of study, attendance and discipline.</p>
	<br><br><br>
	<table width="100%">
	<tr style ="margin-top:-100px !important;">
					<td style = "text-align:left;width:100%;font-size:15px;">Date______________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature of the Parent/Guardian</td>
					<!--td style = "text-align:center;width:30%;font-size:11px;">Signature of the Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Place</td>
					<td style = "text-align:right;width:40%;font-size:11px;">Place</td-->
				</tr>
			</table>
	
	<br><br><br>
	<p style="font-weight:bold;margin-left:70%;">Signature of the Principal</p>
	<table width="100%"><tr><td style=""><img src="Uploads/XMarksheet/' . $XMarksheet . '" style="" /></td></tr></table>
	<table width="100%"><tr><td style=""><img src="Uploads/Marksheet/' . $Marksheet . '" style="" /></td></tr></table>
	
	   
	   
	   
	</div>
	';
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetHTMLHeader('<div style="text-align: right;font-weight:bold;">Application Number : ' . $ids . '</div>');
		$mpdf->WriteHTML($htmlData);

		$file_name = "" . $app_no . '-' . date('d-m-Y') . '.pdf';
		$mpdf->Output($file_name, "D");
	}
}

?>
<style>
	table,
	tr,
	td {
		border-bottom: 1px solid black;
		text-align: right;
	}
</style>
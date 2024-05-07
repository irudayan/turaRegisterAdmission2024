<?php
// Replace 'your_username' and 'your_password' with your actual database username and password
$conn = new mysqli('localhost', 'root', '', 'tura_admission');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$NEW = "SELECT `Id`, `RegId`, `AName`, `Dob`, `Shift`, `Programme`, `Course_Comb`, `Gender`, `email`, `mobile`, `PPhoto`, `uniqeId`, `MStatus`, `BG`, `Nationality`, `Category`, `AadharNumber`, `PanNumber`, `RT`, `Religion`, `SReligion`, `RAddress`, `City`, `State`, `Pincode`, `PAddress`, `PCity`, `PState`, `PPincode`, `FName`, `FQuali`, `FOccupation`, `FMobile`, `MName`, `MQuali`, `MOccupation`, `MMobile`, `GName`, `GQuali`, `GOccupation`, `GMobile`, `AIncome`, `Studying`, `RollnoI`, `RollnoII`, `Disability`, `DC`, `URArea`, `RArea`, `School`, `PStudyF`, `PStudyT`, `Board`, `Rollno`, `YOp`, `PMarks`, `TMarks`, `Division`, `Rank`, `RP`, `SubI`, `SubIM`, `SubII`, `SubIIM`, `SubIII`, `SubIIIM`, `SubIV`, `SubIVM`, `SubV`, `SubVM`, `SubVI`, `SubVIM`, `BoardXII`, `RollnoXII`, `YOpXII`, `PMarksXII`, `TMarksXII`, `DivisionXII`, `RankXII`, `RPXII`, `SubIXII`, `SubIMXII`, `SubIIXII`, `SubIIMXII`, `SubIIIXII`, `SubIIIMXII`, `SubIVXII`, `SubIVMXII`, `SubVXII`, `SubVMXII`, `SubVIXII`, `SubVIMXII`, `tenTotal`, `twlTotal`, `Marksheet`, `RegOn`, `UDate` from dbctura_ugadmission where TStatus=1";

$result = mysqli_query($conn, $NEW);

if (!$result) {
  die("Query failed: " . mysqli_error($conn));
}

$columnHeader = "Id\tRegId\tAName\tDob\tShift\tProgramme\tCourse_Comb\tGender\tEmail\tMobile\tPhoto\tuniqeId\tMarital Status\tBG\tNationality\tCategory\tAadhar Number\tPan Number\tRace / Tribe\tReligion\tSub Religion\tResidential Address\tCity\tState\tPincode\tPer Address\tPer City\tPer State\tPer Pincode\tFather Name\tFather Qualification\tFather Occupation\tFather Mobile\tMother Name\tMother Qualification\tMother Occupation\tMMobile\tGName\tGQuali\tGuardian Occupation\tGuardian Mobile\tAnnual Income\tIs Siblings Studying?\tSibling Roll No I\tSibling Roll No II\tDisability\tDC\tUrban/Rural\tRural Area\tSchool\tPeriod of Study From\tPeriod of Study To\tBoard\tRollno\tYOp\t% Marks\tTMarks\tDivision\tRank\tRegular/Private X\tSubI\tSubI Mark\tSubII\tSubII Mark\tSubIII\tSubIII Mark\tSubIV\tSubIV Mark\tSubV\tSubV Mark\tSubVI\tSubVI Mark\tBoard XII\tRoll No of XII\tYear of Passing XII\t% XII\tTotal Marks XII\tDivision XII\tRank XII\tRegular/Private XII\tSubI XII\tSubI Mark XII\tSubII XII\tSubII Mark XII\tSubIII XII\tSubIII Mark XII\tSubIV XII\tSubIV Mark XII\tSubV XII\tSubV Mark XII\tSubVI XII\tSubVI Mark XII\tX Total\tXII Total\tMarksheet\tRegOn\tUDate\n";
$setData = '';

while ($row = mysqli_fetch_row($result)) {
  $rowData = '';
  foreach ($row as $value) {
    $value = '"' . $value . '"' . "\t";
    $rowData .= $value;
  }
  $setData .= trim($rowData) . "\n";
}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Admission_Registration_Report.xls");
header("Pragma: no-cache");
header("Expires: 0");
echo ucwords($columnHeader) . "\n" . $setData . "\n";

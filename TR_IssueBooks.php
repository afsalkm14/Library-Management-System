<!DOCTYPE html>
<html>
  <body>
<center><h2>Library Management System</h2></center>
<br>
<?php
include("DBConnection.php");
date_default_timezone_set('Asia/Kolkata');
$date=date("Y/m/d");


$isbn = $_POST["ISBN"];
$RNO = $_POST["RNO"];


$qry = "UPDATE students_info SET CurrentBook='$isbn', ISSUEDATE='$date' WHERE RNO='$RNO'";
$qryA = "UPDATE books_info SET QTY=QTY-1 WHERE ISBN='$isbn'";

$result = mysqli_query($db,$qry);
$result1 = mysqli_query($db,$qryA);

echo "Book Issued";
header("location:index.php");
 ?>
  </body>
</html>

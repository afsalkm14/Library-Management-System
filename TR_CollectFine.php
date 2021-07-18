<!DOCTYPE html>
<html>
  <body>
<center><h2>Library Management System</h2></center>
<br>
<?php
include("DBConnection.php");
date_default_timezone_set('Asia/Kolkata');
$date=date("Y/m/d");


$RNO = $_POST["RNO"];
$amt= $_POST["amount"];


$qry = "UPDATE students_info SET FINE=FINE-$amt WHERE RNO='$RNO'";


$result = mysqli_query($db,$qry);

echo "Collected Fine";
header("location:index.php");

 ?>
  </body>
</html>

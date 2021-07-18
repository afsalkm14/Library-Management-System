<!DOCTYPE html>
<html>
  <body>
<center><h2>Library Management System</h2></center>
<br>
<?php
include("DBConnection.php");

$rno = $_POST["RNO"];
$sname = $_POST["SNAME"];
$dept = $_POST["DEPT"];
$semester = $_POST["SEMESTER"];
$email = $_POST["EMAIL"];

$query = "INSERT INTO students_info(RNO,SNAME,DEPT,SEMESTER,EMAIL,FINE) VALUES ('$rno', '$sname', '$dept', '$semester', '$email',0)";
$result = mysqli_query($db,$query);

echo "Inserted";
header("location:index.php");

 ?>
  </body>
</html>

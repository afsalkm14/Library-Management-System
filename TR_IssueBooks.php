<!DOCTYPE html>
<html>
  <body>
<center><h2>Simple Library Management System</h2></center>
<br>
<?php
include("DBConnection.php");

$isbn = $_POST["ISBN"];
$RNO = $_POST["RNO"];


$qry = "UPDATE students_info SET CurrentBook='$isbn' WHERE RNO='$RNO'";

$result = mysqli_query($db,$qry);

echo "Book Issued";

 ?>
  </body>
</html>

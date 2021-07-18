<!DOCTYPE html>
<html>
  <body>
<center><h2>Simple Library Management System</h2></center>
<br>
<?php
include("DBConnection.php");

$isbn = $_POST["isbn"];
$title = $_POST["title"];
$author = $_POST["author"];
$edition = $_POST["edition"];
$publication = $_POST["publisher"];

$query = "insert into books(isbn,title,author,edition,publisher) values('$isbn','$title','$author','$edition','$publication')";
$result = mysqli_query($db,$query);

echo "Inserted";

 ?>
  </body>
</html>

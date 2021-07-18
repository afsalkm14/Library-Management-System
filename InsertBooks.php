<!DOCTYPE html>
<html>

  <body>

<center><h2>Library Management System</h2></center>
<br>
<?php
include("DBConnection.php");

$isbn = $_POST["isbn"];
$title = $_POST["title"];
$author = $_POST["author"];
$edition = $_POST["edition"];
$publication = $_POST["publisher"];
$pages = $_POST["pages"];
$qty = $_POST["QTY"];

$query = "insert into books_info(isbn,title,author,edition,publisher,qty,pages) values('$isbn','$title','$author','$edition','$publication','$qty','$pages')";
$result = mysqli_query($db,$query);

echo "Inserted";
header("location:index.php");

 ?>
  </body>
</html>

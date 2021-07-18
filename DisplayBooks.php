<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LMS - Display Books</title>
  </head>
  <body>
    <center><h2>LMS - Display Books</h2></center>

<?php
include("DBConnection.php");

$search = $_REQUEST["search"];

$qry = "SELECT * From books_info WHERE TITLE LIKE '%$search%'";

$result = mysqli_query($db, $qry);

if(mysqli_num_rows($result)>0)
{

?>

<table border="2" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <th>ISBN</th>
    <th>TITLE</th>
    <th>AUTHOR</th>
    <th>EDITION</th>
    <th>PUBLISHER</th>
  </tr>

  <?php while($row = mysqli_fetch_assoc($result))
  {
    ?>
    <tr>
      <td><?php echo $row["ISBN"]; ?></td>
      <td><?php echo $row["TITLE"]; ?></td>
      <td><?php echo $row["AUTHOR"]; ?></td>
      <td><?php echo $row["EDITION"]; ?></td>
      <td><?php echo $row["PUBLISHER"]; ?></td>
    </tr>
<?php
  }
}

else {
  echo "<h3>No Results Found</h3>";
}
   ?>
</table>
  </body>
</html>

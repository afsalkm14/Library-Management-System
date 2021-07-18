<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LMS - Display Students</title>
  </head>
  <body>
    <center><h2>LMS - Display Students</h2></center>

<?php
include("DBConnection.php");

$search = $_REQUEST["search"];

$qry = "SELECT * From students_info WHERE SNAME LIKE '%$search%' OR RNO LIKE '%$search%'";

$result = mysqli_query($db, $qry);

if(mysqli_num_rows($result)>0)
{

?>

<table border="2" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <th>Register Number</th>
    <th>Student Name</th>
    <th>Department</th>
    <th>Semeter</th>
    <th>Email</th>
  </tr>

  <?php while($row = mysqli_fetch_assoc($result))
  {
    ?>
    <tr>
      <td><?php echo $row["RNO"]; ?></td>
      <td><?php echo $row["SNAME"]; ?></td>
      <td><?php echo $row["DEPT"]; ?></td>
      <td><?php echo $row["SEMESTER"]; ?></td>
      <td><?php echo $row["EMAIL"]; ?></td>
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

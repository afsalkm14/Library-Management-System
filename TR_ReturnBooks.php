
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LMS</title>
  </head>
  <body>
    <center><h2>LMS - Return Books</h2></center>

<?php
include("DBConnection.php");

$RNO = $_POST["RNO"];

$qry = "SELECT RNO, CURRENTBOOK, ISSUEDATE, Fine+(GREATEST(((DATEDIFF(CURDATE(),ISSUEDATE)-30)*2), 0)) as TotalFine, DATEDIFF(CURDATE(),ISSUEDATE) AS DateDiff, GREATEST(((DATEDIFF(CURDATE(),ISSUEDATE)-30)*2), 0) as NewFine FROM students_info WHERE RNO='$RNO';";

$result = mysqli_query($db, $qry);

$qryRT = "UPDATE students_info SET Fine= IFNULL(Fine,0)+(GREATEST(((DATEDIFF(CURDATE(),ISSUEDATE)-30)*2), 0))  WHERE RNO='$RNO'";
$qryRS = "UPDATE students_info SET CurrentBook= NULL,ISSUEDATE = NULL  WHERE RNO='$RNO'";

$resRT =  mysqli_query($db, $qryRT);
$resRS =  mysqli_query($db, $qryRS);


if(mysqli_num_rows($result)>0)
{


?>

<table border="2" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <th>RNO</th>
    <th>BOOK</th>
    <th>ISSUEDATE</th>
    <th>Days</th>
    <th>New Fine</th>
    <th>Fine Balance</th>
  </tr>

  <?php while($row = mysqli_fetch_assoc($result))
  {
    ?>
    <tr>
      <td><?php echo $row["RNO"]; ?></td>
      <td><?php echo $row["CURRENTBOOK"]; ?></td>
      <td><?php echo $row["ISSUEDATE"]; ?></td>
      <td><?php echo $row["DateDiff"]; ?></td>
      <td><?php echo $row["NewFine"]; ?></td>
      <td><?php echo $row["TotalFine"]; ?></td>
      <?php
      $isbn3 = $row['CURRENTBOOK'];
      $qrr = "UPDATE books_info SET QTY=QTY+1  Where ISBN='$isbn3'";
      mysqli_query($db, $qrr); ?>
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

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LMS - Enter New Book</title>
  </head>
  <body style="background: #fe8c00;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #f83600, #fe8c00);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #f83600, #fe8c00); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">

    <center><h2> Library Management System </h2></center>

    <form action="InsertBooks.php" method="post">
      <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
          <td>Enter ISBN</td>
          <td> <input type="text" name="isbn" size="50"> </td>
        </tr>
        <tr>
          <td>Enter Title</td>
          <td> <input type="text" name="title" size="50"> </td>
        </tr>
        <tr>
          <td>Enter Author</td>
          <td> <input type="text" name="author" size="50"> </td>
        </tr>
        <tr>
          <td>Enter Edition</td>
          <td> <input type="text" name="edition" size="50"> </td>
        </tr>
        <tr>
          <td>Enter Publisher</td>
          <td> <input type="text" name="publisher" size="50"> </td>
        </tr>

        <tr>
          <td></td>
          <td>
          <input type="submit" value="Add">
          <input type="reset"  value="Clear">
          </td>
        </tr>

      </table>



    </form>


  </body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <title>LMS - Enter New Students</title>
  </head>


    <h4 class="mx-auto" style="width: 500px"> LMS - Add New Students </h2>

<div class="mx-auto" style="width: 500px">



    <form action="InsertStudents.php" method="post">

<div class="form-group">
  <label for="">
  Enter Register Number</label>
   <input type="text" class="form-control" name="RNO" size="50">
</div>


<div class="form-group">
  <label for="">
  Enter Name</label>
    <input type="text" class="form-control" name="SNAME" size="50">
</div>

<div class="form-group">
  <label for="">
  Enter Department</label>
     <input type="text" class="form-control" name="DEPT" size="50">
</div>

<div class="form-group">
  <label for="">
  Enter Semester</label>
     <input type="text" class="form-control" name="SEMESTER" size="50">
</div>

<div class="form-group">
  <label for="">
  Enter EMAIL</label>
     <input type="text" class="form-control" name="EMAIL" size="50">
</div>


          <input type="submit" class="btn btn-danger" value="Add">
          <input type="reset" class="btn btn-primary" value="Clear">


    </form>
</div>

  </body>
</html>

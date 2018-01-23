<?php
// Initialize the session
session_start();
 ?>
<?php

if(isset($_SESSION["response"]))
{
    ?>
    <h2 style=" color:black;font-size:140%;text-align:center;font-family: cursive;padding:3%"><b><?php echo $_SESSION["response"];?></b></h2>
    <?php session_destroy();
}

?>


<!DOCTYPE html>
<html>

<title>
Add New Faculty
</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<script>
function validateAlpha(){
    var textInput = document.getElementById("name").value;
    textInput = textInput.replace(/[^A-Za-z]/g, "");
    document.getElementById("name").value = textInput;
}
function isNumberKey(){
    var textInput = document.getElementById("phone_number").value;
    textInput = textInput.replace(/[^0-9]/g, "");
    document.getElementById("phone_number").value = textInput;
}
</script>
<body>
<div class="container">

<div class="jumbotron">
    <h1>Faculty Information</h1> 
    <p>Information given here would be directly added to the faculty database.</p> 
  </div>

 <div class="card-block">
 
<?php

if(isset($_SESSION["error"]))
{
    ?>
    <p style=" color:red;font-size:100%;text-align:center;padding:1%"><b><?php echo $_SESSION["error"];?></b></p>
    <?php 
}

?>





<form action="faculty_add.php" method="post" enctype="multipart/form-data">

<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Name:</label>
  <div class="col-10">
  
 <input type="text" class="form-control" name="name" id="name" required  oninput="validateAlpha()"><br>
</div>


</div>

<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Office Address:</label>
  <div class="col-10">

<input type="text" class="form-control" name="office_Address" id="office_Address"  required><br>
</div>


</div>

<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Email:</label>
  <div class="col-10">


<input type="email" name="email"class="form-control"  id="email" required> <br>
 
</div>


</div>

<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Phone Number:</label>
  <div class="col-10">

 <input type="tel" class="form-control" name="phone_number" maxlength=10 required id="phone_number"  oninput="isNumberKey()"><br>
</div>


</div>

<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Website:</label>
  <div class="col-10">

<input type="url" name="website"class="form-control"  id="website" required><br>
</div>


</div>


<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Department:</label>
  <div class="col-10">

<input type="text" name="department"class="form-control"  id="department" required><br>
</div>


</div>

<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Designation:</label>
  <div class="col-10">


<input type="text" name="designation" class="form-control" id="designation" required><br>

</div>


</div>

<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Education:</label>
  <div class="col-10">

<input type="text" name="education" class="form-control" id="education" required><br>
</div>


</div>

<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Skills:</label>
  <div class="col-10">


<input type="text" name="skills" class="form-control" id="skills" required><br>
</div>


</div>

<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Subjects:</label>
  <div class="col-10">

 <input type="text" class="form-control" name="subjects" id="subjects" required><br>
</div>


</div>


<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Biological Sketch:</label>
  <div class="col-10">

<input type="text"class="form-control"  name="bio_sketch" id="bio_sketch" required><br>
</div>


</div>

<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Profile Image:</label>
  <div class="col-10">

  <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" required><br>
</div>


</div>

<div class="form-group row">
  <div class="col-10">

    <input type="submit" value="save" class="form-control" name="submit">
</form>
</div>
</div>
</body>
</html>

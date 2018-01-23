<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<?php

if(isset($_SESSION["response"]))
{
    ?>
    <h2 style=" color:black;font-size:140%;text-align:center;font-family: cursive;padding:3%"><b><?php echo $_SESSION["response"]; ?></b></h2>
    <?php 

unset($_SESSION["response"]); 
}

?>


<!DOCTYPE html>
<html>

<head>
<title>
Add Notices
</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
@media only screen and (max-width: 1000px) {
    body{
font-size:400%;

height:800%;}

}
</style>
</head>
<body>
<div class="container">

<div class="jumbotron">
    <h1>Add New Notice</h1> 
    <p>Notice uploaded here would be directly reflected on the website.</p> 
<p class="ref">
<a href="logout.php">Logout</a>
</p>
  </div>

<form action="upload.php" method="post" enctype="multipart/form-data">
<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Title :</label>
  <div class="col-10">

<input type="text" name="title"class="form-control"  required id="title">
</div>
</div>
<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Upload Date of Notice:</label>
  <div class="col-10">

<input type="date" name="upload_date" class="form-control"  id="upload_date" required>
</div>
</div>
    <div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Notice:</label>
  <div class="col-10">

    <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" required>
    
</div>
</div>
<div class="form-group row">
  <div class="col-10">

<input type="submit" value="upload notice"class="form-control"  name="submit">
    
</div>
</div>
</form>


</div>
</body>
</html>
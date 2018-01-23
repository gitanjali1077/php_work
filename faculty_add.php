<?php include 'connection.php';?>

<?php session_start();?>
<?php global $connection;
$_SESSION["response"]='Something went wrong:(';
$connection = db_connect();

?>

<?php
$target_dir = "faculty_images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if( isset( $_POST['submit'] ) )
{
    function  validate_data($connection,$data)
    {
        $data = trim($data);
        $data = stripslashes($data);$data = strip_tags($data);
        $data = htmlspecialchars($data);
        $data = mysqli_real_escape_string($connection ,$data);
        return $data;
        
    }
    $name = validate_data($connection,$_POST['name']);
  $office_Address= validate_data($connection,$_POST['office_Address']);
  $email = validate_data($connection,$_POST['email']);
  $phone_number= validate_data($connection,$_POST['phone_number']);
  $website = validate_data($connection,$_POST['website']);
  $department= validate_data($connection,$_POST['department']);
  $designation= validate_data($connection,$_POST['designation']);
  $education= validate_data($connection,$_POST['education']);
  $skills = validate_data($connection,$_POST['skills']);
$subjects = validate_data($connection,$_POST['subjects']);
$bio_sketch = validate_data($connection,$_POST['bio_sketch']);

            
    $file = $target_file;

    

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
   $_SESSION["error"]="Profile picture size should be less than 500KB";
    $uploadOk = 0;
header("Location:faculty_form.php");
            exit();

    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "jpeg" &&$imageFileType != "png" && $imageFileType != "gif"  ) {
  $_SESSION["error"]="Sorry, only JPG, JPEG, PNG & GIF files are allowed for profiles.";
    $uploadOk = 0;
header("Location:faculty_form.php");
            exit();

}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
            $query="INSERT INTO faculty(name ,office_Address ,email,phone_number, website , department ,designation,education , skills ,subjects ,bio_sketch, image ) VALUES('$name','$office_Address','$email','$phone_number','$website ', '$department' ,'$designation' ,'$education', '$skills', '$subjects' ,'$bio_sketch','$file' )";


    $result =mysqli_query($connection,$query);
     if($result!=NULL)
    $_SESSION["response"]='Faculty details has been added';
      

} 
 header("Location:http://localhost:8080/newWebsite/index.html@q=university-faculty.php");
            exit();
            
 // here postsubmit ends
?>
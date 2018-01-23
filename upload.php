<?php include 'connection.php';?>

<?php session_start();?>
<?php global $connection;
$_SESSION["response"]='Something went wrong:(';
$connection = db_connect();

?>

<?php
$target_dir = "upload/";
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
    $title = validate_data($connection,$_POST['title']);
    $upload_date = $_POST['upload_date'];
                
            
    $file = $target_file;
    $query="INSERT INTO notice(title,upload_date,file) VALUES('$title','$upload_date','$file')";
    $result =mysqli_query($connection,$query);
     if($result!=NULL)
    $_SESSION["response"]='New notice has been added';
      

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
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
            

} 
 header("Location:http://localhost:8080/newWebsite/notice_admin.php");
            exit();
            
 // here postsubmit ends
?>
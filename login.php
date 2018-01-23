<?php
// Include config file
include 'connection.php';
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
//connection to db
$link = db_connect();


    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM notice_admin where username='".$username."'";
$result = $link->query($sql);
 $count= count($result); 


       if($count==1){
$res = $result->fetch_assoc();

                 if(($password)== $res["password"]){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;      
                            header("location: notice_admin.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'Either the password or username you entered is not valid.';
                        }
                   
                }else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
     
    
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  
    <style type="text/css">
        

@media only screen and (max-width: 1000px) {
    body{
font-size:400%;

height:800%;}

}


</style>
</head>
<body>

<div class="container">
    <div class="wrapper">
        <h2>Login to add notices</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
           

<div class="form-group row" <?php echo (!empty($username_err)) ? 'has-error' : ''; ?> >
<label for="example-text-input" class="col-2 col-form-label">Usename<sup>*</sup> :</label>




                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    


            
<div class="form-group row" <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
<label for="example-text-input" class="col-2 col-form-label">Password<sup>*</sup> :</label>
  <div class="col-10">



                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

</div>
</div>

 
            <div class="form-group row">
  <div class="col-10">
<input type="submit" class="btn btn-primary" value="Submit" style="margin-left:5%">
            </div>
            <p>Don't have an account? <a href="#">Sign up now</a>.</p>
</div></div>

        </form>
    </div>    

</div>
</body>
</html>
<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
  </head>
  <body>
  <div class="container">
    <div class="box form-box">
    <h2>Sign Up</h2>
    <form action="" method="post">
    <div class="field input">
      <label for="name">Name : </label>
      <input type="text" name="name" id = "name" required value=""> <br>
    </div>
    <div class="field input">  
      <label for="username">Username : </label>
      <input type="text" name="username" id = "username" required value=""> <br>
    </div>
    <div class="field input">  
      <label for="email">Email : </label>
      <input type="email" name="email" id = "email" required value=""> <br>
    </div>
    <div class="field input">  
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
    </div>
    <div class="field input">  
      <label for="confirmpassword">Confirm Password : </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
    </div>
    
    <div class="field">   
        <input type="submit" class="btn" name="submit" value="Register" required>
      </div>
      <div class="links">
        Already a member? <a href="index.php">Sign In</a>
      </div>
    </form>
    </div>
  </div>
 
  </body>
</html>

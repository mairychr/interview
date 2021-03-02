<?php
  require('request_user.php');
  $password_rep = $_POST['password_rep'];
  $emailError = false;
  if($password != $password_rep) {
    $emailError=true;
  }
  // echo $email; 4 debugging 

  $checkEmail=mysqli_query($con, "SELECT email from signup WHERE email='$email'");

  if (mysqli_num_rows($checkEmail) == 1) {
    $subscribed = true;
  } else {
    $subscribed = false;
  }
?>
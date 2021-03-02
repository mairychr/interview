<?php
  require('request_user.php');
  $password_rep = $_POST['password_rep'];
  $emailError = false;
  if($password != $password_rep) {
    $emailError=true;
  }
  // echo $email; 4 debugging 

  // $checkEmail=mysqli_query($con, "SELECT email from signup WHERE email='$email'");

  // if (mysqli_num_rows($checkEmail) == 1) {
  //   $subscribed = true;
  // } else {
  //   $subscribed = false;
  // }


  if(isset($_POST['email'])) { //change isSet to isset (it will not make any difference)
    $email = ($_POST['email']); //escape the string


    $query = "SELECT email FROM signup WHERE email='$email'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
    if ($rows != 0) { //check rows greater then zero (although it will also not make any difference)
            // echo '<font color="red">The email <strong>'.$email.'</strong>'. ' is already in use.</font>';
            $subscribed = true;
        } else {
            echo 'OK';
            $subscribed = false;
            
        }
}
?>
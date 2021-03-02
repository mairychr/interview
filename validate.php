<?php
//require('request_user.php');

if (isset($_GET['email'])) { //change isSet to isset (it will not make any difference)
    $email = ($_GET['email']); //escape the string

    $query = "SELECT email FROM signup WHERE email='$email'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) { //check rows greater then zero (although it will also not make any difference)
        // echo '<font color="red">The email <strong>'.$email.'</strong>'. ' is already in use.</font>';
        return json_encode(['message' => 'user exists', 'data' => 11]);
    } else {
        return json_encode(['message' => 'user does not exists', 'data' => 12]);
    }
}
?>
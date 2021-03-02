<?php
//require('request_user.php');
if (isset($_REQUEST["email"])) { //change isSet to isset (it will not make any difference)
    $email = ($_POST['email']); //escape the string
//    var_dump($_POST);
    return json_encode(['message' => 'user exists', 'data' => 11]);
//    $query = "SELECT email FROM signup WHERE email='$email'";
//    $result = mysqli_query($con, $query);
//    $rows = mysqli_num_rows($result);
//    if ($rows == 1) { //check rows greater then zero (although it will also not make any difference)
//        // echo '<font color="red">The email <strong>'.$email.'</strong>'. ' is already in use.</font>';
//        echo json_encode(['message' => 'user exists', 'data' => 11]);
//    } else {
//        echo json_encode(['message' => 'user does not exists', 'data' => 12]);
//    }
}
return json_encode(['message' => 'user exists', 'data' => 12]);
?>

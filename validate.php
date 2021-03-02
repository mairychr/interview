<?php
//require('request_user.php');
$email_a = isset($_POST['email1']) ? $_POST('email1') : 'bluh_a'; //escape the string
$email_b = isset($_POST['email2']) ? $_POST('email2') : 'bluh_b'; //escape the string
//    var_dump($_POST);
return json_encode(['message' => 'user exists', 'data' => [$email_a, $email_b]]);
//    $query = "SELECT email FROM signup WHERE email='$email'";
//    $result = mysqli_query($con, $query);
//    $rows = mysqli_num_rows($result);
//    if ($rows == 1) { //check rows greater then zero (although it will also not make any difference)
//        // echo '<font color="red">The email <strong>'.$email.'</strong>'. ' is already in use.</font>';
//        echo json_encode(['message' => 'user exists', 'data' => 11]);
//    } else {
//        echo json_encode(['message' => 'user does not exists', 'data' => 12]);
//    }
?>

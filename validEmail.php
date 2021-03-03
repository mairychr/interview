<?php
require('db.php');
$email = isset($_POST['email1']) ? $_POST('email1') : null;
if ($email_a) {
    $query = "SELECT email FROM signup WHERE email='$email'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        echo json_encode(['message' => 'user exists', 'data' => 11, 'status' => 409]);
    } else {
        echo json_encode(['message' => 'user does not exists', 'status' => 200]);
    }

} else {
    return json_encode(['message' => 'invalid input', 'status' => 400]);
}
?>

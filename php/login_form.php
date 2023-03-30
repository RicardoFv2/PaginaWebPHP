<?php
@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
    
    $email = mysqli_real_escape_string($conn, $_POST['usermail']);
    $pass = md5($_POST['password']);

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['usermail'] = $email;
        header('location:header.php');
    } else {
        $error[] = 'incorrect password or email.';
    }
}
?>
<?php
@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['usermail']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = "SELECT * FROM user_form WHERE email =  '$email' && password = '$pass'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user already exist';

    } else {
        if ($pass != $cpass){
            $error[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO user_form(email, password) VALUES ('$email', '$pass')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    } 
}
?>
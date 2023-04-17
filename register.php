<?php 
include 'login/config.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die ('query failed');

    if (mysqli_num_rows($select) > 0) {
        $message[] = 'user already exist!';
    } else{
        mysqli_query($conn, "INSERT INTO `user_form`(name, email, password) VALUES ('$name', '$email', '$pass')") or die('query failed');
        $message[] = 'registered successfully';
        header('location:login/index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/login.css" />


    
</head>
<body>

<?php
include 'includes/header.php';
if (isset($message)){
    foreach ($message as $message) {
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
    }
}
?>
<div class="form-container">
        <form action="" method="post">
            <h3>Register Now</h3>
            <input type="text" name="name" required placeholder="enter username" class="box2">
            <input type="email" name="email" required placeholder="enter email" class="box2">
            <input type="password" name="password" required placeholder="enter password"  class="box2">
            <input type="password" name="cpassword" required placeholder="enter password"  class="box2">
            <input type="submit" name="submit" class="btn" value="register now">
            <p>already have an account <a href="login/index.php">Login now</a></p>
        </form>
    </div>

    <?php
    include 'includes/footer.php' 
    ?>
</body>
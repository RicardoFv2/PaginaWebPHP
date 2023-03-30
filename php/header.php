<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['Usermail'])) {
    header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <h3>Welcome!</h3>
            <p>Lorem BLA BLA</p>
            <p>Your email: <span><?php echo $S_SESSION['usermail']; ?></span></p>
            <a href="logout.php" class="logout">logout</a>
        </div>
    </div>
</body>

</html>
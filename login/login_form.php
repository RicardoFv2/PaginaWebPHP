<?php
@include 'config.php';
session_start();
if (isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($conn, $_POST['usermail']);
	$pass = md5($_POST['password']);
	$select = "SELECT * from user_form where email = '$email' && password = '$pass'";
	$result = mysqli_query($conn, $select);
	if (mysqli_num_rows($result) > 0) {
		$_SESSION['usermail'] = $email;
		header('location:header.php');
	} else {
		$error[] = 'contraseña o correo electrónico incorrecto.';
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Login</title>
</head>

<body>
	<div class="form-popup" id="myForm">
		<div class="form-container">
			<form action="" method="post">
				<h3 class="title">Login now</h3>
				<input type="email" name="usermail" placeholder="enter your email" class="box" required>
				<input type="password" name="password" placeholder="enter your password" class="box" required>
				<input type="submit" value="Iniciar sesion ahora" class="form-btn" name="submit">
				<p>¿No tienes una cuenta? <a href="register_form.php">Registrate ahora</a>
				</p>
			</form>
		</div>
	</div>
</body>

</html>
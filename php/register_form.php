<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

	$email = mysqli_real_escape_string($conn, $_POST['usermail']);
	$pass = md5($_POST['password']);
	$cpass = md5($_POST['cpassword']);

	$select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

	$result = mysqli_query($conn, $select);

	if (mysqli_num_rows($result) > 0) {
		$error[] = 'el usuario ya existe';
	}else{
		if ($pass != $cpass) {
			$error[] = 'la contraseña no coincide!';
		}else{

		}
		$insert = "INSERT INTO user_form(email, password) values ('$email','$pass')";
		mysqli_query($conn, $insert);
		header('location:login_form.php');
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<link rel="stylesheet" href="../css/cssPHP.css">
</head>
<body>
	<div class="form-container">
		<form action="" method="post">
			<h3>Registrate ahora</h3>
			<input type="email" name="usermail" placeholder="ingresa tu correo electrónico" class="box" required>
			<input type="password" name="password" placeholder="ingresa tu contraseña" class="box" required>
			<input type="password" name="cpassword" placeholder="confirma tu contraseña" class="box" required>
			<input type="submit" value="Registrate ahora" name="submit" class="form-btn">
			<p>¿Ya tienes una cuenta? <a href="../index.php">Inicia sesion ahora!</a>
			</p>
		</form>
	</div>
</body>
</html>
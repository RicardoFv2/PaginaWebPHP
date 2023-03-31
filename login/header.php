<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['usermail'])) {
	header('location:login_form.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="content">
			<h3>Bienvenido!</h3>
			<p>
				Lorem ipsum dolor sit, amet consectetur elit. Dolorem maxime necessitatibus itaque sit adipisci odit debitis temporibus aliquid nisi totam.</p>
				<p>tu correo electrónico: <span><?php echo $_SESSION['usermail'] ?></span></p>
				<a href="logout.php" class="logout">cerrar sesion</a>
		</div>
	</div>
</body>
</html>
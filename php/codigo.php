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

var modal = document.getElementById("ventanaModal");

// Botón que abre el modal

var boton = document.getElementById("abrirModal");

// Hace referencia al elemento <span> que tiene la X que cierra la ventana
var span = document.getElementsByClassName("cerrar")[0];

// Cuando el usuario hace click en el botón, se abre la ventana
boton.addEventListener("click",function() {
  modal.style.display = "block";
});

// Si el usuario hace click en la x, la ventana se cierra
span.addEventListener("click",function() {
  modal.style.display = "none";
});

// Si el usuario hace click fuera de la ventana, se cierra.
window.addEventListener("click",function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});

?>
<?php
	include('conn.php');
	
	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];
    $inventario=$_POST['inventario'];
    $foto=$_POST['foto'];
		
	mysqli_query($conn,"insert into `user` (nombre,descripcion,precio,inventario,foto) values ('$nombre','$descripcion','$precio','$inventario','$foto')");
	header('location:cpanel.php');
?>
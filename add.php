<?php
	include('conn.php');
	
	$descripcion=$_POST['descripcion'];
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];

    echo "$descripcion, $cantidad, $precio";
		
	mysqli_query($conn,"INSERT INTO `tmp` (`id`, `descripcion`, `cantidad`, `precio`) VALUES (NULL, '$descripcion', '$cantidad', '$precio');");
	header('location:menu.php');
	
?>
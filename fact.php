<?php
	include('conn.php');
	
	date_default_timezone_set('America/El_Salvador');
 
	$fecha = date("Y-m-d H:i:s");
	$descripcion='No se';
    $id_cliente=$_POST['id_cliente'];
    $monto=$_POST['monto'];

	mysqli_query($conn,"insert into `facturas` (fecha,id_cliente,descripcion,monto) values ('$fecha',$id_cliente,'$descripcion',$monto)");
    header('location:factura.php');
?>
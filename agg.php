<?php
	include('conn.php');
	
	date_default_timezone_set('America/El_Salvador');
 
	$fecha = date("Y-m-d H:i:s");
	$descripcion=$_POST['descripcion'];
    $id_cliente=$_POST['monto'];;
    $monto=$_POST['monto'];

    echo "$fecha, $id_cliente, $descripcion, $monto";

	mysqli_query($conn,"insert into `facturas` (fecha,id_cliente,descripcion,monto) values ('$fecha',$id_cliente,'$descripcion',$monto)");

?>
<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `tmp` where id='$id'");
	header('location:menu.php');
?>
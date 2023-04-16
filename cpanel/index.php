<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div>
		<form method="POST" action="add.php">
			<label>Nombre:</label><input type="text" name="nombre">
			<label>Descripcion:</label><input type="text" name="descripcion">
            <label>Precio:</label><input type="text" name="precio">
            <label>Inventario:</label><input type="text" name="inventario">
            <label>Foto:</label><input type="text" name="foto">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table>
			<thead>
				<th>Nombre</th>
				<th>Descripcion</th>
                <th>Precio</th>
                <th>Inventario</th>
                <th>Foto</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><input value="<?php echo $row['nombre']; ?>"></td>
							<td><input value="<?php echo $row['descripcion']; ?>"></td>
                            <td><input value="<?php echo $row['precio']; ?>"></td>
                            <td><input value="<?php echo $row['inventario']; ?>"></td>
                            <td><input value="<?php echo $row['foto']; ?>"></td>
							<td>
								
								<a href="delete.php?id=<?php echo $row['userid']; ?>">Eliminar</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
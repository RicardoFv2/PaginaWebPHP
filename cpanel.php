<html>
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Granjita</title>
    <link rel="stylesheet" href="css/style.css" />
   <link rel="stylesheet" href="css/login.css" />
  </head>

  <body>

              <!-- HEADER CON PHP -->
  <?php include 'includes/header.php' ?>
          <!-- HEADER CON PHP -->

    <div id="wrapper">
      <div id="content">

        <div class="container">
          
                <style type="text/css">
                    .tftable {
                        table-layout: fixed;
                        font-size:12px;
                        color:#333333;
                        width:100%;
                        border-width: 1px;
                        border-color: #efefef;
                        border-collapse: collapse;
                        
                        text-align: center;
                    }
                    .tftable th {
                        font-size:15px;
                        background-color:#2C3E50;
                        border-width: 1px;
                        padding: 8px;
                        border-style: solid;
                        border-color: #729ea5;
                        width: 50px;
                        word-wrap: break-word;
                        color: white;
                    }
                    .tftable tr {background-color:#ffffff;}
                    .tftable td {
                        font-size:14px;
                        border-width: 1px;
                        padding: 8px;
                        border-style: solid;
                        word-wrap: break-word;
                        border-color: #729ea5;
                        border-left: 0;
                        border-right: 0;
                    }
                    .tftable tr:hover {background-color:#e2e2e2;
                    }

                    </style>
        
        <div class="box G"><table class="tftable">
		<form method="POST" action="agre.php">
            <thead>
				<th>NOMBRE</th>
				<th>DESCRIPCION</th>
                <th>PRECIO</th>
                <th>INVENTARIO</th>
                <th>FOTO (URL)</th>
				<th></th>
			</thead>
            <tbody>
						<tr>
							<td><input type="text" name="nombre"></td>
							<td><input type="text" name="descripcion"></td>
                            <td><input type="text" name="precio"></td>
                            <td><input type="text" name="inventario"></td>
                            <td><input type="text" name="foto"></td>
							<td><input class="" type="submit" value="AÑADIR"></td>
						</tr>
			</tbody>
		</form>
	    </table></div>
            
            <div class="box G">
            <table class="tftable">
			<thead>
				<th></th>
				<th></th>
                <th></th>
                <th></th>
                <th></th>
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
								
								<a href="elim.php?id=<?php echo $row['userid']; ?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAeFBMVEUAAADnTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDx+VWpeAAAAJ3RSTlMAAQIFCAkPERQYGi40TVRVVlhZaHR8g4WPl5qdtb7Hys7R19rr7e97kMnEAAAAaklEQVQYV7XOSQKCMBQE0UpQwfkrSJwCKmDf/4YuVOIF7F29VQOA897xs50k1aknmnmfPRfvWptdBjOz29Vs46B6aFx/cEBIEAEIamhWc3EcIRKXhQj/hX47nGvt7x8o07ETANP2210OvABwcxH233o1TgAAAABJRU5ErkJggg=="></a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table></div>
            
            </div>
        </div>

      </div>
    

            <!-- FOOTER CON PHP -->
  <?php include 'includes/footer.php' ?>
        <!-- FOOTER CON PHP -->

  </body>
</html>
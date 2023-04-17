<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>La Granjita</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsivecss" />
</head>
<style>

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
<body>

  <!-- HEADER CON PHP -->
  <?php include 'includes/header.php' ?>
  <!-- HEADER CON PHP -->

  <div id="wrapper">
    <div id="content">
      <div class="container">
        <!--<img style="object-fit:cover;width: 100%;height: 100%;" src="https://www.vhv.rs/dpng/d/359-3590456_pagina-en-construccion-png-transparent-png.png">-->

          
          <div class="box G">
          
              		<table class="tftable">
			<thead>
				<th>Descripcion</th>
                <th>Cantidad</th>
                <th>Precio</th>
				<th>Opciones</th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `tmp`");
					while($row=mysqli_fetch_array($query)){
                        $total=$row['cantidad']*$row['precio'];
                        $suma+=$total;
						?>
						<tr>
							<td><?php echo $row['descripcion']; ?></td>
                            <td><?php echo $row['cantidad']; ?></td>
                            <td>$<?php echo $row['precio']; ?></td>
							<td>
								<a href="delete.php?id=<?php echo $row['id']; ?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAeFBMVEUAAADnTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDx+VWpeAAAAJ3RSTlMAAQIFCAkPERQYGi40TVRVVlhZaHR8g4WPl5qdtb7Hys7R19rr7e97kMnEAAAAaklEQVQYV7XOSQKCMBQE0UpQwfkrSJwCKmDf/4YuVOIF7F29VQOA897xs50k1aknmnmfPRfvWptdBjOz29Vs46B6aFx/cEBIEAEIamhWc3EcIRKXhQj/hX47nGvt7x8o07ETANP2210OvABwcxH233o1TgAAAABJRU5ErkJggg=="></a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
              
            <form>
			<input type="hidden" name="id_cliente" value="">
            <input type="hidden" name="monto" value="<?php echo number_format($suma,2); ?>">
            Total a pagar: $<?php echo number_format($suma,2); ?><br>
			
	        </form>
              
              <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="form_pay">

    <!-- Valores requeridos -->
    <input type="hidden" name="business" value="vendedor@business.example.com">
    <input type="hidden" name="cmd" value="_xclick">

    <label for="amount" class="form-label">amount</label>
    <input type="text" name="amount" id="" value="<?php echo number_format($suma,2); ?>" required=""><br>

    <input type="hidden" name="currency_code" value="EUR">


    <!-- Valores opcionales -->
    <!-- En el siguiente enlace puedes encontrar una lista completa de Variables HTML para pagos estándar de PayPal. -->
    <!-- https://developer.paypal.com/docs/paypal-payments-standard/integration-guide/Appx-websitestandard-htmlvariables/ -->

    <input type="hidden" name="item_number" value="1">
    <!-- <input type="hidden" name="invoice" value="0012"> -->

    <input type="hidden" name="lc" value="es_ES">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="image_url" value="https://picsum.photos/150/150">
    <input type="hidden" name="return" value="<?= $baseUrl ?>/receptor.php">
    <input type="hidden" name="cancel_return" value="<?= $baseUrl ?>pago_cancelado.php">

    <hr>
                  <br>
    <button type="submit" class="botonn">Pagar ahora con Paypal!</button>

</form>
              
          </div>
          
      </div>
    </div>
  </div>

  <!-- FOOTER CON PHP -->
  <?php include 'includes/footer.php' ?>
  <!-- FOOTER CON PHP -->

</body>

</html>
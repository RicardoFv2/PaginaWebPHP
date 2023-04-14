<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>La Granjita</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsivecss" />
</head>

<body>

  <!-- HEADER CON PHP -->
  <?php include 'includes/header.php' ?>
  <!-- HEADER CON PHP -->

  <div id="wrapper">
    <div id="content">
      <div class="container">
        <!--<img style="object-fit:cover;width: 100%;height: 100%;" src="https://www.vhv.rs/dpng/d/359-3590456_pagina-en-construccion-png-transparent-png.png">-->

          <?php
          include('conn.php');
          $query=mysqli_query($conn,"select * from `user`");
          while($row=mysqli_fetch_array($query)){
          ?>
          
          <div class="box P">
              
          <img src="<?php echo $row['foto']; ?>" class="porf">
              
          <div class="frijol">
              
          <div class="arroz"><?php echo $row['nombre']; ?></div>
          <div class="fantasma" style="top:0px;left:0px"><?php echo $row['descripcion']; ?></div>
          <button class="botonbuy"><?php echo $row['precio']; ?></button>
              
          </div>
          </div>
          
          <?php
          }
          ?>
          
      </div>
    </div>
  </div>

  <!-- FOOTER CON PHP -->
  <?php include 'includes/footer.php' ?>
  <!-- FOOTER CON PHP -->

</body>

</html>
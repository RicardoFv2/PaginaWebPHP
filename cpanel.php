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
            <div class="box G">

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
                        border-color: #729ea5;}
                    .tftable tr:hover {background-color:#e2e2e2;
                    }

                    </style>
                    
                    <table class="tftable" border="1">
                    <tr><th>ID</th><th>FOTO</th><th>NOMBRE</th><th>DESCRIPCION</th><th>PRECIO</th><th>INVENTARIO</th><th>ACCIONES</th></tr>
                    <tr><td>35</td><td style="color: blue;"><img src="https://www.proyectobrujula.com/wp-content/uploads/2021/02/Captura-de-pantalla-2021-02-17-a-las-14.41.45.png" class="porf2"/>EDITAR</td><td>Tomahawke Saltbae 4k</td><td>Carnita con oro</td><td>$400</td><td>10</td><td style="color: red;">ELIMINAR</td></tr>
                    <tr><td>35</td><td style="color: blue;"><img src="https://www.proyectobrujula.com/wp-content/uploads/2021/02/Captura-de-pantalla-2021-02-17-a-las-14.41.45.png" class="porf2"/>EDITAR</td><td>Tomahawke Saltbae 4kkkkkkkkkkk</td><td>Carnita con orooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo</td><td>$400</td><td>10</td><td style="color: red;">ELIMINAR</td></tr>
                    </table>
                  </div>

                  <div class="box G">
                    <table class="tftable" border="1">
                      <tr><th>ID</th><th>FOTO</th><th>NOMBRE</th><th>DESCRIPCION</th><th>PRECIO</th><th>INVENTARIO</th><th>ACCIONES</th></tr>
                      <tr><td><input value="16" type="text" id="name" name="name" size="5"></td><td>.</td><td><input value="Chirmol" type="text" id="name" name="name" size="5"></td><td><input value="Tomate, cebolla" type="text" id="name" name="name" size="5"></td><td>$<input value="7.95" type="text" id="name" name="name" size="5"></td><td><input value="21" type="text" id="name" name="name" size="5"></td><td style="color: red;">ELIMINAR</td></tr>
                      <tr><td><input value="16" type="text" id="name" name="name" size="5"></td><td>.</td><td><input value="Chirmol" type="text" id="name" name="name" size="5"></td><td><input value="Tomate, cebolla" type="text" id="name" name="name" size="5"></td><td>$<input value="7.95" type="text" id="name" name="name" size="5"></td><td><input value="21" type="text" id="name" name="name" size="5"></td><td style="color: red;">ELIMINAR</td></tr>
                      <tr><td><input value="16" type="text" id="name" name="name" size="5"></td><td>.</td><td><input value="Chirmol" type="text" id="name" name="name" size="5"></td><td><input value="Tomate, cebolla" type="text" id="name" name="name" size="5"></td><td>$<input value="7.95" type="text" id="name" name="name" size="5"></td><td><input value="21" type="text" id="name" name="name" size="5"></td><td style="color: red;">ELIMINAR</td></tr>
                      
                      </table>
                  </div>
                    
                  <div class="box G">
                    <table class="tftable" border="1">
                      <tr><th>ID</th><th>FOTO</th><th>NOMBRE</th><th>DESCRIPCION</th><th>PRECIO</th><th>INVENTARIO</th><th>ACCIONES</th></tr>
                      <tr><td><input type="text" id="name" name="name" size="5"></td><td>.</td><td><input type="text" id="name" name="name" size="5"></td><td><input type="text" id="name" name="name" size="5"></td><td><input type="text" id="name" name="name" size="5"></td><td><input type="text" id="name" name="name" size="5"></td><td style="color: green;">AGREGAR</td></tr>
                      </table>
                  </div>

            </div>
        </div>

      </div>
    </div>

            <!-- FOOTER CON PHP -->
  <?php include 'includes/footer.php' ?>
        <!-- FOOTER CON PHP -->

  </body>
</html>
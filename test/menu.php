<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand" href="menu.php"><img src="https://i.ibb.co/T0j72fF/logob.png" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
      aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link active" href="../index.php" aria-current="page">Inicio <span
              class="visually-hidden">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Carrito</a>
        </li>
        <li class="nav-item active">

          <p class="nav-link">
            <?php
            date_default_timezone_set('America/El_Salvador');
            $date = date('l  h:i:s');
            echo $date;
            ?>

            <script>
              var f = new Date();
              var diasSemana = new Array(
                "Domingo",
                "Lunes",
                "Martes",
                "Miércoles",
                "Jueves",
                "Viernes",
                "Sábado"
              );
              var f = new Date();
              document.write(
                diasSemana[f.getDay()] +
                " " +
                f.getHours() +
                ":" +
                f.getMinutes()
              );
            </script>
          </p>
        </li>
      </ul>
    </div>
  </nav>
  <br />
  <br />

  <div class="row justify-content-center align-items-center g-2">
    <div class="col-3">
      <div class="card">
        <img title="Producto" alt="Titulo" class="card-img-top"
          src="https://i0.wp.com/criteriohidalgo.com/wp-content/uploads/2018/11/3e53f637-cookylaucha_20180622_th_landscape_tuetano.jpg?fit=1920%2C1080&ssl=1"
          class="img-fluid rounded-top" alt="" />
        <div class="card-body">
          <span>Nombre Producto</span>
          <h5 class="card-title">Titulo</h5>
          <p class="card-text">Contenido</p>
          <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
            Agregar al carrito
          </button>
        </div>
      </div>
    </div>


    <div class="col-3">
      <div class="card">
        <img title="Producto" alt="Titulo" class="card-img-top"
          src="https://i0.wp.com/criteriohidalgo.com/wp-content/uploads/2018/11/3e53f637-cookylaucha_20180622_th_landscape_tuetano.jpg?fit=1920%2C1080&ssl=1"
          class="img-fluid rounded-top" alt="" />
        <div class="card-body">
          <span>Nombre Producto</span>
          <h5 class="card-title">Titulo</h5>
          <p class="card-text">Contenido</p>
          <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
            Agregar al carrito
          </button>
        </div>
      </div>
    </div>


    <div class="col-3">
      <div class="card">
        <img title="Producto" alt="Titulo" class="card-img-top"
          src="https://i0.wp.com/criteriohidalgo.com/wp-content/uploads/2018/11/3e53f637-cookylaucha_20180622_th_landscape_tuetano.jpg?fit=1920%2C1080&ssl=1"
          class="img-fluid rounded-top" alt="" />
        <div class="card-body">
          <span>Nombre Producto</span>
          <h5 class="card-title">Titulo</h5>
          <p class="card-text">Contenido</p>
          <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
            Agregar al carrito
          </button>
        </div>
      </div>
    </div>

    <div class="col-3">
      <div class="card">
        <img title="Producto" alt="Titulo" class="card-img-top"
          src="https://i0.wp.com/criteriohidalgo.com/wp-content/uploads/2018/11/3e53f637-cookylaucha_20180622_th_landscape_tuetano.jpg?fit=1920%2C1080&ssl=1"
          class="img-fluid rounded-top" alt="" />
        <div class="card-body">
          <span>Nombre Producto</span>
          <h5 class="card-title">Titulo</h5>
          <p class="card-text">Contenido</p>
          <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
            Agregar al carrito
          </button>
        </div>
      </div>
    </div>

    <div class="col-3">
      <div class="card">
        <img title="Producto" alt="Titulo" class="card-img-top"
          src="https://i0.wp.com/criteriohidalgo.com/wp-content/uploads/2018/11/3e53f637-cookylaucha_20180622_th_landscape_tuetano.jpg?fit=1920%2C1080&ssl=1"
          class="img-fluid rounded-top" alt="" />
        <div class="card-body">
          <span>Nombre Producto</span>
          <h5 class="card-title">Titulo</h5>
          <p class="card-text">Contenido</p>
          <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
            Agregar al carrito
          </button>
        </div>
      </div>
    </div>

    <div class="col-3">
      <div class="card">
        <img title="Producto" alt="Titulo" class="card-img-top"
          src="https://i0.wp.com/criteriohidalgo.com/wp-content/uploads/2018/11/3e53f637-cookylaucha_20180622_th_landscape_tuetano.jpg?fit=1920%2C1080&ssl=1"
          class="img-fluid rounded-top" alt="" />
        <div class="card-body">
          <span>Nombre Producto</span>
          <h5 class="card-title">Titulo</h5>
          <p class="card-text">Contenido</p>
          <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
            Agregar al carrito
          </button>
        </div>
      </div>
    </div>

    <div class="col-3">
      <div class="card">
        <img title="Producto" alt="Titulo" class="card-img-top"
          src="https://i0.wp.com/criteriohidalgo.com/wp-content/uploads/2018/11/3e53f637-cookylaucha_20180622_th_landscape_tuetano.jpg?fit=1920%2C1080&ssl=1"
          class="img-fluid rounded-top" alt="" />
        <div class="card-body">
          <span>Nombre Producto</span>
          <h5 class="card-title">Titulo</h5>
          <p class="card-text">Contenido</p>
          <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
            Agregar al carrito
          </button>
        </div>
      </div>
    </div>

    <div class="col-3">
      <div class="card">
        <img title="Producto" alt="Titulo" class="card-img-top"
          src="https://i0.wp.com/criteriohidalgo.com/wp-content/uploads/2018/11/3e53f637-cookylaucha_20180622_th_landscape_tuetano.jpg?fit=1920%2C1080&ssl=1"
          class="img-fluid rounded-top" alt="" />
        <div class="card-body">
          <span>Nombre Producto</span>
          <h5 class="card-title">Titulo</h5>
          <p class="card-text">Contenido</p>
          <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
            Agregar al carrito
          </button>
        </div>
      </div>
    </div>




  </div>
</body>

</html>
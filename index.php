<?php
@include 'config.php';
session_start();
if (isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($conn, $_POST['usermail']);
	$pass = md5($_POST['password']);
	$select = "SELECT * from user_form where email = '$email' && password = '$pass'";
	$result = mysqli_query($conn, $select);
	if (mysqli_num_rows($result) > 0) {
		$_SESSION['usermail'] = $email;
		header('location:header.php');
	}else{
		$error[] = 'contraseña o correo electrónico incorrecto.';
	}
}
?>

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
    <div class="boxmenu">
      <button class="menus izqu" onclick="window.location.href='index.php'">
        INICIO
      </button>
      <button class="menus izqu" onclick="window.location.href='menu.html'">
        MENU
      </button>

      <div class="cent">
        <img class="liston" src="https://i.ibb.co/ZYYNFzR/vecteezy-ribbon-1197212.png"/>
      </div>
      <div class="cent">
        <img class="porf" src="https://i.ibb.co/T0j72fF/logob.png" />
      </div>

      <button class="menus dere" onclick="window.location.href='contacto.html'">
        CONTACTO
      </button>
      <button class="menus dere" onclick="window.location.href='nosotros.html'">
        NOSOTROS
      </button>
      <button class="menus dere" onclick="#"></button>

      <button class="abrirCP" onclick="window.location.href='cpanel.html'">CPanel</button>
      <button class="abrirModal" id="abrirModal">Iniciar sesion</button>

      <input
        class="buscador"
        type="text"
        name="buscador"
        placeholder="Buscar"
      />
    </div>
    <div id="wrapper">
      <div id="content">
        <div class="slider" style="max-width: 1280px">
          <ul>
            <li>
              <img
                src="https://i0.wp.com/criteriohidalgo.com/wp-content/uploads/2018/11/3e53f637-cookylaucha_20180622_th_landscape_tuetano.jpg?fit=1920%2C1080&ssl=1"
                alt=""
              />
            </li>
            <li>
              <img
                src="https://foodandtravel.mx/wp-content/uploads/2017/11/Carne-de-res.jpg"
                alt=""
              />
            </li>
            <li>
              <img
                src="https://static-sevilla.abc.es/media/gurmesevilla/2013/10/chuleta-venado-verduras.jpg"
                alt=""
              />
            </li>
            <li>
              <img
                src="https://s1.1zoom.me/b5559/853/Meat_products_Mushrooms_Tomatoes_527520_1920x1080.jpg"
                alt=""
              />
            </li>
          </ul>
        </div>

        <div class="container">
          <div class="box P">
            <div class="titulos">Prueba Nuestras Nuevas Promociones</div>
            <img
              src="https://i.ibb.co/BCFVTqs/jugoso-filete-cerdo-parrilla-hueso.jpg"
              class="porf"
            />
            <div class="fantasma">
              Disfruta nuetros nuevos platos exquisitos y ahora con nuevas
              salsas y bebidas
            </div>
          </div>
          <div class="box P">
            <div class="titulos">Nuevos Platos</div>
            <img
              src="https://i.ibb.co/f884mvx/49857.jpg"
              class="porf"
            />
            <div class="fantasma">
              Disfruta nuetros nuevos platos exquisitos y ahora con nuevas
              salsas y bebidas
            </div>
          </div>
          <div class="box P">
            <div class="titulos">Productos Importados</div>
            <img
              src="https://i.ibb.co/9ww0pbr/22623330-asado-de-cerdo-en-un-plato-marr-n.webp"
              class="porf"
            />
            <div class="fantasma">
              Disfruta nuetros nuevos platos exquisitos y ahora con nuevas
              salsas y bebidas
            </div>
          </div>
          <div class="box P">
            <div class="titulos">Platillos Refinados</div>
            <img
              src="https://i.ibb.co/GtvZC4s/Filete-cubierto-de-oro-shutterstock-2131621529.webp"
              class="porf"
            />
            <div class="fantasma">
              Disfruta nuetros nuevos platos exquisitos y ahora con nuevas
              salsas y bebidas
            </div>
          </div>
          <div class="box P">
            <div class="titulos">Bebidas Frías y Licores</div>
            <img class="porf"
              src="https://enlacocina.b-cdn.net/wp-content/uploads/2018/07/bebidas-refrescantes.jpg"
              
            />
            <div class="fantasma">
              Disfruta nuetros nuevos platos exquisitos y ahora con nuevas
              salsas y bebidas
            </div>
          </div>

          <div class="box P">
            <div class="titulos">Postres</div>
            <div class="fantasma">Prueba nuestros deliciosos postres con ingredientes 100% naturales y bajo en azúcar</div>
            <img class="porf" src="img/maxresdefault.jpg" alt="Postres">
          </div>
          <div class="box P">
            <div class="titulos">Eventos</div>
            <div class="fantasma">Disfruta un ambiente familiar en nuestro salón de eventos con la participación de artistas nacionales</div>
            <img class="porf" src="img/maxresdefault (1).jpg" alt="Postres">
          </div>

          
          <div class="box P">
            <div class="titulos">Zona de Juegos</div>
            <img class="porf"
              src="https://i.ibb.co/PT4Cy0g/zona-juegos-jkl470m6mq.jpg"
            />
            <div class="fantasma">
              Disfruta nuetros nuevos platos exquisitos y ahora con nuevas
              salsas y bebidas
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      Ordenar a través de nuestro call center al (503) 2121-2222
      <br /><br />Información para Eventos y Piñatas al (503) 2510-2929
      <br /><br />Servicio al cliente <br /><br />
      <hr style="width: 80%" />
      <br />
      © 2023 La Granjita International LLC. Todos los derechos reservados. El
      nombre La Granjita, logos, imágenes y marcas relacionadas son marcas
      registradas of La Granjita Company, La Granjita Int. LLC para El Salvador
      y Granjita Foods S.A. de C.V. para El Salvador.
      <br /><br />

      Formas de Pago:
      <figure class="formasPago">
        <img
          class="iconosFormasdePago"
          src="img/icons/efectivo.png"
          alt="Dinero en Efetivo"
        />
        <img
          class="iconosFormasdePago"
          src="img/icons/mastercard.png"
          alt="Mastercard"
        />
        <img class="iconosFormasdePago" src="img/icons/visa.png" alt="Visa" />
      </figure>

      <figure class="formasPago">
        <a href="https://es-la.facebook.com/">
          <img
            class="iconosRedes"
            src="img/icons/icons8-facebook.svg"
            alt="logo Facebook"
        /></a>
        <a href="https://twitter.com/?lang=es">
          <img
            class="iconosRedes"
            src="img/icons/icons8-twitter.svg"
            alt="logo Twitter"
        /></a>
        <a href="https://www.instagram.com/">
          <img
            class="iconosRedes"
            src="img/icons/icons8-instagram.svg"
            alt="logo Instagram"
        /></a>
      </figure>
    </footer>
    <div id="ventanaModal" class="modal">
     <div class="contenido-modal">
         <span class="cerrar">&times;</span>
         <h2>Login</h2>
         <form action="" method="post">
			<h3 class="title">Login now</h3>
			<input type="email" name="usermail" placeholder="enter your email" class="box" required>
			<input type="password" name="password" placeholder="enter your password" class="box" required>
			<input  type="submit" value="Iniciar Ahora" class="form-btn" name="submit">
			<p>¿No tienes una cuenta? <a href="php/register_form.php">Registrate ahora</a>
			</p>
		</form>
     </div>
   </div>
   <script> 
    var modal = document.getElementById("ventanaModal");

// Botón que abre el modal
var boton = document.getElementById("abrirModal");

// Hace referencia al elemento <span> que tiene la X que cierra la ventana
var span = document.getElementsByClassName("cerrar")[0];

// Cuando el usuario hace click en el botón, se abre la ventana
boton.addEventListener("click",function() {
  modal.style.display = "block";
});

// Si el usuario hace click en la x, la ventana se cierra
span.addEventListener("click",function() {
  modal.style.display = "none";
});

// Si el usuario hace click fuera de la ventana, se cierra.
window.addEventListener("click",function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});
        </script>
  </body>
</html>
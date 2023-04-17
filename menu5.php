<?php
include 'login/config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login/login.php');
}

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:login/login.php');
}

if (isset($_POST['add_to_cart'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name='$product_name' AND user_id = '$user_id'") or die('query failed 8');

    if (mysqli_num_rows($select_cart) > 0) {
        $message[] = 'product already added to cart';
    } else {
        mysqli_query($conn, "INSERT INTO `cart` (user_id, name, price, image, quantity) VALUES ('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed w');
        $message[] = 'product added to cart!';
    }
}
;



if (isset($_POST['update_cart'])) {
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];
    mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id= '$update_id'") or die('query failed r');
    $message[] = 'cart quantity updated successfully';

}

if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id= '$remove_id'") or die('query failed gg');
    header('location:index.php');
}

if (isset($_GET['delete_all'])) {
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed ed');
    header('location:index.php');
}

?>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>La Granjita</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsivecss" />
  <link rel="stylesheet" href="CSS/login.css" />
</head>

<body>
<?php

if (isset($message)) {
    foreach ($message as $message) {
        echo '<div class="message" onclik="this.remove();">' . $message . "</div>";
    }
}
?>


  <!-- HEADER CON PHP -->
  <?php include 'includes/header.php' ?>
  <!-- HEADER CON PHP -->

  <div id="wrapper">
    <div id="content">
      <div class="container">


      <?php
        $select_user = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed 1');
        if (mysqli_num_rows($select_user) > 0) {
            $fetch_user = mysqli_fetch_assoc($select_user);
        }
        ?>

<div class="box P"
<p>Username: <span>
                    <?php echo $fetch_user['name']; ?>
                </span></p>
            <p>email: <span>
                    <?php echo $fetch_user['email']; ?>
                </span></p>
                <p>Id: <span>
                  <?php echo $fetch_user['id']; ?><p>Id: <span>
      
            <div class="flex">
                <a href="login/index.php" class="btn">Login</a>
                <a href="register.php" class="option-btn">Register</a>
                <a href="menu5.php?php echo $user_id; ?>"
                    onclick="return confirm('are you sure you want to logout');" class="delete-btn">logout</a>

            </div></div>
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
  <div id="ventanaModal" class="modal">
    <div class="contenido-modal">
    <form action="" method="post">
    <span class="cerrar">&times;</span>
            <h1>Login now</h1>
            <input type="email" name="email" required placeholder="enter email" class="box3">
            <input type="password" name="password" required placeholder="enter password" class="box3">
            <button type="submit" name="submit" class="btn" value="login now" > Login now </button>
            <p>don´t have an account <a href="register.php">Register Now</a></p>
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
    boton.addEventListener("click", function () {
      modal.style.display = "block";
    });

    // Si el usuario hace click en la x, la ventana se cierra
    span.addEventListener("click", function () {
      modal.style.display = "none";
    });

    // Si el usuario hace click fuera de la ventana, se cierra.
    window.addEventListener("click", function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    });
  </script>
</body>

</html>
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
</head>
<style>
  .tftable {
    table-layout: fixed;
    font-size: 12px;
    color: #333333;
    width: 100%;
    border-width: 1px;
    border-color: #efefef;
    border-collapse: collapse;

    text-align: center;
  }

  .tftable th {
    font-size: 15px;
    background-color: #2C3E50;
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #729ea5;
    width: 50px;
    word-wrap: break-word;
    color: white;

  }

  .tftable tr {
    background-color: #ffffff;
  }

  .tftable td {
    font-size: 14px;
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    word-wrap: break-word;
    border-color: #729ea5;
    border-left: 0;
    border-right: 0;
  }

  .tftable tr:hover {
    background-color: #e2e2e2;
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

        <?php
        $select_user = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed 1');
        if (mysqli_num_rows($select_user) > 0) {
          $fetch_user = mysqli_fetch_assoc($select_user);
        }
        ?>

        <div class="box P">
          <p>Username: <span>
              <?php echo $fetch_user['name']; ?>
            </span></p>
          <p>email: <span>
              <?php echo $fetch_user['email']; ?>
            </span></p>
          <p>Id: <span>
              <?php echo $fetch_user['id']; ?>
              <p>Id: <span>

                  <div class="flex">
                    <a href="login/index.php" class="btn">Login</a>
                    <a href="register.php" class="option-btn">Register</a>
                    <a href="menu5.php?php echo $user_id; ?>"
                      onclick="return confirm('are you sure you want to logout');" class="delete-btn">logout</a>

                  </div>
        </div>

        <div class="box MG">

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
              $query = mysqli_query($conn, "select * from `tmp`");
              while ($row = mysqli_fetch_array($query)) {
                $total = $row['cantidad'] * $row['precio'];
                $suma += $total;
                ?>
                <tr>
                  <td>
                    <?php echo $row['descripcion']; ?>
                  </td>
                  <td>
                    <?php echo $row['cantidad']; ?>
                  </td>
                  <td>$
                    <?php echo $row['precio']; ?>
                  </td>
                  <td>
                    <a href="delete.php?id=<?php echo $row['id']; ?>"><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAeFBMVEUAAADnTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDznTDx+VWpeAAAAJ3RSTlMAAQIFCAkPERQYGi40TVRVVlhZaHR8g4WPl5qdtb7Hys7R19rr7e97kMnEAAAAaklEQVQYV7XOSQKCMBQE0UpQwfkrSJwCKmDf/4YuVOIF7F29VQOA897xs50k1aknmnmfPRfvWptdBjOz29Vs46B6aFx/cEBIEAEIamhWc3EcIRKXhQj/hX47nGvt7x8o07ETANP2210OvABwcxH233o1TgAAAABJRU5ErkJggg=="></a>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>

          <form method="POST" action="fact.php">
            <label>Cliente:</label><input type="text" name="id_cliente" value="7">
            <input type="hidden" name="monto" value="<?php echo number_format($suma, 2); ?>">
            <input type="submit" value="Continuar con el Pago">
          </form>

        </div>


        <?php
        include('conn.php');
        $query = mysqli_query($conn, "select * from `user`");
        while ($row = mysqli_fetch_array($query)) {
          ?>

          <div class="box P">

            <img src="<?php echo $row['foto']; ?>" class="porf">
            <div class="fantasma" style="top:0px;left:0px">
              <?php echo $row['descripcion']; ?>
            </div>

            <div class="frijol" style="z-index:1000;">

              <form method="POST" action="add.php">

                <div class="arroz"><input type="hidden" name="descripcion" value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></div>


                <!--<button class="botonbuy"></button>-->
                <input type="text" name="cantidad" value="1" size="1">
                <input type="submit" class="botonbuy" name="precio" value="<?php echo $row['precio']; ?>">

              </form>
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
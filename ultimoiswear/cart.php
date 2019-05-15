<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-122x98.jpg" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">

  <title>Cart</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
  <?php
  include './headerIndex.php';
  ?>

<section class="services6 cid-rpO71tcdeR" id="services6-m">

    <!--Container-->
    <div class="container">
        <div class="row">
            <!--Titles-->
            <div class="title col-12">
                <h2 class="align-left mbr-fonts-style m-0 display-1">
                    Cart</h2>

            </div>

            <!--Card-1-->
            <?php

            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            if(!isset($_SESSION['sess_user'])){
              header("Location:./login.php");
            }else{

                $result = mysqli_query($conn,
                "SELECT DISTINCT p.Fabricante, p.Origen, p.Precio, h.hCantidad, h.Producto, u.Correo, p.Fotos, p.Nombre, p.Descripcion
                 FROM historial h, productos p, usuarios u
                 WHERE u.idUsuario=h.Usuario AND p.idProducto=h.Producto AND h.Paid=0 AND u.Correo='{$_SESSION['sess_user']}'");

                while($row=mysqli_fetch_array($result)){

                  $q = mysqli_query($conn, "SELECT Cantidad FROM productos WHERE Nombre='{$row['Nombre']}'");
                  while($a=mysqli_fetch_array($q)){

            echo "
            <div class='card col-12 pb-5'>
                <div class='card-wrapper media-container-row media-container-row'>
                    <div class='card-box'>
                        <div class='row'>
                            <div class='col-12 col-md-2'>
                                <!--Image-->
                                <div class='mbr-figure'>";

                    echo "            <img src='./img/{$row['Fotos']}'>

                               </div>
                            </div>
                            <div class='col-12 col-md-10'>
                                <div class='wrapper'>
                                    <div class='top-line pb-3'>
                                        <h4 class='card-title mbr-fonts-style display-5'> ";
                        echo                  "{$row['Nombre']}";
                        echo "           </h4>

                                      <div class='bottom-line' align='center' col-md-10>
                                        <p align='right' class='mbr-text cost mbr-fonts-style m-0 display-5'><br>";
                       echo               "$" .$row['Precio']. "<br>";
                       echo             "<form class='align-right' action='./deletecart.php' method='post'>";
                       echo              " <input type='number' name='cantidad' min=1 max={$a['Cantidad']} value={$row['hCantidad']} class='form-control'>";
                       echo "              </p>";
                        echo                "<input type='hidden' name='producto' value='{$row['Producto']}'</input>";
                        echo                "<button type='submit' align='right' class='btn btn-primary'>Eliminar de Carrito</button>";
                        echo              "</form>";
                      };

                        echo            "</p>
                                      </div>
                                    </div>
                                    <div class='mbr-fonts-style pb-3'>

                                            <p class='mbr-text cost mbr-fonts-style m-0 display-6'>
                                                Manufacturer: {$row['Fabricante']}
                                            </p>
                                            <p class='mbr-text cost mbr-fonts-style m-0 display-6'>
                                                Origin: {$row['Origen']}
                                            </p>

                                    </div>

                                    <div class='bottom-line'>
                                        <p class='mbr-text mbr-fonts-style display-7'>
                                            {$row['Descripcion']}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
            }
          }

  echo  "</div>";
      echo    "<form class='align-center' action='./buydo.php' method='post'>";
      echo         "<button type='submit' align='cener' class='btn btn-primary'>Finalizar Compra</button>";
      echo    "</form>";
        ?>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>

</body>
</html>


<!DOCTYPE html>
<html>
  <head>
<?php include './headerIndex.php';?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-122x98.jpg" type="image/x-icon">
  <meta name="description" content="Web Page Creator Description">

  <title>Administrator</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">


</section><section class="services6 cid-rpO6JNp7M3" id="services6-l">
    <!---->
    <div class="container">
        <div class="row">
            <!--Titles-->
            <div class="title col-12">
                <h3 class="align-center mbr-fonts-style m-0 display-1">
                    Database History</h3>
            </div>
</head>

      <table class="table" style="text-align: center;">
        <thead class="thead-dark">
          <tr>
            <th>Usuario</th>
            <th>Foto</th>
            <th>ID Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
          </tr>

        </thead>
        <tbody>

        <!-- Product -->
        <?PHP
          // Check connection
          if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

          if(!isset($_SESSION['sess_user'])){
            header("Location:./index.php");
          }else{
          $result = mysqli_query($conn,"SELECT DISTINCT u.Correo, p.Fotos, p.Nombre, p.Precio, h.hCantidad, h.Producto FROM historial h, productos p, usuarios u WHERE h.Producto=p.idProducto AND u.idUsuario=h.Usuario AND Paid=1;");
            while($row = mysqli_fetch_array($result)) {
              echo "<tr>";
			          echo "<td class='align-middle'> <h4>{$row['Correo']} </h4></td>";
                echo "<td class='align-middle'> <img src='./img/".$row['Fotos']."' style='height:130px;'> </td>";
                echo "<td class='align-middle'> <h4>{$row['Producto']} </h4></td>";
                echo '<td class="align-middle"> <h4>$'. $row["Precio"] .'</h4></td>';
                echo "<td class='align-middle'> <h4>{$row['hCantidad']} </h4></td>";
              echo "</tr>";
            }
          }
        ?>

        </tbody>
      </table>
    </div>

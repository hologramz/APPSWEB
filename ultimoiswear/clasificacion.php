<!DOCTYPE html>
<html  >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-122x98.jpg" type="image/x-icon">
  <meta name="description" content="Web Builder Description">

  <title>Clasificacion</title>
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
<?php

  if (isset($_POST['NR'])) {
      $afiliation = $_POST['NR'];
  }else if (isset($_POST['GE'])) {
      $afiliation = $_POST['GE'];
  }else if (isset($_POST['EE'])) {
      $afiliation = $_POST['EE'];
  }else if (isset($_POST['GR'])){
      $afiliation = $_POST['GR'];
  }else if (isset($_POST['RHON'])){
      $afiliation = $_POST['RHON'];
  }else if (isset($_POST['S'])){
      $afiliation = $_POST['S'];
  }else if (isset($_POST['JO'])){
      $afiliation = $_POST['JO'];
  }else if (isset($_POST['SE'])){
      $afiliation = $_POST['SE'];
  }else if (isset($_POST['R'])){
      $afiliation = $_POST['R'];
  }else if (isset($_POST['RS'])){
      $afiliation = $_POST['RS'];
  }else if (isset($_POST['AI'])){
      $afiliation = $_POST['AI'];
  }else{
    //header("Location:./index.php");
    echo "fail";
  }

?>
<section class="services6 cid-rpO6JNp7M3" id="services6-l">

    <div class="container">

        <div class="row">
            <!--Titles-->
            <div class="title col-12">
                <h2 class="align-left mbr-fonts-style m-0 display-1">
                    <?php echo "$afiliation"; ?></h2>
            </div>



            <?php

                $result = mysqli_query($conn,"SELECT * FROM productos WHERE Afiliacion = '$afiliation'");


                while($row=mysqli_fetch_array($result)){
            echo "
            <!--Card-1-->
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
                                        <p align='right' class='mbr-text cost mbr-fonts-style m-0 display-5'>";
                       echo               "$" . $row['Precio'] . "";
                       echo "              </p>";

                        if(isset($_SESSION['sess_user'])){
       if(                    $row['Cantidad']>0){

                        echo             "<form class='align-right' action='./addcart.php' method='post'>";
                        echo                "<input type='hidden' name='producto' value='{$row['idProducto']}'</input>";
                        echo                "<button type='submit' align='right' class='btn btn-primary'>Agregar al Carrito</button>";
                        echo              " <input type='number' name='cantidad' min=1 max={$row['Cantidad']} value=1 class='form-control'>";
                        echo              "</form>";
                              }
                        }
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
            </div>

            ";
            }
           ?>

        </div>
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

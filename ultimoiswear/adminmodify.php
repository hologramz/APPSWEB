<!DOCTYPE html>
<html  >
<head>
  <?php
  include './headerIndex.php';
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-122x98.jpg" type="image/x-icon">
  <meta name="description" content="Site Builder Description">

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
    <div class="container">
      <div class="row">
          <!--Titles-->
          <div class="title col-12">
              <h3 class="align-center mbr-fonts-style m-0 display-1">
                  Modify droids</h3>
                   <h1 align="center" class="my-3">Droids database</h1><br>
          </div>


</head>
<body>


  <?php
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  if(!isset($_SESSION['sess_user'])){
    header("Location:./index.php");
  }else{
    $admin = $_SESSION['sess_user'];
    if($admin != 'admin@swdroids.com'){
        header("Location:./index.php");
    }
  }
 ?>


 <div class="container">
   <!-- Page Heading -->
     <div class='row my-8' >
         <div class="col-xl-1 titlebox box">
            <h6 align="center" class="my-2">Nombre</h6>
         </div>
         <div class="col-xl-3 titlebox box"style="font-size:14px">
           <h6 align="center" class="my-2">Descripcion</h6>
         </div>
         <div class="col-xl-1 titlebox box" style="font-size:14px">
           <h6 align="center" class="my-2">Origen</h6>
         </div>
         <div class="col-xl-1 titlebox box" style="font-size:14px">
           <h6 align="center" class="my-2">Precio</h6>
         </div>
         <div class="col-xl-2 titlebox box" style="font-size:14px">
           <h6 align="center" class="my-2">Fabricante</h6>
         </div>
         <div class="col-xl-1 titlebox box" style="font-size:14px">
           <h6 align="center" class="my-2">Cantidad</h6>
         </div>
         <div class="col-xl-1 titlebox box" style="font-size:14px">
           <h6 align="center" class="my-2">Afiliacion</h6>
         </div>
         <div class="col-xl-1 titlebox box" style="font-size:14px">
           <h6 align="center" class="my-2">Foto</h6>
         </div>
         <div class="col-xl-1 titlebox box" style="font-size:14px">
              <h6 align="center" class="my-2"></h6>
         </div>
   </div>
   <?php
       if (mysqli_connect_errno()) {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
         $result = mysqli_query($conn,"SELECT * FROM productos");

         while($row = mysqli_fetch_array($result)) {
           echo "<form action='./adminmodify2.php' method='post'>";
           echo "<div class='row my-6' >";
           echo "<textarea class='col-xl-1 box' name='Nombre'> {$row['Nombre']} </textarea>";
           echo "<textarea class='col-xl-3 box' name='Descripcion'> {$row['Descripcion']} </textarea>";
           echo "<textarea class='col-xl-1 box' name='Origen'>{$row['Origen']} </textarea>";
           echo "<textarea class='col-xl-1 box' name='Precio'> {$row['Precio']} </textarea>";
           echo "<textarea class='col-xl-2 box' name='Fabricante'>{$row['Fabricante']} </textarea>";
           echo "<textarea class='col-xl-1 box' name='Cantidad'>{$row['Cantidad']} </textarea>";
           echo "<textarea class='col-xl-1 box' name='Afiliacion'>{$row['Afiliacion']} </textarea>";
           echo "<div class='col-xl-1 box' name='Fotos'><img src='./img/{$row['Fotos']}' style='max-width:100%; display:block; max-height:100%;'></img></div>";
           echo "<div class='col-xl-1 box'><button class='btn btn-primary btn-sm' name='id_producto' value ={$row['idProducto']} type='submit'>Save Changes</div>";
           echo "<input type='hidden' value='{$row['idProducto']}'>";
           echo "</div>";
           echo "</form>";
         }

   ?>
         </div>
       </div>

             <script src="assets/web/assets/jquery/jquery.min.js"></script>
             <script src="assets/popper/popper.min.js"></script>
             <script src="assets/tether/tether.min.js"></script>
             <script src="assets/bootstrap/js/bootstrap.min.js"></script>
             <script src="assets/smoothscroll/smooth-scroll.js"></script>
             <script src="assets/parallax/jarallax.min.js"></script>
             <script src="assets/dropdown/js/script.min.js"></script>
             <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
             <script src="assets/theme/js/script.js"></script>


           </body>
       </html>

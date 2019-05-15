
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

  <title>Administrador</title>
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
                    New droids?</h3>
            </div>
</head>


  <?PHP
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

     <div class="col-lg-12">
       <div class="card mt-4">
       <div class="card-body">

         <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

           <div class="row">

            <!-- p_nombre -->
             <div class="col-xl-6">
               <div class="form-group">
                 <label class="control-label col-sm-12">Nombre</label>
                 <div class="col-sm-12">
                   <input type="text" required="required" maxlength="30" name="p_nombre" class="form-control" placeholder="Serie">
                 </div>
               </div>
             </div>

            <!-- p_origen -->
             <div class="col-xl-6">
               <div class="form-group">
                 <label class="control-label col-sm-12">Origen</label>
                 <div class="col-sm-12">
                   <input type="text" required="required" maxlength="20" name="p_origen" class="form-control" placeholder="Origen">
                 </div>
               </div>
             </div>

            <!-- p_precio -->
             <div class="col-xl-6">
               <div class="form-group">
                 <label class="control-label col-sm-12">Precio</label>
                 <div class="col-sm-12">
                   <input type="number" required="required" maxlength="11" name="p_precio" class="form-control" placeholder="Precio">
                 </div>
               </div>
             </div>

            <!-- p_fabricante -->
             <div class="col-xl-6">
               <div class="form-group">
                 <label class="control-label col-sm-12">Fabricante</label>
                 <div class="col-sm-12">
                   <input type="text" maxlength="20" required="required" name="p_fabricante" class="form-control" placeholder="Manufacturer">
                 </div>
               </div>
             </div>

            <!-- p_cantidad -->
             <div class="col-xl-6">
               <div class="form-group">
                 <label class="control-label col-sm-12">Cantidad</label>
                 <div class="col-sm-12">
                   <input type="number" maxlength="11" required="required" name="p_cantidad" class="form-control" placeholder="Droides en mayoreo">
                 </div>
               </div>
             </div>

            <!-- p_catogoria -->
             <div class="col-xl-6">
               <div class="form-group">
                 <label class="control-label col-sm-12">Afiliacion</label>
                 <div class="col-sm-12">
                   <select  class="form-control" required="required" name="p_afiliacion">
                     <option value="Eternal Empire">Eternal Empire</option>
                     <option value="Royal house of Naboo">Royal house of Naboo</option>
                     <option value="Galactic Republic">Galactic Republic</option>
					           <option value="New Republic">New Republic</option>
                     <option value="Jedi Order">Jedi Order</option>
                     <option value="Separatist">Separatist</option>
                     <option value="Sith Empire">Sith Empire</option>
                     <option value="Galactic Empire">Galactic Empire</option>
                     <option value="Resistance">Resistance</option>
                     <option value="RoSec">RoSec</option>
                     <option value="Alliance Intelligence">Alliance Intelligence</option>
                   </select>
                 </div>
               </div>
             </div>

             <!-- file upload-->
              <div class="col-xl-6">
                <div class="form-group">
                  <label class="control-label col-sm-12">Imagen:</label>
                  <div class="col-sm-12">
                      <input type="file" required="required" name="fileToUpload" id="fileToUpload">
                  </div>
                </div>
              </div>

            <!-- p_descripcion -->
             <div class="col-xl-12">
               <div class="form-group">
                 <label class="control-label col-sm-12">Descripcion</label>
                 <div class="col-sm-12">
                   <textarea type="textarea" required="required" rows="5" maxlength="380" name="p_descripcion" class="form-control" placeholder="Descripcion"></textarea>
                 </div>
               </div>
             </div>

            <!-- Submit -->
             <div class="col-xl-12">
               <div class="form-group">
                 <div class="col-sm-12">
                   <button type="submit" name="submit" class="btn btn-primary btn-block">Insert Product</button>
                 </div>
               </div>
             </div>

           </div>
         </form>

           <?php
             if(!isset($_POST['p_nombre']) || !isset($_POST['p_origen']) || !isset($_POST['p_precio']) || !isset($_POST['p_fabricante']) || !isset($_POST['p_cantidad']) || !isset($_POST['p_afiliacion']) || !isset($_POST['p_descripcion'])){
               echo "*All fields required";
             }else{
               $p_nombre = $_POST['p_nombre'];
               $p_origen = $_POST['p_origen'];
               $p_precio = $_POST['p_precio'];
               $p_fabricante = $_POST['p_fabricante'];
               $p_cantidad = $_POST['p_cantidad'];
               $p_afiliacion = $_POST['p_afiliacion'];
               $p_descripcion = $_POST['p_descripcion'];
               $result = mysqli_query($con,"SELECT * FROM productos ORDER BY idProducto DESC");
               $row = mysqli_fetch_array($result);

               $id = $row['idProducto'] + 1;
               $target_dir = "./img/";
               $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
               $uploadOk = 1;
               $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
               // Check if image file is a actual image or fake image
               if(isset($_POST["submit"])) {
                   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                   if($check !== false) {
                       $uploadOk = 1;
                   } else {
                       echo "<div hidden='hidden' data-form-alert='' class='alert alert-danger col-12'>File is not an image. </div><br><br>";
                       $uploadOk = 0;
                   }
               }
               // Check if file already exists
               if (file_exists($target_file)) {
                   echo "<div hidden='hidden' data-form-alert='' class='alert alert-danger col-12'>Sorry, file already exists. </div><br><br>";
                   $uploadOk = 0;
               }
               // Check file size
               if ($_FILES["fileToUpload"]["size"] > 500000) {
                   echo "<div hidden='hidden' data-form-alert='' class='alert alert-danger col-12'>Sorry, your file is too large. </div><br><br>";
                   $uploadOk = 0;
               }
               // Allow certain file formats
               if($imageFileType != "png") {
                   echo "<div hidden='hidden' data-form-alert='' class='alert alert-danger col-12'>Sorry, only PNG files are allowed. </div><br><br>";
                   $uploadOk = 0;
               }
               // Check if $uploadOk is set to 0 by an error
               if ($uploadOk == 0) {
                   echo "<div hidden='hidden' data-form-alert='' class='alert alert-danger col-12'>Sorry, your file was not uploaded. </div><br><br>";
               // if everything is ok, try to upload file
               } else {
                 $p_foto = basename($_FILES["fileToUpload"]["name"]);
                 $query =  "INSERT INTO productos (Nombre, Descripcion, Fotos, Precio, Cantidad, Fabricante, Origen, Afiliacion)
                  VALUES('$p_nombre','$p_descripcion','$p_foto','$p_precio','$p_cantidad','$p_fabricante','$p_origen','$p_afiliacion')";
                 $result = mysqli_query($con, $query);

                 if($result){
                   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                     echo "<div hidden='hidden' data-form-alert='' class='alert alert-success col-12'> Droid added! </div><br>";
                   } else {
                       echo "<div hidden='hidden' data-form-alert='' class='alert alert-danger col-12'>There was an error uploading your droid. We're sorry! </div><br>";
                   }
                 }else{
                    echo "<div hidden='hidden' data-form-alert='' class='alert alert-danger col-12'>We couldn't upload your droid. We're sorry! </div><br>";
                 }
               }
             }

           ?>
       </div>
     </div>
    <!-- /.container -->
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

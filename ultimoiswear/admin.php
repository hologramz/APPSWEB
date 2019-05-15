<!DOCTYPE html>
<html>
  <head>

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
                    Administrator Tools</h3>
            </div>
</head>
<body>

<meta charset="UTF-8">
<?php include './headerIndex.php';?>

  <?PHP
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if(!isset($_SESSION['sess_user'])){
      header("Location:./admin.php");
    }else {
      $admin = $_SESSION['sess_user'];
      if($admin != 'admin@swdroids.com'){
          header("Location:./index.php");
      }
    }
   ?>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 portfolio-item ">
          <div class="card card text-center">

            <div class="card-body">
              <div class="col-auto input-group-btn" align="center">
                <form action="./adminadd.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                    <button type="submit" name="submit" class="btn btn-primary display-4">Add droids into the database</button>
                </form>
                <br><br>
              </div>
              <p class="card-text"></p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-sm-6 portfolio-item text-center">
          <div class="card card text-center">

            <div class="card-body">
                <form action="./admindelete.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                    <button type="submit" name="submit" class="btn btn-primary display-4">Delete droids from the database</button>
                </form>
            </div>
          </div>
        </div>

		<div class="col-lg-6 col-sm-6 portfolio-item text-center">
          <div class="card card text-center">

            <div class="card-body">
                <form action="./adminhistory.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                    <button type="submit" name="submit" class="btn btn-primary display-4">See shopping history</button>
                </form>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-sm-6 portfolio-item text-center">
              <div class="card card text-center">

                <div class="card-body">
                  <form action="./adminmodify.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                      <button type="submit" name="submit" class="btn btn-primary display-4">Modify droids data</button>
                  </form>
                </div>
              </div>
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

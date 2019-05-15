<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.9.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-122x98.jpg" type="image/x-icon">
  <meta name="description" content="Website Creator Description">

  <title>info</title>
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
        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($conn, "SELECT * FROM usuarios WHERE Correo='{$_SESSION['sess_user']}'");

        while($row=mysqli_fetch_array($result)){


echo "<div class='container'>
        <div class='row'>
            <!--Titles-->
            <div class='title col-12'>
              <br><br><br><br><br>
                <h2 class='align-left mbr-fonts-style display-1'>";
    echo              $row['Nombre'] ;
    echo    "    </h2>
                <br><br>
            </div>
            <!--Left-->
            <div class='col-12 col-md-6'>
                <div class='left-block wrapper'>
                    <div class='b b-mail'>
                        <h5 class='align-left mbr-fonts-style m-0 display-5'>
                            E-mail:
                        </h5>
                        <p class='mbr-text align-left mbr-fonts-style display-7'>
                            {$row['Correo']}
                        </p><br>
                    </div>
                    <div class='b b-adress'>
                        <h5 class='align-left mbr-fonts-style m-0 display-5'>
                            Address:
                        </h5>
                        <p class='mbr-text align-left mbr-fonts-style display-7'>
                            {$row['Direccion']}
                        </p><br>
                    </div>
                    <div class='b b-phone'>
                        <h5 class='align-left mbr-fonts-style m-0 display-5'>
                            Birth date:
                        </h5>
                        <p class='mbr-text align-left mbr-fonts-style display-7'>
                            {$row['Nacimiento']}
                        </p><br>
                    </div>
                    <div class='b b-phone'>
                        <h5 class='align-left mbr-fonts-style m-0 display-5'>
                            Card Number:
                        </h5>
                        <p class='mbr-text align-left mbr-fonts-style display-7'>
                            {$row['Tarjeta']}
                        </p><br>
                    </div>
                </div>
            </div>

        </div>
    </div>";
  }
  ?>

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

<!DOCTYPE html>
<html  >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-122x98.jpg" type="image/x-icon">
  <meta name="description" content="Site Builder Description">

  <title>Signup</title>
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


<section class="mbr-section form1 cid-rpOcFGt8oi" id="form1-r">

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8"><br>
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">FIRST TIME?</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="" method="POST" class="mbr-form form-with-styler">
                  <div class="row row-sm-offset">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Bienvenido! Ahora puedes comprar!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row row-sm-offset">
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-r" class="form-control-label mbr-fonts-style display-7">Name</label>
                            <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="form1-r">
                        </div>
                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-r" class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input type="email" name="email" data-form-field="Email" required="required" class="form-control display-7" id="form1-r">
                        </div>
                        <div class="col-md-4  form-group" data-for="password">
                            <label for="password-form1-r" class="form-control-label mbr-fonts-style display-7">Password</label>
                            <input type="password" name="password" data-form-field="Password" required="required" class="form-control display-7" id="form1-r">
                        </div>
                        <div class="col-md-4  form-group" data-for="date">
                            <label for="date-form1-r" class="form-control-label mbr-fonts-style display-7">Birth date</label>
                            <input type="number" name="date" data-form-field="Date" required="required" class="form-control display-7" id="form1-r">
                        </div>
                        <div class="col-md-4  form-group" data-for="card">
                            <label for="card-form1-r" class="form-control-label mbr-fonts-style display-7">Card</label>
                            <input type="text" name="card" data-form-field="card" class="form-control display-7" id="form1-r">
                        </div>
                        <div class="col-md-4  form-group" data-for="address">
                            <label for="address-form1-r" class="form-control-label mbr-fonts-style display-7">Address</label>
                            <input type="text" name="address" data-form-field="address" class="form-control display-7" id="form1-r">
                        </div>
                        <div class="col-md-12 input-group-btn align-center"><button type="submit" name="submit" href="./login.php" class="btn btn-primary btn-form display-4">SIGN UP</button></div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
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
  <script src="assets/formoid/formoid.min.js"></script>

  <?php
    if(isset($_POST["submit"])){
      if ( !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['date']) && !empty($_POST['card']) && !empty($_POST['address']) ){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $date = $_POST['date'];
      $card = $_POST['card'];
      $address = $_POST['address'];

      $conn = mysqli_connect('localhost','root','','mydb');
      // Check connection
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

      //Selecting Database
      $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE Correo ='".$email."'");
      $numrows = mysqli_num_rows($query);
      // echo "Nombre: '$name' Email:'$email' Password:'$password' Date:'$date' Card:'$card' Add:'$address'";
        if($numrows == 0){
          $sql = "INSERT INTO Usuarios (Nombre, Correo, Password, Nacimiento, Tarjeta, Direccion) VALUES ('$name', '$email', '$password', $date, '$card', '$address')";
          $result = mysqli_query($conn, $sql);
          //Result Message
          if($result){
            echo "  <div data-form-alert='' class='alert alert-success col-12'>Account Created Successfully</div>";
          }else{
            echo " <div data-form-alert='' class='alert alert-danger col-12'>Error. Couldn't create Account </div>";
          }
        }else{
          echo "<div data-form-alert='' class='alert alert-danger col-12'> That Username already exists! Please try again. </div>";
        }
      }else{
        ?>
        <!--Javascript Alert -->
        <script>alert('Required all fields');</script>
        <?php
      }
    }
    ?>
</body>
</html>

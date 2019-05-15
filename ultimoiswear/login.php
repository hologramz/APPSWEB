<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-122x98.jpg" type="image/x-icon">
  <meta name="description" content="Site Generator Description">

  <title>Login</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>

 <meta charset="UTF-8">
    <div class="container">
      <!-- Page Heading -->

      <div class="col-lg-12">
        <div class="card mt-4">
        <div class="card-body">
          <h1 class="my-1"></h1>

<body>
<section class="mbr-section form3 cid-rpO8hDfFpV" id="form3-p">


    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">
                    Login</h2>
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form" method="post">
                  <!--<input type="hidden" name="email" data-form-email="true" value="BGe32wTBisHTzr9jQ73QTBK0GnOqhRa1HitMkNHq4FqD4xT3an3QNqogO5RMDWd2QaR+/A4A/4iQL8HkwN0L/pLfUVNw9P7gqRR8Pa78fuE2lJTe4ZOVNZe9bCf1yJcl">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Bienvenido!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"></div>
                    </div>-->
                    <div class="dragArea row">
                        <div class="form-group col" data-for="email">
                            <input type="email" name="email" placeholder="Email" data-form-field="Email" required="required" class="form-control display-7" id="email-form3-p">
                        <br>
                            <input type="password" name="password" placeholder="Password" data-form-field="Password" required="required" class="form-control display-7" id="email-form3-p">
                        </div>
                    </div>
                        <div class="col-auto input-group-btn" align="center">
                          <button type="submit" name="submit" class="btn btn-primary display-4">LOGIN</button>
                          <br><br>
                  </form>
                  <form action="./signup.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                        <button type="submit" class="btn btn-primary display-4" href="./signup.php">SIGN UP</button>
                  </form>
                        </div>

                    </div>
                <!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>

<?php
$conn = mysqli_connect('localhost','root','','mydb');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<?php
  if(isset($_POST["submit"])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
      $email = $_POST['email'];
      $pass = $_POST['password'];

      //Selecting Database
      $statement = "SELECT * FROM usuarios WHERE Correo='$email' AND Password='$pass'";
      $result = mysqli_query($conn, $statement);
      $numrows = mysqli_num_rows($result);

        if($numrows !=0){

          while($row = mysqli_fetch_array($result)){
            $dbusername=$row['Correo'];
            $dbpassword=$row['Password'];
          }
          if($email == $dbusername && $pass == $dbpassword){
             session_start();
             $_SESSION['sess_user']=$email;
             //Redirect Browser
               header("Location: ./index.php");
            /* if($email = 'admin@swdroids.com'){
                  header("Location:./admin.php");
             }*/
        }
      }else{
        echo "<div data-form-alert='' class='alert alert-danger col-12'> Invalid Username or Password! </div>";
      }
  }else{
    ?>
    <!--Javascript Alert -->
    <script>alert('Required all fields');</script>
    <?php
  }
}
?>

<?php
include './header.php';
?>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>


</body>
</html>

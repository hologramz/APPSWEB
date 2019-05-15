<meta charset="UTF-8">
<?PHP
  session_start();

  if(!isset($_SESSION['sess_user'])){
    header("Location:./index.php");
  }else{
    $admin = $_SESSION['sess_user'];
    if($admin != 'admin@swdroids.com'){
        header("Location:./index.php");
    }
  }

    $con = mysqli_connect('localhost','root','','mydb');

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $Nombre = $_POST['Nombre'];
    $Origen = $_POST['Origen'];
    $Descripcion = $_POST['Descripcion'];
    $Precio = $_POST['Precio'];
    $Cantidad = $_POST['Cantidad'];
    $Fabricante = $_POST['Fabricante'];
    $Afiliacion = $_POST['Afiliacion'];

    $result = mysqli_query($con,"UPDATE productos
      SET Nombre='$Nombre', Descripcion='$Descripcion', Precio='$Precio', Cantidad='$Cantidad', Fabricante='$Fabricante', Origen='$Origen', Afiliacion='$Afiliacion'
      WHERE idProducto={$_POST['id_producto']}");
    header("Location: ./adminmodify.php");
?>

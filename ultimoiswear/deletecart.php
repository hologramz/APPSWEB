<meta charset="UTF-8">
<?php
  session_start();

  if(!isset($_SESSION['sess_user'])){
    header("Location:./index.php");
  }else{
    $producto = $_POST['producto'];
    $conn = mysqli_connect('localhost','root','','mydb');
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $id = mysqli_query($conn,"SELECT idUsuario FROM usuarios WHERE Correo='{$_SESSION['sess_user']}'");
    while($rows = mysqli_fetch_array($id)){ $int = $rows['idUsuario']; }

    $result = mysqli_query($conn,"DELETE FROM historial WHERE Producto=$producto AND Usuario=$int;");

    header("Location:./cart.php");
  }
?>

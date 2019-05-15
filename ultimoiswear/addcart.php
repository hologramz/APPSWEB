<meta charset="UTF-8">
<?php
  session_start();

  if(!isset($_SESSION['sess_user'])){
    header("Location:./index.php");
  }else {
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];

    $conn = mysqli_connect('localhost','root','','mydb');
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $q = mysqli_query($conn,"SELECT h.hCantidad FROM historial h, usuarios u WHERE h.Usuario=u.idUsuario AND u.Correo='{$_SESSION['sess_user']}' AND h.Producto=$producto AND h.Paid=0");
    $id = mysqli_query($conn,"SELECT idUsuario FROM usuarios WHERE Correo='{$_SESSION['sess_user']}'");

    $resul_cant = mysqli_fetch_array($q);
    while($rows = mysqli_fetch_array($id)){ $int = $rows['idUsuario']; }

    if($resul_cant['hCantidad']>0){
      echo "act";
      $cantidad = $cantidad + $resul_cant['hCantidad'];
      mysqli_query($conn,"UPDATE historial SET hCantidad = $cantidad  WHERE Usuario=$id AND idProducto=$producto AND Paid=0");
    }else{
      echo "ins";
      $insert = "INSERT INTO historial (Usuario, Producto, hCantidad, Paid) VALUES ('$int', '$producto', '$cantidad', 0)";
      $result = mysqli_query($conn,$insert);

    }
    header("Location:./cart.php");
  }
  ?>

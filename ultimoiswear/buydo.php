<meta charset="UTF-8">

<?PHP
  session_start();

  if(!isset($_SESSION['sess_user'])){
    header("Location:./index.php");
  }else {
    $con = mysqli_connect('localhost','root','','mydb');

    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $access = true;
    $id = mysqli_query($con,"SELECT idUsuario FROM usuarios WHERE Correo='{$_SESSION['sess_user']}'");
    while($rows = mysqli_fetch_array($id)){ $int = $rows['idUsuario']; }
    $restar = mysqli_query($con,"SELECT p.idProducto, p.Cantidad, h.hCantidad FROM productos p, historial h WHERE p.idProducto=h.Producto AND h.Usuario=$int AND h.Paid=0;");

    while($row = mysqli_fetch_array($restar)){

      $stock = $row['Cantidad'] - $row['hCantidad'];
      if($stock < 0){
        $access = false;
      }
    }

    if($access == true){
      echo "<div data-form-alert='' class='alert alert-success col-12'> Transfer done. Thank you!</div>";

      $q = mysqli_query($con,"SELECT p.idProducto, p.Cantidad, h.hCantidad FROM productos p, historial h WHERE p.idProducto=h.Producto AND h.Usuario=$int AND h.Paid=0;");

      while($fila = mysqli_fetch_array($q)){
        $stock = $fila['Cantidad'] - $fila['hCantidad'];
        mysqli_query($con,"UPDATE productos SET Cantidad=$stock WHERE idProducto={$fila['idProducto']}");
      }

      $result = mysqli_query($con,"UPDATE historial SET Paid=1 WHERE Usuario=$int AND Paid=0");
      header("Location: ./buysuccess.php");
    }else{
      header("Location: ./buyerror.php");
    }

  }
?>

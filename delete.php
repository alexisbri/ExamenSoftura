<?php

include("conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM productos WHERE NombreProducto='$id'";
$query=mysqli_query($con,$sql);

if ($query == 1) {
    $sql2 = "DELETE FROM tipo WHERE TipoProducto='$id'";
    $query = mysqli_query($con, $sql2);
}

    if($query){
        Header("Location: productos.php");
    }
?>

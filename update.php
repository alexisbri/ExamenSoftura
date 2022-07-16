<?php

include("conexion.php");

$nombre = $_POST['NombreProducto'];
$cantidad = $_POST['Cantidad'];
$tipo = $_POST['TipoProducto'];

$sql = "UPDATE productos SET  NombreProducto='$nombre',Cantidad='$cantidad' WHERE NombreProducto='$nombre'";
$query = mysqli_query($con, $sql);

if ($query == 1) {
    $sql2 = "UPDATE tipo SET TipoProducto='$tipo' WHERE TipoProducto='$tipo'";
    $query = mysqli_query($con, $sql2);
}

if ($query) {
    Header("Location: productos.php");
}

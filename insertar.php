<?php
include("conexion.php");

$nombre = ($_POST['nombre']);
	    $cantidad = ($_POST['cantidad']);
        $tipo = ($_POST['tipo']);


$sql = "INSERT IGNORE productos (NombreProducto, Cantidad) VALUES('$nombre','$cantidad')";
$query = mysqli_query($con, $sql);

if ($query == 1) {
    $sql2 = "INSERT IGNORE tipo (TipoProducto) VALUES ('$tipo')";
    $query = mysqli_query($con, $sql2);
}

if ($query) {
    Header("Location: productos.php");
} else {
}

<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM productos JOIN tipo USING(id)";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Ingresa un nombre" value="<?php echo $row['NombreProducto']  ?>">
            <input type="text" class="form-control mb-3" name="cantidad" placeholder="Ingresa una cantidad" value="<?php echo $row['Cantidad']  ?>">
            <input type="text" class="form-control mb-3" name="tipo" placeholder="Ingrese un tipo" value="<?php echo $row['TipoProducto']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>
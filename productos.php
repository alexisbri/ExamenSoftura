<?php
include("conexion.php");

$sql = "SELECT * FROM productos JOIN tipo USING(id)";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                <form action="insertar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Ingrese producto">
                    <input type="text" class="form-control mb-3" name="cantidad" placeholder="Ingrese cantidad">
                    <input type="text" class="form-control mb-3" name="tipo" placeholder="Ingrese el tipo">

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Tipo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['NombreProducto'] ?></th>
                                <th><?php echo $row['Cantidad'] ?></th>
                                <th><?php echo $row['TipoProducto'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['NombreProducto'] ?>" class="btn btn-info">Actualizar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['NombreProducto'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
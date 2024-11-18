<?php
require 'header.php';
$ciudades = [
    ["id" => 1, "Nombre" => "Madrid", "Actividad" => "Boda Ana y Luis","Fecha" => "15/12/2024"],
    ["id" => 2, "Nombre" => "Sevilla","Actividad" => "Celebracion en la playa con temática tropical viendo las estrellas", "Fecha" => "20/11/2024"],
    ["id" => 3, "Nombre" => "Barcelona", "Actividad" => "Boda en salón elegante con una ceremonia civil y recepcion con cena formal","Fecha" => "22/01/2025"]
];

// Búsqueda
$busqueda = $_POST['busqueda'] ?? '';
$encontrado = null;
if (!empty($busqueda)) {
    foreach ($ciudades as $ciudad) {
        if (stripos($ciudad['nombre'], $busqueda) !== false) {
            $encontrado = $ciudad;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Listado de ciudades</h1>
        
        <form method="post" action="index.php" class="my-4">
            <div class="input-group">
                <input type="text" name="busqueda" class="form-control" placeholder="Buscar ciudad" required>
                <button type="submit" class="btn btn-outline-primary">Buscar</button>
            </div>
        </form>
        <?php if ($encontrado): ?>
            <div class="alert alert-success">Ciudad encontrada: <?php echo $encontrado['nombre']; ?></div>
        <?php elseif ($busqueda): ?>
            <div class="alert alert-danger">Ciudad no encontrado</div>
        <?php endif; ?>

        <table class="table table-bordered table-striped mt-4">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Actividad</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ciudades as $ciudad): ?>
                    <tr>
                        <td><?php echo $ciudad['Nombre']; ?></td>
                        <td><?php echo $ciudad['Actividad']; ?></td>
                        <td><?php echo $ciudad['Fecha']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
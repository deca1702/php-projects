<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</head>

<body>
    <header class="d-flex justify-content-center p-3 mb-2 bg-danger text-white">
        <h1 class="titulo">La caja del Martín</h1>
    </header>
    <div class="row nav-bg p-4">
        <ul class="nav nav-pills d-flex justify-content-between">
            <li class=" nav-item">
                <a class="nav-link <?= $clase == 'inicio' ? 'active' : '' ?>" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $clase == "proyectos" ? "active" : "" ?>" href="proyectos.php">Proyectos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $clase == "contacto" ? "active" : "" ?>" href="contacto.php">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $clase == "sobremi" ? "active" : "" ?>" href="sobremi.php">Sobre mí</a>
            </li>
        </ul>
    </div>
</body>

</html>
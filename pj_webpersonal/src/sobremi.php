<?php
$clase = "proyectos";
require 'includes/header.php';
$hobbies = array(
    array(
        "nombre" => "videojuegos",
        "descripcion" => "Me encanta jugar videojuegos, sobre todo los FPS.",
        "imagen" => "videojuegos.jpg",
        "veces_por_semana" => 7

    ),
    array(
        "nombre" => "peliculas",
        "descripcion" => "Me encanta ver películas, sobre todo de christofer noland.",
        "imagen" => "peliculas.jpg",
        "veces_por_semana" => 3
    ),
    array(
        "nombre" => "deportes",
        "descripcion" => "Me encanta hacer deporte, sobre todo el GYM.",
        "imagen" => "deportes.jpg",
        "veces_por_semana" => 5
    )
);
function array_orderby($arrayToOrder, $field)
{
    $columna = array_column($arrayToOrder, $field);


    array_multisort($columna, SORT_ASC, $arrayToOrder);
    return $arrayToOrder;
}

?>
<div class="container-fluid">
    <h1 class="text-center mb-4">Sobre mi</h1>
    <div class="row justify-content-center text-center">
        <?php
        $hobbies_ord = array_orderby($hobbies, "veces_por_semana");
        foreach ($hobbies_ord as $hob) {
            //echo "". $hob["nombre"] ."<br>";
            $nombre = $hob["nombre"];
            $descripcion = $hob["descripcion"];
            $imagen = $hob["imagen"];
            $veces_por_semana = $hob["veces_por_semana"];


            echo "<div class='card' style='width: 18rem;''>
                <img src='peliculas.jpg'...'' class='card-img-top' alt='...'>
                <div class='card-body'>
                  <h5 class='card-title'>$nombre</h5>
                  <p class='card-text'>$descripcion.</p>
                  <a class='btn btn-primary'>$veces_por_semana</a>
                </div>
              </div>";

        }
        ?>

    </div>
</div>
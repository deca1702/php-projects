<?php

$nombre_recibido = $_POST['nombre'];
$edad_recibida = $_POST['edad'];

if($edad_recibida >= 18){
    echo "<h2>Hola $nombre_recibido, eres mayor de edad</h2>";

}else{
    echo"<h2>Hola $nombre_recibido, eres menor de edad</h2>";
}



?>
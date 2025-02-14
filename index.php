<?php
require 'vendor/autoload.php';
require 'database.php';

use App\Models\Actor;  // Asegúrate de que la ruta y el nombre de la clase sean correctos
use App\Models\Film;

$peliculas = Film::all();  // Obtener todas las películas

foreach ($peliculas as $film) {
    echo $film->title;  // Mostrar el título de la película
    
    // Obtener todos los actores relacionados con la película
    $actors = $film->actors()->get();  // Aquí usamos get() para obtener la colección de actores

    // Iterar a través de los actores
    foreach ($actors as $actor) {
        echo $actor->first_name . "; ";  // Mostrar el nombre del actor
    }
    
    echo "<br>";  // Nueva línea después de cada película
}

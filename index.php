<?php
require 'vendor/autoload.php';
require 'database.php';

use App\Models\Actor;
use App\Models\Film;



$actor=Actor::find(5);
echo $actor->first_name;
echo "<br>";
$pelicula=Film::find(3);
foreach ($pelicula->actors as $key => $value) {
    echo $value->first_name." , ";
}
echo "<br>";
$pelicula->actors()->attach($actor->actor_id);
$pelicula=Film::find(3);
foreach ($pelicula->actors as $key => $value) {
    echo $value->first_name." , ";
}
    
  
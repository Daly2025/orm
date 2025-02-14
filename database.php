<?php

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

// Configuración de la conexión a la base de datos
$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'sakila',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

// Configurar Eloquent para usar la base de datos
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Crear un nuevo usuario
$user = new User;
$user->name = 'Juan Pérez';
$user->email = 'juanperez@example.com';
$user->password = bcrypt('mi_contraseña'); // Usamos bcrypt para encriptar la contraseña

// Guardar el nuevo usuario en la base de datos
$user->save();

echo "Usuario insertado correctamente!";

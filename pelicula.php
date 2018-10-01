<?php date_default_timezone_set('America/Mexico_City');
session_start();

require 'config.php';
require 'functions.php';

$conexion = conexion($bd_config);
$id = $_GET['id'];
$pelicula = obtener_pelicula($conexion, $id);
$pelicula = $pelicula[0];


require 'views/pelicula.view.php';


?>
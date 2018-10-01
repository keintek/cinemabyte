<?php date_default_timezone_set('America/Mexico_City');
session_start();

require 'config.php';
require 'functions.php';
$conexion = conexion($bd_config);
$sliders = obtener_sliders($conexion);
$carteleras = obtener_carteleras($conexion);
$estrenos = obtener_estrenos($conexion);


require 'views/cartelera.view.php';


?>
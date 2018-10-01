<?php date_default_timezone_set('America/Mexico_City');
session_start();

require 'config.php';
require 'functions.php';
$conexion = conexion($bd_config);
$promos = obtener_promociones($conexion);


require 'views/promociones.view.php';


?>
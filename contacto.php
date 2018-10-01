<?php date_default_timezone_set('America/Mexico_City');
session_start();

require 'config.php';
require 'functions.php';

$conexion = conexion($bd_config);
$direcciones = obtener_direcciones($conexion);
$mails = obtener_mails($conexion);
$redes = obtener_redes($conexion);
$telefonos = obtener_telefonos($conexion);
require 'views/contacto.view.php';


?>
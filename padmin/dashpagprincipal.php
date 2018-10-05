<?php date_default_timezone_set('America/Mexico_City');
session_start();

require 'config.php';
require 'functions.php';
$errores = '';
$conexion = conexion($bd_config);
if (!$conexion) {
  header('Location: postsinconexion.php');
}
if (isset($_SESSION['usuario']))
{

  $user = $_SESSION['usuario'];
  $usuario = obtener_usuario($conexion, $user);
  $usuario = $usuario[0];
  $errores = $usuario['tipo'];
  if($usuario['tipo'] < 4)
  {
    header('Location: ../postnoadmin.php');
  }
}
$articulos = $conexion->prepare("
	SELECT SQL_CALC_FOUND_ROWS * FROM noticias
");

$articulos->execute();
$articulos = $articulos->fetchAll();
$sliders = obtener_sliders($conexion);

require 'views/dashpagprincipal.view.php';


?>
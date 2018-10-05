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
$invitados = $conexion->prepare("
	SELECT * FROM usuarios WHERE tipo = 1
");

$invitados->execute();
$invitados = $invitados->fetchAll();

$usuarios = $conexion->prepare("
  SELECT * FROM usuarios WHERE tipo = 2
");

$usuarios->execute();
$usuarios = $usuarios->fetchAll();

$webmasters = $conexion->prepare("
  SELECT * FROM usuarios WHERE tipo = 4
");

$webmasters->execute();
$webmasters = $webmasters->fetchAll();

$administradores = $conexion->prepare("
  SELECT * FROM usuarios WHERE tipo = 5
");

$administradores->execute();
$administradores = $administradores->fetchAll();

require 'views/dashusuarios.view.php';


?>
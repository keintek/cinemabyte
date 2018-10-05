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
$direcciones = obtener_direcciones($conexion);
$mails = obtener_mails($conexion);
$redes = obtener_redes($conexion);
$telefonos = obtener_telefonos($conexion);

require 'views/dashcontacto.view.php';


?>
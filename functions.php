<?php 

function conexion($bd_config){
	try {
		$conexion = new PDO('mysql:host=127.0.0.1;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}

function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}


function obtener_admin($conexion, $user){
	$resultado = $conexion->query("SELECT * FROM usuarios WHERE nombredecuenta = '$user' LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function obtener_sliders($conexion){
	$sentencia = $conexion->prepare("SELECT * FROM sliders;");
	$sentencia->execute();
	return $sentencia->fetchAll();
}
function obtener_carteleras($conexion){
	$sentencia = $conexion->prepare("SELECT * FROM cartelera;");
	$sentencia->execute();
	return $sentencia->fetchAll();
}
function obtener_estrenos($conexion){
	$sentencia = $conexion->prepare("SELECT * FROM prox_estrenos;");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function id_articulo($id){
	return (int)limpiarDatos($id);
}

function obtener_post_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM equipos WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}
function obtenerpatron($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM patrones WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}
function obtener_calibracion($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM calibracion WHERE folio = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}
function obtener_verificacion($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM verificacion WHERE folio = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}
function obtener_mantenimiento($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM mantenimiento WHERE Folio = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}
function obtener_confirmacion($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM confirmacion WHERE Folio = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function fecha($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

	$dia = date('d', $timestamp); 
	$mes = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$fecha = "$dia de " . $meses[$mes] . " del $year";
	return $fecha;
}

function comprobarSession(){
	if (!isset($_SESSION['admin'])) {
		header('Location: ' .  RUTA);
	}
}

?>
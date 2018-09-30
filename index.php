<?php date_default_timezone_set('America/Mexico_City');
session_start();

require 'config.php';
require 'functions.php';
$conexion = conexion($bd_config);
$sliders = obtener_sliders($conexion);
$carteleras = obtener_carteleras($conexion);
$estrenos = obtener_estrenos($conexion);

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;
$postPorPagina = 2;

$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

$articulos = $conexion->prepare("
	SELECT SQL_CALC_FOUND_ROWS * FROM noticias ORDER BY fecha DESC
	LIMIT $inicio, $postPorPagina
");

$articulos->execute();
$articulos = $articulos->fetchAll();

if (!$articulos) {
	header('Location: index.php');
}

$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];

$numeroPaginas = ceil($totalArticulos / $postPorPagina);

require 'views/index.view.php';


?>
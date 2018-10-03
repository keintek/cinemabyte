<?php date_default_timezone_set('America/Mexico_City');
session_start();

require 'config.php';
require 'functions.php';
$conexion = conexion($bd_config);
if (isset($_SESSION['usuario']))
{
  $user = $_SESSION['usuario'];
  $usuario = obtener_usuario($conexion, $user);
  $usuario = $usuario[0];
}

if (!$conexion) {
  header('Location: ../error.php');
}



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



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(isset($_POST['registro'])) {
    $apellidop = utf8_decode(filter_var(($_POST['apellidop']), FILTER_SANITIZE_STRING));
    $apellidom = utf8_decode(filter_var(($_POST['apellidom']), FILTER_SANITIZE_STRING));
    $usuario = utf8_decode(filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING));
    $password = $_POST['registpass1'];
    $password2 = $_POST['registpass2'];
    $correo = $_POST['email'];
    $telefono = $_POST['telefono'];
    $nombre = utf8_decode($_POST['nombre']);

    $errores = '';

    if (empty($usuario) or empty($password) or empty($password2)) {
      $errores .= '<li>Por favor rellena todos los datos correctamente</li>';
    } else {
      try {
        $conexion = new PDO('mysql:host=localhost;dbname=cinemabyte', 'root', '');
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }

      $statement = $conexion->prepare('SELECT * FROM usuarios WHERE cuenta = :usuario LIMIT 1');
      $statement->execute(array(':usuario' => $usuario));
      $resultado = $statement->fetch();

      if ($resultado != false) {
        $errores .= '<li>El nombre de usuario ya existe</li>';
      }

      $password = hash('sha512', $password);
      $password2 = hash('sha512', $password2);

      if ($password != $password2) {
        $errores .= '<li>Las contraseñas no son iguales</li>';
      }
    }

    if ($errores == '') {
      
      $statement = $conexion->prepare('INSERT INTO usuarios (id, nombre, apellidoP, apellidoM, cuenta, password, mail, telefono) VALUES (null, :nombre, :apellidop, :apellidom, :usuario, :pass, :correo, :telefono)');
      $statement->execute(array(
        ':nombre' => $nombre,
        ':apellidop' => $apellidop,
        ':apellidom' => $apellidom,
        ':usuario' => $usuario,
        ':pass' => $password,
        ':telefono' => $telefono,
        ':correo' => $correo
      ));
      
      header('Location: postregistro.php');
    }
  }
  if(isset($_POST['insesion'])) {
    $usuario = filter_var(strtolower($_POST['loginuser']), FILTER_SANITIZE_STRING);
    $userid;
    $password = $_POST['passuser'];
    $password = hash('sha512', $password);
    $errores = '';
    try {
      $conexion = new PDO('mysql:host=localhost;dbname=cinemabyte', 'root', '');
    } catch (PDOException $e) {
      echo "Error:" . $e->getMessage();;
    }

    $statement = $conexion->prepare('
      SELECT * FROM usuarios WHERE cuenta = :usuario AND password = :password' 
    );
    $statement->execute(array(
      ':usuario' => $usuario,
      ':password' => $password
    ));

    $resultado = $statement->fetch();
    if ($resultado !== false) {
      $id = $row['id'];
      $_SESSION['usuario'] = $usuario;
      $_SESSION['id'] = $id;
      header('Location: index.php');
    } else {
      $errores .= '<li>Datos Incorrectos</li>';
    }
  }
}
require 'views/dashboard.view.php';


?>
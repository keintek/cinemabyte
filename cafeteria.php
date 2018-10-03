<?php date_default_timezone_set('America/Mexico_City');
session_start();

require 'config.php';
require 'functions.php';
$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: postsinconexion.php');
}
if (isset($_SESSION['usuario']))
{
	$user = $_SESSION['usuario'];
	$usuario = obtener_usuario($conexion, $user);
	$usuario = $usuario[0];
}

$combos = obtener_cafcombos($conexion);
$productos = obtener_cafproducts($conexion);

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
			$errores .= 'Por favor rellena todos los datos correctamente';
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
				
				$errores .= 'El nombre de usuario ya existe';
			}

			$password = hash('sha512', $password);
			$password2 = hash('sha512', $password2);

			if ($password != $password2) {
				$errores .= 'Las contraseñas no son iguales';
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
			$errores .= 'Datos Incorrectos';
		}
	}
}

require 'views/cafeteria.view.php';


?>
<?php session_start();

require 'admin/config.php';
require 'functions.php';

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$userid;
	$password = $_POST['password'];
	$password = hash('sha512', $password);

	try {
		$conexion = new PDO('mysql:host=localhost;dbname=metro', 'root', '');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();;
	}

	$statement = $conexion->prepare('
		SELECT * FROM usuarios WHERE nombredecuenta = :usuario AND password = :password' 
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

require 'views/loginweb.view.php';

?>
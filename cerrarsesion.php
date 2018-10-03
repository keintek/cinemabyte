<?php session_start();

require 'config.php';
require 'functions.php';

if(!isset($_SESSION['usuario']))
   {
        echo "No hay ninguna sesión iniciada";
//esto ocurre cuando la sesion caduca.
        
   }
   else
   { 
     session_destroy();
       sleep(5);
	   header('Location: postcerrar.php'); 
   }


?>
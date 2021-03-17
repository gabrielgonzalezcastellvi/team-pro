<?php
session_start();

require 'config.php';
require 'functions.php';
//require 'base-de-datos.php';

#backend para editar el perfil de usuario (SOCIO)

comprobarSession();
require "conection.php";

$user = $_SESSION['numeroSocio'];
$query_datos = "SELECT * FROM `user_socios` WHERE `numeroSocio` = '$user' OR `mobile` = '$user' "; 
$fila_datos = mysqli_query($conectar, $query_datos);
$datos_perfil=mysqli_fetch_array($fila_datos);



require 'views/edit-profile-view.php';
?>
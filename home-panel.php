<?php
session_start();
require 'config.php';
require 'functions.php';

#Lógica del panel de inicio del usuario SOCIO
#por defecto, se carga la página para nueva reserva

// Comprobamos si la sesion esta iniciada, sino, redirigimos al inicio de la app.
comprobarSession();

require "conection.php";


//codigos para que al iniciar sesión, muestre en el panel de inicio el saludo de bienvenida personalizado.
$user = $_SESSION['numeroSocio'];
$query_socio = "SELECT `nombre` FROM `user_socios` WHERE `numeroSocio` = '$user' OR `mobile` = '$user' "; 
$result = mysqli_query($conectar, $query_socio);
$nombre_socio=mysqli_fetch_array($result); //vista: linea 9 de home-panel-view.php

require 'views/home-panel-view.php';

?>
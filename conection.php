<?php
define('RUTA','http://localhost/team-pro');
//conectamos con la base de datos;
$conectar = mysqli_connect('localhost','root','');
//verificamos la conexion;
if(!$conectar){
   echo"No se pudo conectar con el servidor";
}else{
    $base= mysqli_select_db($conectar, 'teampro-reservasapp'); //aca apunto a la base de datos que se llama inscripcionsocios
    if(!$base){
    echo "No se encontro la base de datos";
    //pruebas
    }
}
?>
<?php
//require 'config.php'; linea no necesaria. Quitarla de comentario para ver el error


//conectamos con la base de datos;
$conectar = mysqli_connect('localhost','root','');

//verificamos la conexion;
if(!$conectar){
   //echo"No se pudo conectar con el servidor";
   echo 'Hubo un inconveniente al intentar conectar el servidor';
}else{
    $base= mysqli_select_db($conectar, 'inscripcionsocios'); //aca apunto a la base de datos que se llama inscripcionsocios
    if(!$base){
    //echo "No se encontro la base de datos";
    echo 'Hubo un inconveniente al intentar conectar la base de datos';
    }
}
?>
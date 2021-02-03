<?php
#Funcion para conectarse a la base de datos;
 function conexion($bd_config){
try{
  $conexion= new PDO('mysql:host=localhost;dbname=' . $bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
}catch(PDOException $e){
   echo "Error:" . $e->getMessage();
}

 }
?>
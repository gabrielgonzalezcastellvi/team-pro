<?php
//este archivo lo cree para hacer la validacion de correo y contraseña, esto me va a costar lo se quiero shorar jajaja;
//$fileLogin=$_POST['fileLogin']; //la variablefileLogin me va guardar el numero de socio o celular de la vista index-view.php
//$password=$_POST['password'];
//$passwordSecure = hash('sha512' , $password);

//Para hacer la validacion no me quedo de otr que volver a escribir la conexion a la base de datos porque necesitaba si o si tenerlo a mano para usar unas variables de la conexion;
//$conectar = mysqli_connect('localhost','root','','inscripcionsocios');
//require "conection.php";
//consulta sql;
//$query = "SELECT * FROM `socios` WHERE `numeroSocio` = '$fileLogin' || `mobile` = '$fileLogin'  AND `passwordSecure` = '$password'";

//ejecuto la consulta sql;
//$resultado = mysqli_query($conectar,$query);
//if(!$resultado){
  //  echo mysqli_error($conectar);
//}

//$filas = mysqli_num_rows($resultado);

//if ($filas>0){
 //echo"<script>window.location.href='home-panel.php'</script>";
 //echo"entro";
//} else{
// echo"No se conecto revise sus credenciales de acceso";
//}

//mysqli_free_result($resultado);
//mysqli_close($conectar);
require 'conection.php';
session_start();

$numeroSocio = $_POST['NumberSocio'];
$password = $_POST['password'];
$passwordSecure = hash('sha512' , $password);

$consulta = mysqli_query ("SELECT * FROM `socios` WHERE `numeroSocio` = '$numeroSocio' AND `passwordSecure` = '$passwordSecure'");  

if(!$consulta){ 
 echo "El numero de socio no existe " . $numeroSocio . " " . $password. " o hubo un error " ;
} 
else{ 
print "Bienvenido"; 
} 
?>
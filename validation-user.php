<?php
//este archivo lo cree para hacer la validacion de correo y contraseña, esto me va a costar lo se quiero shorar jajaja;
$UserNumber=$_POST['UserNumber'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$passwordSecure = hash('sha512' , $password);

//Para hacer la validacion no me quedo de otr que volver a escribir la conexion a la base de datos porque necesitaba si o si tenerlo a mano para usar unas variables de la conexion;
$conectar = mysqli_connect('localhost','root','','inscripcionsocios');

//consulta sql;
$query = "SELECT * FROM `socios` WHERE `userSocio` = '$UserNumber' || '$mobile'  AND `passwordSecure` = '$password'";

//ejecuto la consulta sql;
$resultado = mysqli_query($conectar,$query);
if(!$resultado){
    echo mysqli_error($conectar);
}

$filas = mysqli_num_rows($resultado);

if ($filas>0){
 echo"Accedio correctamente";
} else{
 echo"No se conecto revise sus credenciales de acceso";
}

mysqli_free_result($resultado);
mysqli_close($conectar);
?>
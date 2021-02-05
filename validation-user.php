<?php
//este archivo lo cree para hacer la validacion de correo y contraseña, esto me va a costar lo se quiero shorar jajaja;
$NumeroSocio=$_POST['numero']; //la variable numeroSocio me va guardar el numero de socio o celular de la vista index-view.php
$password=$_POST['password'];
$passwordSecure = hash('sha512' , $password);

//Para hacer la validacion no me quedo de otr que volver a escribir la conexion a la base de datos porque necesitaba si o si tenerlo a mano para usar unas variables de la conexion;

require "conection.php";
//consulta sql;
$query = "SELECT * FROM `socios` WHERE `numeroSocio` = '$NumeroSocio' || `mobile` = '$NumeroSocio'  AND `passwordSecure` = '$password'";

//ejecuto la consulta sql;
$resultado = mysqli_query($conectar,$query);
if(!$resultado){
    echo mysqli_error($conectar);
}

$filas = mysqli_num_rows($resultado);

if ($filas>0){
echo"<script>window.location.href='home-panel.php'</script>";
} else{
 echo"No se conecto revise sus credenciales de acceso";
}

mysqli_free_result($resultado);
mysqli_close($conectar);

?>
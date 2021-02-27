<?php


#IMPORTANTE! ESTE RCHIVO se trasladó a login.php para identificarlo mejor, ya q lo usamos para iniciar sesión de usuario



//este archivo lo cree para hacer la validacion de correo y contraseña, esto me va a costar lo se quiero shorar jajaja;
$NumeroSocio=$_POST['numero']; //la variable numeroSocio me va guardar el numero de socio o celular de la vista index-view.php
$password=$_POST['password'];
$password = hash('sha512' , $password);

require "conection.php";
//consulta sql;
$query = "SELECT * FROM `user_socios` WHERE `numeroSocio` = '$NumeroSocio' AND `passwordSecure` = '$password'"; //Validado por mi mari funciona jajaj

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
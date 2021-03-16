<?php
//session_start();

#validamos nº de socio o celular para poder ingresar
$dato = $_POST['dato'];
$password = $_POST['password'];
$passwordSecure = hash('sha512', $password);

require "conection.php";
//consulta sql;
$query = "SELECT * FROM `user_socios` WHERE `mobile` = '$dato' OR `numeroSocio` = '$dato' AND `passwordSecure` = '$passwordSecure'"; 

//ejecuto la consulta sql;
$resultado = mysqli_query($conectar, $query);
if (!$resultado) {
    echo mysqli_error($conectar);
}

$filas = mysqli_num_rows($resultado);

if($filas > 0) {
    echo "<script>window.location.href='home-panel.php'</script>";
}else {
    echo "<script>alert('Ups! Hubo un problema al intentar iniciar sesión. Por favor revisá tus datos de acceso.'); window.location.href='index.php';</script>";
}

			
 

mysqli_free_result($resultado);
mysqli_close($conectar);

?>




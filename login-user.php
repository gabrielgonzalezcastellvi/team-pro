<?php
//este archivo lo cree para hacer la validacion de correo y contraseña, esto me va a costar lo se quiero shorar jajaja;
//$NumeroSocio = $_POST['numero']; //la variable numeroSocio me va guardar el numero de socio o celular de la vista index-view.php
//$mobile = $_POST['numero'];
$dato = $_POST['dato'];
$password = $_POST['password'];
$password = hash('sha512', $password);

require "conection.php";
//consulta sql;
$query = "SELECT * FROM `user_socios` WHERE `mobile` = '$dato' OR `numeroSocio` = '$dato' AND `passwordSecure` = '$password'"; //Validado por mi mari funciona jajaja

//ejecuto la consulta sql;
$resultado = mysqli_query($conectar, $query);
if (!$resultado) {
    echo mysqli_error($conectar);
}

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
    echo "<script>window.location.href='home-panel.php'</script>";
} else {
    //echo"No se conecto revise sus credenciales de acceso";
echo "<script>alert('Ups! Hubo un problema al intentar iniciar sesión. Por favor revisá tus datos de acceso.'); window.location.href='index.php';</script>";

}

			
 

mysqli_free_result($resultado);
mysqli_close($conectar);

?>




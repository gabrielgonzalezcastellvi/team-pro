<?php
require 'conection.php';
require 'functions.php';

//Se recuperan las variables del formularios de inscripcion;

$id = $_POST['id'];
$nombre=strtoupper(limpiarDatos($_POST['Name']));
$apellido=strtoupper(limpiarDatos($_POST['LastName']));
$numeroSocio=limpiarDatos($_POST['UserNumber']);
$email=limpiarDatos($_POST['email']);
$mobile=limpiarDatos($_POST['mobile']);
$password=$_POST['password'];
$passwordSecure = hash('sha512' , $password);
//Arreglo con las variables saneadas

$registroSocio= array(
    $id,
    $nombre,
    $apellido,
    $numeroSocio,
    $email,
    $mobile,
    $passwordSecure
);




//Hacemos la sentencia sql para insertar los datos;
// preparar y ejecutar en un array

$sql="INSERT INTO socios VALUES (NULL,'$nombre','$apellido','$numeroSocio','$email','$mobile','$passwordSecure')"; //socios es el nombre de la tabla que se encuentra dentro de la base de datos 
//reservas, voy a guardar la variable $passwordSecure que esta encriptada en la base de datos;

//ejecutamos la sentencia sql;
$ejecutar = mysqli_query($conectar,$sql);
//verificamos la ejecucion;
if(!$ejecutar){
    echo "<script>alert('Hubo un error, por favor inténtalo nuevamente. Si el error persiste por favor contáctate con nosotros')</script>"; 
    
}else{
    echo "<script>alert('Tus datos se enviaron correctamente. Por favor, chequea tu mail.')</script>";
    
}
//aca abajo se envia el correo al usuario para que tambien tenga en su correo los datos de su cuenta;
$to = $email;
$asunto='Registro de socio en la app de reservas';
$mensaje ="
Hola $nombre!
Tus datos fueron cargados correctamente, si coinciden con nuestros registros de socios tendrás acceso a la aplicación próximamente. No te preocupes, te avisaremos. 

Recuerda tus datos:
- $nombre $apellido
- Nº socio: $numeroSocio
- Contraseña: $password

";
$header = 'From: Secretaría Club X'. "\r\n" .
'X-Mailer: PHP';

//mail($para,$asunto,$mensaje,$header);
$correo=mail($to,$asunto,$mensaje,$header);
header('Location: index.php');    
//if ($correo) {
//        header('Location: index.php');
//    } else {
//        header('Location: index.php');
//    }
?>
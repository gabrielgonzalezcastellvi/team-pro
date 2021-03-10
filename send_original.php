<?php
require 'conection.php';
require 'functions.php';

//Se recuperan las variables del formularios de inscripcion;

$nombre=strtoupper(limpiarDatos($_POST['Name']));
$apellido=strtoupper(limpiarDatos($_POST['LastName']));
$numeroSocio=limpiarDatos($_POST['UserNumber']);
$email=limpiarDatos($_POST['email']);
$mobile=limpiarDatos($_POST['mobile']);
$password=$_POST['password'];
$passwordSecure = hash('sha256' , $password);


//Hacemos la sentencia sql para insertar los datos;
// preparar y ejecutar en un array



#IMPORTANTEEEEEEE: El nro de socio no deberia repetirse, es decir, registrarse 2 veces en la DB


$sql="INSERT INTO user_socios VALUES (NULL,'$nombre','$apellido','$numeroSocio','$email','$mobile','$passwordSecure')"; //socios es el nombre de la tabla que se encuentra dentro de la base de datos 
//reservas, voy a guardar la variable $passwordSecure que esta encriptada en la base de datos;

//ejecutamos la sentencia sql;
$ejecutar = mysqli_query($conectar,$sql);
//verificamos la ejecucion;
if(!$ejecutar){
 echo "<script>alert('Hubo un error, por favor inténtalo nuevamente. Si el error persiste por favor contáctate con nosotros'); window.location.href='index.php';</script>"; 
//Utilice la funcion window.location.href='documento.php' para poder mostrar el alert y luego redireccionar a la pagina, esta chequedo funciona.;
}
//}
//aca abajo se envia el correo al usuario para que tambien tenga en su correo los datos de su cuenta;
$to = $email;
$asunto='Registro de socio en la app de reservas';
$mensaje ="
Hola $nombre!
Tus datos fueron cargados correctamente, si coinciden con nuestros registros de socios tendrás acceso a la aplicación próximamente. No te preocupes, te avisaremos. 

Recuerda tus datos:
- $nombre $apellido
- Nº socio: $numeroSocio
- Celular registrado: $mobile
- Contraseña: $password

Recuerda que tus datos podrás editarlos desde 'Mi perfil'
";
$header = 'From: Secretaría Club X'. "\r\n" .
'X-Mailer: PHP';

$correo=mail($to,$asunto,$mensaje,$header);

if ($correo) {
   // echo"<script>alert('Se envio su correo'); window.location.href='index.php';</script>";
   echo "<script>alert('Tus datos se enviaron correctamente. Por favor, chequea tu mail.');window.location.href='index.php';</script>";
    } else {
    echo"<script>alert('No se envio su correo'); window.location.href='index.php';</script>";
    }
?>
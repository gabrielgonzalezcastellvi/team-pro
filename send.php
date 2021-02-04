<?php
require 'conection.php';

//Se recuperan las variables del formularios de inscripcion;
    $nombre=$_POST['Name'];
$apellido=$_POST['LastName'];
$numeroSocio=$_POST['UserNumber'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$passwordSecure = hash('sha512' , $password);


//Hacemos la sentencia sql para insertar los datos;

$sql="INSERT INTO socios VALUES (NULL,'$nombre','$apellido','$numeroSocio','$email','$mobile','$passwordSecure')"; //socios es el nombre de la tabla que se encuentra dentro de la base de datos 
//reservas, voy a guardar la variable $passwordSecure que esta encriptada en la base de datos;

//ejecutamos la sentencia sql;
$ejecutar = mysqli_query($conectar,$sql);
//verificamos la ejecucion;
if(!$ejecutar){
   echo"No se guardaron los datos error"; //luego vemos bien a donde tendria que ir esto es para probar que se envian los datos correctamente;
}else{
    echo"Se guardaron los datos correctamente";
}
//aca abajo se envia el correo al usuario para que tambien tenga en su correo los datos de su cuenta;
$to = $email;
$asunto='Registro socios en teamPro';
$mensaje ="
Hola señor/a socio/a: $nombre $apellido 
Sus datos de registros son los siguientes:

Numero socio: $numeroSocio

Contraseña: $password

";
$header = 'From: Club Mendoza Regatas'. "\r\n" .
'X-Mailer: PHP';

//mail($para,$asunto,$mensaje,$header);
$correo=mail($email,$asunto,$mensaje,$header);
    if ($correo) {
        echo "<script>alert('mensaje enviado')</script>";
    } else {
        echo "<script>alert('Correo NO enviado Intentelo nuevamente')</script>";
    }
?>
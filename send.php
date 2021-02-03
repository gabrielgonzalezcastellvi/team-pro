<?php
require 'conection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre=$_POST['Name'];
$apellido=$_POST['LastName'];
$numeroSocio=$_POST['UserNumber'];
$email=$_POST['email'];
$password=$_POST['password'];
$passwordSecure = hash('sha512' , $password);

try {
    $conexion = new PDO('mysql:host=localhost;dbname=registros', 'root', '');
} catch (PDOException $e) {
    echo "Error:" . $e->getMessage();
}
}

$asunto="Gracias Por Confiar en Team Pro";
$mensaje2 ="


Team Pro Pruebas de envio
Para: $nombre  $apellido

 Señor/ra : $nombre le agradecemos confiar en nosotros su cuenta ya se creo correctamente
 Su numero de socio es: $numeroSocio
 recuerde que sus datos son los siguientes: $nombre , $apellido , y su contraseña es: $password que en nuestra base de datos se registra encriptada por su seguridad
 Clave encriptada es: $passwordSecure
 
";
$header = 'From:gonzalezcastellvigabriel@gmail.com'. "\r\n" .
'X-Mailer: PHP/' ;

//mail($para,$asunto,$mensaje,$header);
$resultado=mail($email,$asunto,$mensaje2,$header);
    if ($resultado) {
        echo "Correo enviado";
    } else {
        echo "Correo NO enviado";
    }


?>
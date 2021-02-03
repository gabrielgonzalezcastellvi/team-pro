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

 Señor/ra : $nombre le agradecemos confiar en nosotros. Su cuenta en la aplicación de reservas de turnos se creó correctamente
 Nº de socio: $numeroSocio
 Usuario: $nombre $apellido 
 Contraseña: $password (Por seguridad, su contraseña se registró de forma encriptada en nuestra base de datos: $passwordSecure)
 
";
#¿ES realmente necesario q el usuario sepa q se encriptó? Porque en definitiva ingresará con su contraseña 'humana'. 
#podría ser confuso para el socio el dato


$header = 'From:gonzalezcastellvigabriel@gmail.com'. "\r\n" . #al socio le debería llegar un mail con el remitente que sea el NOMBRE DEL CLUB
'X-Mailer: PHP/' ;

//mail($para,$asunto,$mensaje,$header);
$resultado=mail($email,$asunto,$mensaje2,$header);
    if ($resultado) {
        echo "Correo enviado correctamente";
    } else {
        echo "El correo NO fue enviado";
    }


?>
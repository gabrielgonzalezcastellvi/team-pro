<?php
require 'conection.php';

//Se recuperan las variables del formularios de inscripcion;
    $nombre=$_POST['Name'];
$apellido=$_POST['LastName'];
$numeroSocio=$_POST['UserNumber'];
$email=$_POST['email'];
$password=$_POST['password'];
$passwordSecure = hash('sha512' , $password);
 


//Hacemos la sentencia sql para insertar los datos;

$sql="INSERT INTO socios VALUES ('$nombre','$apellido','$numeroSocio','$email','$passwordSecure')"; //socios es el nombre de la tabla que se encuentra dentro de la base de datos 
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

$asunto="Gracias Por Confiar en Team Pro";
$mensaje2 ="


Team Pro Pruebas de envio
Para: $nombre  $apellido

 Señor/ra : $nombre le agradecemos confiar en nosotros. Su cuenta en la aplicación de reservas de turnos se creó correctamente
 Nº de socio: $numeroSocio
 Usuario: $nombre $apellido 
 Contraseña: $password 
 
";
#¿ES realmente necesario q el usuario sepa q se encriptó? Porque en definitiva ingresará con su contraseña 'humana'. 
#podría ser confuso para el socio el dato


$header = 'From:Club Mendoza Regatas'. "\r\n" . #al socio le debería llegar un mail con el remitente que sea el NOMBRE DEL CLUB
'X-Mailer: PHP/' ;


$resultado=mail($email,$asunto,$mensaje2,$header);
    if ($resultado) {
        echo "Correo enviado correctamente";
    } else {
        echo "El correo NO fue enviado";
    }


?>
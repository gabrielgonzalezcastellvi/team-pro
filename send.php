<?php
require 'conection.php';
require 'functions.php';

$nombre = strtoupper(limpiarDatos($_POST['Name']));
$apellido = strtoupper(limpiarDatos($_POST['LastName']));
$numeroSocio = limpiarDatos($_POST['UserNumber']);
$email = limpiarDatos($_POST['email']);
$mobile = limpiarDatos($_POST['mobile']);
$password = $_POST['password'];
$passwordSecure = hash('sha512', $password);

#validación que no se repita el nº de socio en DB, verificando si la columna tiene filas, es decir, datos
$validarSocio = mysqli_num_rows(mysqli_query($conectar, "SELECT `numeroSocio` FROM user_socios WHERE `numeroSocio` = $numeroSocio")); 

if ($validarSocio >0) {
    echo "<script>alert('EL Nº de socio $numeroSocio ya está registrado'); window.location.href='index.php';</script>";
} else {    
    $sql = "INSERT INTO user_socios VALUES (NULL,'$nombre','$apellido','$numeroSocio','$email','$mobile','$passwordSecure')"; 
    #IMPORTANTEEE: VERIFICAR LA ENCRIPTACION DE LA CONTRASEÑA



    $ejecutar = mysqli_query($conectar, $sql);
    if (!$ejecutar) {
        echo "<script>alert('Hubo un error, por favor inténtalo nuevamente. Si el error persiste por favor contáctate con nosotros'); window.location.href='index.php';</script>";
    }
    
    //Enviar correo al usuario con su registro
    $to = $email;
    $asunto = 'Registro de socio en la app de reservas';
    $mensaje = "
    Hola $nombre!
    Tus datos fueron cargados correctamente, si coinciden con nuestros registros de socios tendrás acceso a la aplicación próximamente. No te preocupes, te avisaremos. 
    
    Recuerda tus datos:
    - $nombre $apellido
    - Nº socio: $numeroSocio
    - Celular registrado: $mobile
    - Contraseña: $password
    
    Recuerda que tus datos podrás editarlos desde 'Mi perfil'
    ";
    $header = 'From: Secretaría Club X' . "\r\n" .
        'X-Mailer: PHP';

    $correo = mail($to, $asunto, $mensaje, $header);

    if ($correo) {
        echo "<script>alert('Tus datos se enviaron correctamente. Por favor, chequeá tu mail.');window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('No se envio su correo'); window.location.href='index.php';</script>";
    }
}

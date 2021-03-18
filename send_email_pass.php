<?php
//enviar correo con link para restablecer la contraseña;
require 'conection.php';
require 'functions.php';

$nombre = "gabriel";
$apellido = "gonzalez";
$numeroSocio = "3434";
$email = $_POST['email'];
$link = 'http://localhost:81/team-pro/edit-profile.php?Restablecer-Password';

$to = $email;

$asunto = 'Restablecimiento de contraseña TeamPro';
$mensaje = "
Hola $nombre $apellido a traves de este enlace podras restabler tu contraseña $link.
 ";
$header = 'From: Secretaría Club X' . "\r\n" .
    'X-Mailer: PHP';

$correo = mail($to, $asunto, $mensaje, $header);


if($correo){
 echo"<script>alert('Se envio un link de tu correo para poder restablecer su contraseña.'); window.location.href='index.php'</script>";
}else{
    echo"<script>alert('No se pudo enviar su correo, verifique el correo') window.location.href='reset-pass.php'</script>";
}


?>
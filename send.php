<?php
require 'conection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre=$_POST['Name'];
$apellido=$_POST['LastName'];
$numeroSocio=$_POST['UserNumber'];
$email=$_POST['email'];
$password=$_POST['password'];
$password = hash('sha512' , $password);

try {
    $conexion = new PDO('mysql:host=localhost;dbname=redglobe', 'root', '');
} catch (PDOException $e) {
    echo "Error:" . $e->getMessage();
}
}



?>
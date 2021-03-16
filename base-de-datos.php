<?php
$conexion=mysqli_connect("127.0.0.1:81","root","","teampro-reservasapp"); 

$query1="SELECT `nombre`, `apellido` FROM user_socios";
$query2="SELECT `numeroSocio` FROM user_socios";
$query3="SELECT `mobile` FROM user_socios";
$query4="SELECT `email` FROM user_socios";
$query5="SELECT `passwordSecure` FROM user_socios";

//mysqli_select_db($conexion,'teampro-reservasapp'); 

$nombreyapellido=mysqli_query($conexion,$query1);
$numeroSocio=mysqli_query($conexion, $query2);
$numeroCelular=mysqli_query($conexion,$query3);
$correo=mysqli_query($conexion,$query4);
$password=mysqli_query($conexion,$query5);


while($fila=mysqli_fetch_array($nombreyapellido, $numeroSocio, $numeroCelular, $correo, $password)){
echo"<p>";
 
echo $fila["nombre"];
 
echo $fila["apellido"];

echo $fila["mobile"];

echo $fila["email"];

echo $fila["passwordSecure"];
 }

 



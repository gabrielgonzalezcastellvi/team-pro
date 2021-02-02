<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistryViews</title>
</head>
<body>
<form action="conection.php" method="post">
<input type="text" name="Name" title="Nombre" placeholder="Nombre">
<br>
<input type="text" name="LastName" title="Apellido" placeholder="Apellido">
<br>
<input type="number" name="UserNumber" title="NumeroDeUsuario" placeholder="Numero de socio">
<br>
<input type="email" name="email" title="Correo" placeholder="Correo" required>
<br>
<input type="password" name="password" title="Contraseña" placeholder="Contraseña" required>
</form>
<?php
require '../views/registry.view.php';
?>
</body>
</html>

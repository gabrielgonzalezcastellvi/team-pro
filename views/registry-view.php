<?php
require 'views/header.php';
?>

<div class="login-panel">
    <form class="formulario" name="registry" action="send.php" method="POST">
        <h3 class="section-title">Nuevo usuario</h3>
        <p>¡Resgistrate en la app para comenzar a utilizar el servicio de reservas online!</p>
        
        <input class="registry" type="text" name="Name" title="Nombre" placeholder="Nombre">

        <input class="registry" type="text" name="LastName" title="Apellido" placeholder="Apellido">

        <input class="registry" type="number" name="UserNumber" title="NumeroDeUsuario" placeholder="Numero de socio">

        <input class="registry" type="number" name="mobile" placeholder="Celular">

        <input class="registry" type="email" name="email" title="Correo" placeholder="Email" required>

<div class="form-group">
<input type="password" id="mostrar" name="password" title="Contraseña" placeholder="Contraseña" required>
        <input type="checkbox" value="Mostrar Contraseña" onclick="mostrarContraseña()"> Mostrar
</div>

        <input class="btn btn-primary btn-lg" type="submit" value="Registrarse">
        
    </form>


</div>

<?php
require 'views/footer.php';
?>
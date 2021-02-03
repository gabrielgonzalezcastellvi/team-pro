<?php
require 'header.php';
?>

<div class="login-panel">
    <form class="formulario" name="login" action="send.php" method="POST">
        <h3 class="section-title">Registrarse</h3>
        <input type="text" name="Name" title="Nombre" placeholder="Nombre">
        <br>
        <br>
        <input type="text" name="LastName" title="Apellido" placeholder="Apellido">
        <br>
        <br>
        <input type="number" name="UserNumber" title="NumeroDeUsuario" placeholder="Numero de socio">
        <br>
        <br>
        <input type="email" name="email" title="Correo" placeholder="Email" required>
        <br>
        <br>
        <input type="password" name="password" title="Contraseña" placeholder="Contraseña" required>
        <br>
        <br>
        <input type="submit" value="Registrarse">

    </form>


</div>

<?php
require 'footer.php';
?>
<?php
 require 'header.php';
 require 'nav.php';

?>

<div class="container-fluid">

<form class="formulario" name="registry" action="send.php" method="POST">
        <h3 class="section-title">Estos son tus datos. Puedes editarlos:</h3>
        

        <input class="registry" type="text" name="Name" title="Nombre" value="<?php echo $socios['nombre']; ?>" required>

        <input class="registry" type="text" name="LastName" title="Apellido" placeholder="Apellido" required>

        <input class="registry" type="number" name="UserNumber" title="NumeroDeUsuario" placeholder="Numero de socio" required>

        <input class="registry" type="number" name="mobile" placeholder="Celular" required>

        <input class="registry" type="email" name="email" title="Correo" placeholder="Email" required>

        <div class="form-group">
            <input type="password" id="mostrar" name="password" title="Contraseña" placeholder="Contraseña" required>
            <input type="checkbox" value="Mostrar Contraseña" onclick="mostrarContraseña()"> Mostrar
        </div>

        <input class="btn btn-primary btn-lg" type="submit" value="Registrarse">

    </form>
</div>

<?php
 require 'footer.php';

?>
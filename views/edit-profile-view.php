<?php
require 'header.php';
require 'nav.php';

?>


<div class="container-fluid">
    <div class="caja-perfil">
        <ul class="datos-perfil">
            <li><i class="perfil fas fa-user"></i> codigo php q traiga Nombre y apellido</li>
            <li><i class="perfil fas fa-id-card"></i> codigo php q traiga Nº Socio</li>
            <li><i class="perfil fas fa-mobile-alt"></i> codigo php q traiga Teléfono (celular)</li>
            <li><i class="perfil fas fa-envelope"></i> codigo php q traiga E-mail</li>
            <li><i class="perfil fas fa-lock"></i> codigo php q traiga Contraseña (oculta!!) <input type="checkbox" value="Mostrar Contraseña" onclick=""> Mostrar</li>
        </ul>
    </div>


    <form class="formulario edit-profile" name="registry" action="send.php" method="POST">
        <h3 class="section-title">Editar mis datos</h3>


        <input class="registry" type="text" name="Name" title="Nombre" value="<?php echo $socios['nombre']; ?>" required>

        <input class="registry" type="text" name="LastName" title="Apellido" placeholder="Apellido" required>

        <input class="registry" type="number" name="UserNumber" title="NumeroDeUsuario" placeholder="Numero de socio" required>

        <input class="registry" type="number" name="mobile" placeholder="Celular" required>

        <input class="registry" type="email" name="email" title="Correo" placeholder="Email" required>

        <div class="form-group">
            <input type="password" id="mostrar" name="password" title="Contraseña" placeholder="Contraseña" required>
            <input type="checkbox" value="Mostrar Contraseña" onclick="mostrarContraseña()"> Mostrar
        </div>

        <input class="btn btn-primary btn-lg" type="submit" value="Actualizar datos">

    </form>

</div>

<?php
require 'footer.php';

?>
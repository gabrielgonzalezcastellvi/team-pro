<?php
require 'header.php';
require 'nav.php';

?>


<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 mb-2">
        <div class="col">
            <div class="caja-perfil">
                <ul class="datos-perfil">
                <li><?php echo 'codigo php q traiga Nombre y apellido'; ?></li>
                    <li><i class="perfil fas fa-user"></i> <?php echo 'codigo php q traiga Nombre y apellido'; ?></li>
                    <li><i class="perfil fas fa-id-card"></i> <?php echo 'codigo php q traiga Nº Socio'; ?></li> <!--este dato no deberia poder editarse, ya q es un ID otorgado x la Institucion-->
                    <li><i class="perfil fas fa-mobile-alt"></i> <?php echo 'codigo php q traiga Teléfono (celular)'; ?></li>
                    <li><i class="perfil fas fa-envelope"></i> <?php echo 'codigo php q traiga E-mail'; ?></li>
                    <li><i class="perfil fas fa-lock"></i> <?php echo 'codigo php q traiga Contraseña (oculta!!) '; ?><input type="checkbox" value="Mostrar Contraseña" onclick=""> Mostrar</li>
                </ul>
            </div>
        </div>



        <div class="col">
            <div class="container">
                <h3 class="section-title">Editar mis datos</h3>
                <form class="formulario edit-profile" name="registry" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <input type="hidden" name="id" value=""> <!--value = al id en la DB del usuario, para q traiga el resto de los datos en funcion de su id-->
                    <input class="registry" type="text" name="Name" title="Nombre" value="<?php echo 'aqui trae el dato de la DB'; ?>">

                    <input class="registry" type="text" name="LastName" title="Apellido" placeholder="Apellido" value="<?php echo 'aqui trae el dato de la DB'; ?>">

                    <input class="registry" type="number" name="mobile" placeholder="Celular" value="<?php echo 'aqui trae el dato de la DB'; ?>">

                    <input class="registry" type="email" name="email" title="Correo" placeholder="Email" value="<?php echo 'aqui trae el dato de la DB'; ?>">

                    <div class="form-group">
                        <input type="password" id="mostrar" name="password" title="Contraseña" placeholder="Nueva contraseña">
                        <input type="checkbox" value="Mostrar Contraseña" onclick="mostrarContraseña()"> Mostrar
                    </div>

                    <input class="btn btn-primary btn-lg" type="submit" value="Actualizar datos">

                </form>
            </div>
        </div>
    </div>
</div>

<?php
require 'footer.php';

?>
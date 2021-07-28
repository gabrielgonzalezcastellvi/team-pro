<?php
require 'header.php';
require 'nav.php';
//include 'base de datos';

?>


<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 mb-2">
        <div class="col">
            <div class="caja-perfil">
                <ul class="datos-perfil">
                    <li><i class="perfil fas fa-user"></i> <span class="dato-socio"><?php echo $datos_perfil[2].', '.$datos_perfil[1]; ?></span></li>
                    <li><i class="perfil fas fa-id-card"></i> Nº SOCIO: <span class="dato-socio"><?php echo $datos_perfil[3]; ?></span></li> <!--este dato no deberia poder editarse, ya q es un ID otorgado x la Institucion-->
                    <li><i class="perfil fas fa-envelope"></i> <span class="dato-socio"><?php echo $datos_perfil[4]; ?></span></li>
                    <li><i class="perfil fas fa-mobile-alt"></i> <span class="dato-socio"><?php echo $datos_perfil[5]; ?></span></li>
                    <li><i class="perfil fas fa-lock"></i> <span class="dato-socio"><?php echo $datos_perfil[6]; ?></span></li>
                    NO SÉ COMO TRAER LA CONTRASEÑA OCULTA

                </ul>
            </div>
        </div>



        <div class="col">
            <div class="container">
                <h3 class="section-title">Editar mis datos</h3>
                <form class="formulario edit-profile" name="registry" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <input type="hidden" name="id" value=""> <!--value = al id en la DB del usuario, para q traiga el resto de los datos en funcion de su id-->
                    <legend>Nombre</legend><input class="registry" type="text" name="Name" title="Nombre" value="<?php echo 'aqui trae el dato de la DB'; ?>">

                    <legend>Apellido</legend><input class="registry" type="text" name="LastName" title="Apellido" placeholder="Apellido" value="<?php echo 'aqui trae el dato de la DB'; ?>">

                    <legend>Tel.</legend><input class="registry" type="number" name="mobile" placeholder="Celular" value="<?php echo 'aqui trae el dato de la DB'; ?>">

                    <legend>Email</legend><input class="registry" type="email" name="email" title="Correo" placeholder="Email" value="<?php echo 'aqui trae el dato de la DB'; ?>">

                    <div class="form-group">
                        <input type="password" id="mostrar" name="password" title="Contraseña" placeholder="Nueva contraseña">
                        <input type="checkbox" value="Mostrar Contraseña" onclick="mostrarContraseña()">Mostrar</input> 
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
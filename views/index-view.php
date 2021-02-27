<?php
#ESTEA VISTA EL HOME DE LA APP PARA loguearse
require 'header.php';
?>

<div class="login-panel">
	<form class="formulario" name="login" action="login-user.php" method="POST">
		<div class="form-group">
			<i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="numero" placeholder="Numero de socio o Celular" required>
		</div>

		<div class="form-group">
			<i class="icono izquierda fa fa-lock"></i><input class="password_btn" type="password" id ="mostrar" name="password" placeholder="Contraseña" required>
			<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			<input type="checkbox" value="Mostrar Contraseña" onclick="mostrarContraseña()">Mostrar</input> 
			
		</div>
		<a href="<?php echo RUTA; ?>/reset-pass.php">¿Olvidaste la contraseña?</a> | <a href="<?php echo RUTA; ?>/registry.php">¿Aún no estás registrado?</a>
	</form>
	<a href="<?php echo RUTA; ?>/home-panel.php">home-panel.php</a> --> Esto hay q quitarlo cdo configuremos al final los session_start, es sólo para poder entrar facilmente
</div>



<?php
require 'footer.php';
?>
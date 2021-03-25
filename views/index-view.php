<?php
#VISTA del login (logica en login-user.php)
require 'header.php';
?>

<div class="login-panel">
	<form class="formulario" name="login" action="login-user.php" method="POST">
		<div class="form-group">
			<i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="dato" placeholder="Numero de socio o Celular" required>
		</div>

		<div class="form-group">
			<i class="icono izquierda fa fa-lock"></i><input class="password_btn" type="password" id ="mostrar" name="password" placeholder="Contraseña" required>
			<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			<span class="showpass-box"><input type="checkbox" value="Mostrar Contraseña" onclick="mostrarContraseña()"><span class="show-pass">Mostrar</span></input></span>
			
			
		</div>
		<a href="<?php echo RUTA; ?>/reset-pass.php">¿Olvidaste la contraseña?</a> | <a href="<?php echo RUTA; ?>/registry.php">¿Aún no estás registrado?</a>
	</form>
</div>



<?php
require 'footer.php';
?>
<?php
require 'views/header.php';
?>
<div class="login-panel">
<form class="formulario" name="login" action="" method="POST">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="usuario" placeholder="Tu email">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input class="password_btn" type="password" name="password" placeholder="Contraseña">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>
            <a href="#">¿Olvidaste la contraseña?</a>
		</form>


</div>



<?php
require 'footer.php';
?>
<?php
require 'views/header.php';
?>

<div class="login-panel">
    <form class="formulario" name="registry" action="send_email_pass.php" method="POST">
        <h3 class="section-title reset-h3">Reestablecer mi contraseña</h3>
        
        <input type="hidden" name="id">
        <form action="send_email_pass.php" method="post">

<input type="mail" name="email" placeholder="ingrese su mail" required>

        <input class="btn btn-primary btn-lg" type="submit" value="Recuperar">

    </form>
<p class="volver"><a href="<?php echo RUTA;?>"><i class="fas fa-arrow-left"></i> Volver a inicio</a></p>

</div>

<?php
require 'views/footer.php';
?>
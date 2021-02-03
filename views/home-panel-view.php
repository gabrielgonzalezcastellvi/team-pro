<?php
require 'views/header.php';
?>
<?php
require 'nav.php';
?>
<div class="panel">
  <h3>NUEVA RESERVA</h3>
  <form>
    <select class="form-select" aria-label="Default select example">
      <option selected>Seleciona actividad</option>
      <option value="paddle">Paddle</option>
      <option value="tenis">Tenis</option>
      <option value="gym">Gimnasio</option>
    </select>
    <input class="btn btn-primary btn-activity" type="submit" value="Ver horarios">
  </form>

</div>



<?php
require 'views/footer.php';
?>
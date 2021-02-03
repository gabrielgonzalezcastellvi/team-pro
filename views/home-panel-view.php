<?php
require 'views/header.php';
?>
<?php
require 'nav.php';
?>
<div class="panel">
  <h3>NUEVA RESERVA</h3>
  <form class="form-booking" name="actividad" action="">
    <select class="form-select" aria-label="Default select example">
      <option selected>Selecioná actividad</option>
      <option value="paddle">Paddle</option>
      <option value="tenis">Tenis</option>
      <option value="gym">Gimnasio</option>
    </select>

    <h3 class="form-title">Elegí el día</h3>

    <input type="date">
  <br>
    <input id="btn-buscar" class="btn btn-primary" type="submit" value="Buscar horarios">
  </form>
<p>Acá deberían aparecer los horarios disponibles según selección que hizo arriba. ¿javascript? Quizás desplegar una tabla sólo con los horarios que están disponibls y un botón que diga RESERVAR para avanzar en el siguiente paso (single o equipos)</p>
</div>



<?php
require 'views/footer.php';
?>
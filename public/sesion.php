<?php
  session_start();
  $_SESSION["ID_USUARIO"] = "";
  if ($_SESSION["ID_USUARIO"] == ""){
    ?>
    <div class="container">
      <div class="sesion">
        <div class="row">
          <div class = "col-md-12">
            <!-- tipos de botones: btn, btn-primary, btn-secondary, btn-success, btn-info, btn-warning, btn-danger -->
            <!-- tipos de solo color en el marco: btn-outline-primary, btn-outline-secondary, btn-outline-success, btn-outline-info, btn-outline-warning, btn-outline-danger -->
            <button type="submit" class="btn btn-sm float-sm-right  btn-outline-primary">Iniciar Sesión</button>
            <button type="button" class="btn btn-sm float-sm-right clear-fix btn-outline-dark">Registrarse</button>
            <button type="button" class="btn btn-sm float-sm-right clear-fix btn-outline-success">Registrarse</button>


            <a href="#" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Iniciar Sesion</a>
            <a href="#" class="btn btn-primary btn-sm disabled" role="button" aria-pressed="true">Registrarse</a>

          </div>
        </div>
      </div>
    </div>
    <?php
  } else {
    echo "Sesion iniciada con el usuario: " .  $_SESSION["ID_USUARIO"];
    ?>
    <div class="container">
      <div class="sesion">
        <div class="row">
          <div class = "col-md-12">
            <button type="button" class="float-sm-right clear-fix btn-warning sticky-top">Cerrar Sesión</button>
          </div>
        </div>
      </div>
    </div>
    <?php
  };
 ?>

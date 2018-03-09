<?php
  include("./public/constantes.php");
  /*
  try {
    include("./dm/MostrarRegistros.php");
  } catch (Exception $e) {
    echo "<h3> No se ha podido establecer una conexión a la BD </h3>";
  }*/


?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Aprendiendo a programar
    </title>
    <?php
      echo $metas;
      echo $Bootstrap;
    ?>
  </head>
  <body>
    <?php
      // incluimos el inicio de sesion
      include("./public/sesion.php");
    ?>
    <h1>Prueba de bootstrap</h1>

    <?php
      include("./dm/Coneccion2.php");
     ?>


     <div class="grupodebotones">
       <div class="row">
         <div class="col-xs">
           <h3> Botones basicos </h3>
           <div class="btn-group" role="group">
             <button class="btn btn-ts">Izquierda</button>
             <button class="btn btn-ts">Centro</button>
             <button class="btn btn-ts">Derecha</button>

         </div>
       </div>
       <div class="col-xs">
         <h3> button toolbar </h3>
         <div class="btn-toolbar" role="toolbar">
           <div class="btn-group" role="group" arial-labal="primer grupo">
             <button type="button" class="btn btn-secondary">1</button>
             <button type="button" class="btn btn-secondary">2</button>
             <button type="button" class="btn btn-secondary">3</button>
             <button type="button" class="btn btn-secondary">4</button>
             <button type="button" class="btn btn-secondary">5</button>
           </div>
           <div class ="btn-group" grole="group" arial-label="segundo Grupo">
             <button type="button" class="btn btn-secondary">6</button>
             <button type="button" class="btn btn-secondary">7</button>
           </div>
         </div>
       </div>
       <div class="col-xs">
         <h3> Botones Size </h3>
         <div class="btn-group btn-group-lg" role="group">
           <button class="btn btn-ts">Izquierda</button>
           <button class="btn btn-ts">Centro</button>
           <button class="btn btn-ts">Derecha</button>

       </div>
       <div class="col-xs">
         <h3> Botones Size </h3>
         <div class="btn-group btn-group-sm" role="group">
           <button class="btn btn-ts">Izquierda</button>
           <button class="btn btn-ts">Centro</button>
           <button class="btn btn-ts">Derecha</button>

       </div>
     </div>
  </body>
</html>

<?php
  include_once("conexion.php");

  // Mostramos los registros de la tabla usuarios.

  $Servidor = "localhost";
  $BD = "test";
  $Usuario = "root";
  $Clave = "";
  $query = "select * from usuarios";

  $con = new conectar($Servidor, $BD, $Usuario, $Clave);  //conexion a la BD.

  $cons = $con::Consulta($query); // resultado de la consulta.
  if (is_null($cons) == false) {
    $registros = $con::NumeroDeFilas($cons);
    $columnas = $con::NumeroDeColumnas($cons);

    if ($registros >= 1) { 
      echo 'Total de Registros encontrados: ' . $registros . "<br><br>";  
    }  else { echo "No se encontro informaci&oacute;n.";  }
  

    echo "<table border=1>";
    
    /* Para los titulos se puede imprimir de esta forma Dinámica 
       (Imprimirá el nombre del campo) 
       o escribir manualmente los titulos de las columnas.*/
    echo "<tr border>"; //Imprimimos Filas para los títulos.   
    for ($i=0; $i < $columnas; $i++) { 
      $Encabezado = $con::NombreDelCampo($cons, $i);    //Obtenemos nombre del Titulo de la columna.
      echo "<td align=center>"; 
      echo strtoupper($Encabezado); //Imprimimos títulos
      echo "</td>";        
    }
    echo "</tr>";


    while ($campos = mysql_fetch_array($cons, MYSQL_ASSOC)) {  
       
      echo "<tr>"; //Imprimimos Filas
      foreach ($campos as $datos) {

        echo "<td>"; //Imprimimos Columnas
        echo $datos; //Imprimimos Valores
        echo "</td>";      
      }
      echo "</tr>";
    }

    echo "</table>";  //Cerramos la tabla.
    $con->Close($cons); //Cerramos la conexion a la BD.
  }
  

?>


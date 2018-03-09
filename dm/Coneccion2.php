<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "imperio";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT id, usuario, nombre, email, clave, id_tipo_usuario FROM usuarios";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "id: " . $row["id"]. " - usuario: " . $row["usuario"]. " " . $row["nombre"]. "<br>";
     }
  } else {
     echo "0 results";
  }
  $conn->close();
?>

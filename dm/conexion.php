<?php

   class conectar
  {
      private $Servidor;
      private $BaseDeDatos;
      private $NombredeUsuariodeMysql;
      private $ClavedelUsuarioDeMysql;
      private static $Conexion;
      private static $NumFilas = 0;
      private static$NumColumnas = 0;

      //constructor de la clase conectar con parametros
      function Conectar($Serv,$BD,$Usuario,$Clave){
        $this->Servidor = $Serv;
        $this->BaseDeDatos = $BD;
        $this->NombreDeUsuarioDeMysql = $Usuario;
        $this->ClaveDelUsuarioDeMysql = $Clave;
        $this->ConectarAMysql();
 //       $this->SeleccionarBaseDeDatos();
      }

      //La funcion que se comunica con mysql
      private function ConectarAMysql(){
        self::$Conexion = mysqli_connect($this->Servidor, $this->NombredeUsuariodeMysql, $this->ClaveDelUsuarioDeMysql, $this->BaseDeDatos)
        or die(Mysql_Eror());
      }

      /* Despues que hay conexión con el servidor de mysql
         selecciono la base de datos con la que vamos a trabajar */

      private function SeleccionarBaseDeDatos(){
        mysql_select_db($this->BaseDeDatos) or die (mysql_error());
      }

      // Para realizar una consulta a la Base de Datos
      public static function Consulta($sql){
        $valins = strpos("insert", $sql);
        $valUp = strpos("update", $sql);

        if (($valins == false) and ($valUp == false))
        { $resultado = mysqli_query(self::$Conexion,$sql); }
        else {
          $resultado = NULL;
          $NumFilas = 0;
          $NumColumnas = 0;
          echo 'No es posible ejecutar este query.';
        }

        return $resultado;
      }

      public static function NumeroDeFilas($consulta){
        return self::$NumFilas;
      }

      public static function NumeroDecolumnas($ConsultaEjecutada){
        return self::$NumColumnas;
      }

      public static function NombreDelCampo($Consulta, $Campo){
        //return mysqli_field_name($Consulta, $Campo);
		  return $Campo.name;
      }

      public function Close($Consulta){
        if ((is_null($Consulta) == false) and ($Consulta == true)) {
          mysqli_free_result($Consulta);
        }

        mysqli_close(self::$Conexion);
      }
  }

?>

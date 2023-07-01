<?php
     /**
      * ? CONEXION PDO [PHP DATA OBJECTS]
      * * Es una interfaz de abstracción de bases de datos en PHP. Proporciona un conjunto de clases y métodos para preparar y ejecutar consultas SQL de una manera segura y eficiente. 
      */

     try{
          $dsn = "mysql:host=localhost;dbname=$dbname";
          $dbh = new PDO($dsn, $user, $pass);           
     } catch (PDOException $e) {
          echo $e->getMessage();
     } 

     /**
      * ? EXCEPCIONES Y OPCIONES PDO
      * * maneja los errores en forma de excepciones, por lo que la conexión siempre ha de ir encerrada en un bloque try/catch
      */

     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

     /**
      * ? Conexion PDO usando clases y el $_ENV
      * * DSN="mysql"
      * * HOST="localhost"
      * * DBNAME="prueba"
      * * USER="root"
      * * PASSWORD=""
      * * PORT="3306"
      */
           
     // namespace App;
      class connect {
          public $con;
          public function __construct(){
              try {        
              //echo "ok";
              $this->con = new \PDO($_ENV["DSN"].":host=".$_ENV["HOST"].";dbname=".$_ENV["DBNAME"].";user=".$_ENV["USER"]."; password=".$_ENV["PASSWORD"]."; port=".$_ENV["PORT"]);
              $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
              $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_SILENT);
              $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
              } catch (\PDOException $e) {
                  echo $e->getMessage();
              }    
          }
      }
  
  
      

?>
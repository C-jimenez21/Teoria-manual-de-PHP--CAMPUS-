<?php
/**
 * ? Clases: Una clase puede tener sus propias constantes, variables (llamadas "propiedades"), y funciones (llamados "métodos").
 */
   
 echo "Ejemplo Clases";
 
 class Persona {
   private $nombre;
   protected $edad;
   
   public function __construct($nombre, $edad){
      $this->nombre = $nombre;
      $this->edad = $edad;
   }
   public function getNombre(){
      return $this->nombre;
   }
   public function setNombre($nombre){
      $this->nombre = $nombre;
   }
   public function getEdad(){
      return $this->edad;
   }
   public function setEdad($edad){
      $this->edad = $edad;
   }
   private function saludar(){
      echo "hola, mi nombre es ". $this->nombre;
   }
 }

   /**
    * ? Como instanciar una clase
    * * $variable = new Clase(args);
    */

    $alumno = new Persona("Cristian" , 21);
    $alumno -> getNombre();
    $alumno -> getEdad();

    /**
     * ? creacion de una clase 2 haciendo uso del los atributos insertados en la version 8 de PHP
     * * No hace falta declarar la variable antes del constructor sino en el mismo constructor.
     */
    class Persona {
      public function __construct(private string $nombre, protected int $edad){
         $this->nombre = $nombre;
         $this->edad = $edad;
      }
      public function getNombre(){
         return $this->nombre;
      }
      public function setNombre($nombre){
         $this->nombre = $nombre;
      }
      public function getEdad(){
         return $this->edad;
      }
      public function setEdad($edad){
         $this->edad = $edad;
      }
      private function saludar(){
         echo "hola, mi nombre es ". $this->nombre;
      }
    }
?>
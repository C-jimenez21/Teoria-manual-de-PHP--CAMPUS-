<?php
/**
 * ? METODOS ESTATICOS
 * * Este es un tipo de metodo que pertenece a la clase y no a la instancia especifica de la classe.
 * todo A diferencia de los metodos normales, estos se pueden llamar directamente sin necesidad de crear una instancia de la clase.
 * * Clase::metodoEstatico() -> estos solo pueden acceder a atributos estaticos, y la palabra $this se reemplaza por Self
 */
   
 echo "Ejemplo Metodos Estaticos";
 
 class Persona {
   private string $nombre;
   protected int $edad;
   private static $nombreAux;
   
   public function __construct($nombre, $edad){
      $this->nombre = $nombre;
      $this->edad = $edad;
      self::$nombreAux = $nombre;
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
   public static function saludar(){
      echo "hola, mi nombre es ". self::$nombreAux;
   }
 }

 Persona::saludar();

?>
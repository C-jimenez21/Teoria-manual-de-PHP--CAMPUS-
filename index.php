<?php 
   /**
    * ? Clases abstractas
    * * Es una clase que no se puede instanciar directamente, sino que sirve como una plantilla o base para otras clases. Se utiliza para definir la estructura común y los métodos que deben implementar las clases hija
    * todo abstract class name{
    * todo abstract public function metodoAbstracto(); };
    * * Las clases hijas de una clase abstracta deben implementar todos los métodos abstractos definidos en la clase abstracta. Si una clase hija no implementa todos los métodos abstractos, también debe ser declarada como una clase abstracta. Una clase hija puede extender solo una clase abstracta a la vez.
    * * Instanciación de clases abstractas: No es posible crear una instancia directa de una clase abstracta utilizando el operador new. Sin embargo, se pueden utilizar las clases hijas para crear instancias
    * * Implementación de métodos abstractos: Las clases hijas deben proporcionar una implementación concreta de los métodos abstractos definidos en la clase abstracta. La implementación debe tener la misma firma (nombre y parámetros) que el método abstracto en la clase abstracta.
    */

    /**
     * ? Interfaces
     * * es una estructura que define un conjunto de métodos que una clase debe implementar. Es un contrato que especifica qué métodos debe proporcionar una clase sin especificar cómo se implementan esos métodos.
     * todo interface MiInterfaz{
     * todo    public function metodo1();
     * todo    public function metodo2(); }
     */

      echo "Ejemplo";

/* Un parqueadero quiere implementar un nuevo sistema para gestionar los vehículos que entran y salen de sus instalaciones. Para modelar este sistema, necesitamos crear una serie de clases e interfaces. El parqueadero puede recibir dos tipos de vehículos: Coches y Motocicletas. Para modelar esto, se te pide que crees una clase abstracta Vehiculo con una propiedad para la placa y un método abstracto getType(). Luego, crea dos clases Coche y Motocicleta que extiendan de Vehiculo e implementen el método getType().
Además, necesitamos una interfaz ParqueaderoInterface que defina dos métodos: estacionar(Vehiculo $vehiculo) y retirar(Vehiculo $vehiculo).
Por último, necesitamos una clase Parqueadero que implemente la interfaz ParqueaderoInterface. Esta clase debe tener una propiedad para almacenar los vehículos que se encuentran actualmente en el parqueadero. Cuando un vehículo es estacionado, debe ser agregado a esta propiedad y cuando es retirado, debe ser eliminado de la misma.
Para probar tu código, crea un objeto Parqueadero y estaciona y retira tanto un coche como una motocicleta.
     */
      
abstract class Vehiculo {
   protected $placa;

   public function __construct($placa = "BUW713"){
        $this->placa = $placa;
   }

   abstract public function getType();
   public function getPlaca(){
        return $this->placa;
   }
}

class Coche extends Vehiculo{
   public function getType(){
        echo "El vehiculo es un: " .__CLASS__ ."<br>";  
   }
}

class Motocicleta extends Vehiculo{
   public function getType(){
        echo "El vehiculo es una: " .__CLASS__ ."<br>";  
   }
}

interface ParqueaderoInterface{
   public function estacionar(Vehiculo $vehiculo);
   public function retirar(Vehiculo $vehiculo);
}

class Parqueadero implements ParqueaderoInterface{
   private $numVehiculo;

   public function __construct(){
        $this->numVehiculo = [];
   }
   public function estacionar(Vehiculo $vehiculo){
        $this->numVehiculo[] = $vehiculo;
        echo "El vehiculo de placas ".$vehiculo -> getPlaca()." se ha estacionado <br>";
   }
   public function retirar(Vehiculo $vehiculo){
        $indice = array_search($vehiculo, $this->numVehiculo);
        if($indice !== false){
             array_splice($this->numVehiculo, $indice, 1);
             echo "El vehiculo con placas ".$vehiculo -> getPlaca() ." se ha retirado del estacionamiento <br>";
        }else{
             echo "El vehiculo no se encuentra en el parqueadero <br>";
        }
        echo "El numero de vehiculos estacionados es de : ".count($this->numVehiculo)."<br>";
   }
}

$parqueadero = new Parqueadero();

$coche = new Coche("ABC123");
$motocicleta = new Motocicleta("XYZ789");

$parqueadero->estacionar($coche);
$parqueadero->estacionar($motocicleta);

$parqueadero->retirar($coche);
$parqueadero->retirar($motocicleta);



?>
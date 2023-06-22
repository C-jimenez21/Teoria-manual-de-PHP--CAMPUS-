<?php
   /**
    * ? HERENCIA
    * * La herencia en programación es un concepto que permite crear nuevas clases basadas en clases existentes, aprovechando y extendiendo su funcionalidad.
    * todo Para tener en cuenta -> La herencia en programación es un concepto que permite crear nuevas clases basadas en clases existentes, aprovechando y extendiendo su funcionalidad.
    * * Clase padre -> Es la original de la cual se definen los atrubutos y metodos basicos
    * * Clase hija -> [se usa EXTENDS] Es la clase creada apartir de la clase padre, la cual hereda los atributos y metodos de la clase base asi como la capacidad de modificar o ampliar los existentes.
    */

   class CuentaBancaria {
      protected $saldo;
  
      public function __construct($saldo = 0) {
          $this->saldo = $saldo;
      }   
  
       public function depositar($monto);
       public function retirar($monto);
  }
  class CuentaCorriente extends CuentaBancaria {
      public function depositar($monto) {
          $this->saldo += $monto;
          echo "Deposito en Cuenta Corriente: $monto. Saldo actual: $this->saldo\n";
      }
  
      public function retirar($monto) {
          $cargoPorSobregiro = 0;
          if ($this->saldo < $monto) {
              $cargoPorSobregiro = $monto * 0.10; 
          }
  
          $this->saldo -= ($monto + $cargoPorSobregiro);
          echo "Retiro en Cuenta Corriente: $monto. Cargo por sobregiro: $cargoPorSobregiro. Saldo actual: $this->saldo\n";
      }
  }
  class CuentaAhorros extends CuentaBancaria {
      public function depositar($monto) {
          $this->saldo += $monto;
          echo "Deposito en Cuenta de Ahorros: $monto. Saldo actual: $this->saldo\n";
      }
  
      public function retirar($monto) {
          if ($this->saldo < $monto) {
              echo "Fondos insuficientes para retirar $monto en Cuenta de Ahorros. Saldo actual: $this->saldo\n";
          } else {
              $this->saldo -= $monto;
              echo "Retiro en Cuenta de Ahorros: $monto. Saldo actual: $this->saldo\n";
          }
      }
  }
  $cuentaCorriente = new CuentaCorriente();
  $cuentaCorriente->depositar(500);
  $cuentaCorriente->retirar(600);  
  
  $cuentaAhorros = new CuentaAhorros();
  $cuentaAhorros->depositar(500);
  $cuentaAhorros->retirar(600); 
  

    
?>
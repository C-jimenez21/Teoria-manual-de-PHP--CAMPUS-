<?php
declare(strict_types=1);
/**
* ? Introduccion a php
* todo Para llevar un orden cuando se trabaja en proyectos creados con php se recomienda las carpetas -css- -img- -js- -scrpits- -uploads- y el archivo principal index.php -> se recomienda esta nomenclatrua en el nombre del archivo php para que lo reconozca el servidor.
* * Recordar la ruta de trabajo:  Computer/var/www/html
*/

/**
* ? Funciones de salida PHP 
* * En este apartado se presentan las diferentes variables de salida que tenemos con PHP
* todo Estas funciones imprimen directamente en el HTML
*/
 //  header("Content-type: application/json");
    echo "<h3>-------PUNTO 6 ------------</h3>";
    /**
     * ? echo(); es la funcion mas comun para imprimir, sirve para imprimir una o más cadenas de texto
     */
    echo "texto a imprimir";
    
    /**
     * ? printf(); es similar a echo() pero solo imprime una linea a la vez
     * * la adicion del caracter "%s" es para concatenar cadenas de texto
     */
     echo "<br>";
     $texto  = "mundo";
     printf("Hola %s", $texto);

     /**
     * ? sprintf(); es similar a printf() pero no la devuelve de una vez sino que se guarda como resultado para agregar a una variable
     */
    echo "<br>";
    $text = "Mundo";
     $mensaje = sprintf("Hola %s", $text);
     echo $mensaje; 

    /**
     * ? var_dump() nos sirve para saber que tipo de variable se esta trabajando, ademas  tambien devuelve la longitud 
     */
    echo "<br>";
     var_dump($texto);


echo "<h3>--------PUNTO 7------------</h3>";
/**
* ? Variables y constantes 
* * En este apartado se presentan como declarar una variable en PHP 
* todo Se definen usando el parametro $ y se le asigna un valor usando el operador =
*/
//declaracion variable numerica
$edad = 25;

//declararacion variable de texto
$nombre = "Juan";

//declaracion variable booleana
echo "<br>";
$es_valido = true;
echo var_dump($es_valido);

/**
 * ? Para la declaracion de constantes se usa la siguiente sintaxis 
 */
//declaracion constante numerica
echo "<br>";
define("PI", 3.1416);
echo PI;
//declaracion constante de texto
echo "<br>";
define("SALUDO", "Hola campers!");
echo SALUDO;
//declaracion constante numerica
echo "<br>";
define("ES_VALIDO", true);
echo ES_VALIDO;

echo "<h3>--------PUNTO 8------------</h3>";
/**
 * ? Tipos de datos
 * * En este apartado se muestran los diferentes tipos de datos con los que se puede trabajar en PHP
 * todo Enteros(Int) - Punto flotante (float) - Cadenas de texto (String) - Booleanos(bool) - Arreglos(array) - Objetos(object) - recurso(Resource) - Nulos(null)
 */
    //Entero
    $numero = 200;
    var_dump($numero); //int(200)

    //Floats
    echo "<br>";
    $float = 200.5;
    var_dump($float); //float(200.5)
    
    //Boolean
    echo "<br>";
    $logueado = true;
    var_dump($logueado); //bool(true)

    //Strings
    echo "<br>";
    $nombre = "Juan";
    var_dump($nombre); // string(4) "Juan"

    //Arreglos
    echo "<br>";
    $array = [];
    var_dump($array);  // array(0) { } 

    echo "<h3>------PUNTO 9 -----</h3>";
    /**
 * ? Numeros y operadores
 * * En este apartado se estudian los diferentes operadores logicos y su funcionamiento en php
 * todo Suma(+) - Resta(-) - Multiplicacion(*) - Division(/) - modulo (%) - Exponenciacion (**)
 */
    $num1 = 20;
    $num2 = 30;
    $num3 = 30;
    $num4 = "30";
     
    var_dump($num1 > $num2);
    echo "<br>";
    var_dump($num1 < $num2);
    echo "<br>";
    var_dump($num1 >= $num2);
    echo "<br>";
    var_dump($num1 <= $num2);
    echo "<br>";
    var_dump($num2 == $num3);
    echo "<br>";
    var_dump($num2 == $num4);
    echo "<br>";
    var_dump($num2 === $num4);
    echo "<br>";
    
    /**
     * * el uso del operador <=> es -1 si izq es menor || 0 si es igual || 1 si es mayor
     */
     var_dump($num1 <=> $num2);
     echo "<br>";

     var_dump($num2 <=> $num3);
     echo "<br>";

     var_dump($num2 <=> $num1);
     echo "<br>";

    /**
     * todo Otros metodos 
     */

     $nombreCliente = "Campers Campuslands ";
     
     //Devuelve la longitud de un string
     echo strlen($nombreCliente);
     var_dump($nombreCliente);

     //Elimina espacios en blanco
     echo "<br>";
     $txt = trim($nombreCliente);
     echo strlen($txt);

     //Convierte a mayusculas
     echo "<br>";
     echo strtoupper($txt);

    //Convierte a minusculas
     echo "<br>";
     echo strtolower($txt);


     $mail1 = "correo@correo.com";
     $mail2 = "Correo@correo.com";
    
     echo "<br>";
    var_dump(strtolower($mail1)=== strtolower($mail2));
    echo str_replace("Campus", "hola-mundo", $nombreCliente); //busca la primera palabra y la reemplaza por la segunda

    //revisar si un string existe o no 
    echo "<br>";
    echo strpos($nombreCliente, "Pedro");

    //concatenar
    $tipoCliente = "Premium - Empresarial";

    echo "El cliente " .$nombreCliente. "es ". $tipoCliente;
    echo "<br> El cliente {$nombreCliente} es {$tipoCliente}";

     
   echo "<h3>------PUNTO 10 -----</h3>";
   /**
    * ? Arreglos, Arreglos asociativos y funciones para arreglos
    * * Hay tres tipos de arrays, arrays indexados, arrays asociativos y arrays multidimensionales.
    */

    /** 
     * ? Arrays indexados
     * todo Son arrays que almacenan elementos y se acceden a ellos medianta un indice númerico.
     */
    echo "<h5>Arrys Indexados</h5>";
    $nombres = array("Juan", "Pedro", "Santiago");
    print_r($nombres); echo "<br>";
    
   /**
    * ? Arrays asociativos
    * todo Son arrays cuyos elementos se almacenan y acceden mediante una clave o nombre, estos estan compuestos por elementos "Clave => Valor" 
    */
    echo "<h5>Arrys Asosiativos</h5>";
    $edades = array(
      "Juan" => 21,
      "Pedro" => 37,
      "Santiago" => 43
    );
    print_r($edades);echo "<br>";

    /**
     * ? Arrays multidimensionales
     * todo Son arrays que contienen otros arrays como elementos, esto vendria siendo parecido a un matriz de datos, ademas estos elementos pueden ser matricese asosiativas o indexadas
     */
    echo "<h5>Arrys Multidimensionales</h5>";
    $personas = array(
      "Juan" => array(
         "Edad" => 21,
         "Ciudad" => "Madrid", 
         "Pais" => "España"),
      "Pedro" => array(
         "Edad" => 37, 
         "Ciudad" => "Barcelona", "Pais" => "España"),
         "Santiago" => array("Edad" => 43, "Ciudad" => "Valencia", "Pais" => "España")
      );
      print_r($personas);echo "<br>";
      echo "<hr>";

      /**
       * ? Para acceder a los parametros de un array, primero se accede al valor de la fila y luego por el valor de la columna, usando nomenclatura de corchete.
       */
      print_r ($personas["Santiago"]["Ciudad"]);
      echo "<br>";
      
      /**
       * ? Agregar datos a los arrays, se usa la misma nomenclatura que para leerlo y se asigna el valor mediante el operador de asignacion " = "
       */
      $personas["Juan"]["Altura"] = 1.69;
      print_r($personas);echo "<br>";

      /**
       * ? Como recorrer un array asociativo
       */
      foreach($edades as $clave => $valor){
         var_dump("Clave: ". $clave. " Valor ". $valor . "<br>");
      }
      echo "<h3>Metodos mas usados en arrys</h3>";

      /**
       * ? En este apartado se implementaran las funciones mas usadas para los arrays en PHP
       * todo Todas estas funciones reciben un array y retornan un array a excepcion de algunas, las cuales se mencionaran en su respectiva explicacion
       */
         echo "<pre>";
       /**
        * ? array_flip() lo que hace es cambiar los valores por claves y viceversa.
        * * array_flip(array $array): array  
        */
        echo "<h5>Array flip()</h5>";
        $arr = array("las", "caleñas", "son");
        print_r ($arr);
        print_r (array_flip($arr)); 
        
        /**
         * ? array_fill() lo que hace es rellenar el array con el valor indicado
         * * array_fill(int $start_index, int $count, mixed $value): array
         */
        echo "<h5>array_fill()</h5>";
        print_r(array_fill(-2, 4, "Hola mundo"));

       /**
         * ? array_filter() lo que hace es rellenar el array con el valor indicado
         * * array_filter(array $array, ?callable $callback = null, int $mode = 0): array
         * */
        echo "<h5>array_filter()</h5>";
        $arr1 = array(1,2,5,2,7,3,12,42,23,42,24,523,23,123,5,32,234,65,346,234,234,23);
        print_r(array_filter($arr1, function($val){
         return $val%2 === 0;
        }));
        //function esPar($val){return %val%2 === 0 };
        //print_r(array_filter($arr1, "esPar"));
       
        /**
         * ? array_map() se usa para aplicarle una funcion a los elementos dentro del array y el resultado es un array nuevo con los resultados.
         * *  array_map(?callable $callback, array $array, array ...$arrays): array
         * */
        echo "<h5>array_map()</h5>";
        function mayor($val){
         return ($val * $val); 
        }
        $arrMap = array_map("mayor", $arr1);
        print_r($arrMap);

        /**
         * ? array_reduce() reduce un array a un solo parametro segun la funcion que se le pase
         * * array_reduce(array $array, callable $callback, mixed $initial = null): mixed
         * ! no devuelve un array, devuelve un elemento mixto+
         */
        echo "<h5>array_reduce()</h5>";
        function sum($acum,$val){
         return $acum += $val;
        }
      var_dump(array_reduce($arr1, "sum"));

      /**
       * ? array_key_exist(); comprueba si una llave existe en un array
       * * array_key_exists(string|int $key, array $array): bool
       * ! retorna un boolean
       */
      echo "<h5>array_key_exist()</h5>";
        var_dump(array_key_exists("Pedro", $personas));

      /**
       * ? in_array(); compureba si el valor almacenado en un array exite
       * * in_array(mixed $needle, array $haystack, bool $strict = false): bool
       * ! retorna un boolean
       */
      echo "<h5>in_array()</h5>";
      var_dump(in_array("43",$edades));
      
      /**
       * ? array_rand();  Devuelve una o mas claves random de un array(se puede especificar el numero de valores que traiga)
       * * array_rand(array $array, int $num = 1): int|string|array
       * !int/sring/array
       */
      echo "<h5>array_rand()</h5>";
      print_r(array_rand($edades, 2));
      
      /**
       * ? array_unique(); remueve los valores duplicados de un array
       * * array_unique(array $array, int $flags = SORT_STRING): array
       */
      echo"<h5>array_unique()</h5>";
      $arrayRepe  = array("3", "banana", 3 , "banana", 33, "champion");
      print_r(array_unique($arrayRepe));

      /**
       * ? array_intersect(); filtra los valores que son iguales en 2 o mas arrays y los agrega en un matriz diferente, el orden de aparicion depende de la matriz que compare primero, en este caso es la array2
       * * array_intersect(array $array, array ...$arrays): array
       */
      echo"<h5>array_intersect()</h5>";
      $array1 = array(2, 4, 6, 8, 10, 12, "hola", "Mundo", "Perospero");
      $array2 = array(1,"Mundo", 2, 3, 4, 5, 6, "bigMom", "hola", "hola");
      print_r(array_intersect($array2, $array1));
      
      /**
       * ? array_diff(); compara los valores de una o mas arrays y devuelve los parametros del primer array que no se encuentran el los demás.
       * * array_diff(array $array, array ...$arrays): array
       */
      echo "<h5>array_diff()</h5>";
      $array3 = array(12, "Perospero");
      print_r(array_diff($array1, $array2 ,$array3));

      /**
       * ? array_push(); ingresa valores al final del array, y retorna la nueva longitud del array.
       * * array_push(array &$array, mixed ...$values): int
       * ! retorna enteros
       */
      echo "<h5>array_push()</h5>";
      print_r(array_push($array1,"Shanks", 4, 21, "shirohige"));
      print_r($array1);
      
      /**
       * ? array_pop(); Extrae, elimina y devuelve el ultimo elemento del array
       * * array_pop(array &$array): mixed
       */
      echo "<h5>array_pop()</h5>";
      print_r(array_pop($array1));
      print_r($array1);

      /**
       * ? array_reverse(); Toma un array existente y voltea los elementos, es decir los primeros de ultimos y vicevcersa.
       * * array_reverse(array $array, bool $preserve_keys = false): array
       */
      echo "<h5>array_reverse()</h5>";
      print_r(array_reverse($array1));
      
      /**
       * ? array_sum(): Devuelve la suma de todos los valores de un array numérico.
       * * array_sum(array $array): number
       */   
        
       echo "<h5>array_sum()</h5>";
       $arrN1 = array(1,2,3,4,5,6,7,8,9);
       print_r(array_sum($arrN1));
      
       /**
       * ? array_product(): Devuelve el producto de todos los valores de un array numérico.
       * *  array_product(array $array): number
       */   
       echo "<h5>array_product()</h5>";
       print_r(array_product($arrN1));

      /**
       * ? array_chunk(): Divide un array en fragmentos más pequeños.
       * * array_chunk(array $array, int $size, bool $preserve_keys = false): array
       */   
      echo "<h5>array_chunk()</h5>";
      print_r(array_chunk($arrN1, 2, true));
      
      /**
       * ? array_keys(): Devuelve todas las claves de un array.
       * * array_keys(array $array, mixed $filter_value, bool $strict = false): array
       */   
      echo "<h5>array_keys()</h5>";
      print_r(array_keys($personas));

      /**
       * ? array_values(): Devuelve todos los valores de un array.
       * * array_values(array $array): array
       * *
       */   
      echo "<h5>array_values()</h5>";
      print_r(array_values($personas));

      /**
       * ? array_walk(): Aplica una función de devolución de llamada a cada elemento de un array.
       * * array_walk(array|object &$array, callable $callback, mixed $arg = null): bool
       * *
       */   
      echo "<h5>array_walk()</h5>";
      
      function test_print($item2, $key)
      {
         echo("$key = $item2\n");
      }
      print_r(array_walk($edades, "test_print"));
      echo "</pre>";

      echo "<h3>------PUNTO 11 -----</h3>";
    /**
     * ? Isset() and Empty -> se usan para identificar si las variables o elementos tienen un valor definido o no.
     */
    //Un bucle(condicion)  ciclo(inicio condicion avance)  iteracion(nada {ForEach})
     /**
      * ? La funcion isset() -> Sirve para verificar si se la variable existe y tiene un valor definidd, arroja true or false asi no tenga ningun valor
      */

      $nombre = 2;
      var_dump(isset($nombre));
      
      echo "<br>";
      $miVariable; //False
      $miVariable = "hola"; //True
      if(isset($miVariable)){
          echo "La variable está definida y tiene un valor";
      }else{
          echo "La variable NO esta definida o no tiene valor";
      }
  
      /**
       * ? La funcion empty() -> Sirve para verificar si la variable esta vacia, de ser asi arroja True, de lo contrario seria false (Tambien valida si la variable existe)
       */
      echo "<br>";
      //$miVariable2;
      //$miVariable2 ="";
      $miVariable2 = "2";
      if(empty($miVariable2)){
          echo "La variable está vacia o no esta definida";
      }else{
          echo "La variable tiene un valor";
      }
  
      /**
       * *Ejemplos con arrays
       */
  
       $clientes = [];
       $clientes2 = array();
       $clientes3 = array("Pedro", "Juan", "Karen");
       $cliente = [
          "Nombre" => "Juan",
          "Saldo" => 200
       ];
  
       /**
        * todo Usando Empty podemos revisar si un arreglo se encuentra vacio
        */
        echo "<br>";
        var_dump(empty($clientes4));
        var_dump(empty($clientes));
        var_dump(empty($clientes2));
        var_dump(empty($clientes3));
  
       /**
        * todo Usando isset podemos revisar si un arreglo esta creado o una propiedad esta definida
        */
        echo "<br>";
        var_dump(isset($clientes4));
        var_dump(isset($clientes));
        var_dump(isset($clientes2));
        var_dump(isset($clientes3));
  
       /**
        * todo Con isset podemos revisar si una propiedad en un array asociativo existe
        */
       echo "<br>";
       var_dump(isset($cliente["Nombre"]));
       var_dump(isset($cliente["Edad"]));
  
       /**
        * ? Usando otras funciones que permiten trabajar con arreglos
        */
      /**
       * ? para ordenar tenemos:
       * * sort -> ordena de menor a mayor
       * * rsort -> ordena de mayor a menor
       * * asort -> ordena por valores (orden alfabetico)
       * * arsort -> ordena por valores (empezando por la z)
       * * ksort -> ordena por llaves (orden alfabetico)
       * * krsort -> ordena por llaves (empezando por la z)
       */
      //asort($cliente);
      //arsort($cliente);
      //ksort($cliente);
      //krsort($cliente);
  
       echo "<pre>";
       print_r($cliente);
       echo "</pre>";

   echo "<h3>------PUNTO 12 -----</h3>";
   echo "<h3>Estructuras de control</h3>";
   /**
    * ? Las estructuras de control se dividen en 2 grandes ramas
    * * Las estructuras condicionales [if, switch]
    * * Las estructuras repetitivas [while, do-while, For, forEach]
    */
    
    /**
     * ? Hablando de las estructuras condicionales: Son estructuras que permiten el control de flujo dependiendo si se cumple o no una condicion
    * * Es muy similar a la sintaxis usada en Js 
    */
    echo "<h5>Estructuras condicionales</h5>";
    $aut = true;
    $admin = false;
    echo "<h5>if</h5>";
    if($aut && $admin){
       echo "Usuario autenticado correctamente";
      } else {
         echo "Usuario no autenticado Inicia sesion";
      };
   echo "<br>";
   
   $cliente = [
      "nombre" => "Juan",
      "saldo" => 0,
      "informacion" => [
            "tipo" => "Regular"
      ]   
      ];

   echo "<br>";
   if(!empty($cliente)){
      echo "El arreglo de cliente no esta vacio";
      echo "<br>";
      if($cliente["saldo"]>0){
         echo "El cliente tiene saldo disponible";
      }else if($cliente["informacion"]["tipo"] === "Premium"){
         echo"El cliente es premium";
      }else{
         echo "No hay saldo y no es premium";
      }
   }
   echo "<br>";
   $tecn = "PHP";

   echo "<h5>Switch</h5>";
   switch ($tecn){
      case "PHP":
         echo "PHP, es un excelente lenguaje";
         break;
      case "Js":
         echo "Genial, el lenguaje de la web";
         break;
      case "HTML":
         echo "Aja si ";
         break;
      default:
         echo "Algun lenguaje diferente";
         break;
   }
   /**
   * ? Hablando de las estructuras repetitivas: Son estructuras que permiten repetir la ejecucion de un bloque de codigo varias veces 
   * * Es muy similar a la sintaxis usada en Js 
   */
   echo "<h5>Estructuras repetitivas</h5>";
   echo "<h5>While</h5>";
   
   /**
    * ? While -> permite la ejecucicion del codigo hasta que se cumpla una condicion
    * ? do-while -> Similar al bloque while pero garantiza que el bloque de cofigo se ejecuta almenos una vez
    * ? for -> permite iterar el bloque de codigo desde un valor hasta otro, variando el paso
    */
      $i = 0;
      while($i<5){
         echo $i . "<br>";
         $i++;
      }

      echo "<br><h5>do-while</h5>";
      $i = 0;
      do{
         echo $i . "<br>";
         $i++;
      }while($i<3);
      
      echo "<br><h5>for</h5>";
      for ($i = 1; $i <= 3; $i++) {
         echo $i . "<br>";
     }
     echo "<br><h5>forEach</h5>";

     $productos = [
      [
         "Nombre" => "Tablet",
         "Precio" => 200,
         "Disponible" => true
      ],
      [
         "Nombre" => "Tv 48in",
         "Precio" => 500,
         "Disponible" => true
      ],
      [
         "Nombre" => "Monitor curve 24",
         "Precio" => 300,
         "Disponible" => false
      ],
   ];
   foreach($productos as $producto){?>
      <ul>
         <li>Producto: <?php echo $producto["Nombre"];?></li>
         <li>Precio: <?php echo $producto["Precio"];?></li>
         <li><?php echo $producto["Disponible"] ? "Disponible" : "No Disponible"; ?></li>
   
   </ul><?php
      }
     
      echo "<hr>";
      echo "<h3>------PUNTO 13 -----</h3>";
   echo "<h3>Funciones definidas por el usuario</h3>";
   /**
    * ? Las funciones en PHP se puede crear siguiendo la siguiente estructura
    * * function name(parameter){ functionality } or function name(type $parameter):type{ functionality }.
    */

    /**
     * ? Esta es una funcion declarada 
     * *  create_function(string $args, string $code): string
     * todo Cuando se maneja el strict_types = 1 se debe definir que clase de parametro ingresa y cual regresa la funcion; se usa los ":" para definir que tipo de parametro retorna la funcion y "?" la que es opcional que aparezca.
     */ 

   function Saludar(string $name): ? string{
      if($name =="Julian"){
         return "Hola {$name} ¿Como estas?";
      }else{
         return null;
      }
   }
   echo Saludar("Julian");
   /**
    * * Ademas el uso de la destructuracion de los arrays es muy util cuando se trabajan con funciones.
    */
    function total_intervals($unit, DateInterval ...$intervals) {
        $time = 0;
        foreach ($intervals as $interval) {
            $time += $interval->$unit;
        }
        return $time;
    }
    
    $a = new DateInterval('P1D');
    $b = new DateInterval('P2D');
    echo total_intervals('d', $a, $b).' days';

   /**
    * ? Funciones anonimas
    * * Estas son funciones que no tienen un nombre especificado
    * ? Uso del use en este ejemplo (Porque tambien se puede usar en la implementacion de otros metodos dentro del mismo archivo)
    * * Sirve para hacer uso de la variable ya definida con anterioridad
    */

    $nombre = "Julian";
    echo "<br>";
    $fn = function() use(&$nombre):string{
       return $nombre;
    };
    echo $fn();

   /**
    * ? Usando metodos aplicables a funciones
    * * function_exist() -> De vuelve un valor boolean dependiendo si la funcion existe.
    * * func_get_arg() -> Puede obtener los argumentos que se le pasan a las funciones por posicion.
    * * func_get_args() -> trae todos los argumentos que se le pasan a la funcion.
    */

    function datos():void{
      var_dump(func_get_arg(0));
      var_dump(func_get_args());
    };

    echo "<br>";
    datos("Miguel", 23, true);

    function datos2():void{
      echo "<pre>";
      extract(...func_get_args());
      echo $nombre;
      echo $edad;
      echo $casa;
      
      var_dump(func_get_args());
      var_dump(...func_get_args());
      echo "</pre>";
   };
    echo "<br>";
    datos2(["nombre" => (string) "Miguel",
      "edad" => (int) 24,
      "casa" => (bool) true]);

   echo "<hr>";
   echo "<h3>------PUNTO 14 -----</h3>";
   echo "<h3>Uso del include, include_once require and require_once </h3>";   
   echo "Su estructura es de forma 'include('carpet/header.php')' -> este fragmento obtendra el codigo usado en el documento php.";

   /**
    * ? include, include_once require and require_once son funciones que se utilizan para incluir archivos externos en un programa
    * * include and include once incluyen un archivo la diferencia es que el Once asegura que el archivo se incluye una sola vez en el programa
    * * require y require_once es lo mismo sin embargo si el archivo no se encuentra el programa se detiene.
    * todo Su estructura es de forma "include('carpet/header.php')" -> este fragmento obtendra el codigo usado en el documento php.
*/
   
   
?>
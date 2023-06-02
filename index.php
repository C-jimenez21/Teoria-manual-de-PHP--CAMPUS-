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
<?php
   header("Content-type: application/json");
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
        print_r(array_key_exists("Pedro", $personas));

      /**
       * ? in_array(); compureba si el valor almacenado en un array exite
       * * in_array(mixed $needle, array $haystack, bool $strict = false): bool
       * ! retorna un boolean
       */
      echo "<h5>in_array()</h5>";
      echo(in_array("43",$edades));
      
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
      


?>
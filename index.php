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
    echo "<br><br>-------PUNTO 6 ------------<br>";
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


echo "<br>--------PUNTO 7------------";
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

echo "<br>--------PUNTO 8------------<br>";
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

    echo "<br>------PUNTO 9 -----<br>";
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

     
     
     
?>
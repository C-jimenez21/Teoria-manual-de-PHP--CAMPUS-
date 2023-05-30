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
    /**
     * ? echo(); es la funcion mas comun para imprimir, sirve para imprimir una o más cadenas de texto
     */
    echo "texto a imprimir";
    
    /**
     * ? printf(); es similar a echo() pero solo imprime una linea a la vez
     * * la adicion del caracter "%s" es para concatenar cadenas de texto
     */
    
     $texto  = "mundo";
     printf("Hola %s", $texto);

     /**
     * ? sprintf(); es similar a printf() pero no la devuelve de una vez sino que se guarda como resultado para agregar a una variable
     */
    
     $text = "Mundo";
     $mensaje = sprintf("Hola %s", $text);
     echo $mensaje; 

    /**
     * ? var_dump() nos sirve para saber que tipo de variable se esta trabajando, ademas  tambien devuelve la longitud 
     */
     var_dump($texto);


//--------PUNTO 7------------
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
$es_valido = true;
echo var_dump($es_valido);

/**
 * ? Para la declaracion de constantes se usa la siguiente sintaxis 
 */
//declaracion constante numerica
define("PI", 3.1416);
echo PI;
//declaracion constante de texto
define("SALUDO", "Hola campers!");
echo SALUDO;
//declaracion constante numerica
define("ES_VALIDO", true);
echo ES_VALIDO;






?>
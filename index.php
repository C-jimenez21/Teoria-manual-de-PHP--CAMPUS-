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

?>
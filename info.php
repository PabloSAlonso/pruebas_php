<?php
# variables locales y globales
$dato1 = 36; //int
$dato2 = 15.76; //float
$dato3 = true; //boolean
$dato4 = "clase"; //string
$dato5 = array("Diego", 25, "alumno", true); //array unidimensional de indice

print "El valor del dato 1 es: " . $dato1;  //concatenacion con . o , //
echo "<BR>";
echo "El valor del dato 2 es: $dato2";
echo "<br>";

echo "El valor del dato 4 es: {$dato4}";
echo "<br>";

echo var_dump($dato1); //nos dice que tipo de variable es y su valor
echo "<br>";

//constantes y constantes de clase
define("CONSTANTE1", "hola mundo");
define("CONSTANTE2", array("juan", "david", "ana"));

echo "El saludo tipico es: " . CONSTANTE1;
echo "<br>";
echo "El valor de la constante 2 es: " . CONSTANTE2[2];
echo "<br>";


//definimos una clase

class Marca
{
    const CONSTANTE3 = 5.3; //Constante de clase
}

echo Marca::CONSTANTE3; //uso del operador doble dos puntos

//creamos una funcion para ver el ambito de uso de las variables
//variables globales... lo que hemos visto hasta ahora
// variables de funcion

function mostrar()
{
    //acceso a variable global
    global $dato1;
    $dato6 = "Variable de funcion"; //propia de la funcion
    return "El contenido de la variable dato1 es:$dato1 y el valor de la variable dato6 es: {$dato6}" . $GLOBALS['dato2'];
}

echo mostrar();
echo "<br>";

//Arrays

//Array Unidimensional Asociativo
$array2 = array("nombre" => "David", "edad" => 37);
foreach ($array2 as $clave => $valor) {
    echo $clave . ":" . $valor;
    echo "<br>";
}

//Array bidimensional asociativos
"<br>";
$array3 = [
    "usuario1" => ["nombre" => "David", "edad" => 37],
    "usuario2" => ["nombre" => "Hugo", "edad" => 22],
    "usuario3" => ["nombre" => "Italiani", "edad" => 50]
];

foreach ($array3 as $elemento => $datos) {
    echo $elemento . ".";
    echo "<br>";
    foreach ($datos as $clave => $valor) {
        echo $clave . ":" . $valor;
        echo "<br>";
    }
    echo "<hr>";
}

// foreach ($array3 as $elemento => $datos) {
//         foreach ($datos as $key => $value) {
//             echo "{$elemento}:{$key}:{$value} <br>";
//         }
//     }
<?php

//1
function mostrarAleatorio()
{
    $num = rand(1, 100);
    echo $num;
}
echo "Funcion 1"."<br>";
mostrarAleatorio();
echo "<br>";

//2
function sumar($dato1, $dato2)
{
    return $dato1 + $dato2;
}
echo "Funcion 2"."<br>";
echo sumar(2,2);
echo "<br>";

//3
function area($radio)
{
    return pi() * pow($radio,2);
}
echo "Funcion 3"."<br>";
echo area(10);
echo "<br>";

//4
function mostrarAleatorio_2()
{
    $num = rand(1, 5);
    switch ($num) {
        case 1:
            echo "uno";
            break;
        case 2:
            echo "dos";
            break;
        case 3:
            echo "tres";
            break;
        case 4:
            echo "cuatro";
            break;
        case 5:
            echo "cinco";
            break;
        default:
            echo "Error desconocido";
            break;
    }
}
echo "Funcion 4"."<br>";
mostrarAleatorio_2();
echo "<br>";

//5
function multiplo($n1, $n2)
{
    $result = ($n1 % $n2 == 0 || $n2 % $n1 == 0);
    echo $result ?  "Son multiplos" : "No son multiplos";
}
echo "Funcion 5"."<br>";
multiplo(2,6);
echo "<br>";

//6
function entradaMuseo($edad)
{
    $precio = 0;
    switch ($edad) {
        case $edad < 8:
            $precio = 0;
            break;
        case $edad >= 9 && $edad <= 16:
            $precio = 5;
            break;
        case $edad >= 17 && $edad <= 25:
            $precio = 8;
            break;
        case $edad >= 26 && $edad <= 55:
            $precio = 10;
            break;
        case $edad >= 56 && $edad <= 65:
            $precio = 5;
            break;
        case $edad >= 66:
            $precio = 0;
            break;
        default:
            echo "Edad no valida";
            break;
    }
    echo "El precio para " . $edad . " años es de:" . $precio;
}
echo "Funcion 6"."<br>";
entradaMuseo(65);
echo "<br>";

//7
function mascotas($mascota)
{
    $precio = 0;
    switch ($mascota) {
        case "huron" || "gato":
            $precio = 1;
            break;
        case "perro":
            $precio = 1.5;
            break;
        case "loro":
            $precio = 2;
            break;
        default:
            $precio = null;
            echo "Mascota no permitida";
            break;
    }
    echo "El precio de la entrada para tu " . $mascota . " es de:" . $precio;
}
echo "Funcion 7"."<br>";
mascotas("huron");
echo "<br>";

//8
function premioBingo($edad)
{
    if ($edad < 75 || $edad > 80) {
        echo "Edad no valida";
    } else {
        echo "El premio es de:" . (0.05) * $edad;
    }
}
echo "Funcion 8"."<br>";
premioBingo(77);
echo "<br>";

//9
function parImpar($num)
{
    echo $num % 2 == 0 ? "Par" : "Impar";
}
echo "Funcion 9"."<br>";
parImpar(5);
echo "<br>";

//10
function fibonacci()
{
    $fin = 10000;
    $a = 1;
    $b = 2;
    $c = $a + $b;
    echo $a . "<br>" . $b . "<br>" . $c . "<br>";
    while ($c < $fin) {
        $a = $b;
        $b = $c;
        $c = $a + $b;
        if ($c < 10000) {
            echo $c . "<br>";
        }
    }
    // echo $c;
}
echo "Funcion 10"."<br>";
fibonacci();
echo "<br>";

//11
function pintarTabla($filas, $columnas) {
    echo "<table border='1' cellspacing='0' cellpadding='5' style='border-collapse: collapse; text-align: center;'>";

    // Fila de cabecera
    echo "<tr>";
    echo "<th></th>"; // Celda vacía en la esquina superior izquierda
    for ($j = 1; $j <= $columnas; $j++) {
        echo "<th>$j</th>"; // Cabecera superior en negrita
    }
    echo "</tr>";

    // Filas de la tabla
    for ($i = 1; $i <= $filas; $i++) {
        echo "<tr>";
        echo "<th>$i</th>"; // Cabecera lateral en negrita
        for ($j = 1; $j <= $columnas; $j++) {
            echo "<td>" . ($i * $j) . "</td>"; // Celdas normales
        }
        echo "</tr>";
    }

    echo "</table>";
}

// Ejemplo de uso
pintarTabla(10, 10);
echo "<br>";

//12
function factorial($num) {
    $i = 1;
    $resultado = 1;
    do {
        $resultado *= $i;
        $i++;
    } while ($i <= $num);
    return $resultado;
}
echo "Funcion 12"."<br>";
echo factorial(5);
echo "<br>";
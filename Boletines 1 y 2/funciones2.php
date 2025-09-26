<?php
function reemplazar()
{
    $cadena = "abordaje";
    echo str_replace("bord", "lmir", $cadena);
}

echo "Funcion 1" . "<br>";
reemplazar();
echo "<br>";

function contar($frase, $letra)
{
    $cont = 0;
    for ($i = 0; $i < strlen($frase); $i++) { //Falta el limite de frase
        if ($frase[$i] == $letra) {
            $cont++;
        }
    }
    return $cont;
}

echo "Funcion 2" . "<br>";
echo contar("holaa", 'a');
echo "<br>";

function validarContraseña($contraseña)
{
    echo "Contraseña:".$contraseña."\n -> ";
    $longitud = strlen($contraseña);

    // Validar longitud
    if ($longitud < 8 || $longitud > 12) {
        return "Contraseña no válida: debe tener entre 8 y 12 caracteres.";
    }

    // Validar que no empiece por número
    if (is_numeric($contraseña[0])) {
        return "Contraseña no válida: no debe empezar por un número.";
    }

    return "Contraseña válida.";
}

echo "Funcion 3" . "<br>";
echo validarContraseña("Holaa");
echo "<br>";

function pares()
{
    $pares = array();

    // Generamos los 10 primeros pares
    for ($i = 1; $i <= 10; $i++) {
        $pares[] = $i * 2;
    }

    // Imprimimos cada uno en una línea
    foreach ($pares as $num) {
        echo $num . "<br>";
    }
}

echo "Funcion 4" . "<br>";
pares();
echo "<br>";

function meses()
{
    $meses = array(
        "enero",
        "febrero",
        "marzo",
        "abril",
        "mayo",
        "junio",
        "julio",
        "agosto",
        "septiembre",
        "octubre",
        "noviemnbre",
        "diciembre"
    );

    $meses_m = array(); //TODO probar
    foreach ($meses as $mes) {
        if (strtolower($mes[0]) === 'm') {
            $meses_m[] = $mes;

        }
    }

    print_r($meses_m);
}

echo "Funcion 5" . "<br>";
meses();
echo "<br>";

function quitaAzul()
{
    $colores = array('rojo', 'verde', 'amarillo', 'azul', 'rosa');

    for ($i = count($colores) - 1; $i >= 0; $i--) {
        if ($colores[$i] === 'azul') {
            unset($colores[$i]);
        }
    }
    $array_nuevo = array_values($colores);
    print_r($array_nuevo);
}


echo "Funcion 6" . "<br>";
quitaAzul();
echo "<br>";

function zoo()
{
    $zoo = array(
        array("Perro", "León", "Conejo"),
        array("Gato", "Pato", "Canguro")
    );
    echo "Elemento [1][1]: " . $zoo[1][1]; // Devuelve "Pato"
}

echo "Funcion 7" . "<br>";
zoo();
echo "<br>";

function tablaAleatorios()
{
    $nombres = array("Carlos Álvarez", "Laura López", "Rosa Márquez", "Jorge Tiras");
    $materias = array("Lengua", "Historia", "Inglés", "Matemáticas");

    // Comenzamos la tabla
    echo "<table border='1' cellspacing='0' cellpadding='5' style='border-collapse: collapse; text-align: center;'>";

    // Cabecera
    echo "<tr>";
    echo "<th>Nombre</th>";
    foreach ($materias as $materia) {
        echo "<th>$materia</th>";
    }
    echo "</tr>";

    // Filas con notas
    foreach ($nombres as $nombre) {
        echo "<tr>";
        echo "<td><b>$nombre</b></td>"; // Nombre en negrita
        foreach ($materias as $materia) {
            $nota = rand(0, 10); // nota aleatoria entre 0 y 10
            echo "<td>$nota</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}

echo "Funcion 8" . "<br>";
tablaAleatorios();
echo "<br>";

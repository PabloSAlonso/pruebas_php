<?php

//array de datos

$libros = [
    ["titulo" => "Cien años de soledad", "autor" => "Garcia Marquez", "Categoria" => 1],
    ["titulo" => "Doscientos años de soledad", "autor" => "Garcia Marquez", "Categoria" => 2],
    ["titulo" => "Trescientos años de soledad", "autor" => "Garcia Marquez", "Categoria" => 3],
    ["titulo" => "Cuatrocientos años de soledad", "autor" => "Garcia Marquez", "Categoria" => 0],

];
//funcion intermedia
function info_libro($libro)
{
    return [
        "titulo_completo" => strtoupper($libro['titulo']),
        "autor" => $libro['autor'],
        "longitud_titulo" => strlen($libro['titulo'])
    ];
}

echo "<h1><em>Libros de mi biblioteca</em></h1>";
echo "<br>";

//codigo para recorrer mis libros

$contador = 0;

while ($contador < count($libros)) {
    $info = info_libro($libros[$contador]);
    echo "Titulo : {$info['titulo_completo']} | Autor : {$info['autor']} | Longitud del libro {$info['longitud_titulo']}";
    echo "<br>";
    $contador++;
}

echo "<br>";

function filtroCategoria($tipo)
{
    global $libros;

    switch ($tipo) {
        case 0:
            $genero = "Narrativa";
            break;
        case 1:
            $genero = "Poesia";
            break;
        case 2:
            $genero = "Novela Ligera";
            break;
        case 3:
            $genero = "Historico";
            break;

        default:
        $genero = "Desconocido";
            break;
    }

    echo "Los libros con el genero $genero encontrados son:";
    echo "<br>";

    $resultado = [];

    foreach($libros as $indice => $libro){
        foreach($libro as $clavecol=>$valorcol){
            if($clavecol == "categoria" && $valorcol == $tipo){
                $resultado[] = $libro['titulo'];
            }
        }
    }
    return $resultado;
}

echo "<h3><em>Filtro por categoria</em></h3>";
echo "<br>";

$arrayfinal = filtroCategoria(0);
print_r($arrayfinal);

?>
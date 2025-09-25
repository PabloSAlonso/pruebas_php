<?php
function reemplazar(){
    $cadena = "abordaje";
    echo str_replace("bord","lmir",$cadena);
}

echo "Funcion 1"."<br>";
reemplazar();
echo "<br>";

function contar($frase, $letra){
    $cont = 0;
    for ($i = 0; $i < $frase; $i++){ //Falta el limite de frase
        if ($frase[$i] == $letra){
            $cont++;
        }
    }
}

echo "Funcion 2"."<br>";
contar("holaa", 'a');
echo "<br>";



echo "Funcion 3"."<br>";
reemplazar();
echo "<br>";



echo "Funcion 4"."<br>";
reemplazar();
echo "<br>";



echo "Funcion 5"."<br>";
reemplazar();
echo "<br>";



echo "Funcion 6"."<br>";
reemplazar();
echo "<br>";



echo "Funcion 7"."<br>";
reemplazar();
echo "<br>";



echo "Funcion 8"."<br>";
reemplazar();
echo "<br>";




?>
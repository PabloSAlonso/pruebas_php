<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'libreria.php' ?>
    <title>Asignaturas 2º DAM</title>
</head>

<body>
    <?php
    $asignaturas = ["SGE", "Acceso a datos", "Afondamento"];
    echo "<ol>";
    for ($i = 0; $i < count($asignaturas); $i++) {
        echo "<li>";
        echo $asignaturas[$i];
        echo "</li>";
    }
    echo "</ol>";

    echo sumar(6, 8);
    ?>
</body>

</html>
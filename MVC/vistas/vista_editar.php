<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar datos usuario</title>
</head>
<body>
    <h1>Edicion de datos</h1>

    <form action="../controladores/controlador_actualizar.php" method="post">
        <input type="text" name="nombre" id="nombre" value="<?php echo $dato[0]['nombre'] ?>">
        <br>
        <input type="text" name="apellidos" id="apellidos" value="<?php echo $dato[0]['apellidos'] ?>">
        <br>
        <input type="tel" name="telefono" id="telefono" value="<?php echo $dato[0]['telefono'] ?>">
        <br>
        <input type="text" name="departamento" id="departamento" value="<?php echo $dato[0]['departamento'] ?>">
        <br>
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
        <br>
        <input type="file" name="imagen" id="imagen">
        <br>
        <img src="../<?php echo "$result[$i]['imagen']"?>" alt="foto" style="width: 90px;height:auto;">
        <br>
        <input type="submit" name="actualizar" id="actualizar" value="Actualizar">
        <br>
    </form> 
</body>
</html>
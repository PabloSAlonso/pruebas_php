<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h3>Rellena el formulario del coste total de envio</h3>
    <form action="ejercicio1_datos.php" method="post">
        <label for="precio">Precio:</label>
        <input type="text" name="precio" maxlength="5">
        <br>
        <label for="cantidad">Cantidad:</label>
        <input type="text" name="cantidad" maxlength="5">
        <br>
        <label for="descuento">Descuento:</label>
        <input type="text" name="descuento" maxlength="5">
        <br>
        <label for="iva">IVA:</label>
        <input type="text" name="iva" maxlength="3">
        <br>
        <select name="envio" id="seleccionar" >
            <option selected value="recoger">Recoger en tienda</option>
            <option value="correo">Correo</option>
            <option value="seur">Seur</option>
        </select>

    </form>
    
</body>
</html>
<!--action=<?php
echo $_SERVER['PHP_SELF']?>-->
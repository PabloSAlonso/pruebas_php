<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
    <style>
        *{
            margin: 7.5px;
        }
        #camposTexto{
            margin-top: 30px;
        } 
        #info {
            margin-top: 30px;
        }
        #checks{
            margin-top: 30px;
        }

    </style>
</head>

<body>
    <h1>Formulario de suscripcion a nuestras publicaciones</h1>
    <form action="Datos.php" method="post">
        <div id="camposTexto">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
            <br>
            <label for="apellido1">Primer Apellido:</label>
            <input type="text" name="apellido1">
            <br>
            <label for="apellido2">Segundo Apellido:</label>
            <input type="text" name="apellido2">
            <br>
            <label for="correo">Correo Electrónico:</label>
            <input type="text" name="correo">
        </div>
        <div id="info">
            <input type="radio" name="interes" checked>
            <label for="interes">Si, me interesa</label>
            <br>
            <input type="radio" name="interes">
            <label for="interes">No, gracias</label>
        </div>
        <div id="checks">
            <input type="checkbox" name="national" id="revista" checked>
            <label for="national">National Geographic</label>
            <br>
            <input type="checkbox" name="electronic" id="revista">
            <label for="electronic">Electronic Letters</label>
            <br>
            <input type="checkbox" name="conocer" id="revista">
            <label for="conocer">Conocer</label>
            <br>
            <input type="checkbox" name="science" id="revista">
            <label for="science">Science</label>
            <br>
            <input type="checkbox" name="desarrollo" id="revista">
            <label for="desarrollo">Desarrollo Web</label>

        </div>
        <div id="suscripciones">
            <label for="suscripcion">Formas de suscripcion:</label>
            <select name="suscripcion">
                <option value="semanal" selected>Semanal</option>
                <option value="mensual">Mensual</option>
                <option value="anual">Anual</option>
            </select>
        </div>

    </form>
</body>

</html>
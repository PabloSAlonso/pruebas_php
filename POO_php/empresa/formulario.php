<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario inscripcion empleado</title>
    <style>
        .formulario {
            padding: 10px;
            font-size: larger;
            font-style: italic;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>
    <div id=formulario>
        <form action="gestion_formulario.php" method="post" class="formulario">
            <div id="campoNombre" class="formulario">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre">
            </div>
            <div id="campoApellidos" class="formulario">
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos">
            </div>
            <div id="campoTelefono" class="formulario">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono">
            </div>
            <div id="campoDepartamento" class="formulario">
                <label for="departamento">Departamento:</label>
                <input type="text" name="departamento">
            </div>
        </form>
    </div>
</body>

</html>
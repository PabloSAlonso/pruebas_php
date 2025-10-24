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
    <h1>Formulario de inscripcion</h1>
    <div id=formulario>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="formulario">
            <table>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td>Apellidos:</td>
                    <td><input type="text" name="apellidos"></td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td><input type="tel" name="telefono"></td>
                </tr>
                <tr>
                    <td>Departamento:</td>
                    <td><input type="text" name="departamento"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Crear empleado"></td>
                </tr>
            </table>   
        </form>
    </div>
    <a href="controladores/controlador.php">Listar Empleados</a>
</body>

</html>
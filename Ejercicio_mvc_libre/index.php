<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form team Lakers</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Montserrat", sans-serif;
            background: #0d0d0d;
            color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-top: 25px;
            color: #FDB927;
            font-size: 2.2rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 3px 3px 0 #552583;
        }

        .form-container {
            width: 90%;
            max-width: 500px;
            background: #1a1a1a;
            margin: 30px auto;
            padding: 25px;
            border-radius: 12px;
            border: 2px solid #552583;
            box-shadow: 0 0 15px rgba(85, 37, 131, 0.6);
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #FDB927;
            letter-spacing: 1px;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            background: #111;
            border: 2px solid #552583;
            border-radius: 6px;
            color: #fff;
            transition: 0.25s;
        }

        input:focus {
            outline: none;
            border-color: #FDB927;
            box-shadow: 0 0 8px rgba(253, 185, 39, 0.6);
        }

        input[type="submit"],
        .btn_return {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            background: #552583;
            border: 2px solid #FDB927;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.25s ease;
            letter-spacing: 1px;
            display: block;
            text-align: center;
            text-decoration: none;
        }

        input[type="submit"]:hover,
        .btn_return:hover {
            background: #FDB927;
            color: #000;
            border-color: #552583;
            box-shadow: 0 0 10px rgba(253, 185, 39, 0.7);
        }

        /* Tabla centrada */
        #tabla_principal {
            width: 100%;
            max-width: 500px;
            margin: auto;
            border-collapse: collapse;
        }

        #tabla_principal tr {
            text-align: center;
            width: 100%;
            padding: 6px;
        }

        #tabla_principal td {
            text-align: center;
            width: 50%;
            padding: 6px;
        }

    </style>
</head>

<body>

    <h1>Add player to the team</h1>

    <div class="form-container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <table id="tabla_principal">
                <tr>
                    <td><label>Name:</label></td>
                    <td><input type="text" name="player_name"></td>
                </tr>
                <tr>
                    <td><label>Age:</label></td>
                    <td><input type="number" name="player_age"></td>
                </tr>
                <tr>
                    <td><label>Nationality:</label></td>
                    <td><input type="text" name="player_nationality"></td>
                </tr>
                <tr>
                    <td><label>Experience Years:</label></td>
                    <td><input type="number" name="player_experience"></td>
                </tr>
                <tr>
                    <td><label>Nº of teams he played for:</label></td>
                    <td><input type="number" name="player_teams"></td>
                </tr>
                <tr>
                    <td><label>Nº of all star game appearances:</label></td>
                    <td><input type="number" name="player_allstar"></td>
                </tr>
                <tr>
                    <td><label>Nº of MVP awards:</label></td>
                    <td><input type="number" name="player_mvp"></td>
                </tr>
                <tr>
                    <td><label>Image of the player:</label></td>
                    <td><input type="file" name="player_image"></td> 
                </tr>
                <!-- Botón de submit -->
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Add New Player">
                    </td>
                </tr>
                <!-- Botón de enlace a la lista -->
                <tr>
                    <td colspan="2">
                        <a class="btn_return" href="vistas/vista.php">Go to Players List</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>
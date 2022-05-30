<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="favicon.ico">
    <title>Forza Motorsport - Inicio de Sesión</title>
</head>
<body>
    <header>
        <nav id="menu">
            <ul>
                <li><a href="index.php">Menú Principal</a></li><li><a href="registro.php">Registro de Usuarios</a></li><li><a href="inicio.php">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="titulo">
            <h1>Inicio de Sesión</h1>
            <h2>¿Ya tienes cuenta? Pues no esperes más. ¡Inicia sesión ya y visualiza tu galería de fotos!</h2>
        </div>
        <div>
            <form method="get" id="formulario" action="login.php">
                <fieldset>
                    <legend>Inicio de Sesión</legend>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <label for="usuario">Usuario: </label>
                                </td>
                                <td>
                                    <input type="text" name="usuario" id="usuario" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="contra">Contraseña: </label>
                                </td>
                                <td>
                                    <input type="password" name="contra" id="contra" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="reset" value="Borrar datos">
                    <input type="submit" name="envio" value="Enviar datos">
                </fieldset>
            </form>
        </div>
    </main>
    <footer>
        <p>Copyright &copy 2022 - Jorge Ramos y Alejandro Rolo</p>
    </footer>
</body>
</html>
<?php
error_reporting(0);
?>


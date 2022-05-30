<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="favicon.ico">
    <title>Forza Motorsport - Registro de Usuarios</title>
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
            <h1>Registro de Usuarios</h1>
            <h2>Para poder acceder a su gran galería de imágenes de coches, deberá crearse una cuenta en nuestra maravillosa página web. Para hacerlo, simplemente rellene el siguiente formulario:</h2>
        </div>
        <div>
            <form method="get" id="formulario">
                <fieldset>
                    <legend>Registro</legend>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <label for="nombre">Nombre: </label>
                                </td>
                                <td>
                                    <input type="text" name="nombre" id="nombre" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="apellidos">Apellidos: </label>
                                </td>
                                <td>
                                    <input type="text" name="apellidos" id="apellidos" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="correo">Correo electrónico: </label>
                                </td>
                                <td>
                                    <input type="email" name="correo" id="correo" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="usuario">Nombre de usuario: </label>
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
                    <br>
                    <p>*Todos los campos con borde rojo son obligatorios</p>
                    <br>
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
session_destroy();
$servidor="mysqlmiapp1.mysql.database.azure.com:3306";
$usuario="jomi";
$contra="JorgeMD0211";
$base="coches";
    $sql= "INSERT INTO usuarios (Nombre, Apellidos, Correo, Usuario, Contra) VALUES (:Nombre, :Apellidos, :Correo, :Usuario, :Contra)";

    try {
        $conn=new PDO("mysql:host=$servidor;dbname=$base", $usuario, $contra);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $stmt = $conn->prepare($sql);
    
        $stmt->bindParam(':Nombre', $Nombre);
        $stmt->bindParam(':Apellidos', $Apellidos);
        $stmt->bindParam(':Correo', $Correo);
        $stmt->bindParam(':Usuario', $Usuario);
        $stmt->bindParam(':Contra', $Contra);
    
        $Nombre = $_GET["nombre"];
        $Apellidos = $_GET["apellidos"];
        $Correo = $_GET["correo"];
        $Usuario = $_GET["usuario"];
        $Contra = $_GET["contra"];
    
        $stmt->execute();
    }
    catch (PDOEXCEPTION $e) {
        if ($e -> errorInfo[1] == 1062) {
            echo '<script type="text/javascript">
            alert("El usuario ya existe. Intente con otro.");
            </script>';
        }
        
    }
?>

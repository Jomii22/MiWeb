<?php
        session_start();
    ?>
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
    
    <header ("Content-Type: text/html;charset=utf-8");>
        <nav id="menu">
            <ul>
                <li><a href="index.php">Menú Principal</a></li><li><a href="registro.php">Registro de Usuarios</a></li><li><a href="inicio.php">Iniciar Sesión</a></li>
            </ul>
            <br>
            <ul id="menu">
                <li><a href="principal.php">Página Personal</a></li><li><a href="nuevo.php">Registro de Coches</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="titulo">
            <h1>Registro de Coches</h1>
            <h2>Desde aquí podras seleccionar el coche que deseas para poder verlo en nuestra página personal. ¡Simplemente seleccionalo en nuestro listado!</h2>
        </div>
        <div>
            <form method="get" id="formulario">
                <fieldset>
                    <legend>Registro de Coches</legend>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <label>Modelo: </label>
                                </td>
                                <td>
                                    <select name="coches" id="coches">
                                            <optgroup label="Ferrari">
                                                <option value="1">SP48</option>
                                                <option value="2">LaFerrari</option>
                                                <option value="3">F8 Spider</option>
                                            </optgroup>
                                            <optgroup label="Mercedes">
                                                <option value="4">Clase A 2022</option>
                                                <option value="5">GLE Coupé</option>
                                                <option value="6">Vision AVTR</option>
                                            </optgroup>
                                            <optgroup label="MCLaren">
                                                <option value="7">540C</option>
                                                <option value="8">600LT</option>
                                                <option value="9">720S</option>
                                            </optgroup>
                                            <optgroup label="Alfa Romeo">
                                                <option value="10">Giulia GTA</option>
                                                <option value="11">4C</option>
                                                <option value="12">Tonale 2022</option>
                                            </optgroup>
                                            <optgroup label="Renault">
                                                <option value="13">Arkana 2022</option>
                                                <option value="14">Captur 2022</option>
                                                <option value="15">Mégane E-TECH 2022</option>
                                            </optgroup>
                                            <optgroup label="Aston Martin">
                                                <option value="16">Victor</option>
                                                <option value="17">Valhalla</option>
                                                <option value="18">DB11</option>
                                            </optgroup>
                                    </select>
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
$servidor="mysqlmiapp1.mysql.database.azure.com:3306";
$usuario="jomi";
$contra="JorgeMD0211";
$base="coches";
$usuarioS= $_SESSION["usuario"];
$contraS = $_SESSION["contra"];
$sql= "INSERT INTO inventario (ID_Coche, ID_Usuario) VALUES (:coche, (SELECT ID FROM usuarios WHERE Nombre LIKE '$usuarioS'))";
try {
    $conn=new PDO("mysql:host=$servidor;dbname=$base", $usuario, $contra);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':coche', $coche);

    $coche = $_GET["coches"];

    $stmt->execute();
}

catch (PDOEXCEPTION $e) {
    echo "Conexión fallida: " .$e ->getMessage();
}
?>

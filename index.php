<?php
session_start();
?>
<!DOCTYPE html>
<?php

error_reporting(0);
    $servidor="mysqlmiapp1.mysql.database.azure.com:3306";
    $usuario="jomi";
    $contra="JorgeMD0211";
    $base="coches";
    $sql1= "SELECT Modelo, Foto, Descripcion FROM coches WHERE Marca LIKE 'Ferrari'";
    $sql2= "SELECT Modelo, Foto, Descripcion FROM coches WHERE Marca LIKE 'Mercedes'";
    $sql3= "SELECT Modelo, Foto, Descripcion FROM coches WHERE Marca LIKE 'McLaren'";
    $sql4= "SELECT Modelo, Foto, Descripcion FROM coches WHERE Marca LIKE 'Alfa Romeo'";
    $sql5= "SELECT Modelo, Foto, Descripcion FROM coches WHERE Marca LIKE 'Renault'";
    $sql6= "SELECT Modelo, Foto, Descripcion FROM coches WHERE Marca LIKE 'Aston Martin'";
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="favicon.ico">
    <title>Forza Motorsport</title>
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
            <h1>¡Bienvenido a Forza Motor!</h1>
            <h2>El sitio web #2 de coches del planeta Tierra (y el #4 de la Luna)</h2>
        </div>
        <div id="posttitulo">
            <p>El mejor sitio para ver los coches que más te gustan de tus marcas favoritas y poder ver una imágen de ellos siempre que quieras<br>
            ¡Echa un vistazo a continuación a nuestro catálogo!</p>
        </div>
        <br>
        <div id="catalogo">
            <div id="ferrari">
                <h1>FERRARI<img src="ferrari.png" height="32" width="32"></h1>
                <span>
                    <?php
                    try {
                    $conn=new PDO("mysql:host=$servidor;dbname=$base", $usuario, $contra);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    foreach ($conn->query($sql1) as $row ) {
                    echo "<div>";
                        echo "<h1>".$row["Modelo"]."</h1>";
                        echo "<img src=".$row["Foto"]." heigth=320 width=240</img>";
                        echo "<p>".$row["Descripcion"]."</p>";
                    echo "</div>";
                    }
                    }
                    catch (PDOEXCEPTION $e) {
                        echo "Conexión fallida: " .$e ->getMessage();
                    }
                    ?>
                </span>
            </div>
            <br>
            <div id="mercedes">
                <h1>MERCEDES<img src="mercedes.png" height="32" width="32"></h1>
                <span>
                    <?php
                    try {
                    $conn=new PDO("mysql:host=$servidor;dbname=$base", $usuario, $contra);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    foreach ($conn->query($sql2) as $row ) {
                    echo "<div>";
                        echo "<h1>".$row["Modelo"]."</h1>";
                        echo "<img src=".$row["Foto"]." heigth=320 width=240</img>";
                        echo "<p>".$row["Descripcion"]."</p>";
                    echo "</div>";
                    }
                    }
                    catch (PDOEXCEPTION $e) {
                        echo "Conexión fallida: " .$e ->getMessage();
                    }
                    ?>
                </span>
            </div>
            <br>
            <div id="mc">
                <h1>MCLAREN<img src="mc.png" height="32" width="32"></h1>
                <span>
                    <?php
                    try {
                    $conn=new PDO("mysql:host=$servidor;dbname=$base", $usuario, $contra);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    foreach ($conn->query($sql3) as $row ) {
                    echo "<div>";
                        echo "<h1>".$row["Modelo"]."</h1>";
                        echo "<img src=".$row["Foto"]." heigth=320 width=240</img>";
                        echo "<p>".$row["Descripcion"]."</p>";
                    echo "</div>";
                    }
                    }
                    catch (PDOEXCEPTION $e) {
                        echo "Conexión fallida: " .$e ->getMessage();
                    }
                    ?>
                </span>
            </div>
            </br>
            <div id="alfa">
                <h1>ALFA ROMEO<img src="alfa.png" height="32" width="32"></h1>
                <span>
                    <?php
                    try {
                    $conn=new PDO("mysql:host=$servidor;dbname=$base", $usuario, $contra);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    foreach ($conn->query($sql4) as $row ) {
                    echo "<div>";
                        echo "<h1>".$row["Modelo"]."</h1>";
                        echo "<img src=".$row["Foto"]." heigth=320 width=240</img>";
                        echo "<p>".$row["Descripcion"]."</p>";
                    echo "</div>";
                    }
                    }
                    catch (PDOEXCEPTION $e) {
                        echo "Conexión fallida: " .$e ->getMessage();
                    }
                    ?>
                </span>
            </div>
            </br>
            <div id="renault">
                <h1>RENAULT<img src="renault.png" height="32" width="32"></h1>
                <span>
                    <?php
                    try {
                    $conn=new PDO("mysql:host=$servidor;dbname=$base", $usuario, $contra);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    foreach ($conn->query($sql5) as $row ) {
                    echo "<div>";
                        echo "<h1>".$row["Modelo"]."</h1>";
                        echo "<img src=".$row["Foto"]." heigth=320 width=240</img>";
                        echo "<p>".$row["Descripcion"]."</p>";
                    echo "</div>";
                    }
                    }
                    catch (PDOEXCEPTION $e) {
                        echo "Conexión fallida: " .$e ->getMessage();
                    }
                    ?>
                </span>
            </div>
            </br>
            <div id="am">
                <h1>ASTON MARTIN<img src="am.png" height="32" width="32"></h1>
                <span>
                    <?php
                    try {
                    $conn=new PDO("mysql:host=$servidor;dbname=$base", $usuario, $contra);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    foreach ($conn->query($sql6) as $row ) {
                    echo "<div>";
                        echo "<h1>".$row["Modelo"]."</h1>";
                        echo "<img src=".$row["Foto"]." heigth=320 width=240</img>";
                        echo "<p>".$row["Descripcion"]."</p>";
                    echo "</div>";
                    }
                    }
                    catch (PDOEXCEPTION $e) {
                        echo "Conexión fallida: " .$e ->getMessage();
                    }
                    ?>
                </span>
            </div>
        </div>
    </main>
    <footer>
        <p>Copyright &copy 2022 - Jorge Ramos y Alejandro Rolo</p>
    </footer>
</body>
</html>


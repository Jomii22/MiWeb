<?php
    session_start();
?>
<!DOCTYPE html>
<?php
    $usuarioS = $_SESSION["usuario"];
    error_reporting(0);
    $servidor="mysqlmiapp1.mysql.database.azure.com:3306";
    $usuario="jomi";
    $contra="JorgeMD0211";
    $base="coches";
    $sql1= "SELECT ID, Nombre, Apellidos FROM usuarios WHERE Usuario LIKE '$usuarioS'";
    $sql2= "SELECT DISTINCT c.Marca, c.Modelo, c.Foto, i.ID_Coche, i.ID_Usuario FROM coches c, inventario i, usuarios u WHERE i.ID_Usuario = (SELECT ID FROM usuarios WHERE Nombre LIKE '$usuarioS') and c.ID=i.ID_Coche";
    try {
        $conn=new PDO("mysql:host=$servidor;dbname=$base", $usuario, $contra);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $stmt = $conn->prepare($sql1);
    
        $stmt->execute();
        }
        catch (PDOEXCEPTION $e) {
            echo "Conexión fallida: " .$e ->getMessage();
        }
?>
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
        <br>
        <nav id="menu">
            <ul>
                <li><a href="principal.php">Página Personal</a></li><li><a href="nuevo.php">Registro de Coches</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="titulo">
            <h1><?php
            foreach ($conn->query($sql1) as $row ){
            echo "Hola ".$row["Nombre"]." ".$row["Apellidos"]." (".$_SESSION["usuario"].")";
        } 
        ?></h1>
            <h2>Está usted en su página principal. A continuación podrá visualizar los coches que tiene a su disposición:</h2>
        </div>
        <div id="muestra">
            <?php
            $stmt2 = $conn->prepare($sql2);
    
            $stmt2->execute();
    
            if ($stmt2->rowCount() == 0 ) {
                echo "<br>";
                echo "<h3>Actualmente no dispones de ningún coche registrado. Para esto, puedes hacerlo en la sección de registro de coches</h3>";
                echo "<br>";
            }else  {
                echo "<table id=tablamuestra>";
                echo "<thead>";
                echo "<tr>";
                echo "<td>Marca</td><td>Modelo</td><td>Foto</td>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                foreach ($conn->query($sql2) as $row ){
                    echo "<tr>";
                        echo "<td>".$row["Marca"]."</td><td>".$row["Modelo"]."</td><td><img src=".$row["Foto"]." heigth=320 width=240</img></td>";
                    echo "</tr>";
                } 
                echo "</tbody>";
                echo "</table>";
            }
            ?>
        </div>
    </main>
    <footer>
        <p>Copyright &copy 2022 - Jorge Ramos y Alejandro Rolo</p>
    </footer>
</body>
</html>

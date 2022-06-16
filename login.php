<?php
    session_start();
    $usuarioS = $_GET["usuario"];
    $_SESSION["usuario"] = $usuarioS;
    $contraS = $_GET["contra"];
    $_SESSION["contra"] = $contraS;
    error_reporting(0);
    $servidor="mysqlapp1.mysql.database.azure.com:3306";
    $usuario="tfg";
    $contra="Alumno123";
    $base="coches";
    $sql1= "SELECT ID, Nombre, Apellidos FROM usuarios WHERE Usuario LIKE '$usuarioS' AND Contra LIKE '$contraS'";
    try {
        $conn=new PDO("mysql:host=$servidor;dbname=$base", $usuario, $contra);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $stmt = $conn->prepare($sql1);
    
        $stmt->execute();

        if ($stmt->rowCount() == 0 ) {
            echo '<script type="text/javascript">
            alert("Usuario y contraseña introducidos no válidos. Inténtelo otra vez.");
            window.location.href="inicio.php";
            </script>';
        }else {
            echo '<script type="text/javascript">
            window.location.href="principal.php";
            </script>';
        }
        }
        catch (PDOEXCEPTION $e) {
            echo "Conexión fallida: " .$e ->getMessage();
        }
?>

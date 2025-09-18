<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.html"); // redirecciona a index
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio_dashboard</title>
</head>
<body>

<h1> hola <?php echo $_SESSION['user'] ?> </h1>
    <br>
    <a href="cerrar-sesion.php"  class="btn">Cerrar sesión</a>
</body>
</html>
<?php
$hostDb = "localhost";
$userDb = "root";
$pwdDb = "";
$nameDB = "grupo_1_avanzada";

$conexDb = new mysqli(
    $hostDb, 
    $userDb, 
    $pwdDb, 
    $nameDB);

if ($conexDb->connect_error) {
    die("DB Error: ". $conexDb->connect_error);
}

$sql = "select * from contactos";           //asi se ejecuta un sql con la base de datos
$result = $conexDb->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CONTACTOS</title>
</head>
<body>
    <h1>Lista de Contactos</h1>
    <br>
    <a href="contacto-form">crear </a>
    <br>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
           <?php
             if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>'. $row['nombre'] . '</td>';
                    echo '<td>'. $row['telefono'] . '</td>';
                    echo '<td>'. $row['email'] . '</td>';
                    echo '<td>';
                    echo   '<a href="contacto-form.php?cod=$'.$row[id].'">modififcar</a>';     
                    echo '</td>';
                    echo '</tr>';
                 
                }
             } else {
                echo '<tr>';
                echo '<td colspan="3">No hay contactos</td>';
                echo '</tr>';
             }
            ?>
        </tbody>
    </table>
</body>
</html>

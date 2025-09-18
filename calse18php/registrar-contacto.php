<?php
$hostDb = "localhost";
$userDb = "root";
$pwdDb = "";
$nameDB = "grupo_1_avanzada";

$nombre= $_POST["nombre"];
$telefono=  $_POST["telefono"];
$emai=  $_POST["email "];

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

$sql = "insert into contactos(nombre,telefono,email)values";
$sql.="('$nombre','$telefono','$email')";

$result = $conexDb->query($sql);

if($result){
    header("Location: index.php");//manda una peticion al servidor para que haga las acciones que queramos
}else{
    echo "error al guardar los datos";
}
?>
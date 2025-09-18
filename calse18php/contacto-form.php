<?php

$cond = empty($_GET["cod"]) ?"": $_GET["cod"];
$titulo = empty($cod)?"crear contacto": "modificar contacto";
$action = empty($cod) ?"registrar-contacto.php": "modficar-contacto";

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>crear formulario</title>
</head>
<body>
    
<h1><?php echo $titulo; ?></h1>
<br>
<a href="index.php">Volver</a>
<form action="<?php echo $action; ?>" method="post">


<?php 
if(!empty($cod)){
  echo '<input type="hidden" name="id" value="'. $cod .''. $titulo .''. $titulo .
}


?>
    <div>
        <label for="name">nombre:</label>
        <input type="text" name="nombre" id="name">
    </div>
      <div>
        <label for="tel">telefono:</label>
        <input type="text" name="telefono" id="tel">
    </div>
      <div>
        <label for="email">nombre:</label>
        <input type="email" name="correo" id="email">
    </div>

      <div>
        <button type="submit">Guardar</button>
    </div>
</form>
</body>
</html>
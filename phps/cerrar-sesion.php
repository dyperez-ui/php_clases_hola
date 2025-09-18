<?php
session_start();

session_unset();//cierra

session_destroy();//elimina variables totea todo
header('Location: index.html');//redirecciona a index
?>

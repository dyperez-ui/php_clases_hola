<?php
// depende del meodo se usa el post o get
//$user = $_POST ["user"];// claveve que se debe usar[clave]
//$pwd = $_POST ["pwd"];
// si es difertente de nulo
$user = isset($_POST["user"]) ? $_POST["user"] :null;
$pwd = isset($_POST["pwd"]) ? $_POST["pwd"]:null;


if (empty($user) || empty($pwd)) {
echo "ingrese el usuario y contraseña";
}else if ($user== 'pepe' && $pwd == '12345') {
    session_start();//variable sde sesion perimite activar la sesion desde php
    $_SESSION['user'] = $user;
    echo 'Bienvenido sesion iniciada';
    echo '<br> <a  href = "dashboard.php"> ir a dashboard</a>';
}else {
    echo 'Sesion no iniciada matese';
}

?>
<?php
# Entrada 
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

# Proceso
//session_start();
setcookie("nombre",$nombre,time()+3600*5);
setcookie("correo",$correo,time()+3600*5);
setcookie("asunto",$asunto,time()+3600*5);
setcookie("mensaje",$mensaje,time()+3600*5);

//$_COOKIE["nombre"]=$nombre;
//$_COOKIE["correo"]=$correo;
//$_COOKIE["asunto"]=$asunto;
//$_COOKIE["mensaje"]=$mensaje;

# Salida
    header("Location: contacto_exitoso.php");

?>
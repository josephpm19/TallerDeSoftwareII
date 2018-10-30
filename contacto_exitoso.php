<?php
# Entrada 
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$pedido = $_POST["pedido"];
$comentario = $_POST["comentario"];

# Proceso
//session_start();
setcookie("nombre",$nombre,time()+3600*5);
setcookie("correo",$correo,time()+3600*5);
setcookie("telefono",$telefono,time()+3600*5);
setcookie("pedido",$pedido,time()+3600*5);
setcookie("comentario",$comentario,time()+3600*5);

//$_COOKIE["nombre"]=$nombre;
//$_COOKIE["correo"]=$correo;
//$_COOKIE["telefono"]=$telefono;
//$_COOKIE["pedido"]=$pedido;
//$_COOKIE["comentario"]=$comentario;

# Salida
    header("Location: contacto_exitoso.php");

?>
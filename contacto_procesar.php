<?php
# Entrada 
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$pedido = $_POST["pedido"];
$motivo = $_POST["motivo"];
$mensaje = $_POST["mensaje"];

# Proceso

$db = new PDO('mysql:host=localhost;dbname=pisquerito;charset=utf8', 'root', '');
$db->query("INSERT INTO contacto VALUES (NULL, '$nombre', '$apellido','$correo','$telefono','$pedido','$motivo','$mensaje')");


//session_start();
setcookie("nombre",$nombre,time()+3600*5);
setcookie("correo",$correo,time()+3600*5);
setcookie("telefono",$telefono,time()+3600*5);
setcookie("pedido",$pedido,time()+3600*5);
setcookie("mensaje",$mensaje,time()+3600*5);

//$_COOKIE["nombre"]=$nombre;
//$_COOKIE["correo"]=$correo;
//$_COOKIE["telefono"]=$telefono;s
//$_COOKIE["pedido"]=$pedido;
//$_COOKIE["mensaje"]=$mensaje;

# Salida
    header("Location: contacto_exitoso.php");

?>
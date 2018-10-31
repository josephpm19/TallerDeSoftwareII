<?php
#entrada
$correo=$_POST["correo"];
$password=$_POST["password"];



#proceso

$db = new PDO('mysql:host=localhost;dbname=pisquerito;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM administrador WHERE email='$correo' AND pass='$password'");
$usuarios = $stmt->fetchAll();

$validacion = false;

if (count($usuarios) == 1) {
    # Datos correctos
    $validacion = true;
    session_start();
    $_SESSION["correo"] = $correo;
}

# Salida
if ($validacion) {
    header('Location: index.php');
}
else {
    header('Location: login.php?error=1');
}
?>
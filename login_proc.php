<?php
#entrada
$correo=$_POST["correo"];
$password=$_POST["password"];



#proceso
include 'partes/config.php';
$stmt = $db->query("SELECT * FROM administrador WHERE email='$correo' AND pass='$password'");
$usuarios = $stmt->fetchAll();
/*print_r($usuarios);
die();*/
$validacion = false;

if (count($usuarios) == 1) {
    # Datos correctos
    $validacion = true;
    session_start();
    $_SESSION["correo"] = $correo;
}

# Salida
if ($validacion) {
    header('Location: admin/admin.html');
}
else {
    header('Location: admin.html?error=1');
}
?>
<?php
# Entrada
$titulo = $_POST["titleproducto"];
$precio = $_POST["precioproducto"];
$descrip = $_POST["descript"];
$stock = $_POST["stock"];
$categoria = $_POST["categoria"];
# Proceso
$db = new PDO('mysql:host=localhost;dbname=pisquerito;charset=utf8', 'root', '');
$db->query("INSERT INTO producto VALUES (NULL, '$titulo', '$precio','$descrip','$stock','$categoria')");

# Salida
header('Location: productos.php');
?>
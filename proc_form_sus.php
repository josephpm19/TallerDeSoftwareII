<?php
#entrada
$suscripnombre=$_POST["suscrinombre"];
$suscripemail=$_POST["suscriemail"];
#proceso
$db = new PDO('mysql:host=localhost;dbname=pisquerito;charset=utf8', 'root', '');
$db->query("INSERT INTO suscriptor VALUES ( NULL,'$suscripnombre', '$suscripemail')");

header('Location: index.php');

?>
<?php
include 'partes/config.php'
$stmt = $db->query("SELECT * FROM administrador");
$productos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel de Administracion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">

</head>
<body>
    <div class="todo">
        <div class="cabecera">
            <div class="logo"> 
                <img src="img/logo.png" alt="">
            </div>
            <div class="buscador">
                <a href="#" id="search"> <i class="fa fa-search"></i> </a>
            </div>
            <div class="foto-perfil1">
                <img src="img/6.jpg" alt="Foto Perfil">
                <div class="logout">
                    <a href=""><i class="fas fa-sign-out-alt"></i></a> 
                </div>
            </div>    
        </div>
        <div class="bloque-cuerpo">
            <div class="bloque-menu">
                <div class="perfil">
                    <div class="foto-perfil">
                        <img src="img/6.jpg" alt="Foto Perfil">
                    </div>
                    <div class="nombre-perfil">
                        Bienvenido <span><?php echo $n["nombre"] ?></span>
                    </div>
                </div>
            </div>
            <div class="content">
            </div>
        </div>
        
    </div>
</body>
</html>
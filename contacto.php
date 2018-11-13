<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contacto | Pisquerito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/login.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />

	<link rel="shortcut icon" type="image/x-icon" href="img\ico.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php include 'partes/header.php' ?>
	<?php include 'partes/navegacion.php' ?>
        
<div id="contacto">
    <h1>Contáctenos</h1>
    <form action="contacto_procesar.php" method="post">
        <div class="login-form">   
            <input type="text" name="nombre" placeholder="Nombre" 
            <?php  if (isset($_SESSION["nombre"])){?>
                value="<?php echo $_SESSION["nombre"]?>"
            <?php } ?>
            >
        </div>
        <div class="login-form">
            <input type="text" name="apellido"  placeholder = "Apellido">
        </div>
        <div class="login-form">
            <input type="email" name="correo" placeholder="Correo" 
            <?php  if (isset($_SESSION["correo"])){?>
                value="<?php echo $_SESSION["correo"]?>"
            <?php } ?>
            >
        </div>
		<div class="login-form">
            <input type="text" name="telefono" placeholder = "Celular" >
        </div>
        <div class="login-form">
            <input type="text" name="pedido" placeholder= "Número de pedido" >
        </div>
        <div class="login-form">
            <input type="text" name="motivo" placeholder= "Motivo" >
        </div>

        <div class="login-form">
            <textarea name="mensaje" placeholder= "Mensaje" rows="4" cols="50"></textarea>
        </div>
        <div >
            <button class="btn-login" input="submit">Enviar</button>
        </div>
    </form>
</div>
<div id="mapa">
    <h2 style="display:block;">Ubícanos</h2>
<div id="googleMap" style="width:100%;height:350px;border-radius:15px; ">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.479116600894!2d-77.0657064855583!3d-12.079317545794813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9046878d60f%3A0xf86bb1b28da58673!2sEl+Pisquerito!5e0!3m2!1ses-419!2spe!4v1541686420169" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYQXwV-LSQoHfCQDiVYQxkduiemHHbuck&callback=myMap"></script>
</div>
	<?php include 'partes/footer.php' ?>
</body>
</html>

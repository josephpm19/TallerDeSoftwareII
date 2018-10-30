<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Iniciar Sesion | Pisquerito</title>
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
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre"

            <?php  if (isset($_SESSION["nombre"])){?>
                value="<?php echo $_SESSION["nombre"]?>"
            <?php } ?>
            >
        </div>
        <div class="login-form">
            <label for="correo">Correo: </label>
            <input type="email" name="correo"
            <?php  if (isset($_SESSION["correo"])){?>
                value="<?php echo $_SESSION["correo"]?>"
            <?php } ?>
            >
        </div>
		<div class="login-form">
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono">

        </div>
        <div class="login-form">
            <label for="pedido">Numero de pedido: </label>
            <input type="text" name="pedido">
        </div>
        <div class="login-form">
            <label for="comentario">Comentario: </label>
            <textarea name="comentario" rows="4" cols="50">
            </textarea>
        </div>
        <div >
            <button class="btn-login" input="submit">Enviar</button>
        </div>
    </form>
</div>
    

    
    



	<?php include 'partes/footer.php' ?>

</body>
</html>
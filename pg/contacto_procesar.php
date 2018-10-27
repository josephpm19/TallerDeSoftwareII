<?php session_start();?>
<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contactos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilo.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php include 'partes/header.php' ?>
    <?php include 'partes/menu.php' ?>

    <main>
        <h1>Contactos</h1>

        <p>Estimado <b><?php echo $_COOKIE["nombre"];?></b>  gracias por enviarnos su formulario</p>
    </main>

    <?php include 'partes/footer.php' ?>
</body>
</html>
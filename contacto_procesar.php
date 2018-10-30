<?php session_start();?>
<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contacto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php include 'partes/header.php' ?>
    <?php include 'partes/navegacion.php' ?>

    <main>
        <h1>Cont</h1>

        <p>Estimado <b><?php echo $_COOKIE["nombre"];?></b>  gracias por enviarnos su formulario</p>
    </main>

    <?php include 'partes/footer.php' ?>
</body>
</html>
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
            <input type="text" value placeholder="nombre y apellido" name="nombre"

            <?php  if (isset($_SESSION["nombre"])){?>
                value="<?php echo $_SESSION["nombre"]?>"
            <?php } ?>
            >
        </div>
        <div class="login-form">
            <input type="email" value placeholder="email" name="correo"
            <?php  if (isset($_SESSION["correo"])){?>
                value="<?php echo $_SESSION["correo"]?>"
            <?php } ?>
            >
        </div>
		<div class="login-form">
            <input type="text" value placeholder = "celular" name="telefono">

        </div>
        <div class="login-form">
            <input type="text" value placeholder= "Número de pedido" name="pedido">
        </div>
        <div class="login-form">
					<label>Motivo:</label>
				
					<select name="motivo">
						<option value="1">Sugerencia</option>
						<option value="2">Reclamo</option>
						<option value="3">Interes</option>
						<option value="4">Otros</option>
					</select>
				</div>

        <div class="login-form">
            <textarea name="mensaje" value placeholder= "mensaje" rows="4" cols="50"></textarea>
        </div>
        <div >
            <button class="btn-login" input="submit">Enviar</button>
        </div>
    </form>
</div>
<div id="mapa">
    <h2 style="display:block;">Ubícanos</h2>
<div id="googleMap" style="width:100%;height:350px;border-radius:15px; "></div>

    <script>
    function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(-12.079414,-77.063486),
        zoom:15,
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYQXwV-LSQoHfCQDiVYQxkduiemHHbuck&callback=myMap"></script>
</div>
	<?php include 'partes/footer.php' ?>

</body>
</html>

<?php
session_start();

$id=intval($_GET["id"]);
$db = new PDO('mysql:host=localhost;dbname=pisquerito;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM producto WHERE id_producto ='$id'");
#$usuarios = $stmt->fetchAll(); arreglo

$pro = $stmt->fetchObject();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producto | Pisquerito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/login.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/producto.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"></head>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/cont.js"></script>

</head>
<body>
    <?php include 'partes/header.php' ?>
    <?php include 'partes/navegacion.php' ?>
    <div class="img-title">
        <div class="imagen-producto">
            <img src="https://http2.mlstatic.com/3-pisco-peruano-santiago-queirolo-quebranta-italia-legitimo-D_NQ_NP_748808-MLB26890124435_022018-F.jpg" alt="">
         </div>
        <div class="bloque-datos">
            <div class="titulo">
                <h1><?php echo $pro->nombre ?></h1>
            </div>
             <div class="precio">
                 <h2> S/ <?php echo $pro->precio ?></h2>
            </div>
            <div class="cantidad">
                <h4>Cantidad: </h4>
                <input class="cuadro-cant" type="number" name="cantidad" min="1" max="10">
            </div>
            <div class="btn-cart">
                <button id="btn-carrito" class="btn_anade" value="<?php echo $pro->id_producto?>"> COMPRAR AHORA</button>
            </div>
            <div class="contador">
                <div class="items-count" id="progress_bar"></div> 
                <div id="clock-ticker" class="clearfix">
                    <div class="block">
                        <span class="flip-top" id="numdays">0</span><br>
                        <span class="label">Days</span>
                    </div>
                    <div class="block">
                        <span class="flip-top" id="numhours">1</span><br>
                        <span class="label">Hours</span>
                    </div>
                    <div class="block"><span class="flip-top" id="nummins">23</span><br>
                        <span class="label">Minutes</span>
                    </div>
                    <div class="block"><span class="flip-top" id="numsecs">36</span><br>
                        <span class="label">Seconds</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="description">
        <h3>Descripción del producto</h3>
        <p> <?php echo $pro->descrip ?></p>
    </div>    
    <?php include 'partes/footer.php'?>
</body>
</html>
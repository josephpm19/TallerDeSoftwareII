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
                <h1>TITULO DEL PRODUCTO</h1>
            </div>
             <div class="precio">
                 <h2> S/ 14.99</h2>
            </div>
            <div class="cantidad">
                <h4>Cantidad: </h4>
                <input class="cuadro-cant" type="number" name="cantidad" min="1" max="10">
            </div>
            <div class="btn-cart">
                <button id="btn-carrito" type="submit"> COMPRAR AHORA</button>
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
        <p> 1914 translation by H. Rackham
            "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"

            Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
            "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
    </div>    
    <?php include 'partes/footer.php'?>
</body>
</html>
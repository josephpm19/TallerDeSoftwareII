<?php
session_start();
if (!isset($_SESSION["nombre"])) {
    header('Location: ../login.php');   
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pedidos | Panel de Administracion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../img\ico.png" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">

</head>
<body>
    <div class="todo">
        <?php include 'partes/cab.php'?>
        <div class="bloque-cuerpo">
                    <?php include 'partes/side.php'?>
            <div class="content">
                <div class="nombre-tabla">
                     <h2>Pedidos</h2> 
                </div>
                
                <table>
                    <tr>
                        <th>#</th>
                        <th>TITULO</th>
                        <th>PRECIO</th>
                        <th>STOCK</th>
                        <th>CATEGORIA</th>
                        <th>ACCION</th>
                    </tr>
                    <?php if (count($producto) == 0) { ?>
                    <tr>
                        <td colspan="6" style="text-align: center"> No se encontraron productos</td>
                    </tr>
                    <?php } ?>

                    <?php foreach ($producto as $p) { ?>
                    <tr>
                        <td><?php echo $p["id_producto"] ?></td>
                        <td><?php echo $p["nombre"] ?></td>
                        <td><?php echo $p["precio"] ?></td>
                        <td><?php echo $p["stock"] ?></td>
                        <td><?php echo $p["categoria"] ?></td>
                        <td style="text-align: center">            
                            <form class="edit" action="borrar_usuario.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $u["id"] ?>">
                                <button type="submit"><i class="fas fa-trash-alt" style="font-weight: 1000;font-size:15px;margin: auto;"></i></button>
                            </form> 
                            <form class="edit" action="editar_usuario.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $u["id"] ?>">
                                <button type="submit"><i class="fas fa-edit" style="font-weight: 1000;font-size:15px;margin: auto;"></i></button>
                            </form>  
                            <form class="edit" action="editar_password.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $u["id"] ?>">
                                <button type="submit"> <i class="fas fa-user-edit" style="font-weight: 1000;font-size:15px;margin: auto;"></i></button>
                            </form>         
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        
    </div>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION["nombre"])) {
    header('Location: ../login.php');   
}
$db = new PDO('mysql:host=localhost;dbname=pisquerito;charset=utf8', 'root', '');
$stmt = $db->query("SELECT * FROM cliente");
$clientes = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clientes | Panel de Administracion</title>
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
                     <h2>Clientes</h2> 
                </div>
                
                <table>
                    <tr>
                        <th>#</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>USUARIO</th>
                        <th>DIRECCION</th>
                        <th>CIUDAD</th>
                        <th>REGION</th>
                        <th>ZIP</th>
                        <th>EMAIL</th>
                        <th>TELEFONO</th>
                        <th>ACCION</th>
                    </tr>
                    <?php if (count($clientes) == 0) { ?>
                    <tr>
                        <td colspan="5" style="text-align: center"> No se encontraron registros</td>
                    </tr>
                    <?php } ?>

                    <?php foreach ($clientes as $cli) { ?>
                    <tr>
                        <td><?php echo $cli["id_cliente"] ?></td>
                        <td><?php echo $cli["nombre"] ?></td>
                        <td><?php echo $cli["apellido"] ?></td>
                        <td><?php echo $cli["usuario"] ?></td>
                        <td><?php echo $cli["direccion"] ?></td>
                        <td><?php echo $cli["ciudad"] ?></td>
                        <td><?php echo $cli["region"] ?></td>
                        <td><?php echo $cli["cod_post"] ?></td>
                        <td><?php echo $cli["correo"] ?></td>
                        <td><?php echo $cli["telefono"] ?></td>
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
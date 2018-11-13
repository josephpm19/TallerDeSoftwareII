<div id="menu">
    <ul>
        <li>  <a href="index.php">Home </a> </li>
        <li> <a href="catalogo.php"> Catalogo</a> </li>
        <li> <a href="about-us.php"> Sobre Nosotros</a> </li>
        <li> <a href="contacto.php"> Contacto</a> </li>
        <?php if (isset($_SESSION["nombre"])) { ?>
        <li><a href="admin/index.php"> Dashboard</a></li>
        <?php } else { ?>
        <li> <a href="login.php"> Iniciar Sesion</a> </li>
        <?php } ?>   
        

    </ul>

</div> 
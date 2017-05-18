<!DOCTYPE html>
<?php 
session_start();
var_dump($_SESSION);
        
?>
<?phpsession_start()?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
        <div><?php if(isset($_SESSION['USR'])) { ?>
            <a href="cerrar.php">Cerrar Sesion</a>
            <?php } ?>
        </div>
            
        <a href="revision.php"> Revisi&oacute;n sesi&oacute;n</a>
        <?php if(!isset($_SESSION['USR'])){ ?>
        <form action="revision.php" method="post">
            <div><label>Usuario</label><input type="text" name="nombre">
            <div><label>Clave</label><input type="password" name="clave">
            <input type="submit" name="Acceder">
            
        </form>
        <?php  } ?>
        <h1> Ejemplos de encriptacion con el HASH MD5</h1>
        <?php
        echo md5('#holamundo&');
        echo '<br>';
        ?>
        
         
    </body>
</html>
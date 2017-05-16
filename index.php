<!DOCTYPE html>
<?php 
$_SESSION["saludo"]="Hola Mundo";

        
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <a href="revision.php"> Revisi&oacute;n sesi&oacute;n</a>
        <?php 
        echo md5('#holamundo&');
        echo '<br>';
        ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

include 'conex.php';

session_start();
$id=$_SESSION['user_id'];
$nombre_usuario=$_SESSION['username'];

$sql="DELETE FROM `usuario` WHERE `idusuario`='$id' AND `nombre_usuario`='$nombre_usuario' ";
$result = $conn->query($sql);
session_destroy();


?>
<body>
    </nav> 
        <article class="caja-blur" style="height: 270px;">
            <center>
                <img src="IMG/correcto.png" width="100px" alt="">
                <h4>Cuenta eliminada exitosamente</h4>
            </center>
        </article>
        
</body>
</html>
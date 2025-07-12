
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota eliminada</title>
    <link rel="stylesheet" href="CSS.P/index.css" type="text/css">
</head>
</head>
<body style="background-image: url(background.jpg);">
<nav class="nav-index-dos">
    <img class="logo" src="slogobw.png" alt="">
  <div id="div-nav">
    <a class="nav-dos" href="../inicio_na (administrador).html">INICIO</a>
    <a class="nav-dos" href="../libros nad (administrador).html">LIBROS</a>
    <a id="nav-dos" href="../dashboard_administrador.php">VOLVER</a>
  </div> 
</nav>

<?php

include 'conex.php';

$fs=$_POST['id'];
$nombre=$_POST['nombre'];
$etiqueta=$_POST['Etiqueta'];



$sql="DELETE FROM `notas` WHERE `nombre`='$nombre' and `idnotas`='$fs' ";
$result = $conn->query($sql);

if ($result){
    echo "";
}


?>
 <article class="caja-blur" style="height: 270px;">
            <center>
                <img src="correcto.png" width="100px" alt="">
                <h4>Nota eliminada exitosamente</h4>
            </center>
        </article>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminada Nota</title>
    <link rel="stylesheet" href="CSS.P/index.css">
</head>
</head>
<body style="background-image: url(background.jpg);">
<nav class="nav-index-dos">
        <img class="logo" src="slogobw.png" alt="">
      <div id="div-nav">
        <a class="nav-dos" href="../inicio_n (hidroponista).html">INICIO</a>
        <a class="nav-dos" href="../libros n (hidroponista).html">LIBROS</a>
        <a id="nav-dos" href="../dashboard_hidroponista (hidroponista).php">VOLVER</a>
      </div>
    </nav> 
        <article class="caja-blur" style="height: 270px;">
            <center>
                <img src="correcto.png" width="100px" alt="">
                <h4>Nota Eliminada</h4>
            </center>
        </article>
<?php

include 'conex.php';

$fs=$_POST['id'];
$nombre=$_POST['nombre'];
$etiqueta=$_POST['Etiqueta'];



$sql="DELETE FROM `notas` WHERE `nombre`='$nombre' and `idnotas`='$fs' ";
$result = $conn->query($sql);

if ($result){
    echo "Nota eliminada";

}


?>
</body>
</html>
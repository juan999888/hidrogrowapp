
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota creada</title>
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
<?php

include 'conex.php';

$nota=$_POST['nota'];
$nombre=$_POST['nombre'];
$etiqueta=$_POST['Etiqueta'];



$sql="INSERT INTO `notas`(`idnotas`, `etiqueta`, `nombre`, `decripcion`) VALUES (null,'$etiqueta','$nombre','$nota')";
if ($conn->query($sql) === TRUE) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
   <script>
    function volver(){
        window.location.href = "Crear nota_(hidro).html";
    }
    function volver_d(){
        window.location.href = "dashboard_hidroponista (hidroponista).html";
    }
</script>
<img src="correcto.png" width="100px" alt="">
<h3>Nota creada exitósamente</h3>
</center>
</article>
</body>
</html>
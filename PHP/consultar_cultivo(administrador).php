<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar cultivos hidroponista</title>
    <link rel="stylesheet" href="CSS.P/index.css" type="text/css">
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
<center>
  <article class="caja-blur">
  <div class="container-login"> 
  <h1 class="color-fuente-registro">Consultar cultivo</h1>
<form action="cultivo_consultado (administrador).php" method="post">
<div class="form-group-login">
<label class="color-fuente-registro" for="n_cl">Nombre de cultivo:</label><br><br>
<select class="form-control-login" name="n_cl" id="n_cl">
<option class="color-fuente-registro" value="">--- Seleciona uno ---</option>

      <?php
      include 'conex.php';
      //Verificar conexión
      if ($conn->connect_error) {
      die("Conexión fallida: " . $conn->connect_error);}
      $sql = "SELECT nombre FROM cultivo"; 
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      // Salida de cada fila
      while($row = $result->fetch_assoc()) {
          echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";}
      } else {
          echo "<option value=''>No hay cultivos disponibles</option>";}
      $conn->close();?>

</select><br></div>
<div class="form-group-login">
<label class="color-fuente-registro" for="id_c">ID del cultivo</label><br><br>
<select class="form-control-login" name="id_c" id="id_c">
<option value="">--- Seleciona uno ---</option>

      <?php
      include 'conex.php';
      // Verificar conexión
      if ($conn->connect_error) {
      die("Conexión fallida: " . $conn->connect_error);}
      $sql = "SELECT idcultivo FROM cultivo";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      // Salida de cada fila
      while($row = $result->fetch_assoc()) {
      echo "<option value='" . $row['idcultivo'] . "'>" . $row['idcultivo'] . "</option>";}
      } else {
      echo "<option value=''>No hay IDs disponibles</option>";}
      $conn->close();?>

</select><br></div>
<div class="form-group-login">
<label class="color-fuente-registro" for="fec">Fecha de siembra</label><br><br>
<select class="form-control-login" name="fec" id="fec">
<option value="">--- Seleciona uno ---</option>

      <?php
      include 'conex.php';
      // Verificar conexión
      if ($conn-> connect_error) {
      die("Conexión fallida: " . $conn->connect_error);}
      // Consulta para obtener las fechas de siembra
      $sql = "SELECT DISTINCT	fechaDeSiembra FROM cultivo"; 
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      // Salida de cada fila
      while($row = $result->fetch_assoc()) {
      echo "<option value='" . $row['fechaDeSiembra'] . "'>" . $row['fechaDeSiembra'] . "</option>";}
      } else {
      echo "<option value=''>No hay fechas disponibles</option>";}
      $conn->close();?>

</select><br></div>
<label class="color-fuente-registro" for="especie">Especie</label><br><br>
<select class="form-control-login" name="especie" >
<option value="">--- Seleciona uno ---</option>

      <?php
      include 'conex.php';
      // Verificar conexión
      if ($conn->connect_error) {
      die("Conexión fallida: " . $conn->connect_error);}
      // Consulta para obtener las especies
      $sql = "SELECT DISTINCT especie FROM cultivo"; 
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      // Salida de cada fila
      while($row = $result->fetch_assoc()) {
      echo "<option value='" . $row['especie'] . "'>" . $row['especie'] . "</option>";}
      } else {
      echo "<option value=''>No hay especies disponibles</option>";}
      $conn->close();?>

</select><br><br>
<button type="submit" class="btn-login">Consultar</button>
</form></div>
  </div>
  </article>
</center>
</body>
</html>

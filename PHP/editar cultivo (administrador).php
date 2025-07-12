<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar cultivo hidroponista</title>
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
  <article class="caja-blur">
  <center>
    <div class="container-login">
    <h1 class="color-fuente-registro">Buscar cultivo a editar</h1>
  <form action="cultivo editado (administrador).php" method="post">
  <div class="form-group-login">
  <div class="form-group-login">
  <label class="color-fuente-registro" for="id">ID del cultivo</label><br><br>
  <select class="form-control-login" name="id_c" id="id">
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
            }else {
            echo "<option value=''>No hay IDs disponibles</option>";}
            $conn->close();?>

 </select>
<br>
  </div>
  <div class="form-group-login">
  <label class="color-fuente-registro" for="n_ce">Nombre de cultivo a editar:</label><br><br>
  <select class="form-control-login" name="n_ce" id="n_ce">
  <option value="">--- Seleciona uno ---</option>

            <?php
            include 'conex.php';
            // Verificar conexión
            if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);}
            $sql = "SELECT nombre FROM cultivo"; 
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // Salida de cada fila
            while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";}}
            else {
                echo "<option value=''>No hay cultivos disponibles</option>";}
            $conn->close();?>

</select>
<br></br></div>
<div class="form-group-login">
<hr heihgt="5px" color="black"></div>
<h1 class="color-fuente-registro">Editar</h1>
<label class="color-fuente-registro" for="n_cl">Editar nombre de cultivo:</label><br><br>
<input type="text" class="form-control-login" id="username" placeholder="Editar nombre" name="n_cl" ><br></div>
<div class="form-group-login">
<label class="color-fuente-registro" for="id_c">Editar cantidad</label><br><br>
<input type="number" class="form-control-login" id="id_c" placeholder="Editar cantidad" name="id_c"><br></div>
<div class="form-group-login">
<label class="color-fuente-registro" for="especie">Especie</label><br><br>
<select class="form-control-login" name="especie">
  <option value="">--- Seleciona uno ---</option>

            <?php
            include 'conex.php';
            //Verificar conexión
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

  </select>
  </div><br>
  <div class="form-group-login">
  <label class="color-fuente-registro" placeholder="Editar fecha" for="id_s">Editar fecha de siembra</label><br>
  <input type="date" class="form-control-login" id="id_s"  name="id_s"><br></div>
  <div class="form-group-login">
  <label class="color-fuente-registro" for="des">Editar descripcion:</label><br><br>
  <input type="text" class="form-control-login" id="username" placeholder="Editar descripción" name="des"><br></div>
      <input class="btn-login" type="submit" value="Editar">
  </form></div></div>
    </div> 
  </center>
  </article>
</body>
</html>         

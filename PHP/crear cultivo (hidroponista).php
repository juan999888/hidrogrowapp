<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear cultivo hidroponista</title>
<link rel="stylesheet" href="CSS.P/index.css">
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
  <article class="caja-blur">
  <center>
  <div class="container-login">
  <h1 class="color-fuente-registro">Registrar cultivo</h1>
  <form action="inicio_n (hidroponista).php" method="post">
  <div class="form-group-login">
  <label class="color-fuente-registro" for="n_cl">Nombre de cultivo:</label><br><br>
                  <input type="text" class="form-control-login" id="username" placeholder="Introduce el nombre de cultivo" name="n_cl2" ><br>
                  <select class="form-control-login" name="n_cl" >
                    <option class="color-fuente-registro" value="">--- Seleciona uno ---</option>
                    <?php
                    include 'conex.php';
                    if ($conn->connect_error) {
                        die("Conexión fallida: " . $conn->connect_error);
                    }
                    session_start();
                    $id=$_SESSION['user_id'];
                    $sql = "SELECT nombre FROM cultivo WHERE 1"; 
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";
                        }}
                        else{
                          echo "<option value=''>No hay cultivos disponibles</option>";}
                    $conn->close();
                    ?>
                  </select>
              </div>
    <div class="form-group">
    <label class="color-fuente-registro" for="id_c">Cantidad</label><br><br>
    <input type="number" class="form-control-login" id="id_c" placeholder="Introduce la cantidad de el cultivo" name="id_c" required>
  </div><br>
  <div class="form-group">
<label class="color-fuente-registro" for="f_s">Fecha de siembra</label><br><br>
  <input type="date" class="form-control-login" id="id_c" placeholder="Introduce el ID del cultivo" name="f_s" required>
</div><br>
<div class="form-group">
<label class="color-fuente-registro" for="especie">Especie</label><br><br>
                  <select name="especie" required>
                    <option value="">--- Selecciona uno ---</option>
                    <?php
                    include 'conex.php';
                    if ($conn->connect_error) {
                        die("Conexión fallida: " . $conn->connect_error);
                    }
                    session_start();
                    $id=$_SESSION['user_id'];
                    $sql = "SELECT DISTINCT especie FROM usuario_y_especie WHERE `idusuario`='$id'"; 
                    $result = $conn->query($sql);
  
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['especie'] . "'>" . $row['especie'] . "</option>";
                        }
                    } else {
                        echo "<option value=''>No hay especies disponibles</option>";
                    }
                    $conn->close();
                    ?>
                  </select>
              </div>
</select>
<div class="links-login"> 
</div>
<label class="color-fuente-registro" for="des">Descripcion de cultivo:</label><br><br>
<textarea name="des" id="des"></textarea><br><br>
<button type="submit" class="btn-login">Registrar</button>
</form>
  </div>
  </center>
  </article>
</body>
</html>      
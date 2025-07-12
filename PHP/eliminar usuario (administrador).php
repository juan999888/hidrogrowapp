<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eliminar usuario</title>
  <link rel="stylesheet" href="CSS.P/index.css">
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
              <h1 class="color-fuente-registro">Eliminar usuario</h1>
            <form action="usuario eliminado (administrador).php" method="post">
            <div class="form-group">
                    <label class="color-fuente-registro" for="n_u">Nombre de usuario:</label><br>
                    <select name="n_u" id="n_u" class="form-control-login" required>
                    <option value="">--- Seleciona uno ---</option>
                      <?php
                     include 'conex.php';
    
                      // Verificar conexión
                      if ($conn->connect_error) {
                          die("Conexión fallida: " . $conn->connect_error);
                      }
    
                      $sql = "SELECT nombre_usuario FROM usuario"; 
                      $result = $conn->query($sql);
    
                      if ($result->num_rows > 0) {
                          // Salida de cada fila
                          while($row = $result->fetch_assoc()) {
                              echo "<option value='" . $row['nombre_usuario'] . "'>" . $row['nombre_usuario'] . "</option>";
                          }
                      } else {
                          echo "<option value=''>No hay cultivos disponibles</option>";
                      }
                      $conn->close();
                      ?>
                    </select>
                  </div>
              <div class="form-group-login">
                    <label class="color-fuente-registro" for="id_u">ID usuario</label><br>
                    <select  name="id_u" id="id_u" class="form-control-login" required>
                    <option value="">--- Seleciona uno ---</option>
                      <?php
                     include 'conex.php';
    
                      // Verificar conexión
                      if ($conn->connect_error) {
                          die("Conexión fallida: " . $conn->connect_error);
                      }
                      $sql = "SELECT idusuario FROM usuario";
                      $result = $conn->query($sql);
    
                      if ($result->num_rows > 0) {
                          // Salida de cada fila
                          while($row = $result->fetch_assoc()) {
                              echo "<option value='" . $row['idusuario'] . "'>" . $row['idusuario'] . "</option>";
                          }
                      } else {
                          echo "<option value=''>No hay IDs disponibles</option>";
                      }
                      $conn->close();
                      ?>
                    </select>
                  </div>
              <div class="form-group-login">
                    <label class="color-fuente-registro" for="n_d">Número de documento</label><br>
                    <select name="n_d" class="form-control-login" required>
                      <option value="">--- Seleciona uno ---</option>
                      <?php
                     include 'conex.php';
    
                      // Verificar conexión
                      if ($conn->connect_error) {
                          die("Conexión fallida: " . $conn->connect_error);
                      }
    
                      // Consulta para obtener las especies
                      $sql = "SELECT DISTINCT n_documento FROM usuario"; 
                      $result = $conn->query($sql);
    
                      if ($result->num_rows > 0) {
                          // Salida de cada fila
                          while($row = $result->fetch_assoc()) {
                              echo "<option value='" . $row['n_documento'] . "'>" . $row['n_documento'] . "</option>";
                          }
                      } else {
                          echo "<option value=''>No hay especies disponibles</option>";
                      }
                      $conn->close();
                      ?>
                    </select>
                    
                    </div>
            <button type="submit" class="btn-login">Eliminar usuario</button>
            </form>
          </div>
        </div>
    </div>
              </div>
            </center>
          </article>
    
</body>
</html>     



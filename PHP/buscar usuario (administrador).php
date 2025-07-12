<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultar Usuarios</title>
  <link rel="stylesheet" href="CSS.P/index.css">
  <body style="background-image: url(background.jpg);">
<nav class="nav-index-dos">
    <img class="logo" src="slogobw.png" alt="">
  <div id="div-nav">
    <a class="nav-dos" href="../inicio_na (administrador).html">INICIO</a>
    <a class="nav-dos" href="../libros nad (administrador).html">LIBROS</a>
    <a id="nav-dos" href="../dashboard_administrador.php">DASHBOARD</a>
  </div>
</nav>
    </div>
          <article class="caja-blur">
            <center>
              <div class="container-login">
              <h1 class="color-fuente-registro">Consultar usuario</h1>
                <form action="usuario consultado.php" method="post">
                  <div class="form-group-login">
                    <label class="color-fuente-registro" for="n_u">Nombre de usuario:</label><br>
                    <select class="form-control-login" name="n_u" id="n_u">
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
                    <label class="color-fuente-registro" for="n_">Nombre:</label><br>
                    <select class="form-control-login" name="n_" id="n_">
                    <option value="">--- Seleciona uno ---</option>
                      <?php
                     include 'conex.php';
    
                      // Verificar conexión
                      if ($conn->connect_error) {
                          die("Conexión fallida: " . $conn->connect_error);
                      }
    
                      $sql = "SELECT nombre FROM usuario"; 
                      $result = $conn->query($sql);
    
                      if ($result->num_rows > 0) {
                          // Salida de cada fila
                          while($row = $result->fetch_assoc()) {
                              echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";
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
                    <select class="form-control-login" name="id_u" id="id_u">
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
                    <label class="color-fuente-registro" for="Email">Email</label><br>
                    <select class="form-control-login" name="Email" id="Email">
                    <option value="">--- Seleciona uno ---</option>
                      <?php
                     include 'conex.php';
    
                      // Verificar conexión
                      if ($conn-> connect_error) {
                          die("Conexión fallida: " . $conn->connect_error);
                      }
    
                      // Consulta para obtener las fechas de siembra
                      $sql = "SELECT DISTINCT	email FROM usuario"; 
                      $result = $conn->query($sql);
    
                      if ($result->num_rows > 0) {
                          // Salida de cada fila
                          while($row = $result->fetch_assoc()) {
                              echo "<option value='" . $row['email'] . "'>" . $row['email'] . "</option>";
                          }
                      } else {
                          echo "<option value=''>No hay fechas disponibles</option>";
                      }
                      $conn->close();
                      ?>
                    </select>
                  </div>
                  <div class="form-group-login">
                <label class="color-fuente-registro" for="Rol">Rol</label><br>
                <select class="form-control-login" name="Rol" id="Rol">
                <option value="">--- Seleciona uno ---</option>
                  <option value="1">Administrador</option>
                  <option value="2">Hidroponista</option>
                </select>
                <br><br>

                    <div class="form-group">
                    <label class="color-fuente-registro" for="tel">Telefono</label><br>
                    <select class="form-control-login" name="tel" >
                      <option value="">--- Seleciona uno ---</option>
                      <?php
                     $servername = "localhost";
                     $username = "root";
                     $password = "";
                     $dbname = "grow apphidro";
                     $conn = new mysqli($servername, $username, $password, $dbname);
    
                      // Verificar conexión
                      if ($conn->connect_error) {
                          die("Conexión fallida: " . $conn->connect_error);
                      }
    
                      // Consulta para obtener las especies
                      $sql = "SELECT DISTINCT telefono FROM usuario"; 
                      $result = $conn->query($sql);
    
                      if ($result->num_rows > 0) {
                          // Salida de cada fila
                          while($row = $result->fetch_assoc()) {
                              echo "<option value='" . $row['telefono'] . "'>" . $row['telefono'] . "</option>";
                          }
                      } else {
                          echo "<option value=''>No hay especies disponibles</option>";
                      }
                      $conn->close();
                      ?>
                    </select>
                    </div><br>
                    <div class="form-group-login">
                    <label class="color-fuente-registro" for="n_d">Número de documento</label><br>
                    <select class="form-control-login" name="n_d" >
                      <option value="">--- Seleciona uno ---</option>
                      <?php
                     $servername = "localhost";
                     $username = "root";
                     $password = "";
                     $dbname = "grow apphidro";
                     $conn = new mysqli($servername, $username, $password, $dbname);
    
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
                    <div class="form-group-login">
                <label class="color-fuente-registro" for="t_d">Tipo documento</label><br>
                <select class="form-control-login" name="t_d" id="t_d">
                <option value="">--- Seleciona uno ---</option>
                  <option value="1">C.C</option>
                  <option value="2">T.I</option>
                  <option value="3">C.E</option>
                  <option value="4">Otro</option>
                </select>
            </BR>
              </div>
                    </div>
                    <div class="form-group-login">
                <label class="color-fuente-registro" for="gender">Género:</label><br>
                <select class="form-control-login" class="form-group-login" name="gender" >
                <option value="">--- Seleciona uno ---</option>
                  <option value="1">Masculino</option>
                  <option value="2">Femenino</option>
                </select>
              </div><br>
                <button type="submit" class="btn-login">Consultar</button>
                </form>
              </div>
            </div>
        </div>
              </div>
            </center>
          </article>
        
</body>
</html>
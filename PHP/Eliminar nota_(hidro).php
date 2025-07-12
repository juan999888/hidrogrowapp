<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Notas</title>
    <link rel="stylesheet" href="CSS.P/index.css" type="text/css">
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
    <article class="caja-blur" style="height:650px;"">
  <center>
    <div class="container-login">
    <h1 class="color-fuente-registro">Eliminar nota</h1>
                <form action="eliminar notas(hidro).php" method="post">
                <div class="form-group-login">
                <label class="color-fuente-registro" for="nombre">Nombre de la nota:</label><br><br>
                <select class="form-control-login" name="nombre" class="form-control" id="nombre">
                <option value="">--- Seleciona uno ---</option>
                  <?php
                 include 'conex.php';

                  // Verificar conexión
                  if ($conn->connect_error) {
                      die("Conexión fallida: " . $conn->connect_error);
                  }

                  $sql = "SELECT nombre FROM notas"; 
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      // Salida de cada fila
                      while($row = $result->fetch_assoc()) {
                          echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";
                      }
                  } else {
                      echo "<option value=''>No hay nobres disponibles</option>";
                  }
                  $conn->close();
                  ?>
                </select>
              </div>
              <div class="form-group-login">
                <label  class="color-fuente-registro" for="id">ID:</label><br><br>
                <select name="id" class="form-control-login" id="id">
                <option value="">--- Seleciona uno ---</option>
                  <?php
                 include 'conex.php';

                  // Verificar conexión
                  if ($conn->connect_error) {
                      die("Conexión fallida: " . $conn->connect_error);
                  }

                  $sql = "SELECT idnotas FROM notas"; 
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      // Salida de cada fila
                      while($row = $result->fetch_assoc()) {
                          echo "<option value='" . $row['idnotas'] . "'>" . $row['idnotas'] . "</option>";
                      }
                  } else {
                      echo "<option value=''>No hay ids disponibles</option>";
                  }
                  $conn->close();
                  ?>
                </select>
              </div>
            <div class="input-container">
                <br>
                <label class="color-fuente-registro" for="Etiqueta">Etiqueta:</label><br><br>
                <select class="form-control-login" id="Etiqueta" name="Etiqueta">
                    <option value="">Seleccione una opción</option>
                    <option value="importante">importante</option>
                    <option value="poco importante">Poco importante</option>
                    <option value="medio importante">Medio importante</option>
                    <option value="muy importante">Muy importante</option>
                </select>
                </div>
                <br>
                <button class="btn-login" type="submit">Eliminar</button>
            </div>
            </form>    
          </div>
        </div>
    </div>
    
    </div>
  </center>
    </article>
</body>
</html>
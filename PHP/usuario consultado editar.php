<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar usuario</title>
  <link rel="stylesheet" href="CSS.P/index.css">
  <style>
    #aviso{
      color: black;
      font-size: 15px;
    }
  </style>
</head>
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
              <h1 class="color-fuente-registro">Editar usuario</h1>
                <form action="usuario a editar.php" method="post">
                <div class="form-group-login">
                <label class="color-fuente-registro" for="id">ID del usuario a editar</label><br>
                  <select name="id" id="id" class="form-control-login">
                  <option class="color-fuente-registro" value="">--- Seleciona uno ---</option>
                    <?php
                   include 'conex.php';
  
                    // Verificar conexión
                    if ($conn->connect_error) {
                        die("Conexión fallida: " . $conn->connect_error);
                    }
                    $sql = "SELECT idusuario  FROM usuario";
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
                <label class="color-fuente-registro" for="nom">Nombre del usuario a editar</label><br>
                  <select name="nom" id="nom" class="form-control-login">
                  <option value="">--- Seleciona uno ---</option>
                    <?php
                   include 'conex.php';
  
                    // Verificar conexión
                    if ($conn->connect_error) {
                        die("Conexión fallida: " . $conn->connect_error);
                    }
                    $sql = "SELECT nombre_usuario  FROM usuario";
                    $result = $conn->query($sql);
  
                    if ($result->num_rows > 0) {
                        // Salida de cada fila
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['nombre_usuario'] . "'>" . $row['nombre_usuario'] . "</option>";
                        }
                    } else {
                        echo "<option value=''>No hay IDs disponibles</option>";
                    }
                    $conn->close();
                    ?>
                  </select>

                </div>
                <div class="form-group-login">
                <label class="color-fuente-registro" for="nom">Nombre del usuario a editar</label><br>
                <input type="text" name="nom2" id="nom2" placeholder="Nombre de usuario">
                </div>
                <button type="submit" class="btn-login">Buscar</button>
                <p id="aviso">Recuerde que para consultar el usuario a editar debe seleccionar solo un campo (ID o Nombre de usuario) o si va a escoger los dos asegurese que conincidad con el mismo registro</p>
                </form>
            </center>
          </article>
</body>
</html>      
    
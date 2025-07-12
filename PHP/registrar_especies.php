
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar especies</title>
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
           <article class="caja-blur" style="height:290px;"">
            <center>
              <div class="container-login">
              <h1 class="color-fuente-registro">Registrar especie</h1>
            <form action="especie_admin.php" method="post">
              <div class="form-group-login">
                  <label class="color-fuente-registro" for="n_e">Especie:</label><br><br>
                  <input type="text" class="form-control-login" id="username" placeholder="Ingrese la especie que desea registrar" name="n_e" required>
                </div>
                  <button type="submit" class="btn-login">Registrar</button>
              </form>
          </div>
            </center>
           </article>
</body>
</html>      

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar correos</title>
    <link rel="stylesheet" href="CSS.P/index.css" type="text/css">
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        padding: 20px;
      }
      input, textarea {
        width: 300px;
        margin-bottom: 10px;
        padding: 8px;
      }
      button {
        padding: 8px 16px;
      }
    </style>
  </head>
  
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
            <h1 class="color-fuente-registro">Enviar correo nota</h1>
            <form action="correos.php" method="post">
            <h2>Enviar correo</h2>
            <input type="text" name="correo_destino" placeholder="Correos destinatarios separados por coma" required><br>
    <input type="text" name="asunto" placeholder="Asunto" required><br>
    <textarea name="mensaje" placeholder="Mensaje" required></textarea><br>
    <button type="submit">Enviar</button>
  </form>
          </div>
        </div>
    </div>
              </center>
            </article>
</body>
</html>
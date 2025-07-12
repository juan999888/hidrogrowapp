<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS.P/index.css" type="text/css">
    <title>Document</title>
    <style>
        h1{
           color: black; 
        }
        </style>
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
           <article class="caja-blur" style="height:290px;"">
            <center>
              <div class="container-login">
    <form action="cuenta_eliminada.php" method="post">
        <h1>Seguro que desea eliminar su cuenta?</h1>
        <input type="submit" value="Eliminar">
    </form>
    <button onclick="volver();">Volver</button>
    <script>
        function volver(){
            window.location.href="perfil_hidro.php";
        }

    </script>
    </div>
            </center>
           </article>
</body>
</html>
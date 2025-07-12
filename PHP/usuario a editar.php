<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar usuario</title>
  <link rel="stylesheet" href="CSS.P/index.css">
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
                    <form action="usuario_editado (administrador).php" method="post">
        <div class="form-group-login">
                  <hr height=7px color="black">
                </div>


                <div class="form-group-login">
                    <label class="color-fuente-registro" for="id">ID:</label><br>
                    <?php
                   include 'conex.php';

                   $nombre_usu=$_POST['nom'];
                   $id=$_POST['id'];
                   $nom2=$_POST['nom2'];
                    $sql = "SELECT idusuario  FROM usuario WHERE nombre_usuario= '$nombre_usu' or idusuario='$id' OR nombre_usuario='$nom2'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    if ($result->num_rows == 1) {
                            echo "<input type='text' class='form-control-login' id='username' name='id' value=". $row['idusuario'] ." readonly value=". $row['idusuario'] ."> ";

                    } else {
                      
                    }
                    $conn->close();
                    ?>
                  </div>





                  <div class="form-group-login">
                  <label class="color-fuente-registro" for="n_u">Nombre de usuario:</label><br>
                  
                    <?php
                   include 'conex.php';

                   $nombre_usu=$_POST['nom'];
                   $id=$_POST['id'];
                    $sql = "SELECT nombre_usuario  FROM usuario WHERE nombre_usuario= '$nombre_usu' or idusuario='$id'OR nombre_usuario='$nom2'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    if ($result->num_rows == 1) {
                            echo "<input type='text' class='form-control-login' id='username'  value=". $row['nombre_usuario'] ."  name='n_u' readonly value=". $row['nombre_usuario'] ."> ";

                    } else {

                    }
                    $conn->close();
                    ?>
                    </div>
                  
                  
                    <div class="form-group-login">
                  <label class="color-fuente-registro" for="nombre">Nombre:</label><br>
                  
                    <?php
                   include 'conex.php';

                   $nombre_usu=$_POST['nom'];
                   $id=$_POST['id'];
                    $sql = "SELECT nombre  FROM usuario WHERE nombre_usuario= '$nombre_usu' or idusuario='$id'OR nombre_usuario='$nom2'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    if ($result->num_rows == 1) {
                            echo "<input type='text' class='form-control-login' id='username' name='nombre' readonly value=". $row['nombre'] ."> ";

                    } else {

                    }
                    $conn->close();
                    ?>
                    </div>

                  
                    <div class="form-group-login">
                    <label class="color-fuente-registro" for="email">Correo electrónico:</label><br>
                    <?php
                   include 'conex.php';

                   $nombre_usu=$_POST['nom'];
                   $id=$_POST['id'];
                    $sql = "SELECT email  FROM usuario WHERE nombre_usuario= '$nombre_usu' or idusuario='$id'OR nombre_usuario='$nom2'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    if ($result->num_rows == 1) {
                            echo "<input type='text' class='form-control-login' id='username' name='email' readonly value=". $row['email'] ."> ";

                    } else {

                    }
                    $conn->close();
                    ?>
                  </div>

                  
                  <div class="form-group-login">
                    <label class="color-fuente-registro" for="tel">Teléfono:</label><br>
                    <?php
                   include 'conex.php';

                   $nombre_usu=$_POST['nom'];
                   $id=$_POST['id'];
                    $sql = "SELECT telefono  FROM usuario WHERE nombre_usuario= '$nombre_usu' or idusuario='$id'OR nombre_usuario='$nom2'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    if ($result->num_rows == 1) {
                            echo "<input type='text' class='form-control-login' id='username' name='tel' readonly value=". $row['telefono'] ."> ";

                    } else {

                    }
                    $conn->close();
                    ?>
                  </div>
                  <div class="form-group-login">
                    <label class="color-fuente-registro" for="rol">Rol:</label><br>
                    
                    <select name="rol" id="rol"  class="form-control-login">
                      <option value=""><--Selecione uno--></option>
                      <option value="1">Administrador</option>
                      <option value="2">Usuario normal</option>
                    </select>
                    <br>
                  </div>
                  <button type="submit" class="btn-login">Editar</button><br>
                  
                </form>
                <a href="usuario consultado editar.php"><button class="btn-login" >Volver</button></a>
            </center>
          </article>
</body>
</html>      
    
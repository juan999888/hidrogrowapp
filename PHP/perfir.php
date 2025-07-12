<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar especies</title>
  <link rel="stylesheet" href="CSS.P/index.css" type="text/css">
      <style>
#eliminar_cuenta{
  background-color: red;
  width: 300px;
  height: 30px;
  border-radius: 20%;
}

h3, h4{
  text-align: left;
  margin-left: 15%;
  color:black ;
  font-size: medium;
}  
h1{
  color: black;
}
    </style>
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
                          <?php
include 'conex.php';
session_start();

if (!isset($_SESSION['user_id'])) {
  header("location:inicio sesion.html");
} else {
}
$id=$_SESSION['user_id'];
$nombre_usuario=$_SESSION['username'];
$sql="SELECT * FROM `usuario` WHERE `idusuario`='$id' or `nombre_usuario`='$nombre_usuario' ";
$result = $conex->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if ($row['genero']==2){
        $row['genero']="masculino";
      }
      else{
        $row['genero']="femenino";
      }
      if($row['idtipo documento']==1){
        $row['idtipo documento'] = "T.I";
      }
      if($row['idtipo documento']==2){
        $row['idtipo documento'] = "C.C";
      }
      if($row['idtipo documento']==3){
        $row['idtipo documento'] = "C.E";
      }
      if($row['idtipo documento']==4){
        $row['idtipo documento'] = "Otro";
      }
        echo "
      <h1>Datos de tu perfil</h1>
  
      <h3>ID de usuario: " . $row['idusuario'] . "  </h3>
      <br>
      <h3>Nombre de usuario: " . $row['nombre_usuario'] . "  </h3>
      <br>
      <h3>Nombre: " . $row['nombre'] . "  </h3>
      <br>
      <h3>Teléfono: " . $row['telefono'] . "  </h3>
      <br>
      <h3>Número de documento: " . $row['n_documento'] . "  </h3>
      <br>
      <h3>Email: " . $row['email'] . "  </h3>
      <br>
      <h3>Género: " . $row['genero'] . "  </h3>
      <br>
      <h3>Tipo de documento: " . $row['idtipo documento'] . "  </h3>
      <br>
      <h3>Area: " . $row['area'] . "  </h3>
      <br>
      ";
    }}
    
    ?>
          </div>
          <form action="eliminar_cuenta.php" method="post">
          <input type="submit" value="Eliminar cuenta" id="eliminar_cuenta">
  </form>
            </center>
           </article>
</body>
</html>      
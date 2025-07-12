<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de usuarios</title>
    <link rel="stylesheet" href="CSS.P/index.css">
<body style=" background-image: url(background.jpg);">
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
                <h1 class="color-fuente-registro">Resultados de consulta</h1>
            <?php
            include 'conex.php';

            $nombre_usuario = $_POST['n_u'];
            $nombre = $_POST['n_'];
            $id = $_POST['id_u'];
            $correo = $_POST['Email'];
            $rol = $_POST['Rol'];
            $n_d = $_POST['n_d'];
            $telefono = $_POST['tel'];
            $genero = $_POST['gender'];
            $tipo_doc = $_POST['t_d'];

            $sql = "SELECT * FROM `usuario` WHERE `idusuario`='$id' OR `nombre_usuario`='$nombre_usuario' OR `nombre`='$nombre' OR `telefono`='$telefono' OR `email`='$correo' OR `n_documento`= '$n_d' OR `roles_idroles` = '$rol' OR `genero`='$genero' OR `idtipo documento`='$tipo_doc'";
            $result = $conn->query($sql);
            if (!$result) {
                die("Error en la consulta: " . $conn->error);
            }

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr>
                        <th class='color-fuente-registro'>ID de usuario</th>
                        <th class='color-fuente-registro'>Nombre de usuario</th>
                        <th class='color-fuente-registro'>Nombre</th>
                        <th class='color-fuente-registro'>Teléfono</th>
                        <th class='color-fuente-registro'>Número de documento</th>
                        <th class='color-fuente-registro'>ID tipo de documento</th>
                        <th class='color-fuente-registro'>Email</th>
                        <th class='color-fuente-registro'>Rol</th>
                        <th class='color-fuente-registro'>Género</th>
                        <th class='color-fuente-registro'>Area</th>
                        <th class='color-fuente-registro'>Contraseña</th>
                      </tr>";
                while ($row = $result->fetch_assoc()) {
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
      if ($row['roles_idroles']==1){
        $row['roles_idroles']="Administrador";
      }
      else{
        $row['roles_idroles']="Hidroponista";
      }
                    echo "<tr>
                            <td class='color-fuente-registro'>" . $row['idusuario'] . "</td>
                            <td class='color-fuente-registro'>" . $row['nombre_usuario'] . "</td>
                            <td class='color-fuente-registro'>" . $row['nombre'] . "</td>
                            <td class='color-fuente-registro'>" . $row['telefono'] . "</td>
                            <td class='color-fuente-registro'>" . $row['n_documento'] . "</td>
                            <td class='color-fuente-registro'>" . $row['idtipo documento'] . "</td>
                            <td class='color-fuente-registro'>" . $row['email'] . "</td>
                            <td class='color-fuente-registro'>" . $row['roles_idroles'] . "</td>
                            <td class='color-fuente-registro'>" . $row['genero'] . "</td>
                            <td class='color-fuente-registro'>" . $row['area'] . "</td>
                            <td class='color-fuente-registro'>" . $row['contraseña'] . "</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "<p class='color-fuente-registro'>No se encontraron resultados.</p>";
            }

            mysqli_close($conn);
            ?>
                </center>
            </article>
            <style>
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}
th, td {
  border: 1px solid black;
  padding: 20px;
  text-align: left;
}
th {
  background-color: #f2f2f2;
}
</style>
</body>
</html>
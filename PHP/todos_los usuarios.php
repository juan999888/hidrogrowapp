<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar todos los usuarios</title>
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
        <h1 class="color-fuente-registro">Resultados de la consulta de todos los usuarios</h1>
                <tbody>
                    <?php
                    include 'conex.php';

                    $sql = "SELECT * FROM `usuario` WHERE 1";
                    $result = $conn->query($sql);
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
                              </tr>";
                    }
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
                                  </tr>";
                        }
                        echo "</table>";
                    ?>
                </tbody>
            </table>
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
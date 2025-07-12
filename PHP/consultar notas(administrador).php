
<!DOCTYPE html>
<html lang="es">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link rel="stylesheet" href="CSS.P/index.css" type="text/css">
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
  <h4 class="color-fuente-registro">Resultado de la consulta de notas</h4>
<?php

include 'conex.php';

$fs=$_POST['id'];
$nombre=$_POST['nombre'];
$etiqueta=$_POST['Etiqueta'];



$sql="SELECT * FROM `notas` WHERE `etiqueta`='$etiqueta' or `nombre`='$nombre' or `idnotas`='$fs' ";
$result = $conn->query($sql);
            echo "<table>";
            echo "<tr>
                    <th class='color-fuente-registro'>ID la etiqueta</th>
                    <th class='color-fuente-registro'>Titulo</th>
                    <th class='color-fuente-registro'>Nota</th>
                    <th class='color-fuente-registro'>Etiqueta</th>
                  </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td class='color-fuente-registro'>" . $row['idnotas'] . "</td>
                        <td class='color-fuente-registro'>" . $row['nombre'] . "</td>
                        <td class='color-fuente-registro'>" . $row['decripcion'] . "</td>
                        <td class='color-fuente-registro'>" . $row['etiqueta'] . "</td>
                      </tr>";
            }
            echo "</table>";
        ?>
    </tbody>
</table>
<style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
  </article>
</body>
</html>
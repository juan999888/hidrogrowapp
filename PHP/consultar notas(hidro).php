<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Notas</title>
    <link rel="stylesheet" href="CSS.P/index.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            color: black;
        }
        th, td {
            border: 1px solid #000000;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
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
            <article class="caja-blur">
                <center>
                <h1 class="color-fuente-registro">Resultados de la consulta de notas</h1>
            <?php
            include 'conex.php';

            $fs = $_POST['id'];
            $nombre = $_POST['nombre'];
            $etiqueta = $_POST['Etiqueta'];

            $sql = "SELECT `idnotas`, `etiqueta`, `nombre`, `decripcion` FROM `notas` WHERE `etiqueta`='$etiqueta' OR `nombre`='$nombre' OR `idnotas`='$fs'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Crear la tabla
                echo "<table>";
                echo "<tr>
                        <th class='color-fuente-registro'>ID de Nota</th>
                        <th class='color-fuente-registro'>Nombre de Nota</th>
                        <th class='color-fuente-registro'>Etiqueta de Nota</th>
                        <th class='color-fuente-registro'>Descripción</th>
                      </tr>";
                // Mostrar los resultados en filas de la tabla
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td class='color-fuente-registro'>" . $row['idnotas'] . "</td>
                            <td class='color-fuente-registro'>" . $row['nombre'] . "</td>
                            <td class='color-fuente-registro'>" . $row['etiqueta'] . "</td>
                            <td class='color-fuente-registro'>" . $row['decripcion'] . "</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No se encontraron resultados.</p>";
            }

            $conn->close();
            ?>
                </center>
            </article>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas completas</title>
    <link rel="stylesheet" href="CSS.P/index.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
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
            <h1 class="color-fuente-registro">Resultados de la consulta de Notas</h1>
            <?php
            include 'conex.php';

            // Verificar conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM `notas` WHERE 1";
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
                echo "<p class='color-fuente-registro'>No se encontraron resultados.</p>";
            }

            $conn->close();
?>
            </center>
        </article>
   
</body>
</html>
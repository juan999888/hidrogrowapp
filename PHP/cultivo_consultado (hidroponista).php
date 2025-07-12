<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cultivo consultado</title>
    <link rel="stylesheet" href="CSS.P/index.css">
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
            <h1>Consultar cultivo</h1>
            <table>
                <thead>
                    <tr> 
                        <th class='color-fuente-registro'>Nombre de cultivo</th>
                        <th class='color-fuente-registro'>ID cultivo</th>
                        <th class='color-fuente-registro'>Especie cultivo</th>
                        <th class='color-fuente-registro'>Cantidad</th>
                        <th class='color-fuente-registro'>Fecha de siembra</th>
                        <th class='color-fuente-registro'>Descripción del cultivo</th>
                    </tr>
                </thead>
                <tbody>
            <?php
include 'conex.php';

$id=$_POST['id_c'];
$nombre=$_POST['n_cl'];
$especie=$_POST['especie'];
$fecha=$_POST['fec'];


$sql="SELECT * FROM `cultivo` WHERE
     `idcultivo`='$id' or `nombre`='$nombre' or `especie`='$especie' or `fechaDeSiembra`='$fecha'	 ";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
      echo "
      <tr>
          <td class='color-fuente-registro'>" . $row['nombre'] . "</td>
          <td class='color-fuente-registro'>" . $row['idcultivo'] . "</td>
          <td class='color-fuente-registro'>" . $row['especie'] . "</td>
          <td class='color-fuente-registro'>" . $row['cantidad'] . "</td>
          <td class='color-fuente-registro'>" . $row['fechaDeSiembra'] . "</td>
          <td class='color-fuente-registro'>" . $row['cultivocol'] . "</td>
      </tr>
      ";
  }
  mysqli_close($conn);
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
</body>
</html>
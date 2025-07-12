<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Cultivo</title>
    <link rel="stylesheet" href="CSS.P/index.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <style>
      
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 20%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: black;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(158, 255, 120, 0.8);
}

    #graficas1, #graficas2{
      width: 65%;
      height: 75%;
      margin-left: 20%;
      background-color: #568556;
      margin-top: auto;
    }
    table
        {
            width: 60%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td
        {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        canvas
        {
            display: block;
            margin: auto;
        }
        button
        {
            padding: 10px 20px;
            font-size: 16px;
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
<article class="caja-blur" style="height:550px">
    <center>
        <h1 class="color-fuente-registro">Resultados de la consulta de todos los cultivos</h1>
    <table>
    <thead>
     <tr>
    <th class="color-fuente-registro">Nombre de cultivo</th>
    <th class="color-fuente-registro">ID cultivo</th>
    <th class="color-fuente-registro">Especie cultivo</th>
    <th class="color-fuente-registro">Cantidad</th>
    <th class="color-fuente-registro">Fecha de siembra</th>
    <th class="color-fuente-registro">Descripción del cultivo</th>
    </tr>
    </thead>
    <tbody>
        <?php
        include 'conex.php';
        $sql = "SELECT * FROM `cultivo` WHERE 1";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
        <td class='color-fuente-registro'>" . $row['nombre'] . "</td>
        <td class='color-fuente-registro'>" . $row['idcultivo'] . "</td>
        <td class='color-fuente-registro'>" . $row['especie'] . "</td>
        <td class='color-fuente-registro'>" . $row['cantidad'] . "</td>
        <td class='color-fuente-registro'>" . $row['fechaDeSiembra'] . "</td>
        <td class='color-fuente-registro'>" . $row['cultivocol'] . "</td>
        </tr>";}?>
</tbody>
</table>
    </center>
</article>

            

</body>
</html>
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
        session_start();
$id=$_SESSION['user_id'];
        $sql = "SELECT * FROM `cultivo` WHERE nombre IN (SELECT nombre_culti FROM usuario_y_cultivo WHERE usuario_idusuario = $id)";
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
  background-color: green;
}
th {
  background-color:rgb(242, 242, 242);
}
</style>
<script src="script.js">
</script><div id="graficas1" class="mySlides fade"><a class="next" onclick="plusSlides(1)">❯</a>
    <?php
      include 'conex.php';
      
      $consulta = "SELECT especie, COUNT(*) AS cantidad FROM cultivo GROUP BY especie;";
      $resultado = $conn->query($consulta);
      
      $vendedores = [];
      $montos = [];
      
      while ($fila = $resultado->fetch_assoc()) {
          $vendedores[] = $fila["especie"];
          $montos[] = $fila["cantidad"];
      }
    ?>
    
    <h3><?php

?></h3>
    5<canvas id="ventasChart" width="600" height="300"></canvas>
    
    <div class="btn-container">
      <button onclick="exportToPDF()">Exportar a PDF</button>
    </div>
    
    <script>
      const ctx = document.getElementById('ventasChart').getContext('2d');
      const chart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: <?php echo json_encode($vendedores); ?>,
              datasets: [{
                  label: 'Cantidad de cultivos por especie',
                  data: <?php echo json_encode($montos); ?>,
                  backgroundColor: 'rgba(255, 95, 95, 0.6)',
                  borderColor: 'rgb(144, 211, 255)',
                  borderWidth: 1
              }]
          },
          options: {
              responsive: true,
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });

      function exportToPDF() {
          const { jsPDF } = window.jspdf;
          const pdf = new jsPDF('p', 'mm', 'a4');
          
          html2canvas(document.body).then(canvas => {
              const imgData = canvas.toDataURL('image/png');
              pdf.addImage(imgData, 'PNG', 10, 10, 190, 0);
              pdf.save('Reporte_Ventas.pdf');
          });
      }
    </script>

</body>
</html>
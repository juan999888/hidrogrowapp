<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header("location:inicio sesion.html");
} else {
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard administrador</title>
  <link rel="stylesheet" href="CSS/index.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <style>
      #FrameDashboard{
        width: 65%;
        background-color:  white;
        margin-left: 35%;
        margin-top: -15%;
      }
    </style>
</head>
<body>
  <nav class="nav-index-dos">
    <img class="logo" src="IMG/slogobw.png" alt="">
  <div id="div-nav">
    <a class="nav-dos" href="inicio_na (administrador).html">INICIO</a>
    <a class="nav-dos" href="libros nad (administrador).html">LIBROS</a>
    <a id="nav-dos" href="PHP/perfir.php">PERFIL</a>
    <a class="nav-dos" href="PHP/cerrar_sesion.php">LOGOUT</a>
  </div>
</nav>
    </div>
    <article class="caja-blur" style="height: 1100px;">
        <hr><br>
        <div>
        <div class="menu">
            <div class="menu-item">
                <a href="#" class="menu-link">Cultivos</a>
                <div class="submenu">
                    <a href="PHP/crear cultivo(administrador).php" class="submenu-link">Registrar</a>
                    <a href="PHP/editar cultivo (administrador).php" class="submenu-link">Editar</a>
                    <a href="PHP/consultar_cultivo(administrador).php" class="submenu-link">Consultar</a>
                    <a href="PHP/todos_los cultivos.php" class="submenu-link">Consultar todos los cultivos</a>
                    <a href="importar_cultivos_ecxel.html" class="submenu-link">Importar datos de cultivos desde excel</a>
                    <a href="PHP/registrar_especies.php" class="submenu-link">Registar especies</a>
                    <form action="PHP/informe_ecxel_cultivos.php" method="post">
                      <center><input type="submit" value="Generar informe de excel de los cultivos" class="excel"></center>
                    </form>
                </div>
            </div>
            <div class="menu-item">
                <a href="#" class="menu-link">Usuarios</a>
                <div class="submenu">
                    <a href="PHP/usuario consultado editar.php" class="submenu-link">Editar</a>
                    <a href="PHP/buscar usuario (administrador).php" class="submenu-link">Consultar</a>
                    <a href="PHP/direcionCorreo.php" class="submenu-link">Enviar correos</a>
                    <a href="PHP/todos_los usuarios.php" class="submenu-link">Consultar todos los usuarios</a>
                    <form action="PHP/informe_ecxel_usuarios.php" method="post">
                      <center><input type="submit" value="Generar informe de excel de los Usuarios" class="excel"></center>
                    </form>
                </div>
            </div>
            <div class="menu-item">
              <a href="#" class="menu-link">Notas</a>
              <div class="submenu">
                  <a href="Crear nota_administrador.html" class="submenu-link">Registrar</a>
                  <a href="PHP/consultar notass(administrador).php" class="submenu-link">Consultar</a>
                  <a href="PHP/Eliminar nota_administrador.php" class="submenu-link">Eliminar</a>
                  <a href="PHP/Mirar todas las notas_administrador.php" class="submenu-link">Consultar todas las notas</a>
                  <form action="PHP/informe_ecxel_notas.php" method="post">
                    <center><input type="submit" value="Generar informe de excel de las notas" class="excel"></center>
                  </form>
              </div>
          </div>
        </div>
    <script src="SCRIPT/script.js"></script>
    <div id="FrameDashboard">
    <h1><style>
table {
  width: 100%;
  border-collapse: collapse;
  height: 30%;
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
      $server="localhost";
      $user="root";
      $pass="";
      $db="grow apphidro";
      $conn=new mysqli($server,$user,$pass,$db);
      
      $consulta = "SELECT especie, COUNT(*) AS cantidad FROM cultivo GROUP BY especie;";
      $resultado = $conn->query($consulta);
      
      $vendedores = [];
      $montos = [];
      
      while ($fila = $resultado->fetch_assoc()) {
          $vendedores[] = $fila["especie"];
          $montos[] = $fila["cantidad"];
      }
    ?>
    <canvas id="ventasChart" width="600" height="300"></canvas>
    
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
    <script>
      const ctx2 = document.getElementById('ventasChart2').getContext('2d');
      const chart2 = new Chart(ctx2, {
          type: 'bar',
          data: {
              labels: <?php echo json_encode($vendedores); ?>,
              datasets: [{
                  label: 'Cantidad de cultivos por usuario',
                  data: <?php echo json_encode($montos); ?>,
                  backgroundColor: 'rgba(95, 255, 95, 0.6)',
                  borderColor: 'rgb(136, 255, 136)',
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

      function exportToPDF2() {
          const { jsPDF } = window.jspdf;
          const pdf = new jsPDF('p', 'mm', 'a4');
          
          html2canvas(document.body).then(canvas => {
              const imgData = canvas.toDataURL('image/png');
              pdf.addImage(imgData, 'PNG', 10, 10, 190, 0);
              pdf.save('Reporte.pdf');
          });
      }
    </script>
  </div>
</script></h1>
  </div>
</article>

</body>
</html>
</body>
</html>
?>
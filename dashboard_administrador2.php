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
</head>
<body>
  <nav class="nav-index-dos">
    <img class="logo" src="IMG/slogobw.png" alt="">
  <div id="div-nav">
    <a class="nav-dos" href="inicio_na (administrador).html">INICIO</a>
    <a class="nav-dos" href="libros nad (administrador).html">LIBROS</a>
    <a id="nav-dos" href="dashboard_administrador.html">DASHBOARD</a>
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
                    <a href="crear usuario (administrador).html" class="submenu-link">Registrar</a>
                    <a href="PHP/usuario consultado editar.php" class="submenu-link">Editar</a>
                    <a href="PHP/buscar usuario (administrador).php" class="submenu-link">Consultar</a>
                    <a href="PHP/correos.php" class="submenu-link">Enviar correos</a>
                    <a href="PHP/todos_los usuarios.php" class="submenu-link">Consultar todos los usuarios</a>
                    <a href="importar_usuarios_ecxel.html" class="submenu-link">Importar datos de usuarios desde excel</a>
                    <a href="PHP/eliminar usuario (administrador).php" class="submenu-link">Eliminar</a>
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
    

</article>
</body>
</html>
</body>
</html>
?>
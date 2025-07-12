<?php
include 'conex.php';
$consulta = "SELECT * FROM usuario WHERE 1"; 
$resultado = $conex->query($consulta);   

// Verifica si la consulta fue exitosa
if (!$resultado) {
    die("Error en la consulta: " . $conex->error);
}

header("Content-Type: application/vnd.ms-excel; charset=utf8bm4");
header("Content-Disposition: attachment; filename=datos_usuarios.xls");

?>
<table>

<caption> Datos Cultivos</caption>
<tr>
    <th>Id cultivo</th>
    <th>Nombre</th>
    <th>Especie</th>
    <th>Cantidad</th>
    <th>Fecha siembra</th>
    <th>Descripcion</th>
</tr>

<?php

while ($fila = $resultado->fetch_assoc()) { ?>

<tr>
    <td><?php echo $fila['idusuario']; ?></td>
    <td><?php echo $fila['nombre_usuario']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['telefono']; ?></td>
    <td><?php echo $fila['n_documento']; ?></td>
    <td><?php echo $fila['email']; ?></td>
    <td><?php echo $fila['roles_idroles']; ?></td>
</tr>

<?php } ?>

</table>
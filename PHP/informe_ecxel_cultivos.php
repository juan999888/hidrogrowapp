<?php

include 'conex.php';
$consulta = "SELECT * FROM cultivo WHERE 1"; 
$resultado = $conex->query($consulta);   

// Verifica si la consulta fue exitosa
if (!$resultado) {
    die("Error en la consulta: " . $conex->error);
}

header("Content-Type: application/vnd.ms-excel; charset=utf8bm4");
header("Content-Disposition: attachment; filename=datos_cultivos.xls"); 

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
    <td><?php echo $fila['idcultivo']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['especie']; ?></td>
    <td><?php echo $fila['cantidad']; ?></td>
    <td><?php echo $fila['fechaDeSiembra']; ?></td>
    <td><?php echo $fila['cultivocol']; ?></td>
</tr>

<?php } ?>

</table>
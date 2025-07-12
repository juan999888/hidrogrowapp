<?php

include 'conex.php';
$consulta = "SELECT * FROM notas WHERE 1";
$resultado = $conex->query($consulta);   

// Verifica si la consulta fue exitosa
if (!$resultado) {
    die("Error en la consulta: " . $conex->error);
}

header("Content-Type: application/vnd.ms-excel; charset=utf8bm4");
header("Content-Disposition: attachment; filename=datos_notas.xls");

?>
<table>

<caption> Datos Cultivos</caption>
<tr>
    <th>Id nota</th>
    <th>Etiqueta</th>
    <th>Titulo</th>
    <th>Descripcion</th>
</tr>

<?php

while ($fila = $resultado->fetch_assoc()) { ?>

<tr>
    <td><?php echo $fila['idnotas']; ?></td>
    <td><?php echo $fila['etiqueta']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['decripcion']; ?></td>
</tr>

<?php } ?>

</table>
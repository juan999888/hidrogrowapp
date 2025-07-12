<?php
include 'conex.php';

$conditions = [];
if (!empty($_GET['nombre'])) {
    $conditions[] = "nombre = '" . $conn->real_escape_string($_GET['nombre']) . "'";
}
if (!empty($_GET['idcultivo'])) {
    $conditions[] = "idcultivo = '" . $conn->real_escape_string($_GET['idcultivo']) . "'";
}
if (!empty($_GET['especie'])) {
    $conditions[] = "especie = '" . $conn->real_escape_string($_GET['especie']) . "'";
}
if (!empty($_GET['cantidad'])) {
    $conditions[] = "cantidad = '" . $conn->real_escape_string($_GET['cantidad']) . "'";
}
if (!empty($_GET['fechaDeSiembra'])) {
    $conditions[] = "fechaDeSiembra = '" . $conn->real_escape_string($_GET['fechaDeSiembra']) . "'";
}

$sql = "SELECT * FROM cultivo" . (count($conditions) ? " WHERE " . implode(' AND ', $conditions) : "");
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>" . $row['nombre'] . "</td>
        <td>" . $row['idcultivo'] . "</td>
        <td>" . $row['especie'] . "</td>
        <td>" . $row['cantidad'] . "</td>
        <td>" . $row['fechaDeSiembra'] . "</td>
    </tr>";
}

mysqli_close($conn);
?>
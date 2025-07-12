<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controlador cultivo editado</title>
</head>
<body>
<?php
include 'conex.php';

// Asegúrate de que el ID del cultivo se pase desde el formulario
$idcultivo = $_POST['id']; // Suponiendo que tienes un campo oculto o visible para el ID
$nom_ae=$_POST['n_ce'];

$nom = $_POST['n_cl'];
$esp = $_POST['especie'];
$cant = $_POST['id_c'];
$fecha_s = $_POST['f_s'];
$descripcion = $_POST['des'];
$nombre = $_POST['nom'];

$updates = [];
if (!empty($nom)) {
    $updates[] = "nombre='$nom'";
}
if (!empty($esp)) {
    $updates[] = "especie='$esp'";
}
if (!empty($cant)) {
    $updates[] = "cantidad='$cant'";
}
if (!empty($fecha_s)) {
    $updates[] = "fechaDeSiembra='$fecha_s'";
}
if (!empty($descripcion)) {
    $updates[] = "cultivocol='$descripcion'";
}

if (count($updates) > 0) {
    $sql = "UPDATE `cultivo` SET " . implode(", ", $updates) . "WHERE idcultivo='$idcultivo' OR nombre='$nom_ae'";

    if ($conn->query($sql) === TRUE) {
        header("location: ../cultivo editado (administrador).html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "No se han proporcionado datos para actualizar.";
}

$conn->close();
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'conex.php';

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nom = $_POST['n_cl'];
$cant = $_POST['id_c'];
$esp = $_POST['especie'];
$fech = $_POST['id_s'];
$id = $_POST['ida'];
$desc = $_POST['des'];
$nombre_e = $_POST['n_ce'];

// Inicializar un array para almacenar las partes de la consulta
$updates = [];

// Solo agregar los campos que no están vacíos
if (!empty($nom)) {
    $updates[] = "`nombre`='$nom'";
}
if (!empty($esp)) {
    $updates[] = "`especie`='$esp'";
}
if (!empty($cant)) {
    $updates[] = "`cantidad`='$cant'";
}
if (!empty($fech)) {
    $updates[] = "`fechaDeSiembra`='$fech'";
}
if (!empty($desc)) {
    $updates[] = "`cultivocol`='$desc'";
}

// Verificar si hay campos para actualizar
if (count($updates) > 0) {
    // Unir las partes de la consulta en una sola cadena
    $sql = "UPDATE `cultivo` SET " . implode(", ", $updates) . " WHERE idcultivo='$id' OR nombre = '$nombre_e'";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        header("Location: ../cultivo editado (hidroponista).html");
        exit(); // Asegúrate de salir después de redirigir
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
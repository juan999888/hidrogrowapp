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
    die("Connection failed: " . $conn->connect_error);
}

$nom = $_POST['n_u'];
$id = $_POST['id_u'];
$n_d = $_POST['n_d'];

// Primero, eliminar los registros relacionados en usuario_y_cultivo
$sql_delete_related = "DELETE FROM `usuario_y_cultivo` WHERE `usuario_idusuario`='$id'";
$conn->query($sql_delete_related);

// Luego, eliminar el usuario
$sql = "DELETE FROM `usuario` WHERE `nombre_usuario`='$nom' AND `idusuario`='$id' AND `n_documento`='$n_d'";
if ($conn->query($sql) === TRUE) {
    header("Location: ../usuario eliminado (administrador).html");
    exit(); // Asegúrate de usar exit después de header
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
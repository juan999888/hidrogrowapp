<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario editado</title>
</head>
<body>
<?php
include 'conex.php';

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre_u=$_POST['n_u'];
$id=$_POST['id'];

$rol = $_POST['rol'];

    $sql = "UPDATE `usuario` SET `roles_idroles`='$rol' WHERE `idusuario`='$id' AND nombre_usuario='$nombre_u'";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        header("Location: ../usuario_editado (administrador).html");
        exit(); // Asegúrate de salir después de redirigir
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


$conn->close();
?>
</body>
</html>
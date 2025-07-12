




<?php

include 'conex.php';

$nota=$_POST['nota'];
$nombre=$_POST['nombre'];
$etiqueta=$_POST['Etiqueta'];


$sql="INSERT INTO `notas` (`idnotas`, `etiqueta`, `nombre`, `decripcion`) VALUES (NULL,'$etiqueta','$nombre','$nota')";
if ($conn->query($sql) === TRUE) {
  header("location: ../notaok.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>


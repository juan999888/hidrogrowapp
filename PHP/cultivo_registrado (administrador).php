
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

$nom=$_POST['n_cl'];
$esp=$_POST['especie'];
$cant=$_POST['id_c'];
$fecha_s=$_POST['f_s'];
$descripcion=$_POST['des'];


$sql= "INSERT INTO `cultivo`(`idcultivo`, `nombre`, `cantidad`, `fechaDeSiembra`, `cultivocol`, `especie`) VALUES (null,'$nom','$cant','$fecha_s','$descripcion','$esp') 
    ";
    
    if ($conn->query($sql) === TRUE) {
        header("location: ../cultivo_registrado (administrador).html ");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>
</body>
</html>
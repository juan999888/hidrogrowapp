
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
$id=$_POST['id_c'];
$esp=$_POST['especie'];


$sql= "DELETE FROM `cultivo` WHERE  `nombre`='$nom' and `idcultivo`='$id' and `especie_id_especie`='$esp'
    ";
    $result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        header("location: ../cultivo_eliminado (administrador).html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>
</body>
</html>
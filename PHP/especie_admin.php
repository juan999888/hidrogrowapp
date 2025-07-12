
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

$nom=$_POST['n_e'];
session_start();
$id=$_SESSION['user_id'];

$sql= "INSERT INTO `especie` (`idespecie`, `especie`) VALUES (NULL, '$nom')";
$sql2= "INSERT INTO `usuario_y_especie`(`idusuario`, `especie`) VALUES ('$id','$nom')";
    
    if ($conn->query($sql) === TRUE && $conn->query($sql2) == true) {
        header("location: ../especie_ok (administrador).html ");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>
</body>
</html>


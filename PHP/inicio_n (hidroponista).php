
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
$nom2 = $_POST['n_cl2'];
$esp=$_POST['especie'];
$cant=$_POST['id_c'];
$fecha_s=$_POST['f_s'];
$descripcion=$_POST['des'];
session_start();
$id=$_SESSION['user_id'];


if ($nom != ""){
    
$sql2="SELECT * FROM cultivo WHERE nombre ='$nom'";
$verificar=$conn->query($sql2);
$sql="UPDATE cultivo SET cantidad = cantidad + '$cant' WHERE nombre = '$nom';";
$sql_3="INSERT INTO `usuario_y_cultivo`(`usuario_idusuario`, `nombre_culti`) VALUES ('$id','$nom')";
}
if($nom2 != ""){
    $sql= "INSERT INTO `cultivo`(`idcultivo`, `nombre`, `cantidad`, `fechaDeSiembra`, `cultivocol`, `especie`) VALUES (null,'$nom2','$cant','$fecha_s','$descripcion','$esp')";
    $sql_3="INSERT INTO `usuario_y_cultivo`(`usuario_idusuario`, `nombre_culti`) VALUES ('$id','$nom2')";
}


    if ($conn->query($sql) === TRUE && $conn->query($sql_3) === TRUE) {
        header("location: ../cultivo_registrado (hidroponista).html ");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>
</body>
</html>
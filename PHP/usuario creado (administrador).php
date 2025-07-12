<?php

include 'conex.php';

$nombre=$_POST['name'];
$username=$_POST['username'];
$phone=$_POST['phone'];
$t_d=$_POST['t_d'];
$documento_=$_POST['documento'];
$correo=$_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$rol=$_POST['Rol'];


$sql="INSERT INTO `usuario` (`idusuario`, `nombre`, `nombre_usuario`, `telefono`, `idtipo documento`, `n_documento`, `email`, `genero`, `contraseña`, `roles_idroles`) VALUES (NULL, '$nombre', '$username', '$phone','$t_d', '$documento_', '$correo', '$gender','$password','$rol')";

$result = $conn->query($sql);

if ($result){
    header("location: ../usuario creado (administrador).html");
}
else{
    echo "el eroores:"
    . $conn->error;
}
mysqli_close($conn);
?>

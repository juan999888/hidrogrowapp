<?php
include('conex.php');

$username=$_POST['username'];
$nombre=$_POST['name'];
$phone=$_POST['phone'];
$t_d=$_POST['t_d'];
$documento_=$_POST['documento_'];
$correo=$_POST['correo'];
$contraseña=$_POST['password'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$gender=$_POST['gender'];
$area = $_POST['area'];

if(isset($_POST["registrar"])){
    $sql="INSERT INTO `usuario` (`idusuario`, `nombre`, `nombre_usuario`, `telefono`, `idtipo documento`, `n_documento`, `email`, `genero`, `contraseña`, `roles_idroles`,`contraseñaNE`,`area`) VALUES (NULL, '$nombre', '$username', '$phone','$t_d', '$documento_', '$correo', '$gender', '$password', '2','$contraseña','$area')";
}



$insrtador = mysqli_query($conex,$sql);
if ($insrtador == true){
    header("location: ../registrado.html");
}

else{
    header("location: ../error_registro.html");
    //echo "Error: " . $sql . "<br>" . $conex->error;
}
mysqli_close($conex);
?>

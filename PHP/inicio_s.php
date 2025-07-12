<?php

session_start();
include 'conex.php';


    $user = $_POST['n_usu'];
    $pass = $_POST['contra'];
    
    // Consultar el usuario
    $sql = "SELECT * FROM usuario WHERE nombre_usuario='$user'";
    $result = $conex->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificar la contraseña
        if (password_verify($pass, $row['contraseña'])) {
            // Almacenar datos en la sesión
            $_SESSION['user_id'] = $row['idusuario'];
            $_SESSION['username'] = $row['nombre_usuario'];
            if (($row['roles_idroles'])==1){
                header("location:../dashboard_administrador.php");
            }
            else{
                header("location:../dashboard_hidroponista (hidroponista).php");
        
            }
        } else {
            header("location:../inicio_sesion_fallido.html");
        }
    } else {
        header("location:../inicio_sesion_fallido.html");
    }
    


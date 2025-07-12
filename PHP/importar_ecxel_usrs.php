<?php
include 'conex.php';
// Procesar archivo CSV
if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['file']['tmp_name'];

    // Abrir el archivo
    $file = fopen($fileTmpPath, "r");

    // Leer líneas del archivo
    while (($data = fgetcsv($file, 1000, ";")) !== FALSE) {
        // Escapar los datos para evitar inyecciones SQL
        $id = $conn->real_escape_string($data[0]);
        $nombre = $conn->real_escape_string($data[1]);
        $nombre_u = $conn->real_escape_string($data[2]);
        $tel = $conn->real_escape_string($data[3]);
        $tipo_doc = $conn->real_escape_string($data[4]);
        $n_doc = $conn->real_escape_string($data[5]);
        $email = $conn->real_escape_string($data[6]);
        $genero = $conn->real_escape_string($data[7]);
        $contra = $conn->real_escape_string($data[8]);
        $rol = $conn->real_escape_string($data[9]);
        $contrane = $conn->real_escape_string($data[10]);
        $password = password_hash($contra, PASSWORD_DEFAULT);
        // Insertar en la base de datos
        $sql = "INSERT INTO `usuario` (`idusuario`, `nombre`, `nombre_usuario`, `telefono`, `idtipo documento`, `n_documento`, `email`, `genero`, `contraseña`, `roles_idroles`,`contraseñaNE`) VALUES ('$id', '$nombre', '$nombre_u', '$tel', '$tipo_doc', '$n_doc', '$email','$genero','$password','$rol','$contrane')";
       
        if (!$conn->query($sql)) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    fclose($file);
    header("location: ../datos_user_importados_admin.html");
} else {
    echo "Error al cargar el archivo.";
}

?>
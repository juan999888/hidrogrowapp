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

        // Insertar en la base de datos
        $sql = "INSERT INTO `especie`(`idespecie`, `especie`) VALUES ('$id', '$nombre')";
       
        if (!$conn->query($sql)) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    fclose($file);
    header("location: ../datos_especies_ok.html");
} else {
    echo "Error al cargar el archivo.";
}

?>
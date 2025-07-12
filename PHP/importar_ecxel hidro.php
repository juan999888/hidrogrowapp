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
        $idCultivo = $conn->real_escape_string($data[0]);
        $nombre = $conn->real_escape_string($data[1]);
        $cantidad = $conn->real_escape_string($data[2]);
        $fechaDeSiembra = $conn->real_escape_string($data[3]);
        $cultivoCol = $conn->real_escape_string($data[4]);
        $especie = $conn->real_escape_string($data[5]);
        // Insertar en la base de datos
        $sql = "INSERT INTO `cultivo`(`idcultivo`, `nombre`, `cantidad`, `fechaDeSiembra`, `cultivocol`, `especie`) VALUES  (null, '$nombre', '$cantidad', '$fechaDeSiembra', '$cultivoCol', '$especie')";
       
        if (!$conn->query($sql)) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    fclose($file);
    header("location: ../datos cultivos ok hidro.html");
} else {
    echo "Error al cargar el archivo.";
}

?>
<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "sistema_registro";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$id = $_POST['id'] ?? '';

if (empty($id)) {
    echo "El ID del paciente es obligatorio.";
} else {

    $sql = "DELETE * FROM pacientes WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Paciente eliminado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

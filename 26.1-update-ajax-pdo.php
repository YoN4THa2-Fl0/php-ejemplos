<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $talla = $_POST['talla'];
    $peso = $_POST['peso'];

    $tos = array_key_exists("tos", $_POST) ? $_POST['tos'] : "0";
    $tos = $tos == "" ? "0" : $tos;
    $fiebre = array_key_exists("fiebre", $_POST) ? $_POST['fiebre'] : "0";
    $fiebre = $fiebre == "" ? "0" : $fiebre;
    $disnea = array_key_exists("disnea", $_POST) ? $_POST['disnea'] : "0";
    $disnea = $disnea == "" ? "0" : $disnea;
    $gripe = array_key_exists("gripe", $_POST) ? $_POST['gripe'] : "0";
    $gripe = $gripe == "" ? "0" : $gripe;

    if (empty($nombre) || empty($apellido) || empty($edad) || empty($talla) || empty($peso)) {
        echo "Todos los campos son obligatorios.";
        exit();
    }

    $servername = "localhost";
    $username = "root";
    $password = "root";    
    $dbname = "covid";    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->beginTransaction();
        $sql = "UPDATE pacientes SET 
            apellidos = :apellidos,
            edad = :edad,
            talla_m = :talla,
            peso_kg = :peso,
            sintoma_tos = :tos,
            sintoma_fiebre = :fiebre,
            sintoma_disnea = :disnea,
            sintoma_gripe = :gripe
            WHERE nombres = :nombre";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':nombre' => $nombre,
            ':apellidos' => $apellido,
            ':edad' => $edad,
            ':talla' => $talla,
            ':peso' => $peso,
            ':tos' => $tos,
            ':fiebre' => $fiebre,
            ':disnea' => $disnea,
            ':gripe' => $gripe
        ]);

        $conn->commit();
        echo "Fue registrado correctamente.";
    } catch (Exception $e) {
        $conn->rollBack();
        echo "Error: " . $e->getMessage();
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] =="POST") {
    try {
        $nombre = $_POST["nombre"];
        $dsn = "mysql:host=localhost;dbname=covid";
        $user = "root";
        $pass = "";
        $db = new PDO($dsn, $user, $pass);
        $query = "SELECT * FROM pacientes WHERE nombres LIKE :nombre";
        $stmt = $db->prepare($query);
        $stmt->execute([':nombre' => "%$nombre%"]);
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultado);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
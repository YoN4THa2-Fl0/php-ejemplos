<?php
try {
    $dsn ="mysql:host=localhost;dbname=covid";
    $user="root";
    $pass="";
    $db = new PDO($dsn, $user, $pass);
    echo "Hola base de datos tengo conexion\n";
    $pacientes = $db ->query('SELECT * FROM pacientes where 14<=edad AND edad<= 19');
    foreach ($pacientes as $row) {
        echo$row["nombres"]." ".$row["apellidos"].", EDAD :  ".$row["edad"]."\n"; 
    }

} catch (PDOException $e){
    echo "Error : ".$e->getMessage(); 
}
?>
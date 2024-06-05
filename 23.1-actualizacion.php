

<?php

if ($_SERVER ["REQUEST_METHOD"]=="POST") {
    $nombre =$_POST['nombre'];
    $apellido =$_POST['apellido'];
    $edad =$_POST['edad'];
    $talla =$_POST['talla'];
    $peso =$_POST['peso'];

    $tos = array_key_exists("tos",$_POST) ? $_POST['tos'] : "0";
    $tos = $tos =="" ? "0" : $tos;

    $fiebre = array_key_exists("fiebre",$_POST) ? $_POST['fiebre'] : "0";
    $fiebre = $fiebre =="" ? "0" : $fiebre;

    $disnea = array_key_exists("disnea",$_POST) ? $_POST['disnea'] : "0";
    $disnea = $disnea =="" ? "0" : $disnea;

    $dolor_muscular = array_key_exists("dolor_muscular",$_POST) ? $_POST['dolor_muscular'] : "0";
    $dolor_muscular = $dolor_muscular =="" ? "0" : $dolor_muscular;


    if (empty($nombre) || empty($apellido) || empty($edad) || empty($talla) || empty($peso)) {
echo "todos los campos son obligatorios";

} 
if($tos== 1|| $fiebre== 1|| $disnea== 1|| $dolor_muscular== 1) {
    $resultado ="1";
}
else {
    $resultado ="0";
}

if ($talla<0 || $talla >250){
    echo "ingrese un valor valido (0 a 250)";
}
else {
$servername = "localhost";
$username ="root";
$password ="root";
$dbname ="covid"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

    $conn->beginTransaction();
    $sql="INSERT INTO pacientes (nombres, apellidos,
    edad, talla_m, 
    peso_kg, sintoma_tos, 
    sintoma_fiebre, sintoma_disnea, 
    sintoma_dolormuscular,
    resultado)

    VALUES ('$nombre', '$apellido', '$edad', '$talla', '$peso', '$tos', '$fiebre', '$disnea',
    '$dolor_muscular');";

    $conn->exec($sql);
    $conn->commit();
    echo "fue registrado correctamente.";

}
catch(Exception $e) {
    echo "Error : ".$e->getMessage();
}

}
}
?>
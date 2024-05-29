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

    $gripe = array_key_exists("gripe",$_POST) ? $_POST['gripe'] : "0";
    $gripe = $gripe =="gripe" ? "0" : $gripe;

    $presion_alta = array_key_exists("presion_alta",$_POST) ? $_POST['presion_alta'] : "0";
    $presion_alta = $presion_alta =="" ? "0" : $presion_alta;

    $fatiga = array_key_exists("fatiga",$_POST) ? $_POST['fatiga'] : "0";
    $fatiga = $fatiga =="" ? "0" : $fatiga;

    $garraspera = array_key_exists("garraspera",$_POST) ? $_POST['garraspera'] : "0";
    $garraspera = $garraspera =="" ? "0" : $garraspera;

    $fecha = $_POST['fecha'];



    if (empty($nombre) || empty($apellido) || empty($edad) || empty($talla) || empty($peso)) {
echo "todos los campos son obligatorios";

} 
if($tos== 1|| $fiebre== 1|| $disnea== 1|| $dolor_muscular== 1|| $gripe== 1|| $presion_alta== 1|| $fatiga== 1|| $garraspera== 1) {
    $resultado ="1";
}
else {
    $resultado ="0";
}

$servername = "localhost";
$username ="root";
$password ="root";
$dbname ="covid";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->beginTransaction();
    $sql="INSERT INTO 'pacientes' ('nombres','apellidos','edad','talla_m','peso_kg','sintomas_tos',
    'sintoma_gripe','sintoma_presion_alta',
    'sintoma_fatiga','sintoma_garraspera','nultima_fecha_vacunacion','resultado')

    VALUES ('$nombre','$apellido','$edad','$talla','$peso','$tos','$fiebre','$dismea',
    '$dolor_muscular','$gripe','$presion_alta','$fatiga','$garraspera' '$fecha','$resultado');";

    $conn->exec($sql);
    $conn->commit();
    echo "fue registrado correctamente";

}
catch(Exception $e) {
    echo "Error : ".$e->getMessage();
}

}
?>
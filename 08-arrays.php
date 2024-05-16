<?php
//caso1
$numeros = array(1,3,5,2,6);
$frutas = ["fresa","naranja","manzana","mandarina"];
print_r($numeros); //se usa para inpresiones de arreglo (print_r)
print_r($frutas);
//caso2
$estudiante = array(
    "dni"=>"432168432134",
    "edad"=>45,
    "fechanacimiento"=>"2000-01-05",
    "nombres"=>"yonathan",
    "apellidos"=>"flores",
    "semestre"=>"III",
    "deuda"=>5465132,
    "notafinal"=>11.25);
    print_r($estudiante);
    foreach($estudiante as $Key=>$value) {
        echo $Key." - ".$value."\n";
    }

    //caso 3
?>
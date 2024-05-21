<?php
$luzEncendidad=false;
if($luzEncendidad)
echo "la luz esta encendidad";
else
echo "la luz esta apagada.";

//caso 2

$sintomas_covid=[
    "tos"=>true,
    "fiebre"=>true,
    "dolor"=>false,
    "perdida_olfato"=>false];

    if($sintomas_covid["tos"]&&
    $sintomas_covid["fiebre"]) {
        echo "\nEsta enfermo tienes covid. ve a centro de salud";
    }
    else {
        echo "\nAun no esta en covid.";
    }
    //caso 3. cuenta bancaria
    $saldo = 1000;
    if(!($saldo > 0)){  //! es negacion

        echo "\nTiene saldo insuficiente";
    }

    else {
        echo "\nTiene saldo";
    }
?>
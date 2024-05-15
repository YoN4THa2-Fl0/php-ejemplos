<?php
$contador=1;
$sumanotas=0;
while($contador<=3){
    echo "Ingrese su Notas : ";
    $nota = fgets(STDIN);
    $sumanotas = $sumanotas +$nota;
    $contador++; //$contador=$contador+1
}
$notapromedio = $sumanotas/3;
echo "\n El promedio de notas es : ".$notapromedio;
?>

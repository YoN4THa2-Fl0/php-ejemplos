<?php
echo "ingrese su edad: ";
$edadEstudiante1= fgets(STDIN);
$edadEstudiante2= 21;

if($edadEstudiante1 > $edadEstudiante2){
echo "El estudiante N 01 es mayor que el estudiante N 02";
}
elseif($edadEstudiante1 == $edadEstudiante2){
    echo "El estudiante N 01 tiene la misma edad que el estudiante N 02";
}
else {
    echo "El estudiante N 02 es mayor que el estudiante N 01";
}
echo "\n";
echo "Ingrese su nota Final: ";
$notaFinal = fgets(STDIN);
if($notaFinal <=10.5){
    echo "Usted esta aprobado a las justa";
}
elseif(10.5 < $notaFiinal && $notaFinal <=15) {
    echo "Ustes esta aprobando de forma regular";
}
else{
    echo "Usted muy bien aprobado";
}
?>
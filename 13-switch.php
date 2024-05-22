<?php
echo "----------------------------------------------\n";
echo "******************SEMAFORO********************\N";
echo "Elija un color \n";
echo "Rojo (R)\n";
echo "Amarillo (A)\n";
echo "Verde (V)\n";
echo "Ingrese su color: ";
$letra =fgets(STDIN);
$mensaje="";
switch (strtoupper($letra)) {
    case "R":
        $mensaje="Pare!";
        break;
        case "A";
        $mensaje="Espera!";
        break;
        case "V":
            $mensaje ="Avanza¡";
            break;
            default:
            break;

}
echo $mensaje;

?>
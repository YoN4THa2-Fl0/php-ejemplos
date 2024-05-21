<?php
include("12-clase.php");

echo "************ BIENVENIDO A MI CALCULADORA ************\n";
echo "************ MENU DE OPCONES ************\n";
echo "************ SUMAR (OPCION 1) ************\n";
echo "************ RESTAR (OPCION 2) ************\n";
echo "************ MULTIPLICAR (OPCION 3) ************\n";
echo "************ DIVIDIR (OPCION 4) ************\n";
echo "************ POTENCIA (OPCION 5) ************\n";
echo "************ RAIZ (OPCION 6)  ************\n";
echo "************ SALIR (OPCION 0) ************\n";
echo "INGRESE LA OPCION : \n";
$opcion = fgets(STDIN);
switch ($opcion){
    case 1:

        echo "ESCRIBA EL PRIMER NUMERO: ";
        $numero1 = fgets(STDIN);
        echo  "\n ESCRIBA EL SEGUNDO NUMERO: ";
        $numero2 = fgets(STDIN);
        $calculadora = new calculadora($numero1,$numero2);
        $resultado = $suma->sumar();
        echo "\nLA SUMA ES : ".$resultado;
        break;
    
     case 2:
        echo "ESCRIBA EL PRIMER NUMERO: ";
        $numero1 = fgets(STDIN);
        echo  "\n ESCRIBA EL SEGUNDO NUMERO: ";
        $numero2 = fgets(STDIN);
         $calculadora= new calculadora($numero1,$numero2);
        $resultado = $suma->resta();
        echo "\nLA resta ES : ".$resultado;
        break;   

    case 3:
         echo "ESCRIBA EL PRIMER NUMERO: ";
         $numero1 = fgets(STDIN);
        echo  "\n ESCRIBA EL SEGUNDO NUMERO: ";
         $numero2 = fgets(STDIN);
        $calculadora = new calculadora($numero1,$numero2);
        $resultado = $calculadora->multiplicar();
        echo "\nLA MULTIPLICASION ES : ".$resultado;
         break;

    case 4:
        echo "ESCRIBA EL PRIMER NUMERO: ";
        $numero1 = fgets(STDIN);
        echo  "\n ESCRIBA EL SEGUNDO NUMERO: ";
        $numero2 = fgets(STDIN);
        $divicio = new calculadora($numero1,$numero2);
        $resultado = $calculadora->dividir();
        echo "\nLA DIVICION ES : ".$resultado;
        break;

    case 5:
        echo "ESCRIBA EL PRIMER NUMERO: ";
        $numero1 = trim(fgets(STDIN));
        echo  "\n ESCRIBA EL SEGUNDO NUMERO: ";
        $numero2 = fgets(STDIN);
        $calculadora = new calculadora($numero1,$numero2);
        $resultado = $calculadora->potencia();
        echo "\nLA POTENCIA ES : ".$resultado;
        break;

    case 6:
        echo "ESCRIBA EL PRIMER NUMERO: ";
        $numero1 = fgets(STDIN);
        echo  "\n ESCRIBA EL SEGUNDO NUMERO: ";
        $numero2 = fgets(STDIN);
        $calculadora = new calculadora($numero1,$numero2);
        $resultado = $calculadora->raiz();
        echo "\nLA RAIZ ES : ".$resultado;
        break;

    case 0:
        echo "MUCHAS GRACIAS PO ESTAR AQUI";
        break;
        default;
        break;


}

?>
<?php

include("15-polimorfismo.php");

echo "\nAREA DE TRIANGULO\n";
echo "INGRESE LA BASE : ";
$b=fgets(STDIN);
echo "INGRESE LA ALTURA : ";
$h=fgets(STDIN);
$triangulo = new Triangulo($b,$h);
$area=$triangulo->calcularArea();
echo "EL AREA DEL TRIANGULO ES : ".$area;

echo "";
echo "\n*****************************\n";

echo "\nAREA DE RECTANGULO\n";
echo "INGRESE LA BASE : ";
$b=fgets(STDIN);
echo "INGRESE LA ALTURA : ";
$a=fgets(STDIN);
$resctangulo = new Rectangulo($b,$h);
$area=$resctangulo->calcularArea();
echo "EL AREA DEL RECTANGULO ES : ".$area;

echo "";
echo "\n*****************************\n";
echo "";

echo "\nAREA DE CUADRADO\n";
echo "INGRESE LA LADO : ";
$b=fgets(STDIN);
$cuadrado = new Cuadrado($b,$h);
$area=$cuadrado->calcularArea();
echo "EL AREA DEL CUADRADO ES : ".$area;

echo "";
echo "\n*****************************\n";
echo "";

echo "\nAREA DE CIRCULO\n";
echo "INGRESE LA RADIO : ";
$r=fgets(STDIN);
$circulo = new Circulo($r);
$area=$circulo->calcularArea();
echo "EL AREA DEL CIRCULO ES : ".$area;

echo "";
echo "\n*****************************\n";
?>
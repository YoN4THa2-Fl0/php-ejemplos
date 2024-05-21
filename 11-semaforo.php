<?php
echo "1- ROJA\n";
echo "2- AMARILLO\n";
echo "3- VERDE\n";
echo "ingrese un numero 1 al 3 : ";
$letra= fgets(STDIN);
echo"";
$luzRoja= "!pare¡";
$luzAmarillo="!espere¡";
$luzVerde="!avance¡";

if ($letra=="1")
echo $luzRoja;
if ($letra=="2")
echo $luzAmarillo;
if($letra=="3")
echo $luzVerde;
?>
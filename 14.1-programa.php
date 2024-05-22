<?php
include ("14-herencia.php");

echo "EJEMPLO DE ERENCIA CON ANIMALES\n";

$perro = new Perro("Coimita","Verde",false,"dog.mp3");

echo $perro->obtenerInformacion()."\n";
echo $perro->hacerSonido("Guauuuu");

$gato = new Gato("Michi","rojo",false,"cat.mp3");

echo $gato->obtenerInformacion()."\n";
echo $gato->hacerSonido("Miau-Miau");

$pollo = new pollo("Michi","amarillo",false,"cat.mp3");

echo $pollo->obtenerInformacion()."\n";
echo $pollo->hacerSonido("pio-pio");
?>


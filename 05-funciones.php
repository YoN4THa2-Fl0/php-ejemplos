<?php
function obtenersaludo ($parametro){
    return " Hola como estas ".$parametro;

}
function mostraDatos ($nombre, $apellido, $curso, $semestre) {
    $mensaje = " hola soy " .$nombre." ".$apellido." y estoy en el curso ".$curso." del ".$semestre;
    return $mensaje;
}

function calcular($operador,$numero1,$numero2) {

    if($operador=="+")
    return $numero1+$numero2;
    if($operador=="-")
    return $numero1-$numero2;
    if($operador=="*")
    return $numero1*$numero2;
    if($operador=="/")
    return $numero1/$numero2;
}

echo obtenersaludo("yonathan")."\n";

echo mostraDatos("yonathan","flores","wep","III",)."\n";

echo "El total de la suma es: ".calcular("+",10,34);
?>
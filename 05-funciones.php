<?php
function obtenersaludo ($parametro){
    return " Hola como estas ".$parametro;

}
function mostraDatos ($nombre, $apellido, $curso, $semestre) {
    $mensaje = " hola soy " .$nombre." ".$apellido." y estoy en el curso ".$curso." del ".$semestre;
    return $mensaje;
}
echo obtenersaludo("yonathan")."\n";

echo mostraDatos("yonathan","flores","wep","III",);
?>

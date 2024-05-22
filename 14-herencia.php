<?php
class Animal {
    public $nombre;
    public $color;
    public $estaExtincion;
    public $archivoSonido;

    public function __construct($nombre1,$color1,$estaExtincion1,$archivoSonido1) {
        $this->nombre =$nombre1;
        $this->color =$color1;
        $this->estaExtincion =$estaExtincion1;
        $this->archivoSonido=$archivoSonido1;
    }

    public function obtenerInformacion() {
        $colortext=$this->color =="verde" ? "\033[32m" : "";
        $colortext=$this->color =="rojo" ? "\033[32m" : "";
        $colortext=$this->color =="amarillo" ? "\033[32m" : "";
        $mensaje="Nombre : ".$this->nombre."\n".
        "color : ".$colortext.$this->color."\033[0m"
        ."\n"."En Extincion ? : ".($this->estaExtincion ? "SI" : "NO");
        return $mensaje;
    }

    public function hacerSonido() {
        $audiofile="c:\\xampp\\htdocsL\\YONA\\php-ejemplos\\".$this->archivoSonido;
        shell_exec("start wmplayer ".escapeshellarg($audiofile));
    }
}

class Perro extends Animal {
    public function hacerSonido($sonido="") {
        parent::hacerSonido();
        return $sonido;
    }
}

//-----------------------------------------------------------------------------------------------

class gato extends Animal {
    public function hacerSonido($sonido="") {
        parent::hacerSonido();
        return $sonido;
    }
}

//------------------------------------------------------------------------------------

class pollo extends Animal {
    public function hacerSonido($sonido="") {
        parent::hacerSonido();
        return $sonido;
    }
}
?>
<?php
include_once "FiguraGeometrica.php";
class cuadrado extends FiguraGeometrica {
    //Variables
    private $nombre;
    private $punto;
    private $lado;

    //Constructor

    public function __construct($nombre, $punto, $lado) {
        $this-> nombre = $nombre;
        $this-> punto = $punto;
        $this-> lado = $lado;
    }

    //Metodos

    public function getLado() {
        return $this -> lado;
    }

    //Area del cuadrado
    public function area() {
        return ($this -> lado * $this -> lado);
    }

    //Perimetro del cuadrado
    public function perimetro() {
        return $this -> lado * 4;
    }
}

?>
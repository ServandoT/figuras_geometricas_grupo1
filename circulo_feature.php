
<?php
include_once "FiguraGeometrica.php";
class circulo extends FiguraGeometrica {
//Variables
    private $radio;
    private $nombre;
    private $punto;
//Constructor
    public function __construct($nombre, $punto, $radio) {
        $this-> nombre = $nombre;
        $this-> punto = $punto;
        $this-> radio = $radio;
    }
//Metodos
   public function getRadio() {
        return $this -> radio;
   }
   //Devuelve el area del circulo
   private function area() {
    return pi() * ($this-> radio * $this-> radio);
   }
    //Devuelve el perímetro del circulo
   private function perimetro($radio) {
    return 2 * pi() * $this-> radio;
   }
}
?>
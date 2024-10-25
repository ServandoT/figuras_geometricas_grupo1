
<?php
include_once "FiguraGeometrica.php";
class Circulo extends FiguraGeometrica
{
    //Variables
    protected $radio;
    protected $nombre;
    protected $punto;
    //Constructor
    public function __construct($nombre, $punto, $radio)
    {
        $this->nombre = $nombre;
        $this->punto = $punto;
        $this->radio = $radio;
    }
    //Metodos
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getRadio()
    {
        return $this->radio;
    }
    //Devuelve el area del circulo
    public function area()
    {
        return pi() * ($this->radio * $this->radio);
    }
    //Devuelve el perímetro del circulo
    public function perimetro()
    {
        return 2 * pi() * $this->radio;
    }
}
?>
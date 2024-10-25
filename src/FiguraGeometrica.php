<?php
    include_once "Punto.php";

    abstract class FiguraGeometrica {
        protected $punto;
        protected $nombre;
        public function __construct($nombre)
        {
            $this->nombre = $nombre;
        }

        public abstract function getNombre();

        public abstract function area();

        public abstract function perimetro();
    }
?>
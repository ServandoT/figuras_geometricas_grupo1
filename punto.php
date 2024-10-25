<?php

    class Punto {
        protected $x;
        protected $y;
    
        public function __construct($x, $y) 
        {
            $this->x = $x;
            $this->y= $y;
        }

        public function getX() {
            return $this->x;
        }

        public function getY() {
            return $this->y;
        }

        public function distancia($punto) {
            $primerParentesis = ($punto->x - $this->x) * ($punto->x - $this->x);

            $segundoParentesis = ($punto->y - $this->y) * ($punto->y - $this->y);

            return sqrt($primerParentesis + $segundoParentesis);
        }
    }
?>
<?php

    include_once 'FiguraGeometrica.php';

    class Triangulo extends FiguraGeometrica{
        private $base;
        private $altura;
        private $lado1;
        private $lado2;
        private $lado3;
        private $vertice;


        public function __construct($nombre, $punto, $altura, $base, $lado1, $lado2, $lado3){
            parent::__construct($nombre);
            $this->base = $base;
            $this->altura = $altura;
            $this->lado1 = $lado1;
            $this->lado2 = $lado2;
            $this->lado3 = $lado3;
            $this->vertice = $punto;
        }

        public function getBase(){
            return $this-> base;
        }

        public function getAltura(){
            return $this-> altura;
        }
        
        /* Devuleve area del triangulo*/
        public function area(){
            return ($this->base * $this->altura) / 2;
        }
        /* Devuleve perímetro del triangulo*/
        public function perimeto(){
            return $this->lado1 + $this->lado2 + $this->lado3;
        }
    }


?>
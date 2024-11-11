<?php
    abstract class FormaGeometrica {
        abstract public function calcularArea();
    
        abstract public function calcularPerimetro();
    }
    
    class Retangulo extends FormaGeometrica {
        private $largura;
        private $altura;
    
        public function setLargura($largura) {
            $this->largura = $largura;
        }
    
        public function getLargura() {
            return $this->largura;
        }
    
        public function setAltura($altura) {
            $this->altura = $altura;
        }
    
        public function getAltura() {
            return $this->altura;
        }

        public function calcularArea()
        {
            return $this->largura * $this->altura;
        }

        public function calcularPerimetro()
        {
            return 2 * ($this->altura * $this->largura);
        }
    }
    
    class Circulo extends FormaGeometrica{
        private $raio;
    
        public function __set($attr, $value) {
            $this->$attr = $value;  
        }
    
        public function __get($attr) {
            return $this->$attr;
        }

        public function calcularArea() {
            return pi() * pow($this->raio, 2);
        }

        public function calcularPerimetro() {
            return 2 * pi() * $this->raio;
        }
    
    }

    $retangulo = new Retangulo();
    $retangulo->setLargura(5);
    $retangulo->setAltura(10);
    echo $retangulo->calcularArea();
    echo "<br>";
    echo $retangulo->calcularPerimetro();
    echo "<br>";

    $circulo = new Circulo();
    $circulo->__set("raio", 7);
    echo $circulo->calcularArea();
    echo "<br>";
    echo $circulo->calcularPerimetro();
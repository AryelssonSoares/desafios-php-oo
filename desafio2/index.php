<?php
    Class Veiculo {
        protected $marca;
        protected $modelo;

        public function __construct($marca, $modelo)
        {
            $this->marca = $marca;
            $this->modelo = $modelo;
        }

        public function __get($name)
        {
            return $name;
        }

        public function mover() 
        {
            echo $this->modelo . " se movendo";
        }
    }

    class Carro extends Veiculo {
        public function mover() {
            echo "Carro " . $this->modelo . " se movendo";
        }
    }

    class Moto extends Veiculo {
        public function mover() {
            echo "Moto " . $this->modelo . " se movendo";
        }
    }

    $veiculos = [
        new Carro("Toyota", "Corolla"),
        new Carro("Honda", "Civic"),
        new Moto("Yamaha", "YZF-R3"),
        new Moto("Honda", "CB 500")
    ];

    foreach($veiculos as $veiculo) {
        echo $veiculo->mover() . "<br>";
    }
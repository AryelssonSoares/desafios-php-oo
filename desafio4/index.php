<?php
    class Contador {
        private static $contador = 0;

        public static function encrementar() {
            self::$contador += 1;
        }

        public static function exibirContador() {
           return self::$contador;
        } 
    }

    Contador::encrementar();
    echo "Valor atual: " . Contador::exibirContador();
    echo "<br>";

    Contador::encrementar();
    echo "Valor atual: " . Contador::exibirContador();
    echo "<br>";

    Contador::encrementar();
    echo "Valor atual: " . Contador::exibirContador();
    echo "<br>";

    Contador::encrementar();
    echo "Valor atual: " . Contador::exibirContador();
    echo "<br>";

    Contador::encrementar();
    echo "Valor atual: " . Contador::exibirContador();
    echo "<br>";
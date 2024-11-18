<?php
    interface Emprestavel {
        public function emprestar();
        public function devolver();
    }

    class Livro {
        private $titulo;
        private $autor;
        private $numero_de_paginas;

        public function __construct($titulo, $autor, $numero_de_paginas)
        {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->numero_de_paginas = $numero_de_paginas;
        }

        public function getTitulo()
        {
            return $this->titulo;
        }

        public function getAutor()
        {
            return $this->autor;
        }

        public function getNumeroDePaginas()
        {
            return $this->numero_de_paginas;
        }
    }

    class LivroEmprestavel extends Livro implements Emprestavel {
        private $livro_emprestado = false;
        private static $contador_emprestados = 0;

        public function emprestar()
        {
           if (!$this->livro_emprestado) {
                $this->livro_emprestado = true;
                self::$contador_emprestados++;
                echo "O livro {$this->getTitulo()} foi emprestado." . "<br>";
           } else {
                echo "O livro {$this->getTitulo()} já está emprestado." . "<br>";
           }
        }

        public function devolver()
        {
            if ($this->livro_emprestado) {
                $this->livro_emprestado = false;
                self::$contador_emprestados--;
                echo "O livro {$this->getTitulo()} foi devolvido." . "<br>";
           } else {
                echo "O livro {$this->getTitulo()} já está disponível." . "<br>";
           }
        }

        public static function getContadorEmprestados() {
            return self::$contador_emprestados;
        }
    }

    $livro1 = new LivroEmprestavel("1984", "George", 328);
    $livro2 = new LivroEmprestavel("Dom Casmurro", "Machado de Assis", 256);

    $livro1->emprestar();
    $livro2->emprestar();
    $livro1->devolver();

    echo "Total de livros emprestados: " . LivroEmprestavel::getContadorEmprestados() . "<br>";

    $livro1->emprestar();
    $livro2->devolver();

    echo "Total de livros emprestados: " . LivroEmprestavel::getContadorEmprestados() . "<br>";
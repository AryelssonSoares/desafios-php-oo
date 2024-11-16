<?php
    interface RepositorioInterface {
        public function salvar($item);
        public function deletar($index);
        public function buscar($index);
    }

    class UsuarioRepositorio implements RepositorioInterface {
        protected $usuarios = [];

        public function salvar($item)
        {
            $this->usuarios[] = $item;
            echo "Usuário inserido com sucesso! <br>";
        }

        public function deletar($index)
        {
            if (isset($this->usuarios[$index])) {
                unset($this->usuarios[$index]);
                echo "Usuário deletado com sucesso";
            }
        }

        public function buscar($index)
        {
            if (isset($this->usuarios[$index])) {
                return $this->usuarios[$index];
            } else {
                echo "Produto não existente";
                return null;
            }
        }
    }

    class ProdutoRepositorio implements RepositorioInterface {
        protected $produtos = [];

        public function salvar($item)
        {
            $this->produtos[] = $item;
            echo "Produto inserido com sucesso";
        }

        public function deletar($index)
        {
            if (isset($this->produtos[$index])) {
                unset($this->produtos[$index]);
                echo "Produto deletado com sucesso";
            } 
        }

        public function buscar($index)
        {
            if (isset($this->produtos[$index])) {
                return $this->produtos[$index];
            } else {
                echo "Produto não existente";
                return null;
            }
        }
    }

    $usuario = new UsuarioRepositorio();
    $usuario->salvar("João");
    $usuario->salvar("Maria");
    $usuario->salvar("Helena");

    echo $usuario->buscar(0);
    echo "<br>";
    $usuario->deletar(0);
    echo "<br>";

    $produto = new ProdutoRepositorio();
    $produto->salvar("Arroz tia dora");
    echo "<br>";
    $produto->salvar("Feijão preto camil");
    echo "<br>";

    echo $produto->buscar(0);
    echo "<br>";
    $produto->deletar(0);
    echo "<br>";
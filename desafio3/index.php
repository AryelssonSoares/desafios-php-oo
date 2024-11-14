<?php
    interface RepositorioInterface {
        public function salvar();
        public function deletar();
        public function buscar();
    }
<?php

require_once 'Livro.php';
require_once 'livrosView.php';

class LivroController {
    private $livroModel;

    public function __construct() {
        $this->livroModel = new Livro();
    }

    public function listarLivros() {
        $livros = $this->livroModel->listarLivros();
        exibirLivros($livros);
    }
}
?>
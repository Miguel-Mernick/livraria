<?php

class Livro {
    private $livros;

    public function __construct() {
        $this->livros = [
            ["titulo" => "O Espião que Saiu do Frio", "autor" => "John le Carré", "ano" => 1963],
            ["titulo" => "Caçada ao Outubro Vermelho", "autor" => "Tom Clancy", "ano" => 1984],
            ["titulo" => "A Volta dos que não Foram", "autor" => "Machado de Assis", "ano" => 1952],
            ["titulo" => "Operação Valkiria", "autor" => "Pierre Galante", "ano" => 1967],
            ["titulo" => "Agente Secreto", "autor" => "Joseph Conrad", "ano" => 1907],
        ];
    }

    public function listarLivros() {
        return $this->livros;
    }
}
?>
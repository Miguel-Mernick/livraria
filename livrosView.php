<?php

function exibirLivros($livros) {
    echo '
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f4ec;
            margin: 0;
            padding: 20px;
        }
        .estante {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            background-color: #d2b48c;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .livro {
            background-color: #fff8dc;
            padding: 15px;
            width: 200px;
            border-radius: 8px;
            box-shadow: 2px 2px 6px rgba(0,0,0,0.1);
            border: 1px solid #ccc;
            transition: transform 0.2s ease;
        }
        .livro:hover {
            transform: scale(1.05);
        }
        .livro h3 {
            margin-top: 0;
            font-size: 18px;
            color: #4b2e1e;
        }
        .livro p {
            margin: 5px 0;
            font-size: 14px;
            color: #333;
        }
        h1 {
            color: #4b2e1e;
        }
    </style>

    <h1>📚 Estante de Livros</h1>
    <div class="estante">
    ';

    foreach ($livros as $livro) {
        echo '
        <div class="livro">
            <h3>' . htmlspecialchars($livro['titulo']) . '</h3>
            <p><strong>Autor:</strong> ' . htmlspecialchars($livro['autor']) . '</p>
            <p><strong>Ano:</strong> ' . htmlspecialchars($livro['ano']) . '</p>
        </div>';
    }

    echo '</div>';
}
?>

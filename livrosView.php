<?php

function exibirLivros($livros) {
    echo '
    <style>
        body {
            font-family: "Georgia", serif;
            background-color: #ede4d1;
            margin: 0;
            padding: 20px;
            background-image: linear-gradient(to bottom, #f4f1ea, #e6dcc3);
        }
        .estante {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 30px;
            background-color: #4b3621;
            border-radius: 10px;
            box-shadow: inset 0 0 15px rgba(0,0,0,0.3), 0 6px 12px rgba(0,0,0,0.4);
        }
        .livro {
            background-color: #fff;
            padding: 20px;
            width: 220px;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.3);
            border-left: 6px solid #8b5a2b;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .livro:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
        }
        .livro h3 {
            margin-top: 0;
            font-size: 20px;
            color: #3e2a1c;
        }
        .livro p {
            margin: 8px 0;
            font-size: 15px;
            color: #333;
        }
        h1 {
            color: #3e2a1c;
            text-align: center;
            font-size: 32px;
            margin-bottom: 20px;
            text-shadow: 1px 1px 0 #fff;
        }
    </style>

    <h1>🏛️ Estante da Biblioteca</h1>
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

<?php

function exibirLivros($livros) {
    echo '
    <style>
        body {
            font-family: "Georgia", serif;
            background-color: #eae3d2;
            margin: 0;
            padding: 20px;
            background-image: url("https://www.transparenttextures.com/patterns/paper-fibers.png");
        }
        .estante {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 40px;
            background-color: #3e2a1c;
            border-radius: 10px;
            box-shadow: inset 0 0 20px rgba(0,0,0,0.5), 0 6px 12px rgba(0,0,0,0.4);
            justify-content: center;
        }
        .livro {
            background: linear-gradient(145deg, #5a3e2b, #3e2a1c);
            color: #fceabb;
            padding: 20px 15px;
            width: 160px;
            height: 260px;
            border-radius: 5px;
            box-shadow: 4px 4px 10px rgba(0,0,0,0.6);
            border: 2px solid #d4af37;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            font-family: "Garamond", serif;
            text-align: center;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .livro::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 15px;
            background: #2e1e12;
            border-right: 2px solid #d4af37;
            box-shadow: inset -2px 0 4px rgba(0,0,0,0.3);
        }
        .livro:hover {
            transform: translateY(-8px);
            box-shadow: 6px 6px 14px rgba(0,0,0,0.7);
        }
        .livro h3 {
            font-size: 18px;
            color: #fceabb;
            margin: 0 0 10px;
            font-weight: bold;
        }
        .livro p {
            font-size: 14px;
            margin: 5px 0;
            color: #f5deb3;
        }
        h1 {
            color: #3e2a1c;
            text-align: center;
            font-size: 36px;
            margin-bottom: 30px;
            text-shadow: 1px 1px #fff;
            font-family: "Garamond", serif;
        }
    </style>

    <h1>Biblioteca Luz do Saber<br>
    <span style="font-size: 18px;">🗣️ Quem lê, transforma. Quem ensina, liberta.</span>
    </h1>
    <div class="estante">
    ';

    foreach ($livros as $livro) {
        echo '
        <div class="livro">
            <div>
                <h3>' . htmlspecialchars($livro['titulo']) . '</h3>
                <p><strong>' . htmlspecialchars($livro['autor']) . '</strong></p>
            </div>
            <p><em>' . htmlspecialchars($livro['ano']) . '</em></p>
        </div>';
    }

    echo '</div>';
}
?>

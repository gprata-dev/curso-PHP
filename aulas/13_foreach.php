<?php
    $nomes = ["Guilherme", "Matheus", "Leonardo"];

    foreach($nomes as $nome) {
        echo "O nome atual é $nome <br>";
    }

    echo "<br>";

    $produtos = ['porta' => 100, 'maçaneta' => 5, 'motor' => 2000, 'retrovisor' => 8];

    foreach ($produtos as $produto => $preco) {
        if($preco > 10) {
            echo "O produto $produto custa mais do 10 <br>";
        }
    }
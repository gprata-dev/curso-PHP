<?php 
    $arr = [1,2,3,4,5];

    $removidos = array_splice($arr, 1, 3); //remove e também retorna os removidos
    
    print_r($arr);
    echo "<br>";
    print_r($removidos);
    
    echo "<br><br>";

    $videogame = [
        "marca" => "sony",
        "nome" => "PS5",
        "geracao" => 9
    ];

    extract($videogame);

    echo "O videogame da $marca mais recente da {$geracao}ª é o $nome"; // {} para delimitar o nome da variável
    //caso já houver uma variável inicializada com mesmo nome, ela será sobrescrita

    echo "<br><br>";

    $nome = "Dell G15";
    $placaDedicada = true;
    $nomePlacaDedicada = "RTX 3050";

    print_r(compact("nome", "placaDedicada", "nomePlacaDedicada")); //notice caso use string não correspondente a nenhuma variável

    echo "<br><br>";

    foreach($videogame as $value) { //arr assoc apenas com "as $nome"
        echo "$value <br>";
    }
    echo "<br>";

    function soma($a, $b) {
        return $a + $b;
    }

    echo array_reduce($arr, "soma");

    echo "<br><br>";

    if(in_array(1, $arr)) {
        echo "Está <br><br>";
    } else {
        echo "Não <br><br>";
    }

    rsort($arr);
    print_r($arr);
    echo "<br>";
    sort($arr);
    print_r($arr);
    //também funcionam em strings: ordem alfabética

    echo "<br><br>";

    asort($videogame);   //pelo valor
    print_r($videogame);
    echo "<br>";
    arsort($videogame); //pelo valor reverso
    print_r($videogame);
    echo "<br>";
    ksort($videogame);  //pela chave
    print_r($videogame);
    echo "<br>";
    krsort($videogame); //pela chave reverso
    print_r($videogame);
    echo "<br>";
?>
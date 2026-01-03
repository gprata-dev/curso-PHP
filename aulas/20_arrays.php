<?php 
    $arr = [];

    $arr[0] = 10;
    $arr[3] = 15;

    print_r($arr);

    echo "<br>";


    $arrAssoc1["carro"] = "Mustang";
    $arrAssoc1["avião"] = "Monomotor";

    $arrAssoc2 = ["carro" => "BMW", "avião" => "Boeing"];

    print_r($arrAssoc1);
    echo "<br>";
    print_r($arrAssoc2);

    echo "<br>";

    $arr[] = 20; //incrementa de onde parou
    print_r($arr);
    echo "<br>";

    $arrAssoc1[] = 20;
    print_r($arrAssoc1);
    echo "<br>";

    $arr2 = range(0, 10);
    print_r($arr2);
    echo "<br>";

    $arr2 = range(0, 1000, 100);
    print_r($arr2);
    echo "<br>";

    echo count($arrAssoc2);
    echo "<br><br>";

    $arrMult = [
        [1, 2, 3],
        [4, 5, 6]
    ];

    print_r($arrMult);
    echo "<br>";
    echo $arrMult[0][2] . "<br><br>";
    echo count($arrMult) . "<br>";
    echo count($arrMult[0]) . "<br><br>";


    $pessoa = ["Guilherme", 21, "programador", "castanho"];
    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissao, $corDosOlhos) = $pessoa; //colocar parâmetro a mais em list() gera um notice
    echo "Nome: $nome, idade: $idade, profissão: $profissao, cor dos olhos: $corDosOlhos <br><br>";

    print_r(array_slice($pessoa, 1, 2));
    echo "<br>";
    print_r(array_slice($pessoa, 1));
    echo "<br>";
    print_r(array_slice($pessoa, 0, -1));
    echo "<br><br>";

    print_r(array_chunk($pessoa, 2));
    echo "<br>";
    print_r(array_chunk($pessoa, 1));

    echo "<br><br>";

    $carro = [
        "marca" => "BMW",
        "motor" => "2.4",
        "teto_solar" => true,
        "assentos" => 7
    ];

    print_r(array_keys($carro));
    echo "<br>";
    print_r(array_values($carro));

    echo "<br><br>";

    if (array_key_exists("portas", $carro)) {
        echo "Existe <br>";
    } else {
        echo "Não existe <br>";
    }

    if (isset($carro['portas'])) {
        echo "Existe <br>";
    } else {
        echo "Não existe <br>";
    }
    
    $x = 1;
    if (isset($x)) {
        echo "Existe <br>";
    } else {
        echo "Não existe <br>";
    }

    if (!empty($carro['portas'])) {
        echo "Existe <br>";
    } else {
        echo "Não existe <br>";
    }
?>

    <table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Situação</th>
            <th>array_key_exists</th>
            <th>isset</th>
            <th>!empty</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Chave não existe</td>
            <td>❌</td>
            <td>❌</td>
            <td>❌</td>
        </tr>
        <tr>
            <td>Existe e valor = <code>null</code></td>
            <td>✔</td>
            <td>❌</td>
            <td>❌</td>
        </tr>
        <tr>
            <td>Existe e valor = <code>0</code></td>
            <td>✔</td>
            <td>✔</td>
            <td>❌</td>
        </tr>
        <tr>
            <td>Existe e valor = <code>false</code></td>
            <td>✔</td>
            <td>✔</td>
            <td>❌</td>
        </tr>
        <tr>
            <td>Existe e valor = <code>"texto"</code></td>
            <td>✔</td>
            <td>✔</td>
            <td>✔</td>
        </tr>
    </tbody>
</table>
<?php 
    echo date("d/m/y");
    echo "<br>";
    echo date('Y-m-d H:i:s');
    echo "<br>";
    echo date("D, M - Y");
    echo "<br><br>";


    $cincoDias = strtotime("5 days");
    echo $cincoDias . "<br>";
    echo date('d/m/y', $cincoDias) . "<br><br>";


    $dataNascimento = mktime(02, 12, 33, 02, 05, 1991); //hora, minuto, segundo, mês, dia, ano
    echo $dataNascimento . "<br>";

    echo date('d/m/Y', $dataNascimento) . "<br><br>";


    $dataAtual = new DateTime();
    print_r($dataAtual);
    echo "<br>";
    echo $dataAtual->format('l - F - y') . "<br>";

    $dataAtual->modify('-1 day');
    echo $dataAtual->format('l - F - y') . "<br>";

    $dataAtual->setDate(1999, 12, 01);
    print_r($dataAtual);
    echo "<br>";
    $dataAtual->setTime(5, 12, 10);
    print_r($dataAtual);
    echo "<br>";
    echo $dataAtual->format('l - F - y') . "<br><br>";

    $diferenca = $dataAtual->diff(new DateTime());
    print_r($diferenca);
    echo "<br>";
    echo $diferenca->format('%a days') . "<br>";

    $realAtual = new DateTime();
    if ($realAtual > $dataAtual) {
        echo "A hora atual de verdade ({$realAtual->format('d - m - y h:i')}) é maior do que ({$dataAtual->format('d - m - y')})<br><br>";
    } else {
        echo "Menor <br><br>";
    }
    
    date_default_timezone_set('America/Sao_Paulo');
    // print_r($realAtual); não muda -> objeto criado antes
    $realMesmoAtual = new DateTime();
    print_r($realMesmoAtual);
?>
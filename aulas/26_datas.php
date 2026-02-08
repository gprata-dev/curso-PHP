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
?>
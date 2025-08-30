<?php
    $arr = [1, "A", "Palavra", 12.32, "Opa", true, [], "PHP"];
    $x   = 0;

    echo count($arr) . "<br><br>";

    while($x < count($arr)) {
        if(is_string($arr[$x])) {
            echo $arr[$x] . "<br>";
        }

        $x++;
    }

    echo "<br>";

    $y = 10;

    while ($y > 0) {
        if($y == 7 || $y == 5) {
            echo "Pulou a execução $y <br>";
            $y--;
            continue;
        }

        echo "Executando o loop $y <br>";

        if ($y == 2) {
            echo "Loop interrompido $y <br>";
            break;
        }

        $y--;
    }

    echo "Código continua...";
?>
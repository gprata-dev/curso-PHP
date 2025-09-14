<?php
    $j = 5;

    do {
        echo "testando \"do while\" $j <br>";
        
        $j--;
    } while ($j != 5 && $j > 0);

    echo "<br>";

    for ($i = 0; $i < 10; $i++) {
        if ($i == 8) {
            break;
        }

        echo "$i <br>";
    }
?>
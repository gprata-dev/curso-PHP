<?php
    echo 5 / 2;
    echo "<br>";

    if (is_float(5 / 2)) {
        echo "Sim, 5 / 2 é float";
        echo "<br>";
        echo "Sim, " . 5 / 2 . " é float";
    }
    
    echo "<br><br>";

    echo 5 . 2;
    echo "<br>";
    if (is_string(5 . 2)) {
        echo "Sim, " . 5 . 2 . " é string";
    }

    echo "<br><br>";
    $a = "5.1" * 12;
    $b = 12 * "5.1";

    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    echo gettype($a);
    echo "<br>";
    echo gettype($b);

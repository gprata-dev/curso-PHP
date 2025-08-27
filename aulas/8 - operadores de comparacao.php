<?php
    if (5 == 5) {
        echo "1";
        echo "<br>";
    } 
    if ("5" == 5) {
        echo "2";
        echo "<br>";
    } 
    if (5 === 5) {
        echo "3";
        echo "<br>";
    }
    if ("5" === 5) {
        echo "4";
        echo "<br>";
    }
    if ("5" != 5) {
        echo "5";
        echo "<br>";
    }
    if ("5" !== 5) {
        echo 6;
        echo "<br>";
    }

    if (2 < 2 || 1) {
        echo 7;
        echo "<br>";
    }

    if (2 < 2 || 0) {
        echo 8;
        echo "<br>";
    }

    if (2 < 2 || 999) {
        echo 9;
        echo "<br>";
    }

    $a = 0;

    if (!$a) {
        echo 10;
    }
?>
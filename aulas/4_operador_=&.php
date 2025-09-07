<?php
    $a = 10;
    $b =& $a;

    echo "$a <br>";
    echo "$b <br>";

    $b = 1;

    echo "$a <br>";
    echo "$b <br>";

    $a = 1000;

    echo "$a <br>";
    echo "$b <br>";
?>
<?php
    $arr = [];

    for ($i = 0; $i < 10; $i++) {
        $arr[$i] = $i + 1;
    }

    print_r($arr);
    echo "<br><br>";

    $arr_push = [];

    for ($i = 1; $i <= 10; $i++) {
        array_push($arr_push, $i);
    }

    for ($i = 0; $i < count($arr_push); $i++) {
        echo $arr_push[$i] . "<br>";
    }
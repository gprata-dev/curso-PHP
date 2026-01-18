<?php 
    $arr = [1,2,3,4,5];

    $arrRev = array_reverse($arr);
    print_r($arr);
    echo "<br>";
    print_r($arrRev);
    echo "<br><br>";

    shuffle($arr);
    print_r($arr);
    echo "<br>";

    echo array_sum($arr) . "<br><br>";  //ignora o que não for numérico no array

    $arr2 = [6,7,8,9,'10'];

    $arrMerge = array_merge($arr, $arr2, ['a', true]); //aceita quantos argumentos forem necessários
    print_r($arrMerge);
    echo "<br><br>";

    $arr3 = [1,2,3];
    $arr4 = [3,4,5];

    print_r(array_diff($arr3, $arr4));
    echo "<br>";
    print_r(array_diff($arr4, $arr3));
    echo "<br>";
    print_r(array_diff($arr4, $arr3, [4]));
?>
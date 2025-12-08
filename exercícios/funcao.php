<?php 
    function arr($array): array
    {
        $newArr = [];

        foreach($array as $elemento) {
            if($elemento > 7) {
                array_push($newArr, $elemento);
            }
        }
        return $newArr;
    }

    $retorno = arr([3,3,12,3243,1,8,9]);

    print_r($retorno);
    //OU
    echo "<br>";
    echo implode(', ', $retorno);


    //OU
    echo "<br>";

    
    function arr2($array): array
    {
        $newArr = [];

        for($i = 0; $i < count($array); $i++) {
            if($array[$i] > 7) {
                array_push($newArr, $array[$i]);
            }
        }

        return $newArr;
    }

    echo implode(', ', arr2([3,3,12,3243,1,8,9]));
?>
<?php
    $lista1 = ["Arroz", "Macarrão", "Chocolate"];
    $lista2 = ["Arroz", "Macarrão", "Chocolate", "Banana", "Frango"];


    function listar($arr)
    {
        $ind = count($arr) - 1;
        $str = "Você precisa comprar: ";

        for($i = 0; $i < $ind; $i++) {
            if($i != $ind - 1) {
                $str .= "$arr[$i], ";
            } else {
                $str .= "$arr[$i] ";
            }
            
        }

        $str .= "e $arr[$ind].";

        return $str;
    }

    echo listar($lista1);
    echo "<br>";
    echo listar($lista2);
?>
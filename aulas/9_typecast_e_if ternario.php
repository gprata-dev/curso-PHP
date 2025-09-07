<?php
    echo (int) 12.99999 . "<br>";
    echo (int) "testando" . "<br>";
    echo (int) [1,2,3] . "<br>";
    echo "<br>";
    echo (float) 12.99999 . "<br>";
    echo (float) "testando" . "<br>";
    echo (float) [1,2,3] . "<br>";

    //+=, -=, /=, *=, %= operação feita primeiro, atribuição depois

    //echo (int) 10 / 3; //não funciona, resultado: 3.33333
    echo floor(10 / 3) . "<br>";
    echo intdiv(10, 3) . "<br>";

    //if ternário
    echo 5 > 2 ? "5 maior <br>" : "5 menor <br>";
    
    echo 5 > 2.323 ? "Sim, PHP é fracamente tipada" : "";
?>
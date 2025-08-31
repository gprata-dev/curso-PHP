<?php
    function teste(): void {
        $a = 0;
        $a++;
        
        var_dump($a);
        echo "<br>";
    }

    teste();
    teste();
    teste();

    echo "<br>";

    function testeStatic(): void {
        static $a = 0;
        $a++;

        var_dump($a);
        echo "<br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();
?>
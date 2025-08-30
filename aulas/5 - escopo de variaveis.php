<?php
    $teste = "aa";

    echo "$teste global 1 <br>";

    if(true) {
        $teste = "bb";

        echo "$teste local 1 <br>";
    }

    echo "$teste global 2 <br>";

    echo "--------------- <br>";

    function teste(): void {
        // echo "$teste local 2 <br>"; //Warning: Undefined variable $teste on line 17
    }

    teste();

    echo "$teste global 3 <br>";

    echo "--------------- <br>";

    function teste2(): void {
        $teste = "cc";

        echo "$teste local 3 <br>";
    }

    teste2();

    echo "$teste global 4 <br>";

    echo "--------------- <br>";

    function testandoGlobal(): void {
        global $teste;

        echo "$teste global 5 <br>";
    }

    testandoGlobal();

    echo "$teste global 6 <br>";

    echo "--------------- <br>";

    function testandoGlobal2(): void {
        global $teste;

        $teste = 2;

        echo "$teste global 7 <br>";
    }

    testandoGlobal2();

    echo "$teste global 8";
?>
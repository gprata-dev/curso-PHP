<?php 
    function testando($a = "teste")
    {
        echo $a . "<br>";
    }

    testando("string");
    testando();

    echo "<br>";

    
    function testandoComDoisArgInc($a = "teste", $b)
    {
        echo "$a e $b <br>";
    }

    //testandoComDois("teste");
    testandoComDoisArgInc("testeA", "testeB");

    echo "<br>";


    //o ideal é colocar os argumentos default por último
    function testandoComDoisArg($b, $a = "teste")
    {
        echo "$a e $b <br>";
        
        print_r(func_get_args());
        echo "<br>";
        echo func_num_args();
        echo "<br>";
    }

    testandoComDoisArg("testando");
    echo "<br>";
    testandoComDoisArg("testeB", "testeA");

    

    echo "<br>";

    function alteraDados($nome, $idade)
    {
        $nome  = "Sr. $nome";
        $idade = "$idade anos";

        return [$nome, $idade];
    }

    print_r(alteraDados("Guilherme", 21));
?>
<?php 
    echo strtoupper("Testando") . "<br>";
    echo strlen("teste") . "<br>";
    echo sqrt(2) . "<br><br>";

    $arr = ["Brasil", "Coreia", "Grecia"];
    $imp = implode(", ", $arr);
    
    echo $imp . "<br>";

    //não é obrigatório informar tipo de retorno
    function velocidadeMaxima($vel): void {
        if(is_int($vel)) {
            echo "A velocidade máxima deste veículo é $vel km/h <br>";
        } else {
            echo "O tipo deve ser inteiro";
        }
    }

    velocidadeMaxima(100);

    //php ignora parâmetros adicionais sem dar nenhum warning
    velocidadeMaxima(250, "a");

    //erro
    //velocidadeMaxima();


    function soma($n1, $n2): int {
        return $n1 + $n2;
    }

    echo soma(1000,1);
    echo "<br>-----<br>";

    
    //escopo
    $a = 1;
    $b = 10;
    
    function testeEscopo(): void {
        $a = 2;
        global $b;

        $a++;
        $b++;

        echo "Escopo local de A: $a <br>";
        echo "Escopo global de B na função: $b <br>";
    }
    
    testeEscopo();
    echo "Escopo global de A: $a <br>";
    echo "Escopo global de B: $b <br>";
?>
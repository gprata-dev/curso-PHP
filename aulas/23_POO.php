<?php 
    class Car {
        public int $rodas  = 4;
        public int $aro;
        public string $cor = "Vermelha"; //não é necessário int, string... mas recomendado

        function ligar() {
            echo "Motor ligado.";
        }
    }

    $ferrari = new Car;

    echo $ferrari->cor . "<br>";
    
    $ferrari->cor = "Azul";
    $ferrari->aro = 20;
    //$ferrari->aro = "A";  // fatal error


    echo $ferrari->cor . "<br>";
    echo $ferrari->aro . "<br>";

    $ferrari->ligar();

    //echo $ferrari->ligar();
?>
<?php 
    class Car
    {
        public int $rodas  = 4;
        public int $aro;
        public string $cor = "Vermelha"; //não é necessário int, string... mas recomendado

        function ligar()
        {
            echo "Motor ligado. <br>";
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



    class Animal
    {
        private string $name;   //atributos sempre privados
        private const PATAS = 4;

        function setName($nome) //ao não colocar modificador de visibilidade, o padrão é público / não recomendado
        {
            $this->name = $nome;
        }

        public function latir()
        {
            return "Au au";
        }
        
        public function latirForte()
        {
            return strtoupper($this->latir());
        }

        public function getName()
        {
            return $this->name;
        }

        public function getPaws()
        {
            return self::PATAS;
        }
    }

    $nanda = new Animal;

    $nanda->setName("Nanda");
    //echo "O nome é $nanda->nome" //não recomendado: encapsulamento
    //echo "O nome é $nanda->getName()"; errado: strings
    echo "O nome é {$nanda->getName()} <br>";
    //ou
    echo "O nome é " . $nanda->getName() . "e ela tem " . $nanda->getPaws() . " patas<br>"; //se fosse public const: $nanda::PATAS

    
?>
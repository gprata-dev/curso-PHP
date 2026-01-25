<?php 
    class Car
    {
        private int $rodas = 4;

        public function getRodas()
        {
            return $this->rodas;
        }
    }

    class Onibus
    {
        public int $rodas = 4;

        public function getRodas()
        {
            return $this->rodas;
        }
    }

    class Mecanico
    {
        public function alterarRodas($obj)
        {
            $obj->rodas = 10;
        }
    }

    $carro   = new Car;
    $onibus  = new Onibus;
    $matheus = new Mecanico;

    // $matheus->alterarRodas($carro); fatal error: método de uma classe tentando acessar atributo privado de outra
    $matheus->alterarRodas($onibus);
    echo $carro->getRodas() . "<br>";
    echo $onibus->getRodas();
?>
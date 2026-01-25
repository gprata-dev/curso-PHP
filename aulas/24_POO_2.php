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
    echo $onibus->getRodas() . "<br>";

    
    class Veiculo
    {
        protected function mover(int $metros)
        {
            echo "Se moveu $metros metros <br>";
        }
    }

    class Moto extends Veiculo
    {
        public function acessarMover(int $metros)
        {
            $this->mover($metros);
        }
    }

    $honda = new Moto;
    // $honda->mover(30);     erro
    $honda->acessarMover(30); //se mover() fosse private: erro

    if($honda instanceof Moto) {
        echo "Honda é uma moto. <br>";
    }
    if ($honda instanceof Veiculo) {
        echo "Honda é um veículo. <br>";
    }


    interface Caracteristicas
    {
        const NOME = "Matheus";

        public function falar(); //método abstrato
    }

    class Humano implements Caracteristicas
    {
        public $idade = 29;

        public function falar()
        {
            echo "Olá <br>";
        }

        public function dizerNome()
        {
            echo "Meu nome é " . self::NOME . ".<br>";
        }
    }

    $matheus = new Humano;
    $matheus->falar();
    $matheus->dizerNome();
?>
<?php 
    trait Objeto
    {
        public function teste()
        {
            echo "Testando trait de objeto <br>";
        }
    }

    trait Testando
    {
        public $y = 10;

        public function traitTeste()
        {
            echo "Este método é da trait Testando <br>";
        }
    }

    class Central
    {
        use Objeto;
        use Testando;
    }

    $x = new Central;
    $x->teste();
    $x->traitTeste();
    echo $x->y . "<br>"; //se fosse protected dá erro!

    
    class Carro
    {
        private string $cor;
        public string $marca;

        function __construct($cor, $marca)
        {
            $this->setColor($cor);
            $this->setMarca($marca);
        }
        public function setColor($cor)
        {
            $this->cor = $cor;
        }
        public function setMarca($marca)
        {
            $this->marca = $marca;
        }
        public function getCor()
        {
            return $this->cor;
        }
        public function getMarca()
        {
            return $this->marca;
        }
    }

    $camaro = new Carro("Amarelo", "Chevrolet");
    echo $camaro->getCor() . "<br>";


    $pessoa = new class() {
        private string $nome = "Guilherme";

        public function dizerNome()
        {
            return "Olá meu nome é {$this->nome} <br>";
        }
    };

    echo $pessoa->dizerNome();


    if (class_exists("Carro")) {
        echo "Carro existe <br>";
    }

    print_r(get_class_vars("Carro")); //função chamada no global: apenas public aparece
    echo "<br>";
    print_r(get_class_methods("Carro"));
    echo "<br>";

    $x = 2;
    if (is_object($pessoa)) {
        echo "É objeto <br>";

        var_dump(get_class($pessoa));
        echo "<br>";
    }
    var_dump(get_class($camaro));
    echo "<br>";

    if (!is_object($x)) {
        echo "Não é objeto <br>";
    }

    if (method_exists($pessoa, "dizerNome")) {
        echo "Método existe";
    }
?>
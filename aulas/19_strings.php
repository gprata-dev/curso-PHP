<?php 
    echo nl2br("Este cifrão \$ vai ficar na primeira linha \n e estas aspas \" na segunda linha");
    //apenas o \n não funciona sem nl2br - função que converte \n em <br>
    //ou na primeira linha: header("Content-type: text/plain"); - agora tags html param de funcionar

    echo "<br><br>";

    if(print("")) {
        print("deu certo <br>");
    }

    //if(echo "A") -> erro

    $num = 11;
    printf("Imprimir número: %d <br>", $num); //int
    printf("Imprimir número: %s <br>", $num); //string
    printf("Imprimir número: %.3f <br>", $num); //float
    printf("Imprimir número: %e <br>", $num); //notação potência de 10

    echo "<br><br>";

    $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ut, neque provident adipisci accusantium soluta, aliquid corporis quasi animi fuga cum, impedit saepe dicta voluptate? Ad culpa natus doloribus necessitatibus.";

    for($i = 0; $i < strlen($string); $i++) {
        echo "$string[$i].";
    }

    echo "<br><br>";

    $stringMalFormt = "     Lorem ipsum dolor    sit, amet consectetur adipisicing elit. Cum, aut  ";

    $s = trim($stringMalFormt);

    echo "$stringMalFormt. <br>";
    echo "$s.";
    //ltrim();
    //rtrim();

    echo "<br><br>";

    echo strtolower($s) . "<br>";

    echo strtoupper($s) . "<br>";

    $frase = "testando php <br>";

    echo ucfirst($frase);
    echo ucwords($frase);

    echo "<br>";

    $textoHtml = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

    echo $textoHtml . "<br>";

    echo strip_tags($textoHtml);

    echo "<br><br>";

    $str = "PHP não eh legal";

    echo substr($str, 0, 3);
    echo substr($str, 8) . "<br>";
    echo substr($str, -5) . "<br>";
    echo substr($str, 0, -13) . "<br>";

    echo "<br><br>";

    echo strrev("Testando") . "<br>";
    echo str_repeat("Testando 2 ", 5);

    echo "<br><br>";

    print_r(explode(" ", "Junkrat: Vai explodir!"));
    echo "<br>";
    print_r(explode(",", "Carro, Barco, Avião, Balsa"));

    echo "<br><br>";

    $str1 = "Teste do método strpos, preciso repetir a palavra strpos";
    echo strpos($str1, "strpos") . "<br>";
    if (strpos($str1, "pos") === false) {
        echo "Não encontrado 1" . "<br>";
    } else if (strpos($str, "pas") === false) {
        echo "Não encontrado 2" . "<br>";
    }

    echo strrpos($str1, "strpos") . "<br>"; //também retorna falso caso não ache

    //extrair palavra sem precisar do indice
    echo substr($str1, strpos($str1, "repetir"), 7) . "<br>";

    echo strstr($str1, "preciso"); //também retorna falso caso não ache

    echo "<br><br>";

    $url = "https://www.stackoverflow.com/bar?search=php";
    print_r(parse_url($url));
?>
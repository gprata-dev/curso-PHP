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
?>
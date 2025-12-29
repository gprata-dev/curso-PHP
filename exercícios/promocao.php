<?php 
    $frase = "este item está em promoção";

    $frase = ucfirst($frase); 

    $frase = str_replace("promoção", strtoupper("promoção"), $frase);

    echo $frase;
?>
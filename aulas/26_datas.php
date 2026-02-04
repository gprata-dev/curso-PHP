<?php 
    echo date("d/m/y");
    echo "<br>";
    echo date('Y-m-d H:i:s');
    echo "<br>";
    echo date("D, M - Y");
    echo "<br>";

    $cincoDias = strtotime("5 days");
    echo $cincoDias . "<br>";
    echo date('d/m/y', $cincoDias);
?>
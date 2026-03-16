<?php
    print_r($_SERVER);
    echo "<br><br>";

    if ($_SERVER['SERVER_NAME'] === "localhost") {
        echo "Está na localhost";
    }
?>
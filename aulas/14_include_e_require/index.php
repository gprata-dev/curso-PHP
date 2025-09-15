<?php
    include "include.php";
    //pode ou não ter parênteses
    require("require.php");
?>

<p>Arquivo continua</p>

<?php
    require "arquivos/funcao.php";
?>

<br>

<!-- require_once e include_once: impede que um mesmo arquivo seja adicionado mais de uma vez -->
<!-- resultado de duas linhas (include_once e/ou require_once) OU (um normal e outro once): apenas 1 inclusão -->

<?php 
    include "a.php";
?>

<p>Imprimindo $c: <?php echo $c; ?></p>
<p>"Warning": include permite a execução do resto do arquivo mesmo sem encontrar o arquivo</p>

<?php 
    require "b.php";
?>

<p>"Fatal error": require exige que o arquivo exista</p>
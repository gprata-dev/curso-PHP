<?php
    //setcookie("nome", "Guilherme", time() + 3600); - diferente de session, o cookie fica armazenado no navegador
    session_start(); //obrigatorio manter caso queira usar sessão

    if(isset($_COOKIE["nome"])) {
        $nome = $_COOKIE["nome"];
    }

    //$_SESSION["profissao"] = "Programador";
    
    print_r($_SESSION);
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Mundo!</h1>
    <?php
        if (isset($nome)) { ?>
            <p>Ol&aacute;, <?php echo $nome; ?></p>
        <?php }

        if (isset($_SESSION["profissao"])) { ?>
            <p>Ol&aacute;, <?php echo $_SESSION["profissao"]; ?></p>
        <?php }
    ?>  
</body>
</html>
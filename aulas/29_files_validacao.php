<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if(!empty($_FILES['arquivo']['name'])) {
            print_r($_FILES);
        }

        $validacoes = [];

        if(empty($_POST['nome'])) {
            $validacoes[] = "O campo nome é obrigatório";
        }

        if(empty($_POST['email'])) {
            $validacoes[] = "O campo email é obrigatório";
        }

        if(empty($_POST['senha'])) {
            $validacoes[] = "O campo senha é obrigatório";
        }

        if($_POST['senha'] !== $_POST['senha_conf']) {
            $validacoes[] = "As senhas devem ser iguais";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($validacoes) && count($validacoes)) { ?>
        <ul>
            <?php foreach($validacoes as $validacao) { ?>
                <li>
                    <?php echo $validacao; ?>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
    <form action="29_files.php" method="POST" enctype="multipart/form-data">
        <div>
            <input type="file" name="arquivo">
        </div>
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="email" name="email" placeholder="Digite seu email">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite sua senha">
        </div>
        <div>
            <input type="password" name="senha_conf" placeholder="Confirme sua senha">
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
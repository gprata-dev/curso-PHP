<?php 
    $usuario = [
        "nome" => "Guilherme",
        "idade" => null
    ]; //simulando dados vindos do backend
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($_SERVER['REQUEST_METHOD'] === "GET") { ?>
        <form action="28_processamento.php" method="POST">
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?php echo $usuario['nome'] ?? ''; ?>">

            <input type="number" name="idade" placeholder="Digite sua idade" value="<?php echo $usuario['idade'] ?? ''; ?>" required><br>

            <input type="checkbox" name="profissao[]" value="Desenvolvedor">Desenvolvedor<br>

            <input type="checkbox" name="profissao[]" value="Outra">Outra<br>

            <button type="submit">Enviar</button>
        </form>
    <?php } else if($_SERVER['REQUEST_METHOD'] === "POST") { ?>
        <h1>Seja bem vindo, <?php echo $_POST['nome']; ?></h1>

        <p>Idade: <?php echo $_POST['idade']; ?></p>

        <p>Profissao: <?php echo implode(", ", $_POST['profissao']); ?></p>
    <?php } ?>
</body>
</html>
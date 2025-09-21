<?php 
    include_once "backend.php";
?>

<h1>Bem-vindo a nossa loja</h1>
<p><?php echo $nome; ?>, confira algumas ofertas</p>

<h2>Confira nossos principais produtos</h2>

<ul>
    <?php foreach($produtos as $produto) { ?>
        <li><?php echo $produto; ?></li>
    <?php } ?>
</ul>


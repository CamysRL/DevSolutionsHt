<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style3.css">
        <title>Painel</title>
    </head>
    <body>
        <header class="header">
            <a href="../index.html"><img id="img" src="../src/img/Daily 2.png" alt="logo dev"></a>
        </header>
        <div class="mensagem-bem-vindo">
            <main>
                <h2 class="conteudop" id="user">Bem vindo ao DevSolutions, <?php echo $_SESSION['nome']; ?></h2>
                <p><a href="logout.php"><button class="botao">Sair</button></a></p>
            </main>
        </div>
    </body>
</html>
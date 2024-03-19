<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>PHP Cod3r</title>
</head>
<body class="exercicio">
    <header class= "header">
        <h1><a href="index.php">Curso PHP - Cod3r</a></h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?="{$_GET['dir']}/{$_GET['file']}.php" ?>>Sem formatação</a>
        <a href="index.php" class="vermelho">voltar</a>
    </nav>
    <main class= "main">
        <div class="content">
            <?php include("{$_GET['dir']}/{$_GET['file']}.php")?>
        </div>
    </main>
    <footer class="footer">
        COD3R & ALUNOS © <?= date('Y');?>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PHP Cod3r</title>
</head>
<body>
    <header class= "header">
        <h1><a href="index.php">Curso PHP - Cod3r</a></h1>
        <h2>Índice dos exercícios</h2>
    </header>
    <main class= "main">
        <div class="content">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Op. Aritméticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">Booleano</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Variáveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Basico</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
                      
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Estruturas de Controle</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=if_else">If Else</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais</a></li>
                    </ul>
                </div>
                <div class="modulo vinho">
                    <h3>Array</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=array&file=basico">Básico</a></li>
                        <li><a href="exercicio.php?dir=array&file=mapa">Mapa</a></li>
                        <li><a href="exercicio.php?dir=array&file=desafio_index">Desafio Index</a></li>
                        <li><a href="exercicio.php?dir=array&file=desafio_meses">Desafio Meses</a></li>
                        <li><a href="exercicio.php?dir=array&file=operacoes">Operações</a></li>
                        <li><a href="exercicio.php?dir=array&file=desafio_sorteio">Desafio Sorteio</a></li>
                    </ul>
                </div>
                <div class="modulo amarelo">
                    <h3>Laços de Repetição</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=repeticoes&file=for">For</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=desafio_for">Desafio For</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=foreach">Foreach</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="footer">
        COD3R & ALUNOS © <?= date('Y');?>
    </footer>
</body>
</html>
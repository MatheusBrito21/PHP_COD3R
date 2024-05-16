<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;

echo $numeroA, '<br>';

var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;

echo 'Somando = ' . $soma;
echo '<br>';
echo "Está setado? " , isset($soma)?'true': 'false';
unset($soma);
echo '<br>';
echo "Está setado? " , isset($soma)?'true': 'false';

// nomes de variável

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';



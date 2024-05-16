<div class="titulo">Desafio Equação</div>

<?php

$num1 = pow(6 * (3 + 2),2 ) / (3*2);// é excutado na ordem em que lê a expressão
$num2 = pow(((1-5) * ( 2 - 7))/2 , 2);

echo $num1 . '<br>';
echo $num2 . '<br>';

$num3 = pow($num1 - $num2, 3 );
echo $num3 . '<br>';

$num4 = $num3/ pow(10,3);
echo $num4 . '<br>';
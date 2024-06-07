<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "José",
    "idade" => 28
];

$dados2 = [
    "naturalidade" =>"Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';

$indice = array_rand($dadosCompletos);
echo '<br>' . $indice;
echo '<br>'; 

unset($dadosCompletos["nome"]);
print_r($dadosCompletos);


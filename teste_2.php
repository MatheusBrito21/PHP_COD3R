<?php
//Testando a alteração de nome de arquivo baseado em chave valor
$pasta = 'C:\docs\Livros';

$arquivo = 'nomes.txt';

$array_nomes = [];

$handle = fopen($arquivo, 'r');
if ($handle) {
    while (($linha = fgets($handle)) !== false) {
        $array_nomes [] = $linha;
    }
    fclose($handle);
} else {
    echo "Não foi possível abrir o arquivo.";
}

$nomes_k = [];
foreach ($array_nomes as $nome){
    $n= explode(' - ',$nome);
    // print_r($n);

    $nomes_k[trim($n[1])] = trim($n[0]);
}

print_r($nomes_k);




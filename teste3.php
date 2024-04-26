<?php
//Testando a alteração de nome de arquivo baseado em chave valor
$pasta = 'C:\Users\Matt\Desktop\Teste';

$arquivo = 'nomes.txt';

$array_nomes = [];

$handle = fopen($arquivo, 'r');
if ($handle) {
    while (($linha = fgets($handle)) !== false) {
        $array_nomes[] = $linha;
    }
    fclose($handle);
} else {
    echo "Não foi possível abrir o arquivo.";
}

$nomes_k = [];
foreach ($array_nomes as $nome) {
    $n = explode(' - ', $nome);

    $nomes_k[trim($n[1])] = trim($n[0]);
}
echo "Nomes:\n";
foreach ($nomes_k as $k => $v) {
    echo $k . " -> ".$v."\n";
}


echo "\nFotos:\n";
$arquivos = scandir($pasta);
foreach ($arquivos as $a) {
    $ext = pathinfo($a,PATHINFO_EXTENSION);
    if ($a != '.' && $a != '..' && $a != basename(__FILE__) && $ext) {
        echo $a . "\n";
    }
}
foreach ($arquivos as $a) {
    $data = pathinfo($a, PATHINFO_FILENAME);
    $ext = pathinfo($a, PATHINFO_EXTENSION);
    // echo $data ."\n";

    foreach ($nomes_k as $key => $value) {
        if(strstr($data,$key)){
            // echo $data . " = ".$key ."->".$value . "\n"; 
                rename($pasta . "/" . $a, $pasta . "/" . $value.".".$ext);
            break;
        }
    }
}

// Listar os arquivos após a renomeação
echo "\nResultado:\n";
$arquivos = scandir($pasta);
foreach ($arquivos as $a) {
    $ext = pathinfo($a,PATHINFO_EXTENSION);
    if ($a != '.' && $a != '..' && $a != basename(__FILE__) && $ext) {
        echo $a . "\n";
    }
}



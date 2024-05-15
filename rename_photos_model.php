<?php
//Testando a alteração de nome de arquivo baseado em chave valor

include 'PessoaEjoc.php';

function lerArquivo($file)
{
    $arquivo = $file;

    $array_nomes = [];

    $handle = fopen($arquivo, 'r');

    if ($handle) {
        while (($linha = fgets($handle)) !== false) {
            $array_nomes[] = $linha;
        }
        fclose($handle);
    } else {
        throw new Exception( "Não foi possível abrir o arquivo.", 1);
    }
    return $array_nomes;
}

function gerarListaObj($array_nomes){
    $lista_nomes = [];
    foreach ($array_nomes as $nome) {
        $n = explode(' - ', $nome);

        $p_nome = trim($n[0]);
        $p_cod = trim($n[1]);

        $lista_nomes[] = new PessoaEjoc($p_nome,$p_cod);
    }
    return $lista_nomes;
}


function lerArquivosPasta($pasta){
    $arquivos = scandir($pasta);
    foreach ($arquivos as $a) {
        $ext = pathinfo($a, PATHINFO_EXTENSION);
        if ($a != '.' && $a != '..' && $a != basename(__FILE__) && $ext) {
            echo $a . "\n";
        }
    }
}
foreach ($arquivos as $a) {
    $data = pathinfo($a, PATHINFO_FILENAME);
    $ext = pathinfo($a, PATHINFO_EXTENSION);
    // echo $data ."\n";

    foreach ($nomes_k as $key => $value) {
        if (strstr($data, $key)) {
            // echo $data . " = ".$key ."->".$value . "\n"; 
            rename($pasta . "/" . $a, $pasta . "/" . $value . "." . $ext);
            break;
        }
    }
}

// // Listar os arquivos após a renomeação
// echo "\nResultado:\n";
// $arquivos = scandir($pasta);
// foreach ($arquivos as $a) {
//     $ext = pathinfo($a, PATHINFO_EXTENSION);
//     if ($a != '.' && $a != '..' && $a != basename(__FILE__) && $ext) {
//         echo $a . "\n";
//     }
// }



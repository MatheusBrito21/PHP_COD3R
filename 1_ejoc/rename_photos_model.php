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
            $array_nomes[] = mb_convert_encoding($linha, 'UTF-8', 'auto');
        }
        fclose($handle);
    } else {
        throw new Exception( "Não foi possível abrir o arquivo.", 1);
    }
    return $array_nomes;
}

function gerarListaObj($array_nomes) {
    $lista_nomes = [];
    foreach ($array_nomes as $nome) {
        // Assegura que a string está em UTF-8
        $nome = mb_convert_encoding($nome, 'UTF-8', 'auto');
        
        // Tratar e remover caracteres estranhos ou perigosos
        $nome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');

        $n = explode('-', $nome);

        // Verifica se o array $n tem pelo menos dois elementos
        if (count($n) >= 3) {
            $p_nome     = trim($n[0]);
            $p_cod      = trim($n[1]);
            $p_equipe   = trim($n[2]);

            // Cria a instância do objeto com valores sanitizados
            $lista_nomes[] = new PessoaEjoc($p_nome, $p_cod,$p_equipe);
        } 
        // else {
        //     // Trate o caso em que a string não está no formato esperado
        //     error_log("Formato inválido para o nome: $nome");
        // }
    }
    return $lista_nomes;
}


function lerArquivosPasta($pasta){
    $arquivos = scandir($pasta);
    $array_arquivos = [];
    foreach ($arquivos as $a) {
        $ext = pathinfo($a, PATHINFO_EXTENSION);
        if ($a != '.' && $a != '..' && $a != basename(__FILE__) && $ext) {
            $array_arquivos[] = $a;
        }
    }
    return $array_arquivos;
}

function alterarArquivoFotos($lista_nomes,$lista_fotos,$pasta_fotos){

    foreach ($lista_fotos as $a) {
        $data = pathinfo($a, PATHINFO_FILENAME);
        $ext = pathinfo($a, PATHINFO_EXTENSION);
        // echo $data ."\n";
    
        foreach ($lista_nomes as $n) {
            if (strstr($data, $n->cod)) {
                // echo $data . " = ".$key ."->".$value . "\n";
                // $n->nome+'_'+$n->equipe
                $novoNome = "$n->equipe - $n->nome";
                echo $novoNome;
                
                rename($pasta_fotos . "/" . $a, $pasta_fotos . "/" . $novoNome . "." . $ext);
                break;
            }
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



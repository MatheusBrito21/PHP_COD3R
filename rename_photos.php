<?php

include 'rename_photos_model.php';
$pasta_fotos = 'C:\Users\Matt\Desktop\Teste\Fotos_Ejoc_28_04\28-04';
$lista_nomes= 'C:\Users\Matt\Desktop\Teste\Fotos_Ejoc_28_04\fotos_28_04.txt';

$arquivoNomes = lerArquivo($lista_nomes);

// $pe1 = new PessoaEjoc('Matt',"001");

$listaNomes = gerarListaObj($arquivoNomes);

// print_r($listaNomes);
// foreach($listaNomes as $p){
//     echo "$p \n";
// }

// lerArquivosPasta($fotos_28_04);
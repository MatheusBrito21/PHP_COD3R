<?php

include 'rename_photos_model.php';
// $pasta_fotos = 'C:\Users\Matt\Desktop\Teste\Fotos_Ejoc_28_04\21-04';
// $pasta_fotos = 'C:\Users\Matt\Desktop\Teste\Fotos_Ejoc_28_04\26-05';
$pasta_fotos = 'C:\Users\Matt\Desktop\Teste\Fotos_Ejoc\fotos';
$lista_nomes= 'C:\Users\Matt\Desktop\Teste\Fotos_Ejoc\nomes2.txt';

$arquivoNomes = lerArquivo($lista_nomes);

$listaNomes = gerarListaObj($arquivoNomes);
print_r($listaNomes);

$listaArquivos = lerArquivosPasta($pasta_fotos);
print_r($listaArquivos);

// alterarArquivoFotos($listaNomes,$listaArquivos,$pasta_fotos);
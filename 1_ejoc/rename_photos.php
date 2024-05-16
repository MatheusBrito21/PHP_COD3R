<?php

include 'rename_photos_model.php';
$pasta_fotos = 'C:\Users\Matt\Desktop\Teste\Fotos_Ejoc_28_04\28-04';
$lista_nomes= 'C:\Users\Matt\Desktop\Teste\Fotos_Ejoc_28_04\fotos_28_04.txt';

$arquivoNomes = lerArquivo($lista_nomes);

$listaNomes = gerarListaObj($arquivoNomes);
// print_r($listaNomes);

$listaArquivos = lerArquivosPasta($pasta_fotos);
// print_r($listaArquivos);

alterarArquivoFotos($listaNomes,$listaArquivos,$pasta_fotos);
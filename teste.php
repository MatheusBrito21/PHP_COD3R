<?php

$pasta = 'C:\docs\Livros';

$arquivos = scandir($pasta);
$mudou = "Testado_001";

foreach ($arquivos as $a) {
    $ext = pathinfo($a, PATHINFO_EXTENSION);
    
    if ($ext === "txt") {
        $novoNome = $mudou . "." . $ext; // Adiciona um identificador único ao novo nome

        rename($pasta . "/" . $a, $pasta . "/" . $novoNome);
    }
}

// Listar os arquivos após a renomeação
$arquivos = scandir($pasta);
foreach ($arquivos as $a) {
    if ($a != '.' && $a != '..' && $a != basename(__FILE__)) {
        echo $a . "\n";
    }
}
?>

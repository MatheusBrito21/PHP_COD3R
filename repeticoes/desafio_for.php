<div class="titulo">Desafio For</div>

<?php
// Imprimir 
// #
// ##
// ###
// ####
// #####
// 1)Pode usar incremento
// 2)Sem incremento
echo '1)<br>';

$s = '';
for($i = 1; $i<=5;$i++){
    $s .="#";
    echo $s  .'<br>';
}

echo '<hr>';
echo '2)<br>';

for($i = 1; $i<=5;$i++){
    echo str_repeat('#',$i) .'<br>';
}

echo '<hr>';
echo '3)<br>';

for($imp = '#';$imp !== '######';$imp .= '#'){
    echo $imp .'<br>';
}
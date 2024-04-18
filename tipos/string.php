<div class="titulo">String</div>

<?php 

echo 'Eu sou uma String';
echo '<br>';
echo 'vardump '.var_dump("Eu tambem");
echo '<br>';


//concatenação
echo '<h4>Concatenação</h4>';
echo "Nós tambem" . " somos";
echo '<br>';

echo "'Teste'" . ' "Teste" ' . '\'Ola\'';

print("<br> Usando a função print");
print "<br> Usando a função print" ;

//Algumas funções
echo '<h4>Funções</h4>';
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMZADO');
echo '<br>' . ucfirst('so a primeira letra');
echo '<br>' . ucwords('todas as primeiras letras');
echo '<br>' .'Quantas letras? '. strlen('Quantas letras?');
echo '<br>' .'Quantas letras? '. mb_strlen('Quantas letras?','utf-8');
echo '<br>' . substr('So uma parte',7,6);
echo '<br>' . str_replace('isso','aquilo','Trocar isso');

?>
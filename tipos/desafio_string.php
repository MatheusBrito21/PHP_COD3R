<div class="titulo">Desafio String</div>

<p>
    Avaliando os métodos da documentação da String, qual dos métodos indica a 
    posição do texto 'abc' na string '!AbcBcabc'? Retorne 1
</p>
<p>
    stripos();
</p>
<?php 

$texto = '!AbcaBcabc';

// echo phpversion();
echo strpos($texto,'abc') . '<br>';//case sensitive
echo stripos($texto,'abc') . '<br>';//case insensitive

echo strpos(strtolower($texto),'abc') . '<br>';


?>
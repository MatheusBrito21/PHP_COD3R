<div class="titulo">Foreach</div>

<?php

$dias = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];

foreach ($dias as $dia ) {
    echo $dia.'<br>';
}
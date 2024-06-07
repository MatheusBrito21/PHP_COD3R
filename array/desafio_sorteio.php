<div class="titulo">Desafio Sorteio</div>

<?php

$personagens = ["Marty","Emmet", "Biff","Jeniffer","Einstein"];
$p = array_rand($personagens);
echo '<h1>'.$personagens[$p].'</h1>'; 

//Loteria do Leto
$nums = [];

do{
    $n = rand(1,60);

    if(!in_array($n,$nums)){
        $nums[] = $n;
    }

}while(count($nums) <6);

foreach ($nums as $num) {
    echo ' |'.$num.'|';
} 


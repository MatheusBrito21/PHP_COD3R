<div class="titulo">Booleano</div>

<?php

echo 'true =>' . TRUE;
echo '<br>';
echo 'false =>' . FALSE;
echo '<br>';
echo '<br>'.var_dump(true);
echo '<br>'.var_dump('true');
echo '<br>'.is_bool(true);

echo '<h4>Regras:</h4>';

echo '<br>' . var_dump((bool) 0); //apenas zero é false
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) ''); //false
echo '<br>' . var_dump((bool) ' '); //true
echo '<br>' . var_dump((bool) '0'); //false
echo '<br>' . var_dump((bool) '00'); //true
echo '<br>' . var_dump((bool) 'false'); //true

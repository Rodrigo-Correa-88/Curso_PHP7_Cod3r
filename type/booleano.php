<div class="title">Tipo Booleanos</div>

<?php

echo true; // true sempre retorna 1 no html
echo false;
echo("<br>");
echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// fazer as regras de conversões

echo ('<p> Regras: <p>');
echo'<br>' . var_dump(boolval(0)); // apenas o zero é false
echo'<br>' . var_dump(boolval(20));
echo'<br>' . var_dump(boolval(-1));




?>

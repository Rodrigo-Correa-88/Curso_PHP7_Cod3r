<div class="title">If Else</div>

<?php

$a=9;

if($a < 10){
    echo "\nserei impresso ";
}

if($a > 10){
    echo "\n\nOu eu serei impresso! ";
}

if(true)
echo "\nsentença avulsa ";

{
    echo "\nSerei impresso? <br> ";
    echo "\nSerei impresso novamente? <br>";
}

if(true){
    echo "\nverdadeiro <br> ";
} else {
    echo "\nfalso <br> ";
}

if (false) {
    echo "\npasso A <br> ";
} else if (false) {
    echo "\nPasso B <br>";
} else if (false) {
    echo "\nPasso C <br>";
} else {
    echo "\nultimo Passo <br>";
}

echo "\nfim <br>";


?>
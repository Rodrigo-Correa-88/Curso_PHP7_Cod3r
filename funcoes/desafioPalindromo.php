<div class="title">Desafio Palindromo</div>

<?php 

function palindromo ($str1) {
    $str2 = strrev("$str1");
    if($str1 == $str2){
        echo "Sim, $str1 é uma Palindromo";
    } else {
        echo "$str1, não é um palindrmo";
    }

}

echo palindromo("apos a sopa");

function palindromo2 ($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for ($i=0; $i <=$ultimoIndice; $i++ ) {
        if ($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return "Não";
        }
    }
    return "Sim.";
}

echo "\n" . palindromo2("arara");
echo "\n" . palindromo2("ana");
echo "\n" . palindromo2("abccba");
echo "\n" . palindromo2("abola");

?>
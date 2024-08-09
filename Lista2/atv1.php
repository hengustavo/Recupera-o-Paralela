<?php
$n = 1;
$soma=0;
while($n <= 100){
    if ($n%2 == 0){
        echo "O número $n é par"."\n";
        $soma = $soma + $n;
    }
    $n++;
}
echo "A soma de todos os pares é $soma";
?>
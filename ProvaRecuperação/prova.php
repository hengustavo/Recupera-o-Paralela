<?php
//normal
$frase = $_GET['frase'];
echo"Frase normal: $frase<br>";

//minuscula
$fraseMinuscula = strtolower($frase);
echo "Frase em minúsculas: $fraseMinuscula<br>";

//posição no meio da frase
$comprimento = strlen($fraseMinuscula);
$meio = intval($comprimento / 2);
$caractereMeio = $fraseMinuscula[$meio];
echo "Caractere na posição do meio: $caractereMeio<br>";

//troca todas as vogais por X
$vogais = 'aeiou';
$vogalCount = 0;
$novaFrase = '';

for ($i = 0; $i < $comprimento; $i++) {
    if (strpos($vogais, $fraseMinuscula[$i]) !== false) {
        $novaFrase .= $fraseMinuscula[$i];
        $vogalCount++;
    } else {
        $novaFrase .= 'X';
    }
}
echo "Frase com letras não vogais trocadas por 'X': $novaFrase<br>";
echo "Quantidade de caracteres que são vogais: $vogalCount<br>";

$novaFraseApartirP = "p" . substr($fraseMinuscula, strpos($fraseMinuscula, 'p') + 1);
$novaFraseInversaMaiuscula = strtoupper(strrev($novaFraseApartirP));
echo "Frase a partir da letra 'p' invertida e em maiúsculas: $novaFraseInversaMaiuscula\n";
?>
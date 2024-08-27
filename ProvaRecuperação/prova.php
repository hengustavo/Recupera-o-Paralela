<?php
//normal
$frase = $_GET['frase'];
echo"Frase normal: $frase<br>";

//maiuscula
$minuscula = Strtoupper($frase);
echo"<br>Frase minuscula: $minucusla<br>";

//posição no meio da frase
echo "<br>número de caracteres da frase:".strlen($minuscula)."<br>";
$meio = substr($minucusla,strlen($minuscula)*1/2, 1);
echo"Caracter no meio da frase: ".$meio."<br>";

$tamanho = strlen($frase);
$frase = strtoupper($frase);
    for ($i = 0; $i < $tamanho; $i++) {
        if ($frase[$i] == "A" || $frase[$i] == "E" || $frase[$i] == "I" || $frase[$i] == "O" || $frase[$i] == "U") {
            $frase[$i] = "x";
        }
    }

//troca todas as vogais por X
echo "<br>Frase com vogais em x: $frase<br>";

$semvogal = '';
$naovogal = 0;
$vogais = ['A', 'E', 'I', 'O', 'U'];
for ($i = 0; $i < strlen($minucusla); $i++) {
    $caractere = $minucusla[$i];
    // Verificar se o caractere é uma vogal
    if (in_array($caractere, $vogais)) {
        $semvogal .= 'X';
    } else {
        $semvogal .= $caractere;
        $naovogal++;
    }
}
// Exibir a quantidade de caracteres que não são vogais
echo "Quantidade de caracteres que não são vogais: $naovogal<br>";

$inverso = strrev($minucusla);
//frase de forma inversa
echo "<br>A frase de forma inversa ficará: $inverso<br>"
?>
<?php
$palavra = "Palmeiras melhor time do Brasil... AUEREO";

function substituirVogais($texto)
{
    $vogais = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    $resultado = str_ireplace($vogais, 'X', $texto);
    return $resultado;
}
$palavraSubstituida = substituirVogais($palavra);

echo "Palavra original: " . $palavra . "\n";
echo "Palavra com vogais substituídas: " . $palavraSubstituida;
?>
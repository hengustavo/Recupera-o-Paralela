<?php
$palavra = "exemplo";

function inverterPalavra($texto)
{
    return strrev($texto);
}

$palavraInvertida = inverterPalavra($palavra);

echo "Palavra original: " . $palavra . "\n";
echo "Palavra invertida: " . $palavraInvertida;
?>
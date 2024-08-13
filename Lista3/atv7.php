<?php
$linkInvertido = "rb.ude.psfi.www";

function inverterString($texto)
{
    return strrev($texto);
}

$linkOriginal = inverterString($linkInvertido);
echo "O link funcional é: <a href='http://$linkOriginal'>$linkOriginal</a>";
?>
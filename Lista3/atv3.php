<?php
$cep = "16210-000";

function obterUltimosTresNumeros($cep)
{
    $cepNumerico = preg_replace('/\D/', '', $cep);
    
    if (strlen($cepNumerico) >= 3)
    {
        $ultimosTres = substr($cepNumerico, -3);
        return $ultimosTres;
    }
    else
    {
        return "CEP inválido";
    }
}

$ultimosTresNumeros = obterUltimosTresNumeros($cep);

echo "Os 3 últimos números do CEP são: " . $ultimosTresNumeros."\n";
?>
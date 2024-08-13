<?php
$dataCompleta = "2024-08-13";

function extrairDiaMesAno($data) {
    $dataObj = new DateTime($data);
    
    $dia = $dataObj->format('d');
    $mes = $dataObj->format('m');
    $ano = $dataObj->format('Y');
    
    return array('dia' => $dia, 'mes' => $mes, 'ano' => $ano);
}

$resultado = extrairDiaMesAno($dataCompleta);

echo "Dia: " . $resultado['dia'] . "<br>";
echo "Mês: " . $resultado['mes'] . "<br>";
echo "Ano: " . $resultado['ano'];
?>
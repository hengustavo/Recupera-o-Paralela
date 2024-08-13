<?php
// Define a data completa (como exemplo)
$dataCompleta = "2024-08-13";

// Função para obter o dia da semana em formato textual
function obterDiaDaSemana($data) {
    // Converte a string de data em um objeto DateTime
    $dataObj = new DateTime($data);
    
    // Extrai o dia da semana em formato textual (em português)
    $diasDaSemana = array(
        'Monday'    => 'segunda-feira',
        'Tuesday'   => 'terça-feira',
        'Wednesday' => 'quarta-feira',
        'Thursday'  => 'quinta-feira',
        'Friday'    => 'sexta-feira',
        'Saturday'  => 'sábado',
        'Sunday'    => 'domingo'
    );
    
    // Obtém o dia da semana em inglês
    $diaDaSemanaEmIngles = $dataObj->format('l');
    
    // Retorna o dia da semana em português
    return isset($diasDaSemana[$diaDaSemanaEmIngles]) ? $diasDaSemana[$diaDaSemanaEmIngles] : 'Desconhecido';
}

// Aplica a função à data completa
$diaDaSemana = obterDiaDaSemana($dataCompleta);

// Exibe o resultado
echo "O dia da semana para a data {$dataCompleta} é: " . $diaDaSemana;
?>
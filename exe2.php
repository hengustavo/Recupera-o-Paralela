<?php
// Função para calcular a área do círculo
function calcularAreaCirculo($raio) {
    // Verifica se o raio é um número positivo
    if ($raio < 0) {
        return "O raio deve ser um número positivo.";
    }

    // Calcula a área usando a fórmula A = π * r²
    $area = pi() * pow($raio, 2);
    return $area;
}

// Recebe o valor do raio do usuário
if (isset($_POST['raio'])) {
    $raio = $_POST['raio'];
    
    // Calcula a área
    $resultado = calcularAreaCirculo($raio);
} else {
    $resultado = '';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Círculo</title>
</head>
<body>
    <h1>Cálculo da Área do Círculo</h1>
    <form method="post">
        <label for="raio">Raio do Círculo:</label>
        <input type="number" id="raio" name="raio">
        <input type="submit" value="Calcular Área">
    </form>
    
    <?php if ($resultado !== ''): ?>
        <h2>Resultado:</h2>
        <p>A área do círculo com raio de <?php echo htmlspecialchars($raio); ?> é <?php echo number_format($resultado, 2, ',', '.'); ?>.</p>
    <?php endif; ?>
</body>
</html>

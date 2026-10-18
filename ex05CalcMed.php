
<?php

$soma = 0; // Armazena a soma das notas
$quantidade = 0; // Conta quantas notas foram digitadas

$nota = (float) readline("Digite uma nota para calcularmos as médias (-1 para terminar): ");

// Continua enquanto a nota for diferente de -1
while ($nota != -1) {

    $soma += $nota; // Adiciona a nota à soma
    $quantidade++; // Aumenta a quantidade de notas

    // Solicita a próxima nota
    $nota = (float) readline("Digite outra nota (-1 para terminar): ");
}

// Verifica se alguma nota foi informada
if ($quantidade > 0) {

    $media = $soma / $quantidade; // Calcula a média

    echo "A média das notas é: " . $media;

} else {
    echo "Nenhuma nota foi informada.";
}

?>

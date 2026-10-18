<?php
// Gera um número aleatório entre 1 e 100 (o "segredo")
$numero = rand(1, 100);

// Inicializa o contador de tentativas
$tentativas = 0;

echo "Pensei em um número entre 1 e 100. Tente adivinhar!\n";

// do-while: executa o bloco pelo menos 1x antes de testar a condição
do {
    echo "Digite seu palpite: ";

    // Lê a entrada, remove espaços/newline e converte para inteiro
    $palpite = (int) trim(fgets(STDIN));

    // Incrementa a cada palpite
    $tentativas++;

    // Dá feedback: abaixo ou acima do número secreto
    if ($palpite < $numero) {
        echo "Muito baixo! Tente novamente.\n";
    } elseif ($palpite > $numero) {
        echo "Muito alto! Tente novamente.\n";
    }
    // Se for igual, nenhum if dispara e o loop encerra

} while ($palpite != $numero); // Repete enquanto não acertar

// Executa apenas após o loop terminar (usuário acertou)
echo "Parabéns! Você acertou em $tentativas tentativas. O número era $numero.\n";   
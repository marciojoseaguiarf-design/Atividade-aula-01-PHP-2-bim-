<?php
    // Cria um array com os campos do formulário
$campos = [
    "nome" => "Marcio",
    "email" => "",
    "senha" => "123456",
    "telefone" => "41999999999"
];

// Percorre cada campo do formulário
foreach ($campos as $campo => $valor) {

    // Verifica se o campo está vazio
    if (empty($valor)) {

        // Exibe uma mensagem indicando o campo vazio
        echo "O campo " . $campo . " é obrigatório.",PHP_EOL;

    } else {

        // Informa que o campo foi preenchido
        echo "O campo " . $campo . " foi preenchido.",PHP_EOL;
    }
}

?>
?>
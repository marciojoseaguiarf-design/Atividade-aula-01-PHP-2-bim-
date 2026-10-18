
<?php

$arquivo = fopen("produtos.csv", "r"); // Abre o arquivo CSV para leitura

$cabecalho = fgetcsv($arquivo); // Lê a primeira linha, que contém os títulos

$precos = []; // Cria um array para guardar os preços

// Percorre cada linha restante do arquivo
while (($linha = fgetcsv($arquivo)) !== false) {

    $produto = $linha[0]; // Obtém o nome do produto
    $preco = (float) $linha[1]; // Obtém o preço e converte para número

    $precos[] = $preco; // Adiciona o preço ao array
}

fclose($arquivo); // Fecha o arquivo

// Verifica se existem preços cadastrados
if (count($precos) > 0) {

    $soma = 0; // Inicializa a soma dos preços

    // Percorre todos os preços
    foreach ($precos as $preco) {
        $soma += $preco; // Soma cada preço
    }

    $media = $soma / count($precos); // Calcula o preço médio
    $maior = max($precos); // Encontra o maior preço
    $menor = min($precos); // Encontra o menor preço

    echo "Preço médio: R$ " . number_format($media, 2, ",", ".") . "<br>";
    echo "Maior preço: R$ " . number_format($maior, 2, ",", ".") . "<br>";
    echo "Menor preço: R$ " . number_format($menor, 2, ",", ".") . "<br>";

} else {
    echo "Nenhum produto encontrado.";
}

?>

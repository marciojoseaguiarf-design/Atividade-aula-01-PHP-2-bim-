<?php
    $texto = readline('Digite uma palavra, para contarmos o números de vogais:');
    $contador = 0; // vamos utilizar para encontrar a quaantidade de vogais encontradas.
    $texto = strtolower($texto); //transforma todas as letras em minuscula.
    
    //strlen serve para pegarmos a quantidade de letras(tamanho da string) da nossa variavel.
    for ($i=0;$i<strlen($texto);$i++){
        $letra = $texto[$i]; //[$i] vai representar o caractere da string. ex: no começo do loop o $i vai ser 0, entao vai pegar a primeira letra da string, e assim concessivamente.
        
        //Verifica se a letra atual do loop é uma vogal.
        //str_contains: identifica se tem as letras aeiou na variável $letra.
        if(str_contains("aeiou", $letra)){;
            $contador++; //Variavel contador aumenta 1 se a letra do loop for variavel.
        }
    }

    echo "Quantidade de vogais:", $contador;
?>
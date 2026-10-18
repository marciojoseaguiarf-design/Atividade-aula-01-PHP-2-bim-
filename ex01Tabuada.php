<?php
    //Tabuada do 1 ao 10 com n° fornecido pelo usuário
    $num = (int)readline('Digite um número:');
    for ($mult=1 ; $mult<=10 ; $mult++) {
        $result = $num*$mult;
        echo $num,' X ',$mult,' = ',$result, PHP_EOL;
    }
?>
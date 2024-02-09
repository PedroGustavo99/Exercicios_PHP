<?php

//Crie um array com numeros inteiros de 10 em 10 até 100.
//Aplique o loop nesse array e quando chegar nos numeros 30 e 40, pule para a proxima execução.

$lista = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$i = 0;

while ($i < count($lista)) {

    $numeroAtual = $lista[$i];

    if ($numeroAtual == 30 || $numeroAtual == 40) {
        $i++;
        continue;
    }

    echo "Elemento: $numeroAtual <br>";

    $i++;
}
<?php

/*Escreva uma função chamada compararNumeros que recebe dois números inteiros como parâmetros.
A função deve comparar os dois números e retornar uma string indicando qual número é maior ou se são iguais.

Considere as seguintes condições:
Se o primeiro número for maior que o segundo número, retorne a string "O primeiro número é maior."
Se o segundo número for maior que o primeiro número, retorne a string "O segundo número é maior."
Se os números forem iguais, retorne a string "Os números são iguais." */


function comparaNumero($num1, $num2){
    if ($num1 > $num2) {
        return "O primeiro número é maior.";
    } else if ($num2 > $num1) {
        return "O segundo número é maior.";
    } else {
        return "Os dois numeros são iguais";
    }
}

$resultado = comparaNumero(10, 10);
echo $resultado;
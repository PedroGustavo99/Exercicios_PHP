<?php 

/*Escreva uma função chamada calcularDesconto que recebe dois parâmetros: o valor de um produto e uma categoria.

A função deve retornar o valor do produto com o desconto aplicado, de acordo com a categoria.

Considere as seguintes categorias e seus respectivos descontos:
"eletrônicos": 10% de desconto.
"vestuário": 20% de desconto.
"alimentos": 5% de desconto.
Outras categorias: nenhum desconto.

Se a categoria for desconhecida ou não estiver listada acima, o desconto será zero.

O valor do produto e a categoria serão sempre fornecidos como argumentos da função. */

function calcularDesconto ($valor, $categoria) {
    if ($categoria == "eletronicos") {
        return $valor - ($valor * 0.1);
    } else if ($categoria == "vestuario") {
        return $valor - ($valor * 0.2);
    }else if ($categoria == "alimentos") {
        return $valor - ($valor * 0.05);
    }else {
        return "Nenhum desconto";
    }
}

$valorTotal = calcularDesconto(100, "alimentos");
echo $valorTotal;

?>
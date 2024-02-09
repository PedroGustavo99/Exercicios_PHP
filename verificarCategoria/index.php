<?php 

/*Escreva uma função chamada verificarCategoria que recebe um parâmetro de entrada representando uma categoria.

A função deve retornar uma mensagem de acordo com a categoria fornecida:

Se a categoria for "eletrônicos", retornar "Essa categoria é de produtos eletrônicos".
Se a categoria for "vestuário", retornar "Essa categoria é de produtos de vestuário".
Se a categoria for "alimentos", retornar "Essa categoria é de produtos alimentícios".
Para qualquer outra categoria, retornar "Categoria desconhecida".

O parâmetro de categoria será sempre fornecido como uma string.*/

function verificarCategoria ($categoria) {
    if ($categoria == "eletrônicos") {
        return "Essa categoria é de produtos eletrônicos";
    } else if ($categoria == "vestuário") {
        return "Essa categoria é de produtos de vestuário";
    }else if ($categoria == "alimentos") {
        return "Essa categoria é de produtos alimentícios";
    }else {
        return "Categoria desconhecida";
    }
}

$verificacao = verificarCategoria("xxx");
echo $verificacao;

?>
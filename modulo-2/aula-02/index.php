<?php

include 'Produto.php';

$p1 = new Produto();
$p1->alterarNome('Tenis para corrida');
$p1->alterarValor(299);


// ex 1 : atributo bublicos  -----------------------------

// $p1 = new Produto();
// $p1->nome = 'Tenis para corrida';
// $p1->valor = 299;

// $p2 = new Produto();
// $p2->nome = 'Calça jeans';
// $p2->valor = -100;

var_dump($p1);
// var_dump($p2);
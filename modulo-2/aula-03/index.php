<?php

ini_set('display_erros', 1);

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas Unissex');
$c2 = new Categoria('Roupas de Banho', 'Toalhas para rosto');
$c3 = new Categoria('calçados', 'calçados em geral');

var_dump($c1);
var_dump($c2);
var_dump($c3);

// agora devemos passar os atributos no momento da criação
// nao mais como vinha sendo feito no codigo comentado logo abaixo
// caso nao passemos, sera ternado um erro
// porque agora os parametros aqui sao obrigatorios
// impedindo assim que um produto seja cadastrado sem preço
// ou mesmo sem que haja estoque
$p1 = new Produto('tenis', 299);
$p1->setDescricao('tenis para corrida profissional');

$p2 = new Produto('saia jeans', 100);

$p3 = new Produto('calça branca', 299);


// $p2 = new Produto();
// $p2->setNome('Saia Jeans');
// $p2->setValor(100);

var_dump($p1);
var_dump($p2);
var_dump($p3);
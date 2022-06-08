<?php

ini_set('display_erros', 1);

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';


$c1 = new Cliente('chiquin@email.com', '1234567'); // contrutor do usuario
$c1->setNome('Chiquin');
$c1->setDataCadastro('12/12/22');

$g1 = new Gestor('zezin@email.com', '1234567',6000); // contrutor do gestor

var_dump($c1);
var_dump($g1);

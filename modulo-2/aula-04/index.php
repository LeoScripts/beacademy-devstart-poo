<?php

ini_set('display_erros', 1);

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';


$c1 = new Cliente();
$c1->setNome('Chiquin');

$g1 = new Gestor();
$g1->setNome('Zezim');


var_dump($c1);
var_dump($g1);

<?php

ini_set('display_errors', 1);

include 'Usuario.php';
include 'Cliente.php';
// include './ClienteVip.php'; // somente pra teste 
include 'Gestor.php';
include 'GestorGeral.php';


$c1 = new Cliente('chiquin@email.com', '1234567'); // contrutor do usuario
$c1->setNome('Chiquin');
$c1->setDataCadastro('12/12/22');

$g1 = new Gestor('zezin@email.com', '1234567',6000); // contrutor do gestor

$gg1 = new GestorGeral('maria@email.com', '1234567',9000); // contrutor do gestor pois e necessario pegar o de parentesco mais proximo

// $clienteVip = new ClienteVip('cliente@email','123456');

var_dump($c1);
var_dump($g1);
var_dump($gg1);

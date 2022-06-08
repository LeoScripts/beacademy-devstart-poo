<?php

ini_set('display_errors', 1);

//------------ retirando os includes pra usar o composer -----------

// include 'Classes/Categoria.php';
// include 'Classes/Cliente.php';
// include 'Classes/Gestor.php';
// include 'Classes/Produto.php';
// include 'Classes/Professor.php';
// include 'Classes/Usuario.php';
// include 'Classes/Config/Usuario.php';

include 'vendor/autoload.php';

// dando um alias pra esse namespace
// o uso do use nasceu junto com o do namespace
use Classes\Config\Usuario;
use Classes\Categoria;

$us1 = new Usuario();
$c1 = new Categoria();

var_dump($us1);
var_dump($c1);
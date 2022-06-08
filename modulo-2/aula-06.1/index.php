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

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

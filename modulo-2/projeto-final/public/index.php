<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\ErrorController;


$url = explode('?', $_SERVER['REQUEST_URI'])[0];


// este este e um abstração dos if logo abaixo comentados
// clean code né man kkkk
$routes = [
  '/' => [
    //controller estou selecionando 
    'controller' => IndexController::class,
    // method - qual metodo do controller usar
    'method' => 'indexAction' 
  ],
  '/produtos' => [
    'controller' => ProductController::class,  // apos a => e o mesmo que - App\Controller\ProductController
    'method' => 'listAction',
  ]
  ];

// if($url === '/'){
//   $c = new IndexController();
//   $c->indexAction();
// } elseif ($url === '/login') {
//   $c = new IndexController();
//   $c->loginAction();
// } elseif ($url === '/produtos'){
//   $p = new ProductController();
//   $p->listAction();
// } else {
//   $p = new ErrorController();
//   $p->notFoundAction();
// }
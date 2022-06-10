<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\ErrorController;


$url = explode('?', $_SERVER['REQUEST_URI'])[0];


function createRoute(string $controllerName, string $methodName){
  return [
    'controller' => $controllerName,
    'method' => $methodName,
  ];
}


// este este e um abstração dos if logo abaixo comentados
// clean code né man kkkk
$routes = [
  // '/' => [
    //   //controller estou selecionando 
    //   'controller' => IndexController::class,
    //   // method - qual metodo do controller usar
    //   'method' => 'indexAction' 
  // ],

  // simplificando(abstraindo) o codigo acima 
  '/' => createRoute(IndexController::class, 'indexAction'),
  '/produtos' => createRoute(ProductController::class, 'listAction'),
  ];

  if(isset($routes[$url]) === false){
    // $e = new ErrorController();
    // $e->notFoundAction();

    // simplificando o codigo comentado acima e economisando memoria
    // a memoria ocupada aqui e apenas no momento da execução depois ela e liberada evitando uso desnecessario da memoria
    ( new ErrorController() )->notFoundAction(); 

    exit;
  }

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


$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();
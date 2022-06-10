<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\ErrorController;


$url = explode('?', $_SERVER['REQUEST_URI'])[0];

if($url === '/'){
  $c = new IndexController();
  $c->indexAction();
} elseif ($url === '/login') {
  $c = new IndexController();
  $c->loginAction();
} elseif ($url === '/produtos'){
  $p = new ProductController();
  $p->listAction();
} else {
  $p = new ErrorController();
  $p->notFoundAction();
}
<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

// use App\Controller\IndexController;
use App\Controller\CategoryController;
// use App\Controller\ProductController;

// $c = new IndexController;
$c2 = new CategoryController;
// $c3 = new ProductController;

// $c->indexAction();
$c2->categoryAction();
// $c3->productAction();
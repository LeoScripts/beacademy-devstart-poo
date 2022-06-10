<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController 
{
  public function indexAction(): void
  {
    // include dirname(__DIR__).'view/index/index.php'; => jeito do professor
    include '../view/index/index.php'; // meu jeito 
    // parent::render('index/index');
  }

  public function loginAction(): void
  {
    include '../view/index/login.php';
  }
}
<?php

declare(strict_types=1);

namespace App\Controller;
include 'AbstractControl.php';

class IndexController extends AbstractController
{
  public function indexAction(): void
  {
    // include dirname(__DIR__).'view/index/index.php'; => jeito do professor
    // include '../view/index/index.php'; // meu jeito 
    // $this->render('index/index');
    parent::render('index/index');
  }

  public function loginAction(): void
  {
    parent::render('index/login');
  }
}
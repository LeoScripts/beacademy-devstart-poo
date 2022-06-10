<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
  public function render(string $viewName): void
  {
    // abstraindo include
    include "view/
    {$viewName}.php";
  }
}
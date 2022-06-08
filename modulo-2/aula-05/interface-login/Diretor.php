<?php

declare(strict_types=1);

class Diretor implements Logar
{
  public function logarEmail(string $email,string $senha): void
  {
    // dados somente pra testes
    if($email !== 'zezim@email.com'  || $senha !== '12345679abc'){
      die('email ou senha incorretos');
    }

  }
}
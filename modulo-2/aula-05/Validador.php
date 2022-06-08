<?php

declare(strict_types = 1);

class Validador
{
  // ao colocar o static em uma classe nao e preciso mais instaciar ela quando for chamar
  // so que agora o acesso dele muda
  public static function validadarCpf(string $cpf): void
  {
    if(strlen($cpf) !== 11){ 
      die('Ops CPF invalido');
    }
  }
}
<?php

declare(strict_types=1);

interface Logar
{
  public function logarEmail(string $email, string $senha): void;

  // public function logarUsuario(string $usuario, string $senha): void;

  // public function logarCPF(string $cpf, string $senha): void;
}
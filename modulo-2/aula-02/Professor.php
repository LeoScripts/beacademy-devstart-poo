<?php

// tipos so existem apartir da versao 7.4 do php

declare(strict_types=1);

class Professor {
  public string $nome; 
  public private $cpf;
  public float $salario;

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getCpf(): string
  {
    return $this->cpf;
  }

  public function getSalario(): float
  {
    return $this->salario;
  }

  public function setNome(string $novoNome): void
  {
     $this->nome = $novoNome;
  }

  public function setCpf(string $novoCpf): void
  {
    if(count(explode('',(int)$novoCpf)) === 11){
      die('Ops, o cpf deve ter 11 digitos');
    }
     $this->cpf = $novoCpf;
  }

  public function setSalario(float $novoSalario): void
  {
    if($novoSalario < 0){
      die('Ops, valor nao pode ser negativo');
    }
     $this->salario = $novoSalario;
  }
  
}

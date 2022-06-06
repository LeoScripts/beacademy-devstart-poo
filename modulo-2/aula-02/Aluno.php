<?php

// declatação de tipagem
declare(strict_types=1);


class Aluno {
  private  $nome; 
  private  $cpf; 

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getCpf(): string
  {
    return $this->valor;
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

}





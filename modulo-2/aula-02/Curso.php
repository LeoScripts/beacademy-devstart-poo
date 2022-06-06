<?php

declare(strict_types=1);

class Curso {
  public string $nome; 
  public string $descricao;
  public float $duracao;

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getDescricao(): string
  {
    return $this->descricao;
  }

  public function getDuracao(): float
  {
    return $this->duracao;
  }

  public function setNome(string $novoNome): void
  {
     $this->nome = $novoNome;
  }

  public function setDescricao(string $novaDescricao): void
  {
     $this->descricao = $novaDescricao;
  }


  public function setSalario(float $novaDuracao): void
  {
    if($novaDuracao < 0){
      die('Ops, valor nao pode ser negativo');
    }
     $this->duracao = $novaDuracao;
  }
}

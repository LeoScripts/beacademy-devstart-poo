<?php


declare(strict_types=1);

class Categoria 
{

  // esta sintaxe so é aceita no apartir do  PHP 8
  public function __construct(
    private string $nome,
    private string $descricao
  ) {
  }
  public function getNome(): string
  {
    return $this->nome;
  }

  public function getDescricao(): string
  {
    return $this->descricao;
  }

  public function setNome(string $nome): void
  {
     $this->nome = $nome;
  }

  public function setDescricao(string $descricao): void
  {
     $this->descricao = $descricao;
  }
  // --------------------------------------------


  // sintaxe usanda antes do php 8

  // private string $nome; 
  // private string $descricao;

  // public function __construct(string $nome, string $descricao )
  // {
  //   $this->nome = $nome;
  //   $this->descricao = $descricao;
  // }
}
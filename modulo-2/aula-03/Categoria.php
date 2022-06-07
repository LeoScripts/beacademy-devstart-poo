<?php


declare(strict_types=1);

class Categoria {

  // esta sintaxe so é aceita no apartir do  PHP 8
  public function __construct(
    private string $nome,
    private string $descricao
  ){

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